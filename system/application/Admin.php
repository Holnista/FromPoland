<?php
	use \RedBeanPHP\R as R;
	class Admin extends System
	{
		protected $admin;
		protected $notifies;
		protected $translates;
		
		//====================================================================================================
		function __construct()
		{
			//----- Parent construct
			parent::__construct();

			//----- Error reporting
			ini_set('display_errors', true); ini_set('display_startup_errors', true);
			error_reporting(E_ALL ^ E_STRICT ^ E_NOTICE ^ E_WARNING ^ E_DEPRECATED);

			//----- Connect database
			$this->data->connect($this->base->get('database'));
			
			//----- Setup smarty
			$this->view = new Smarty(); $this->view->caching = false;
			$this->view->compile_dir = $this->base->get('TEMP');
			$this->view->cache_dir = $this->base->get('TEMP');
			
			//----- Get translates
			foreach(R::find(TABLE_TRANSLATES) as $translation)
			$translates[$translation->key] = $translation->translation;
			$this->translates = translate($translates); $this->view->assign('t', $this->translates);
			define('NO_DATA', '<span class="text-danger font-italic">'.$this->translates['NO_DATA'] ?? NO_DATA.'</span>');
			
			//----- Compile less
			$less = new lessc; $less->setFormatter('compressed'); $path = trim(path(PATH_STYLES), '/');
			$less->compileFile(path($path, 'less', 'back.less'), path($path, 'css', 'back.min.css'));
			
			//----- Get notifies
			$this->notifies = $this->base->get('SESSION.notifies') ?? [];
			
			//----- Get admin
			if(!$this->auth()) exit($this->login());
		}
		
		//====================================================================================================
		function auth($email = null, $password = null)
		{
			$cookie = $this->base->split($this->base->get('COOKIE.admin'));
			if(!$email && !$password) { $email = current($cookie); $password = end($cookie); }
			$admin = R::findOne(TABLE_ADMINS, 'MD5(`email`) = ? AND `password` = ?', [$email, $password]);
			if($email && $password && $admin) { $this->admin = $admin->get(); $this->view->assign('me', $this->admin);
			return $this->base->set('COOKIE.admin', implode('|', [$email, $password])); } else $this->base->clear('COOKIE.admin');
			return false;
		}
		
		//====================================================================================================
		function login()
		{
			//----- Change password route
			if(in_array('password', explode('/', $this->base->get('PATH')))) 
			{
				//----- URL contain key
				$key = $this->base->get('PARAMS.key');
				if(strlen($key) == 32)
				{
					//----- Find admin
					$admin = R::findOne(TABLE_ADMINS, 'MD5(CONCAT(?, `id`, `password`)) = ?', [TABLE_ADMINS, $key]);
					if(!$admin) { $this->notifies[] = ['error', $this->translates['ERROR'], $this->translates['LINK_EXPIRED']]; 
					$this->base->reroute(path('admin', 'password')); }
					else
					{
						//----- Change password
						if($this->base->get('VERB') == 'POST' && csrf())
						{
							$admin->log('LOG_RESET_PASSWORD', 'warning', 'unlock-alt');
							$admin->password = md5($this->base->get('POST.password'));
							$this->notifies[] = ['success', $this->translates['SAVED'], 
							$this->translates['PASSWORD_RESET_TITLE']]; R::store($admin);
							$this->base->reroute('admin');
						}
					}
					$this->render(path('home', 'password'), compact('key'));
				}
				else
				{
					if($this->base->get('VERB') == 'POST' && csrf())
					{
						//----- Find admin
						$email = $this->base->get('POST.email');
						$admin = R::findOne(TABLE_ADMINS, '`email` = ?', [$email]);
						if(!$admin) $this->view->assign('class', 'is-invalid');
						else
						{
							//----- Send link
							$name = implode(' ', [$admin->personal['name'], $admin->personal['surname']]);
							email([$email, $name], $this->translates['MAIL_PASSWORD_TITLE'], 
							$this->fetch(path('mail', 'password'), compact('admin')));
							$this->notifies[] = ['success', $this->translates['MESSAGE_SENT'], $email];
							$this->base->reroute('admin');
						}
					}
					$this->render(path('home', 'password'));
				}
			}
			else
			{
				//----- Login form
				if($this->base->get('VERB') == 'POST' && csrf())
				{
					if($this->auth(md5($this->base->get('POST.email')), md5($this->base->get('POST.password'))))
					{
						$this->admin->log('LOG_SIGNIN', 'success', 'sign-in');
						$this->base->set('SESSION.attempt', 0);
						$this->base->reroute();
					}
					else
					{
						$attempt = $this->base->get('SESSION.attempt') ?? 0;
						$attempt++; $this->base->set('SESSION.attempt', $attempt);
						$this->notifies[] = ['error', $this->translates['SIGNIN_ATTEMPT_TITLE'],
						sprintf($this->translates['SIGNIN_ATTEMPT_TEXT'], $attempt)];
						$this->view->assign('class', 'is-invalid');
					}
				}
				$this->render(path('home', 'login'));
			}
		}
		
		//====================================================================================================
		function logout()
		{
			$this->admin->log('LOG_SIGNOUT', 'dark', 'sign-out');
			$this->base->clear('COOKIE.admin');
			$this->base->reroute('admin');
		}
		
		//====================================================================================================
		function permissions(string $path = '')
		{
			if($this->admin && $path) if(!in_array($path, $this->admin['permissions']))
			exit($this->render(path('home', 'permissions'))); return true;
		}

		//====================================================================================================
		function render($file, $data = [])
		{
			//----- Assign variables
			$this->view->assign('base', $this->base);
			foreach($data as $key => $value) $this->view->assign($key, $value);
			
			//----- Assign notifies
			$this->view->assign('notifies', $this->notifies);
			$this->base->clear('SESSION.notifies');
			$this->notifies = null;

			//----- View
			$this->base->set('SESSION.csrf', uniqid());
			$this->view->display(path($this->base->get('UI').
			$this->base->get('SURFACE'), $file.'.tpl'));
		}
		
		//====================================================================================================
		function fetch($file, $data = [])
		{
			//----- Assign variables
			$this->view->assign('base', $this->base);
			$this->base->set('SESSION.csrf', uniqid());
			foreach($data as $key => $value) $this->view->assign($key, $value);
			
			//----- Fetch
			return $this->view->fetch(path(trim($this->base->get('UI'), '/'), $file.'.tpl'));
		}
		
		//====================================================================================================
		function upload($path = null, $thumb = true, $allowed = ['jpg', 'jpeg', 'png', 'svg', 'webp'])
		{
			$web = Web::instance(); if(!$path) $path = $this->base->get('UPLOADS'); $path = path($path, '');
			$min = min((int)(ini_get('upload_max_filesize')), (int)(ini_get('post_max_size')), (int)(ini_get('memory_limit')));
			
			$files = $web->receive(function($file) use($min, $allowed) {
			$name = end(explode('/', $file['name'])); $extension = strtolower(end(explode('.', $name)));
			if($file['size'] > ($min * 1024 * 1024)) { $this->notifies[] = ['error', $this->translates['ERROR_FILE_TO_LARGE'], 
			sprintf('%s (%s)', $name, round($file['size']/1024/1024, 2).'MB')]; return false; } if(!in_array($extension, $allowed)) 
			{ $this->notifies[] = ['error', $this->translates['ERROR_FILE_NOT_ALLOWED'], $name]; return false; } 
			$this->notifies[] = ['success', $this->translates['UPLOADED'], $name]; return true; }, true, true);

			foreach($files as $file => $uploaded)
			{
				$name = end(explode('/', $file));
				if(!strlen($uploaded)) $this->notifies[] = 
				['error', $this->translates['UPLOAD_ERROR'], $name];
				else
				{
					//Unique
					if(!file_exists($path)) mkdir($path);
					$name = uniqid().'_'.$name; $return[] = path($path, $name);
					if(!in_array(strtolower(end(explode('.', $name))), ['jpg', 'jpeg', 'png']))
					rename($file, path($path, $name));
					else
					{
						//Compress
						$image = new Image($file); $image->resize(1920, null, false, false);
						$this->base->write(path($path, $name), $image->dump('jpeg', 75));
						chmod(path($path, $name), 0777); unlink($file);
						
						if($thumb)
						{
							//Thumb
							$image->resize(256, 256); mkdir(path($path, 'thumbs'), 0777);
							$this->base->write(path($path, 'thumbs', $name), $image->dump('jpeg', 75));
							chmod(path($path, 'thumbs', $name), 0777);
						}
					}
				}
			}
			return $return;
		}

		//====================================================================================================
		function __destruct()
		{
			$this->base->set('SESSION.notifies', $this->notifies);
		}
	}
?>