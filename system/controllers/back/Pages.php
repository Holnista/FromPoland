<?php
	use \RedBeanPHP\R as R;
	class Pages extends Admin
	{
		//====================================================================================================
		function index()
		{
			//----- Check permissions
			$this->permissions(TABLE_PAGES);
			
			//----- Check count
			if(R::count(TABLE_PAGES))
			{
				//----- Prepare query
				if(!$this->base->get('GET.word')) foreach(tree(TABLE_PAGES, 0) as $page) $pages[] = R::load(TABLE_PAGES, $page);
				else { $word = mb_strtolower($this->base->clean($this->base->get('GET.word'))); $pages = R::find(TABLE_PAGES, 
				'LOWER(CONCAT(`title`)) LIKE ? ORDER BY `sort` ASC', [like($word)]); }

				//----- Get records
				if($pages) { foreach($pages as $page) $page->get();
				$this->view->assign('pages', translate($pages)); }
			}
			
			//----- View
			$this->view->assign('count', R::count(TABLE_PAGES));
			$this->render(path(TABLE_PAGES, 'index'));
		}
		
		//====================================================================================================
		function add()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_PAGES, __FUNCTION__));
			
			if($this->base->get('VERB') == 'POST' && csrf())
			{
				//----- Create record
				$id = R::store(R::dispense(TABLE_PAGES));
				$page = R::load(TABLE_PAGES, $id);
				
				//----- Set values
				if(!$this->base->get('POST.sort')) $this->base->set('POST.sort', R::count(TABLE_PAGES));
				foreach($this->base->get('POST') as $key => $value) $page->$key = $value;
				if(!$this->base->get('POST.sections')) $page->sections = null;
				if(!$this->base->get('POST.place')) $page->place = null;
				
				//----- Upload image
				$path = path(PATH_IMAGES, TABLE_PAGES); $upload = $this->upload($path);
				if($upload) $page->file = end(explode('/', current($upload)));
				
				//----- Store record
				R::store($page); translate($page);
				$this->admin->log('LOG_PAGE_CREATE', 'success', 'plus', [$page->title]);
				$this->notifies[] = ['success', $this->translates['CREATED'], $page->title];
				$this->base->reroute(path('admin', TABLE_PAGES));
			}
			else
			{
				//----- Get parents
				foreach(tree(TABLE_PAGES, 0) as $parent) 
				$parents[] = R::load(TABLE_PAGES, $parent);
				$this->view->assign('parents', translate($parents));
				
				//----- View
				$this->render(path(TABLE_PAGES, 'form'));
			}
		}
		
		//====================================================================================================
		function edit()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_PAGES, __FUNCTION__));
			
			//----- Get record
			$id = $this->base->get('PARAMS.id');
			$page = R::load(TABLE_PAGES, $id);
			if($page->id) $page->get();
			else $this->base->error(404);

			if($this->base->get('VERB') == 'POST' && csrf())
			{
				//----- Set values
				if(!$this->base->get('POST.sort')) $this->base->set('POST.sort', R::count(TABLE_PAGES));
				foreach($this->base->get('POST') as $key => $value) $page->$key = $value;
				if(!$this->base->get('POST.sections')) $page->sections = null;
				if(!$this->base->get('POST.place')) $page->place = null;
				
				//----- Upload image
				$path = path(PATH_IMAGES, TABLE_PAGES);
				$upload = $this->upload($path);
				if($upload) 
				{
					unlink(path($path, $page->file));
					unlink(path($path, 'thumbs', $page->file));
					$page->file = end(explode('/', current($upload)));
				}
				
				//----- Store record
				R::store($page); translate($page);
				$this->admin->log('LOG_PAGE_EDIT', 'primary', 'pencil', [$page->title]);
				$this->notifies[] = ['success', $this->translates['SAVED'], $page->title];
				$this->base->reroute($this->base->get('SERVER.REQUEST_URI'));
			}
			else
			{
				//----- Get parents
				foreach(tree(TABLE_PAGES, 0) as $parent) 
				$parents[] = R::load(TABLE_PAGES, $parent);
				$this->view->assign('parents', translate($parents));
				
				//----- View
				$this->render(path(TABLE_PAGES, 'form'), compact('page'));
			}
		}
		
		//====================================================================================================
		function duplicate()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_PAGES, 'add'));
			
			//----- Get record
			$id = $this->base->get('PARAMS.id');
			$page = R::load(TABLE_PAGES, $id);
			if($page->id) $page->get();
			else $this->base->error(404);

			if($this->base->get('VERB') == 'POST' && csrf())
			{
				//----- Copy record
				$new = R::duplicate($page);
				
				//----- Set values
				if(!$this->base->get('POST.sort')) $this->base->set('POST.sort', R::count(TABLE_PAGES));
				foreach($this->base->get('POST') as $key => $value) $new->$key = $value;
				if(!$this->base->get('POST.place')) $new->place = null;
				
				//----- Upload image
				$path = path(PATH_IMAGES, TABLE_PAGES); $upload = $this->upload($path);
				if($upload) $new->file = end(explode('/', current($upload)));
				else
				{
					$new->file = str_replace(current(explode('_', $page->file)), uniqid(), $page->file);
					copy(path($path, 'thumbs', $page->file), path($path, 'thumbs', $new->file));
					copy(path($path, $page->file), path($path, $new->file));
				}
				
				//----- Store record
				R::store($new); translate($new);
				$this->admin->log('LOG_PAGE_CREATE', 'primary', 'copy', [$new->title]);
				$this->notifies[] = ['success', $this->translates['SAVED'], $new->title];
				$this->base->reroute(path('admin', TABLE_PAGES, 'edit', $new->id));
			}
			else
			{
				//----- Get parents
				foreach(tree(TABLE_PAGES, 0) as $parent) 
				$parents[] = R::load(TABLE_PAGES, $parent);
				$this->view->assign('parents', translate($parents));
				
				//----- Set title
				foreach($this->base->languages as $language)
				{
					$page->title[$language] .= sprintf(' (%s)', $this->translates['COPY']);
					$page->alias[$language] = alias($page->title[$language]);
				}
				
				//----- View
				$this->render(path(TABLE_PAGES, 'form'), compact('page'));
			}
		}
		
		//====================================================================================================
		function remove()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_PAGES, __FUNCTION__));
			
			//----- Remove record
			$id = $this->base->get('PARAMS.id');
			$page = R::load(TABLE_PAGES, $id);
			if($page->id) R::trash($page);
			else $this->base->error(404);
			
			translate($page);
			$this->admin->log('LOG_PAGE_REMOVE', 'danger', 'times', [$page->title]);
			$this->notifies[] = ['success', $this->translates['REMOVED'], $page->title];
			$this->base->reroute($this->base->get('SERVER.HTTP_REFERER'));
		}
	}
?>