<?php
	use \RedBeanPHP\R as R;
	class Page extends Controller
	{
		//====================================================================================================
		function read()
		{
			$alias = $this->base->get('PARAMS.alias');
			$page = R::findOne(TABLE_PAGES, '`active` = ? AND `alias` LIKE ?', [true, like($alias, true)]);
			if(!$page) $this->base->error(404);
			else
			{
				//----- Get page
				translate($page->get());
				
				//----- Set meta
				$this->base->meta = [
					'title' => ($page->meta['title'] ? : $page->title),
					'keys' => ($page->meta['keys'] ? : current($page->text)['content']),
					'desc' => ($page->meta['desc'] ? : current($page->text)['content'])
				];
				
				//----- Set share
				$this->base->share['desc'] = $this->base->meta['desc'];
				if($page->file) $this->base->share['image'] = $page->data['image'];
				$this->base->share['title'] = implode(' - ', [$this->base->NAME, $this->base->meta['title']]);
				
				//----- View
				$path = path(PATH_SYSTEM, 'views', 'front', 'page', 'custom'.$page->id).'.tpl';
				$path = (file_exists($path) ? path('page', 'custom'.$page->id) : path('page', 'read'));
				$this->render($path, compact('page'));
			}
		}
	}
?>