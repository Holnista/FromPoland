<?php
	namespace Model;
	use \RedBeanPHP\R as R;
	class Users extends \Model
	{
		protected $json = [];
		
		//====================================================================================================
		function get()
		{
			//----- Get data types
			$data = func_get_args();
			
			//----- TODO: Get reservations
			if(in_array('reservations', $data))
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
			$this->type($this->bean->active);
		}
		
		//====================================================================================================
		function after_delete()
		{
			//----- Remove user reservation
			R::trashAll(R::find(TABLE_RESERVATIONS, '`user` = ?', [$this->bean->id]));
		}
	}
?>