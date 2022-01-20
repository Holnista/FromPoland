<?php
	use \RedBeanPHP\R as R;
	class Controller extends System
	{
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
			//$less = new lessc; $less->setFormatter('compressed'); $path = trim(path(PATH_STYLES), '/');
			//$less->compileFile(path($path, 'less', 'style.less'), path($path, 'css', 'front.min.css'));

			//----- Get pages
			foreach(R::find(TABLE_PAGES, 'ORDER BY `sort` ASC', [true]) as $page)
			$pages[$page->place][$page->id] = translate($page->get()); 
			if($pages) $this->view->assign('pages', $pages);
			
			//----- Set default meta
			$this->base->meta = [
				'keys' => $this->translates['DEFAULT_META_KEYS'],
				'title' => $this->translates['DEFAULT_META_TITLE'],
				'desc' => $this->translates['DEFAULT_META_DESCRIPTION']
			];
			
			//----- Set default share
			$this->base->share = [
				'image' => path($this->base->URL, PATH_IMAGES, 'template', 'facebook.jpg'),
				'desc' => $this->base->meta['desc'], 'url' => $this->base->URL.$_SERVER['REQUEST_URI'],
				'type' => 'website', 'title' => implode(' - ', [$this->base->NAME, $this->base->meta['title']])
			];
		}

		//====================================================================================================
		function render($file, $data = [])
		{
			//----- Assign variables
			$this->view->assign('base', $this->base);
			foreach($data as $key => $value) $this->view->assign($key, $value);

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
	}
?>