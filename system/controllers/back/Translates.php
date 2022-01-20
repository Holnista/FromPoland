<?php
	use \RedBeanPHP\R as R;
	class Translates extends Admin
	{
		//====================================================================================================
		function index()
		{
			//----- Check permissions
			$this->permissions(TABLE_TRANSLATES);
			
			//----- Check count
			if(R::count(TABLE_TRANSLATES))
			{
				//----- Prepare query
				if($this->base->get('GET.word'))
				{
					$word = mb_strtolower($this->base->clean($this->base->get('GET.word')));
					$query = ['LOWER(CONCAT(`key`, `translation`)) LIKE ?', [like($word)]];
				}
				
				//----- Get records
				$translates = R::find(TABLE_TRANSLATES, ($query[0] ? : '')
				.' ORDER BY `created` DESC', ($query[1] ? : []));
				if($translates) $this->view->assign('translates',
				translate($translates));
			}
			
			//----- View
			$this->view->assign('count', R::count(TABLE_TRANSLATES));
			$this->render(path(TABLE_TRANSLATES, 'index'));
		}
		
		//====================================================================================================
		function unused()
		{
			foreach(['application', 'controllers', 'models', 'views'] as $dir)
			$files = array_merge($files ?? [], getFiles(path(PATH_SYSTEM, $dir)));
			$keys = $unused = R::getCol('SELECT `key` FROM `'.TABLE_TRANSLATES.'`');

			foreach($files as $file)
			{
				if(strpos($file, $this->base->get('TEMP')) === false)
				{
					foreach($keys as $key)
					{
						$find = strpos(file_get_contents($file), "$key");
						if($find && in_array($key, $unused)) unset($unused[array_search($key, $unused)]);
					}
					
					preg_match_all('/(?<=\$t\[\')(.*?)(?=\'\])/', file_get_contents($file), $match[1]);
					preg_match_all('/(?<=translates\[\')(.*?)(?=\'\])/', file_get_contents($file), $match[2]);
					preg_match_all('/(?<=\->log\(\')([A-Z_]+)/', file_get_contents($file), $match[3]);
					foreach($match[3][0] as $key => $value) $match[3][0][$key] = current(explode("'", $value));
					$match = array_unique(array_merge(current($match[1]), current($match[2]), current($match[3])));
					$match = array_filter($match, function($word) use ($keys) { if(!in_array($word, $keys)) return $word; });
					if($match) pre(array_values($match), $file);
				}
			}
			
			array_diff($unised, ['LOGIN', 'PAYMENT_BLINK', 'PAYMENT_CARD', 'PAYMENT_ONLINE', 'RELATIONS', 'SETTINGS', 'TO_PAY', 'UNREADED']);
			if($unused) pre($unused, 'Not used translates');
			$query = 'DELETE FROM `translates` WHERE `key` = '.
			implode(' OR `key` = ', array_map(function($a) 
			{ return "'$a'"; }, $unused));
			if($unused) pre($query);
		}
		
		//====================================================================================================
		function export()
		{
			//----- Check permissions
			$this->permissions(TABLE_TRANSLATES);
			
			$data = [['KEY']];
			foreach($this->base->languages as $language) $data[0][] = strtoupper($language);
			foreach(R::find(TABLE_TRANSLATES) as $translate) { $new = [$translate->key];
			foreach($this->base->languages as $language) $new[] = $translate->translation[$language]; $data[] = $new; }
			SimpleXLSXGen::fromArray($data)->setDefaultFont('Consolas')->setDefaultFontSize(10)->downloadAs('translates.xlsx');
		}
		
		//====================================================================================================
		function import()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_TRANSLATES, 'edit'));
			
			if($this->base->get('VERB') != 'POST' || !csrf()) $this->base->error(405);
			else
			{
				Web::instance()->receive(function($file, $field)
				{
					if($xlsx = SimpleXLSX::parse($file['tmp_name']))
					{
						foreach(array_slice($xlsx->rows(), 1) as $key => $row)
						{
							$bean = R::findOne(TABLE_TRANSLATES, '`key` = ?', [$row[0]]);
							if($bean)
							{
								foreach(array_values($this->base->languages) as $index => $language)
								$bean->translation[$language] = $row[$index+1]; R::store($bean);
							}
						}
					}
					return false;
				});
				
				$this->notifies[] = ['success', $this->translates['IMPORTED'], $this->translates['TRANSLATES']];
				$this->base->reroute(path('admin', TABLE_TRANSLATES));
			}
		}
		
		//====================================================================================================
		function add()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_TRANSLATES, __FUNCTION__));
			
			if($this->base->get('VERB') == 'POST' && csrf())
			{
				//----- Create record
				if(!R::count(TABLE_TRANSLATES, '`key` = ?', [$this->base->get('POST.key')]))
				{
					$id = R::store(R::dispense(TABLE_TRANSLATES));
					$translate = R::load(TABLE_TRANSLATES, $id);
					
					//----- Set values
					foreach($this->base->get('POST') as $key => $value) $translate->$key = $value;
					$translate->key = mb_strtoupper($this->base->clean($translate->key));
					
					//----- Store record
					R::store($translate); translate($translate);
					$this->admin->log('LOG_TRANSLATION_CREATE', 'success', 'plus', [$translate->key]);
					$this->notifies[] = ['success', $this->translates['CREATED'], $translate->key];
					$this->base->reroute(path('admin', TABLE_TRANSLATES));
				}
				else
				{
					$this->notifies[] = ['error', $this->translates['ERROR_KEY_EXISTS'], $this->base->get('POST.key')];
					$this->base->reroute(path('admin', TABLE_TRANSLATES));
				}
			}
			else
			{
				//----- View
				$this->render(path(TABLE_TRANSLATES, 'form'));
			}
		}
		
		//====================================================================================================
		function edit()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_TRANSLATES, __FUNCTION__));
			
			//----- Get record
			$id = $this->base->get('PARAMS.id');
			$translate = R::load(TABLE_TRANSLATES, $id);
			if(!$translate->id) $this->base->error(404);
			
			if($this->base->get('VERB') == 'POST' && csrf())
			{
				//----- Set values
				foreach($this->base->get('POST') as $key => $value) $translate->$key = $value;
				$translate->key = mb_strtoupper($this->base->clean($translate->key));
				
				//----- Store record
				R::store($translate); translate($translate);
				$this->admin->log('LOG_TRANSLATION_EDIT', 'primary', 'pencil', [$translate->key]);
				$this->notifies[] = ['success', $this->translates['SAVED'], $translate->key];
				$this->base->reroute($this->base->get('SERVER.REQUEST_URI'));
			}
			else
			{
				//----- View
				$this->render(path(TABLE_TRANSLATES, 'form'), compact('translate'));
			}
		}
		
		//====================================================================================================
		function remove()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_TRANSLATES, __FUNCTION__));
			
			//----- Get record
			$id = $this->base->get('PARAMS.id');
			$translate = R::load(TABLE_TRANSLATES, $id);
			if($translate->id) R::trash($translate);
			else $this->base->error(404);
			
			translate($translate);
			$this->admin->log('LOG_TRANSLATION_REMOVE', 'danger', 'times', [$translate->key]);
			$this->notifies[] = ['success', $this->translates['REMOVED'], $translate->key];
			$this->base->reroute($this->base->get('SERVER.HTTP_REFERER'));
		}
	}
?>