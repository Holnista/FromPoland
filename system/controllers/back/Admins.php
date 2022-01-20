<?php
	use \RedBeanPHP\R as R;
	class Admins extends Admin
	{
		private $permissions = [
			'ADMINS' => [
				'admins' => 'DISPLAYING',
				'admins/edit' => 'EDIT',
				'admins/add' => 'CREATE',
				'admins/remove' => 'REMOVE',
			],
			'EMPLOYEES' => [
				'employees' => 'DISPLAYING',
				'employees/edit' => 'EDIT',
				'employees/add' => 'CREATE',
				'employees/remove' => 'REMOVE',
			],
			'SLIDES' => [
				'slides' => 'DISPLAYING',
				'slides/edit' => 'EDIT',
				'slides/add' => 'CREATE',
				'slides/remove' => 'REMOVE',
			],
			'GALLERIES' => [
				'galleries' => 'DISPLAYING',
				'galleries/edit' => 'EDIT',
				'galleries/add' => 'CREATE',
				'galleries/remove' => 'REMOVE',
			],
			'PAGES' => [
				'pages' => 'DISPLAYING',
				'pages/edit' => 'EDIT',
				'pages/add' => 'CREATE',
				'pages/remove' => 'REMOVE',
			],
			'CATEGORIES' => [
				'categories' => 'DISPLAYING',
				'categories/edit' => 'EDIT',
				'categories/add' => 'CREATE',
				'categories/remove' => 'REMOVE',
			],
			'TRANSLATES' => [
				'translates' => 'DISPLAYING',
				'translates/edit' => 'EDIT',
				'translates/add' => 'CREATE',
				'translates/remove' => 'REMOVE',
			],
			'LOGS' => [
				'logs' => 'DISPLAYING',
				'logs/remove' => 'REMOVE',
			],
			'EMAILS' => [
				'emails' => 'DISPLAYING',
				'emails/remove' => 'REMOVE',
			]
		];
		
		//====================================================================================================
		function index()
		{
			//----- Check permissions
			$this->permissions(TABLE_ADMINS);
			
			//----- Check count
			if(R::count(TABLE_ADMINS))
			{
				//----- Prepare query
				if($this->base->get('GET.word'))
				{
					$word = mb_strtolower($this->base->clean($this->base->get('GET.word')));
					$query = ['LOWER(CONCAT(`email`, `personal`)) LIKE ?', [like($word)]];
				}
				
				//----- Get records
				$admins = R::find(TABLE_ADMINS, ($query[0] ? : '')
				.' ORDER BY `created` ASC', ($query[1] ? : []));
				if($admins) { foreach($admins as $admin) $admin->get('image');
				$this->view->assign('admins', translate($admins)); }
			}
			
			//----- View
			$this->view->assign('count', R::count(TABLE_ADMINS));
			$this->render(path(TABLE_ADMINS, 'index'));
		}
		
		//====================================================================================================
		function add()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_ADMINS, __FUNCTION__));
			
			if($this->base->get('VERB') == 'POST' && csrf())
			{
				//----- Create record
				$id = R::store(R::dispense(TABLE_ADMINS));
				$admin = R::load(TABLE_ADMINS, $id);
				
				//----- Set password
				if(strlen($this->base->get('POST.password'))) $this->base->set('POST.password', 
				md5($this->base->get('POST.password'))); else $this->base->clear('POST.password');
				
				//----- Set values
				foreach($this->base->get('POST') as $key => $value) $admin->$key = $value;
				
				//----- Upload image
				$path = path(PATH_IMAGES, TABLE_ADMINS); $upload = $this->upload($path);
				if($upload) $admin->file = end(explode('/', current($upload)));
				
				//----- Store record
				R::store($admin); translate($admin);
				$this->admin->log('LOG_ADMIN_CREATE', 'success', 'user-plus', [$admin->email]);
				$this->notifies[] = ['success', $this->translates['CREATED'], $admin->email];
				$this->base->reroute(path('admin', TABLE_ADMINS));
			}
			else
			{
				//----- Get hints
				foreach(R::find(TABLE_ADMINS) as $bean)
				foreach(['department', 'position'] as $key)
				$hints[$key][] = $bean->employment[$key];
				
				//----- Assign hints
				foreach(array_keys($hints) as $key) 
				$hints[$key] = array_filter(array_unique($hints[$key]));
				$this->view->assign('hints', $hints);

				//----- Assign permissions
				$this->view->assign('permissions', $this->permissions);
				
				//----- View
				$this->render(path(TABLE_ADMINS, 'form'));
			}
		}
		
		//====================================================================================================
		function edit()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_ADMINS, __FUNCTION__));
			
			//----- Get record
			$id = $this->base->get('PARAMS.id');
			$admin = R::load(TABLE_ADMINS, $id);
			if($admin->id) $admin->get();
			else $this->base->error(404);
			
			if($this->base->get('VERB') == 'POST' && csrf())
			{
				//----- Set password
				if(strlen($this->base->get('POST.password'))) $this->base->set('POST.password', 
				md5($this->base->get('POST.password'))); else $this->base->clear('POST.password');
			
				//----- Set values
				foreach($this->base->get('POST') as $key => $value) $admin->$key = $value;
				
				//----- Upload image
				$path = path(PATH_IMAGES, TABLE_ADMINS);
				$upload = $this->upload($path);
				if($upload) 
				{
					unlink(path($path, $admin->file));
					unlink(path($path, 'thumbs', $admin->file));
					$admin->file = end(explode('/', current($upload)));
				}
				
				//----- Store record
				R::store($admin); translate($admin);
				$this->admin->log('LOG_ADMIN_EDIT', 'primary', 'pencil', [$admin->email]);
				$this->notifies[] = ['success', $this->translates['SAVED'], $admin->email];
				$this->base->reroute($this->base->get('SERVER.REQUEST_URI'));
			}
			else
			{
				//----- Get hints
				foreach(R::find(TABLE_ADMINS) as $bean)
				foreach(['department', 'position'] as $key)
				$hints[$key][] = $bean->employment[$key];

				//----- Assign hints
				foreach(array_keys($hints) as $key) 
				$hints[$key] = array_filter(array_unique($hints[$key]));
				$this->view->assign('hints', $hints);

				//----- Assign permissions
				$this->view->assign('permissions', $this->permissions);
				
				//----- View
				$this->render(path(TABLE_ADMINS, 'form'), compact('admin'));
			}
		}
		
		//====================================================================================================
		function logs()
		{
			//----- Check permissions
			$this->permissions(TABLE_ADMINS);
			
			//----- Get record
			$id = $this->base->get('PARAMS.id');
			$admin = R::load(TABLE_ADMINS, $id);
			if(!$admin->id) $this->base->error(404);
			
			//----- Get logs
			foreach(R::find(TABLE_LOGS, '`table` = ? AND `pid` = ? ORDER BY `id` DESC LIMIT 300', [TABLE_ADMINS, $id]) as $log)
			$logs[] = $log->get('display')->export(); if($logs) $this->view->assign('logs', translate($logs));
			
			//----- View
			$this->render(path(TABLE_ADMINS, 'logs'), compact('admin'));
		}

		//====================================================================================================
		function remove()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_ADMINS, __FUNCTION__));
			
			//----- Remove record
			$id = $this->base->get('PARAMS.id');
			$admin = R::load(TABLE_ADMINS, $id);
			if($admin->id) R::trash($admin);
			else $this->base->error(404);
			
			translate($admin);
			$this->admin->log('LOG_ADMIN_REMOVE', 'danger', 'user-times', [$admin->email]);
			$this->notifies[] = ['success', $this->translates['REMOVED'], $admin->email];
			$this->base->reroute($this->base->get('SERVER.HTTP_REFERER'));
		}
	}
?>