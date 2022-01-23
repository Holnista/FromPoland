<?php
	namespace Model;
	use \RedBeanPHP\R as R;
	class Reservations extends \Model
	{
		protected $json = [];
		
		//====================================================================================================
		function get()
		{
			//----- Get data types
			$data = func_get_args();
			
			//----- TODO: Get book
			if(in_array('book', $data))
			{
				//...
			}
			
			//----- TODO: Get user
			if(in_array('user', $data))
			{
				//...
			}
		
			//----- Return bean
			return $this->bean;
		}
		
		//====================================================================================================
		function open()
		{
			//----- Parent open
			parent::open();
			
			//----- Set types
			$this->type($this->bean->user);
			$this->type($this->bean->book);
		}
		
		//====================================================================================================
		function after_update()
		{
			//----- Update books reservations
			R::exec(sprintf('UPDATE `%s` SET `reservation` = %d WHERE `id` = %d', TABLE_BOOKS, $this->bean->id, $this->bean->book));
		}
		
		//====================================================================================================
		function delete()
		{
			//----- Update books reservations
			R::exec(sprintf('UPDATE `%s` SET `reservation` = NULL WHERE `reservation` = %d', TABLE_BOOKS, $this->bean->id));
		}
	}
?>