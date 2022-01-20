<?php
	use \RedBeanPHP\R as R;
	class Ajax extends Admin
	{
		//====================================================================================================
		function update()
		{
			//----- Get record
			$table = $this->base->get('PARAMS.table');
			$id = $this->base->get('PARAMS.id');
			$bean = R::load($table, $id);
			
			if(!$bean->id) $this->base->error(404);
			else if($this->base->get('VERB') == 'POST' && csrf())
			{
				//----- Set values
				foreach($this->base->get('POST') as $key => $value)
				$bean->$key = $this->base->clean($value);
				
				//----- Store record
				R::store($bean);
			}
		}
		
		//====================================================================================================
		function active()
		{
			//----- Get record
			$table = $this->base->get('PARAMS.table');
			$id = $this->base->get('PARAMS.id');
			$bean = R::load($table, $id);
			if(!$bean->id) $this->base->error(404);
			else
			{
				$bean->active = ($bean->active ? 0 : 1);
				R::store($bean);
			}
		}
		
		//====================================================================================================
		function remove()
		{
			//----- Get record
			$table = $this->base->get('PARAMS.table');
			$id = $this->base->get('PARAMS.id');
			$bean = R::load($table, $id);
			
			if(!$bean->id) $this->base->error(404);
			else if(in_array($table, [TABLE_IMAGES]))
			R::trash($bean); else $bean->delete();
		}
		
		//====================================================================================================
		function alias()
		{
			echo alias($this->base->get('POST.string'));
		}
	}
?>