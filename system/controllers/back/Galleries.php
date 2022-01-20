<?php
	use \RedBeanPHP\R as R;
	class Galleries extends Admin
	{
		//====================================================================================================
		function index()
		{
			//----- Check permissions
			$this->permissions(TABLE_GALLERIES);
			
			//----- Check count
			if(R::count(TABLE_GALLERIES))
			{
				//----- Prepare query
				if($this->base->get('GET.word'))
				{
					$word = mb_strtolower($this->base->clean($this->base->get('GET.word')));
					$query = ['LOWER(CONCAT(`title`)) LIKE ?', [like($word)]];
				}
				
				//----- Get records
				$galleries = R::find(TABLE_GALLERIES, ($query[0] ? : '').
				' ORDER BY `sort` ASC', ($query[1] ? : []));
				if($galleries) { foreach($galleries as $gallery) $gallery->get();
				$this->view->assign('galleries', translate($galleries)); }
			}
			
			//----- View
			$this->view->assign('count', R::count(TABLE_GALLERIES));
			$this->render(path(TABLE_GALLERIES, 'index'));
		}
		
		//====================================================================================================
		function add()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_GALLERIES, __FUNCTION__));
			
			if($this->base->get('VERB') == 'POST' && csrf())
			{
				//----- Create record
				$id = R::store(R::dispense(TABLE_GALLERIES));
				$gallery = R::load(TABLE_GALLERIES, $id);

				//----- Set values
				if(!$this->base->get('POST.sort')) $this->base->set('POST.sort', R::count(TABLE_GALLERIES));
				foreach($this->base->get('POST') as $key => $value) $gallery->$key = $value;
				
				//----- Upload image
				$upload = $this->upload(path(PATH_IMAGES, TABLE_GALLERIES, $id));
				if($upload)
				{
					foreach($upload as $file)
					{
						$image = R::dispense(TABLE_IMAGES); $file = end(explode('/', $file));
						$image->import(['pid' => $id, 'table' => TABLE_GALLERIES, 'file' => $file,
						'sort' => R::count(TABLE_IMAGES, '`pid` = ? AND `table` = ?', 
						[$id, TABLE_GALLERIES])+1]); R::store($image);
					}
				}
				
				//----- Store record
				R::store($gallery); translate($gallery);
				$this->admin->log('LOG_GALLERY_CREATE', 'success', 'plus', [$gallery->title]);
				$this->notifies[] = ['success', $this->translates['CREATED'], $gallery->title];
				$this->base->reroute(path('admin', TABLE_GALLERIES));
			}
			else
			{
				//----- View
				$this->render(path(TABLE_GALLERIES, 'form'));
			}
		}
		
		//====================================================================================================
		function edit()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_GALLERIES, __FUNCTION__));
			
			//----- Get record
			$id = $this->base->get('PARAMS.id');
			$gallery = R::load(TABLE_GALLERIES, $id);
			if($gallery->id) $gallery->get();
			else $this->base->error(404);

			if($this->base->get('VERB') == 'POST' && csrf())
			{
				//----- Set values
				if(!$this->base->get('POST.sort')) $this->base->set('POST.sort', R::count(TABLE_GALLERIES));
				foreach($this->base->get('POST') as $key => $value) $gallery->$key = $value;
				
				//----- Upload image
				$upload = $this->upload(path(PATH_IMAGES, TABLE_GALLERIES, $id));
				if($upload)
				{
					foreach($upload as $file)
					{
						$image = R::dispense(TABLE_IMAGES); $file = end(explode('/', $file));
						$image->import(['pid' => $id, 'table' => TABLE_GALLERIES, 'file' => $file,
						'sort' => R::count(TABLE_IMAGES, '`pid` = ? AND `table` = ?', 
						[$id, TABLE_GALLERIES])+1]); R::store($image);
					}
				}

				//----- Store record
				R::store($gallery); translate($gallery);
				$this->admin->log('LOG_GALLERY_EDIT', 'primary', 'pencil', [$gallery->title]);
				$this->notifies[] = ['success', $this->translates['SAVED'], $gallery->title];
				$this->base->reroute($this->base->get('SERVER.REQUEST_URI'));
			}
			else
			{
				//----- View
				$this->render(path(TABLE_GALLERIES, 'form'), compact('gallery'));
			}
		}
		
		//====================================================================================================
		function duplicate()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_GALLERIES, 'add'));
			
			//----- Get record
			$id = $this->base->get('PARAMS.id');
			$gallery = R::load(TABLE_GALLERIES, $id);
			if($gallery->id) $gallery->get();
			else $this->base->error(404);

			if($this->base->get('VERB') == 'POST' && csrf())
			{
				//----- Copy record
				$new = R::duplicate($gallery);
				
				//----- Set values
				if(!$this->base->get('POST.sort')) $this->base->set('POST.sort', R::count(TABLE_GALLERIES));
				foreach($this->base->get('POST') as $key => $value) $new->$key = $value;
				$id = R::store($new);

				//----- Upload image
				$upload = $this->upload(path(PATH_IMAGES, TABLE_GALLERIES, $id));
				if($upload)
				{
					foreach($upload as $file)
					{
						$image = R::dispense(TABLE_IMAGES); $file = end(explode('/', $file));
						$image->import(['pid' => $id, 'table' => TABLE_GALLERIES, 'file' => $file,
						'sort' => R::count(TABLE_IMAGES, '`pid` = ? AND `table` = ?', 
						[$id, TABLE_GALLERIES])+1]); R::store($image);
					}
				}
				else
				{
					$path = path(PATH_IMAGES, TABLE_GALLERIES);
					foreach($gallery->data['images'] as $image)
					{
						$dup = R::duplicate($image); $dup->pid = $id;
						mkdir(path($path, $id)); mkdir(path($path, $id, 'thumbs'));
						$dup->file = str_replace(current(explode('_', $image->file)), uniqid(), $image->file);
						copy(path($path, $gallery->id, 'thumbs', $image->file), path($path, $id, 'thumbs', $dup->file));
						copy(path($path, $gallery->id, $image->file), path($path, $id, $dup->file)); R::store($dup);
					}
				}
				
				//----- Store record
				$id = R::store($new); translate($new);
				$this->admin->log('LOG_GALLERY_CREATE', 'primary', 'copy', [$new->title]);
				$this->notifies[] = ['success', $this->translates['SAVED'], $new->title];
				$this->base->reroute(path('admin', TABLE_GALLERIES, 'edit', $new->id));
			}
			else
			{
				//----- Set title
				foreach($this->base->languages as $language)
				{
					$gallery->title[$language] .= sprintf(' (%s)', $this->translates['COPY']);
					$gallery->alias[$language] = alias($gallery->title[$language]);
				}
				
				//----- View
				$this->render(path(TABLE_GALLERIES, 'form'), compact('gallery'));
			}
		}
		
		//====================================================================================================
		function remove()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_GALLERIES, __FUNCTION__));
			
			//----- Remove record
			$id = $this->base->get('PARAMS.id');
			$gallery = R::load(TABLE_GALLERIES, $id);
			if($gallery->id) R::trash($gallery);
			else $this->base->error(404);
			
			translate($gallery);
			$this->admin->log('LOG_GALLERY_REMOVE', 'danger', 'times', [$gallery->title]);
			$this->notifies[] = ['success', $this->translates['REMOVED'], $gallery->title];
			$this->base->reroute($this->base->get('SERVER.HTTP_REFERER'));
		}
	}
?>