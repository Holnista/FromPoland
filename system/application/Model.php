<?php
	use \RedBeanPHP\R as R;
	class Model extends \RedBeanPHP\SimpleModel
	{
		protected $table;
		
		//====================================================================================================
		function open()
		{
			//----- Get table
			$this->table = $this->bean->getMeta('type');

			//----- Decode variables
			if($this->json) foreach($this->json as $key) $this->bean->$key
			= ($this->bean->$key ? json_decode($this->bean->$key, true) : []);

			//----- Global types
			$this->type($this->bean->id);
		}

		//====================================================================================================
		function update()
		{
			//----- Set updated
			if($this->bean->updated) $this->bean->updated = date('Y-m-d H:i:s');
			
			//----- Serialize variables
			if($this->json) foreach($this->json as $key) $this->bean->$key
			= ($this->bean->$key ? json($this->bean->$key) : null);
		}
		
		//====================================================================================================
		function after_update()
		{
			//----- Restore variables
			if($this->json) foreach($this->json as $key) $this->bean->$key
			= ($this->bean->$key ? json_decode($this->bean->$key, true) : []);
		}
		
		//====================================================================================================
		function dispense()
		{
			$this->open();
		}

		//====================================================================================================
		function type(&$input = null, $format = 'int')
		{
			if(!is_null($input) && in_array($format, ['int', 'float', 'string']))
			{
				if($format == 'int') if(is_array($input)) array_walk_recursive($input, 
				function(&$value) { $value = (int) $value; }); else $input = (int) $input;
				else if($format == 'float') if(is_array($input)) array_walk_recursive($input, 
				function(&$value) { $value = (float) $value; }); else $input = (float) $input;
				else if($format == 'string') if(is_array($input)) array_walk_recursive($input, 
				function(&$value) { $value = (string) $value; }); else $input = (string) $input;
			}
		}
	}
?>