<?php
	use \RedBeanPHP\R as R;
	class Authors extends API
	{
		//====================================================================================================
		function index()
		{
			//----- Check request
			$request = $this->auth()->validate(['name' => false, 'pager' => false]);

			//----- Prepare data
			if($request->name) $name = mb_strtolower(trim(substr($request->name, 0, 64)));
			
			//----- Build query
			if($name) $query['name'] = sprintf("LOWER(`name`) LIKE '%s'", like($name));

			//----- Get records
			$records = R::find(TABLE_AUTHORS, implode(' AND ', $query).' ORDER BY `birth` DESC');
			
			//----- Paginate records
			$pager = ['limit' => $request->pager['limit'] ?? 10, 'page' => $request->pager['page'] ?? 1, 'total' => count($records)];
			$pager['pages'] = ceil($pager['total']/$pager['limit']); $records = array_chunk($records, $pager['limit']);
			$records = $records[$pager['page']-1]; exit(json(compact('pager', 'records')));
		}
		
		//====================================================================================================
		function get()
		{
			//----- Check request
			$request = $this->auth()->validate(['id' => true]);
			
			//----- Get record
			$record = R::load(TABLE_AUTHORS, $request->id);
			exit(json($record->id ? $record : null));
		}
	}
?>