<?php
	use \RedBeanPHP\R as R;
	class Home extends API
	{
		//====================================================================================================
		function index()
		{			
			//----- Prepare data
			$data['time'] = date('Y-m-d H:i:s');
			$data['title'] = $this->base->get('NAME');
			$data['version'] = $this->base->get('VERSION');
			exit(json($data));
		}
	}
?>