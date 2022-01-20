<?php
	use \RedBeanPHP\R as R;
	class Sections extends Admin
	{
		//====================================================================================================
		function section()
		{
			$this->view->assign('index', $this->base->get('POST.index'));
			echo $this->fetch(path('back', 'addons', 'sections'));
		}
		
		//====================================================================================================
		function column()
		{
			$this->view->assign('index', $this->base->get('POST.index'));
			echo $this->fetch(path('back', 'addons', 'blocks', 'column'));
		}
		
		//====================================================================================================
		function block()
		{
			$index = $this->base->get('POST.index');
			$block = $this->base->get('POST.block');
			$type = strtolower($this->base->get('POST.type'));
			
			//----- Get galleries list for gallery block
			if($type == 'gallery') foreach(R::find(TABLE_GALLERIES) as $gallery) 
			$content[$type][$gallery->id] = translate($gallery->get());
			
			echo $this->fetch(path('back', 'addons', 'blocks', $type), 
			compact('type', 'index', 'block', 'content'));
		}
	}
?>