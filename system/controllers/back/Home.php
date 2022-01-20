<?php
	use \RedBeanPHP\R as R;
	class Home extends Admin
	{
		//====================================================================================================
		function index()
		{
			//----- Get counters
			foreach([TABLE_ADMINS, TABLE_EMAILS, TABLE_LOGS] as $table)
			$count[$table] = R::count($table); for($i = 0; $i < 14; $i++) { $date = date('Y-m-d', strtotime(sprintf('-%s days', $i)));
			$count['chart'][$date] = R::count(TABLE_LOGS, '`created` LIKE ?', [like($date)]); } $count['chart'] = array_reverse($count['chart']);
			$this->view->assign(compact('count'));

			//----- View
			$this->render(path('home', 'index'));
		}
		
		//====================================================================================================
		function error()
		{
			while(ob_get_level()) ob_end_clean();
			exit($this->render(path('home', 'error')));
		}
	}
?>