<?php
	use \RedBeanPHP\R as R;
	class Logs extends Admin
	{
		//====================================================================================================
		function index()
		{
			//----- Check permissions
			$this->permissions(TABLE_LOGS);
			
			//----- Get table
			$table = $this->base->get('PARAMS.table') ?? null;
			if(!in_array($table, [TABLE_ADMINS, TABLE_CLIENTS])) unset($table);

			//----- Check count
			if(R::count(TABLE_LOGS, ($table ? '`table` = ?' : ''), [$table]))
			{
				//----- Prepare query
				$query = [($table ? '`table` = ?' : ''), ($table ? [$table] : [])];
				if($this->base->get('GET.word'))
				{
					$word = mb_strtolower($this->base->clean($this->base->get('GET.word')));
					$query = ['LOWER(CONCAT(`log`)) LIKE ?', [like($word)]];
				}
				
				//----- Get records
				$logs = R::find(TABLE_LOGS, ($query[0] ? : '')
				.' ORDER BY `created` DESC', ($query[1] ? : []));
				if($logs)
				{
					//----- Paginate records
					$pager = ['limit' => 20, 'links' => 1, 'page' => $this->base->get('GET.page') ?? 1, 'total' => count($logs)];
					$pager['pages'] = ceil($pager['total']/$pager['limit']); if($pager['total'] && $pager['page'] > $pager['pages']) 
					$this->base->reroute(path('admin', TABLE_LOGS)); $logs = array_chunk($logs, $pager['limit']);
					$logs = $logs[$pager['page']-1]; $this->view->assign('pager', $pager);
					foreach($logs as $log) $log->get();
					$this->view->assign('logs', translate($logs));
				}
			}
			
			//----- View
			$this->view->assign('count', R::count(TABLE_LOGS, ($table ? '`table` = ?' : ''), [$table]));
			$this->render(path(TABLE_LOGS, 'index'));
		}
		
		//====================================================================================================
		function remove()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_LOGS, __FUNCTION__));
			
			//----- Remove record
			$id = $this->base->get('PARAMS.id');
			$log = R::load(TABLE_LOGS, $id);
			if($log->id) R::trash($log);
			else $this->base->error(404);
			
			translate($log);
			$this->notifies[] = ['success', $this->translates['REMOVED'], $log->title];
			$this->base->reroute($this->base->get('SERVER.HTTP_REFERER'));
		}
	}
?>