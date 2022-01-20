<?php
	namespace Model;
	use \RedBeanPHP\R as R;
	class Logs extends \Model
	{
		protected $json = ['log'];
		
		//====================================================================================================
		function get()
		{
			//----- Get data types
			$data = func_get_args();
			
			//----- Get doer
			if(in_array('doer', $data) || !$data)
			{
				$bean = R::load($this->bean->table, $this->bean->pid); $bean->get('image');
				if(!$bean->id) $this->bean->data['doer'] = ['title' => NO_DATA,
				'subtitle' => NO_DATA , 'data' => $bean->data, 'error' => true];
				else
				{
					if($this->bean->table == TABLE_CLIENTS) $this->bean->data['doer'] = ['title' => $bean->title ?? NO_DATA, 'subtitle' => $bean->nip ?? NO_DATA];
					if($this->bean->table == TABLE_ADMINS) $this->bean->data['doer'] = ['title' => trim(implode(' ', [$bean->personal['name'], $bean->personal['surname']])) ?? NO_DATA,
					'subtitle' => trim(implode(', ', [$bean->employment['position'], $bean->employment['department']]), ', ') ?? NO_DATA];
					if($bean->file) $this->bean->data['doer']['file'] = $bean->file; $this->bean->data['doer']['data'] = $bean->data;
				}
			}
			
			//---- Get display
			if(in_array('display', $data) || !$data)
			{
				$bean = R::findOne(TABLE_TRANSLATES, '`key` = ?', [$this->bean->log['key']]);
				if($bean->id) foreach($bean->translation as $language => $string)
				$this->bean->data['display'][$language] = vsprintf($string, $this->bean->log['data']);
				else
				{
					$this->bean->data['display'] = $this->bean->log['key'];
					if($this->bean->log['data']) $this->bean->data['display'] 
					.= sprintf(' (%s)', implode(', ', $this->bean->log['data']));
				}
			}
			
			//----- Return bean
			return $this->bean;
		}
	}
?>