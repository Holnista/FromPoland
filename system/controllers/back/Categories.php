<?php
	use \RedBeanPHP\R as R;
	class Categories extends Admin
	{
		//====================================================================================================
		function index()
		{
			//----- Check permissions
			$this->permissions(TABLE_CATEGORIES);
			
			//----- Check count
			if(R::count(TABLE_CATEGORIES))
			{
				//----- Prepare query
				if(!$this->base->get('GET.word')) foreach(tree(TABLE_CATEGORIES, 0) as $category) $categories[] = R::load(TABLE_CATEGORIES, $category);
				else { $word = mb_strtolower($this->base->clean($this->base->get('GET.word'))); $categories = R::find(TABLE_CATEGORIES, 
				'LOWER(CONCAT(`title`)) LIKE ? ORDER BY `sort` ASC', [like($word)]); }

				//----- Get records
				if($categories) { foreach($categories as $category) $category->get();
				$this->view->assign('categories', translate($categories)); }
			}
			
			//----- View
			$this->view->assign('count', R::count(TABLE_CATEGORIES));
			$this->render(path(TABLE_CATEGORIES, 'index'));
		}
		
		//====================================================================================================
		function add()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_CATEGORIES, __FUNCTION__));
			
			if($this->base->get('VERB') == 'POST' && csrf())
			{
				//----- Create record
				$id = R::store(R::dispense(TABLE_CATEGORIES));
				$category = R::load(TABLE_CATEGORIES, $id);
				
				//----- Set values
				if(!$this->base->get('POST.sort')) $this->base->set('POST.sort', R::count(TABLE_CATEGORIES));
				foreach($this->base->get('POST') as $key => $value) $category->$key = $value;
				
				//----- Upload image
				$path = path(PATH_IMAGES, TABLE_CATEGORIES); $upload = $this->upload($path);
				if($upload) $category->file = end(explode('/', current($upload)));
				
				//----- Store record
				R::store($category); translate($category);
				$this->admin->log('LOG_CATEGORY_CREATE', 'success', 'plus', [$category->title]);
				$this->notifies[] = ['success', $this->translates['CREATED'], $category->title];
				$this->base->reroute(path('admin', TABLE_CATEGORIES));
			}
			else
			{
				//----- Get parents
				foreach(tree(TABLE_CATEGORIES, 0) as $parent) 
				$parents[] = R::load(TABLE_CATEGORIES, $parent);
				$this->view->assign('parents', translate($parents));
				
				//----- View
				$this->render(path(TABLE_CATEGORIES, 'form'));
			}
		}
		
		//====================================================================================================
		function edit()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_CATEGORIES, __FUNCTION__));
			
			//----- Get record
			$id = $this->base->get('PARAMS.id');
			$category = R::load(TABLE_CATEGORIES, $id);
			if($category->id) $category->get();
			else $this->base->error(404);

			if($this->base->get('VERB') == 'POST' && csrf())
			{
				//----- Set values
				if(!$this->base->get('POST.sort')) $this->base->set('POST.sort', R::count(TABLE_CATEGORIES));
				foreach($this->base->get('POST') as $key => $value) $category->$key = $value;
				
				//----- Upload image
				$path = path(PATH_IMAGES, TABLE_CATEGORIES);
				$upload = $this->upload($path);
				if($upload) 
				{
					unlink(path($path, $category->file));
					unlink(path($path, 'thumbs', $category->file));
					$category->file = end(explode('/', current($upload)));
				}
				
				//----- Store record
				R::store($category); translate($category);
				$this->admin->log('LOG_CATEGORY_EDIT', 'primary', 'pencil', [$category->title]);
				$this->notifies[] = ['success', $this->translates['SAVED'], $category->title];
				$this->base->reroute($this->base->get('SERVER.REQUEST_URI'));
			}
			else
			{
				//----- Get parents
				foreach(tree(TABLE_CATEGORIES, 0) as $parent) 
				$parents[] = R::load(TABLE_CATEGORIES, $parent);
				$this->view->assign('parents', translate($parents));
				
				//----- View
				$this->render(path(TABLE_CATEGORIES, 'form'), compact('category'));
			}
		}
		
		//====================================================================================================
		function duplicate()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_CATEGORIES, 'add'));
			
			//----- Get record
			$id = $this->base->get('PARAMS.id');
			$category = R::load(TABLE_CATEGORIES, $id);
			if($category->id) $category->get();
			else $this->base->error(404);

			if($this->base->get('VERB') == 'POST' && csrf())
			{
				//----- Copy record
				$new = R::duplicate($category);
				
				//----- Set values
				if(!$this->base->get('POST.sort')) $this->base->set('POST.sort', R::count(TABLE_CATEGORIES));
				foreach($this->base->get('POST') as $key => $value) $new->$key = $value;
				
				//----- Upload image
				$path = path(PATH_IMAGES, TABLE_CATEGORIES); $upload = $this->upload($path);
				if($upload) $new->file = end(explode('/', current($upload)));
				else
				{
					$new->file = str_replace(current(explode('_', $category->file)), uniqid(), $category->file);
					copy(path($path, 'thumbs', $category->file), path($path, 'thumbs', $new->file));
					copy(path($path, $category->file), path($path, $new->file));
				}
				
				//----- Store record
				R::store($new); translate($new);
				$this->admin->log('LOG_CATEGORY_CREATE', 'primary', 'copy', [$new->title]);
				$this->notifies[] = ['success', $this->translates['SAVED'], $new->title];
				$this->base->reroute(path('admin', TABLE_CATEGORIES, 'edit', $new->id));
			}
			else
			{
				//----- Get parents
				foreach(tree(TABLE_CATEGORIES, 0) as $parent) 
				$parents[] = R::load(TABLE_CATEGORIES, $parent);
				$this->view->assign('parents', translate($parents));
				
				//----- Set title
				foreach($this->base->languages as $language)
				{
					$category->title[$language] .= sprintf(' (%s)', $this->translates['COPY']);
					$category->alias[$language] = alias($category->title[$language]);
				}
				
				//----- View
				$this->render(path(TABLE_CATEGORIES, 'form'), compact('category'));
			}
		}
		
		//====================================================================================================
		function remove()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_CATEGORIES, __FUNCTION__));
			
			//----- Remove record
			$id = $this->base->get('PARAMS.id');
			$category = R::load(TABLE_CATEGORIES, $id);
			if($category->id) R::trash($category);
			else $this->base->error(404);
			
			translate($category);
			$this->admin->log('LOG_CATEGORY_REMOVE', 'danger', 'times', [$category->title]);
			$this->notifies[] = ['success', $this->translates['REMOVED'], $category->title];
			$this->base->reroute($this->base->get('SERVER.HTTP_REFERER'));
		}
	}
?>