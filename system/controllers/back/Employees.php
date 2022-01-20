<?php
	use \RedBeanPHP\R as R;
	class Employees extends Admin
	{
		//====================================================================================================
		function index()
		{
			//----- Check permissions
			$this->permissions(TABLE_EMPLOYEES);
			
			//----- Check count
			if(R::count(TABLE_EMPLOYEES))
			{
				//----- Prepare query
				if($this->base->get('GET.word'))
				{
					$word = mb_strtolower($this->base->clean($this->base->get('GET.word')));
					$query = ['LOWER(`personal`) LIKE ?', [like($word)]];
				}
				
				//----- Get records
				$employees = R::find(TABLE_EMPLOYEES, ($query[0] ? : '')
				.' ORDER BY `created` ASC', ($query[1] ? : []));
				if($employees) { foreach($employees as $employee) $employee->get('image');
				$this->view->assign('employees', translate($employees)); }
			}
			
			//----- View
			$this->view->assign('count', R::count(TABLE_EMPLOYEES));
			$this->render(path(TABLE_EMPLOYEES, 'index'));
		}
		
		//====================================================================================================
		function add()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_EMPLOYEES, __FUNCTION__));
			
			if($this->base->get('VERB') == 'POST' && csrf())
			{
				//----- Create record
				$id = R::store(R::dispense(TABLE_EMPLOYEES));
				$employee = R::load(TABLE_EMPLOYEES, $id);

				//----- Set values
				foreach($this->base->get('POST') as $key => $value) $employee->$key = $value;
				
				//----- Upload image
				$path = path(PATH_IMAGES, TABLE_EMPLOYEES); $upload = $this->upload($path);
				if($upload) $employee->file = end(explode('/', current($upload)));
				
				//----- Store record
				R::store($employee); translate($employee);
				$name = implode(' ', [$employee->personal['name'], $employee->personal['surname']]);
				$this->admin->log('LOG_EMPLOYEE_CREATE', 'success', 'user-plus', [$name]);
				$this->notifies[] = ['success', $this->translates['CREATED'], $name];
				$this->base->reroute(path('admin', TABLE_EMPLOYEES));
			}
			else
			{
				//----- Get hints
				foreach(R::find(TABLE_EMPLOYEES) as $bean)
				foreach(['department', 'position'] as $key)
				$hints[$key][] = $bean->employment[$key];
				
				//----- Assign hints
				foreach(array_keys($hints) as $key) 
				$hints[$key] = array_filter(array_unique($hints[$key]));
				$this->view->assign('hints', $hints);

				//----- View
				$this->render(path(TABLE_EMPLOYEES, 'form'));
			}
		}
		
		//====================================================================================================
		function edit()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_EMPLOYEES, __FUNCTION__));
			
			//----- Get record
			$id = $this->base->get('PARAMS.id');
			$employee = R::load(TABLE_EMPLOYEES, $id);
			if($employee->id) $employee->get();
			else $this->base->error(404);
			
			if($this->base->get('VERB') == 'POST' && csrf())
			{
				//----- Set values
				foreach($this->base->get('POST') as $key => $value) $employee->$key = $value;
				
				//----- Upload image
				$path = path(PATH_IMAGES, TABLE_EMPLOYEES);
				$upload = $this->upload($path);
				if($upload) 
				{
					unlink(path($path, $employee->file));
					unlink(path($path, 'thumbs', $employee->file));
					$employee->file = end(explode('/', current($upload)));
				}
				
				//----- Store record
				R::store($employee); translate($employee);
				$this->admin->log('LOG_EMPLOYEE_EDIT', 'primary', 'pencil', [$admin->email]);
				$this->notifies[] = ['success', $this->translates['SAVED'], $admin->email];
				$this->base->reroute($this->base->get('SERVER.REQUEST_URI'));
			}
			else
			{
				//----- Get hints
				foreach(R::find(TABLE_EMPLOYEES) as $bean)
				foreach(['department', 'position'] as $key)
				$hints[$key][] = $bean->employment[$key];

				//----- Assign hints
				foreach(array_keys($hints) as $key) 
				$hints[$key] = array_filter(array_unique($hints[$key]));
				$this->view->assign('hints', $hints);

				//----- Assign permissions
				$this->view->assign('permissions', $this->permissions);
				
				//----- View
				$this->render(path(TABLE_EMPLOYEES, 'form'), compact('admin'));
			}
		}
		
		//====================================================================================================
		function logs()
		{
			//----- Check permissions
			$this->permissions(TABLE_EMPLOYEES);
			
			//----- Get record
			$id = $this->base->get('PARAMS.id');
			$admin = R::load(TABLE_EMPLOYEES, $id);
			if(!$admin->id) $this->base->error(404);
			
			//----- Get logs
			foreach(R::find(TABLE_LOGS, '`table` = ? AND `pid` = ? ORDER BY `id` DESC LIMIT 300', [TABLE_EMPLOYEES, $id]) as $log)
			$logs[] = $log->get('display')->export(); if($logs) $this->view->assign('logs', translate($logs));
			
			//----- View
			$this->render(path(TABLE_EMPLOYEES, 'logs'), compact('admin'));
		}

		//====================================================================================================
		function remove()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_EMPLOYEES, __FUNCTION__));
			
			//----- Remove record
			$id = $this->base->get('PARAMS.id');
			$admin = R::load(TABLE_EMPLOYEES, $id);
			if($admin->id) R::trash($admin);
			else $this->base->error(404);
			
			translate($admin);
			$this->admin->log('LOG_ADMIN_REMOVE', 'danger', 'user-times', [$admin->email]);
			$this->notifies[] = ['success', $this->translates['REMOVED'], $admin->email];
			$this->base->reroute($this->base->get('SERVER.HTTP_REFERER'));
		}
	}
?>