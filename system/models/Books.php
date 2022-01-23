<?php
	namespace Model;
	use \RedBeanPHP\R as R;
	class Books extends \Model
	{
		protected $json = [];
		
		//====================================================================================================
		function get()
		{
			//----- Get data types
			$data = func_get_args();
			
			//----- TODO: Get author
			if(in_array('author', $data))
			{
				//...
			}
			
			//----- Return bean
			return $this->bean;
		}
		
		//====================================================================================================
		function delete()
		{
			//----- Remove book reservation
			R::trashAll(R::find(TABLE_RESERVATIONS, '`book` = ?', [$this->bean->id]));
		}
	}
?>