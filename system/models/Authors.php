<?php
	namespace Model;
	use \RedBeanPHP\R as R;
	class Authors extends \Model
	{
		protected $json = [];
		
		//====================================================================================================
		function get()
		{
			//----- Get data types
			$data = func_get_args();
			
			//----- TODO: Get books
			if(in_array('books', $data))
			{
				//...
			}
			
			//----- Return bean
			return $this->bean;
		}
		
		//====================================================================================================
		function delete()
		{
			//----- Update books reservations
			R::exec(sprintf('UPDATE `%s` SET `reservation` = NULL WHERE `reservation` = %d', TABLE_BOOKS, $this->bean->id));
		}
	}
?>