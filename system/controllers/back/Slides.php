<?php
	use \RedBeanPHP\R as R;
	class Slides extends Admin
	{
		//====================================================================================================
		function index()
		{
			//----- Check permissions
			$this->permissions(TABLE_SLIDES);
			
			//----- Check count
			if(R::count(TABLE_SLIDES))
			{
				//----- Prepare query
				if($this->base->get('GET.word'))
				{
					$word = mb_strtolower($this->base->clean($this->base->get('GET.word')));
					$query = ['LOWER(CONCAT(`title`)) LIKE ?', [like($word)]];
				}
				
				//----- Get records
				$slides = R::find(TABLE_SLIDES, ($query[0] ? : '').
				' ORDER BY `sort` ASC', ($query[1] ? : []));
				if($slides) { foreach($slides as $slide) $slide->get();
				$this->view->assign('slides', translate($slides)); }
			}
			
			//----- View
			$this->view->assign('count', R::count(TABLE_SLIDES));
			$this->render(path(TABLE_SLIDES, 'index'));
		}
		
		//====================================================================================================
		function add()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_SLIDES, __FUNCTION__));
			
			if($this->base->get('VERB') == 'POST' && csrf())
			{
				//----- Create record
				$id = R::store(R::dispense(TABLE_SLIDES));
				$slide = R::load(TABLE_SLIDES, $id);

				//----- Set values
				if(!$this->base->get('POST.sort')) $this->base->set('POST.sort', R::count(TABLE_SLIDES));
				foreach($this->base->get('POST') as $key => $value) $slide->$key = $value;
				
				//----- Upload image
				$path = path(PATH_IMAGES, TABLE_SLIDES); $upload = $this->upload($path);
				if($upload) $slide->file = end(explode('/', current($upload)));
				
				//----- Store record
				R::store($slide); translate($slide);
				$this->admin->log('LOG_SLIDE_CREATE', 'success', 'plus', [$slide->title]);
				$this->notifies[] = ['success', $this->translates['CREATED'], $slide->title];
				$this->base->reroute(path('admin', TABLE_SLIDES));
			}
			else
			{
				//----- View
				$this->render(path(TABLE_SLIDES, 'form'));
			}
		}
		
		//====================================================================================================
		function edit()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_SLIDES, __FUNCTION__));
			
			//----- Get record
			$id = $this->base->get('PARAMS.id');
			$slide = R::load(TABLE_SLIDES, $id);
			if($slide->id) $slide->get();
			else $this->base->error(404);

			if($this->base->get('VERB') == 'POST' && csrf())
			{
				//----- Set values
				if(!$this->base->get('POST.sort')) $this->base->set('POST.sort', R::count(TABLE_SLIDES));
				foreach($this->base->get('POST') as $key => $value) $slide->$key = $value;

				//----- Upload image
				$path = path(PATH_IMAGES, TABLE_SLIDES);
				$upload = $this->upload($path);
				if($upload)
				{
					unlink(path($path, $slide->file));
					unlink(path($path, 'thumbs', $slide->file));
					$slide->file = end(explode('/', current($upload)));
				}
				
				//----- Store record
				R::store($slide); translate($slide);
				$this->admin->log('LOG_SLIDE_EDIT', 'primary', 'pencil', [$slide->title]);
				$this->notifies[] = ['success', $this->translates['SAVED'], $slide->title];
				$this->base->reroute($this->base->get('SERVER.REQUEST_URI'));
			}
			else
			{
				//----- View
				$this->render(path(TABLE_SLIDES, 'form'), compact('slide'));
			}
		}
		
		//====================================================================================================
		function remove()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_SLIDES, __FUNCTION__));
			
			//----- Remove record
			$id = $this->base->get('PARAMS.id');
			$slide = R::load(TABLE_SLIDES, $id);
			if($slide->id) R::trash($slide);
			else $this->base->error(404);
			
			translate($slide);
			$this->admin->log('LOG_SLIDE_REMOVE', 'danger', 'times', [$slide->title]);
			$this->notifies[] = ['success', $this->translates['REMOVED'], $slide->title];
			$this->base->reroute($this->base->get('SERVER.HTTP_REFERER'));
		}
	}
?>