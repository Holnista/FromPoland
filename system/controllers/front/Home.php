<?php
	use \RedBeanPHP\R as R;
	class Home extends Controller
	{
		//====================================================================================================
		function index()
		{
			//----- Get slides
			foreach(R::find(TABLE_SLIDES, '`active` = ? ORDER BY `sort` ASC', [true]) as $slide)
			$slides[$slide->id] = translate($slide->get()); if($slides) $this->view->assign('slides', $slides);
			
			//----- Get events
			$events = translate(R::find(TABLE_EVENTS, '`active` = ?', [true]));
			uasort($events, function($a, $b) { return strtotime($a->date['day']) - strtotime($b->date['day']); });
			$events = array_slice($events, 0, 9);
			
			//----- Assign events
			foreach($events as $index => $event) if(strtotime($event->date['day']) >= time())
			$event->get('image', 'clients'); else unset($event, $events[$index]);
			
			//----- View
			$this->render(path('home', 'index'), compact('events'));
		}
		
		//====================================================================================================
		function faq()
		{
			//----- Get questions
			foreach(R::find(TABLE_QUESTIONS, '`active` = ? ORDER BY `sort` ASC', [true]) as $question)
			{ $tags = array_merge(($tags ? : []), $question->tags[$this->base->language]);
			$questions[] = $question; } $tags = array_unique($tags); translate($questions);
			//uasort($tags, function($a, $b) { return strlen($b) - strlen($a); });
			
			//----- View
			$this->render(path('home', 'faq'), compact('questions', 'tags'));
		}

		//====================================================================================================
		function error()
		{
			while(ob_get_level()) ob_end_clean();
			exit($this->render(path('home', 'flash')));
		}
	}
?>