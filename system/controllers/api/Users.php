<?php
	use \RedBeanPHP\R as R;
	class Users extends API
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
			$records = R::find(TABLE_USERS, implode(' AND ', $query).' ORDER BY `id` DESC');
			foreach($records as $record) unset($record->key);
			
			//----- Paginate records
			$pager = ['limit' => $request->pager['limit'] ?? 10, 'page' => $request->pager['page'] ?? 1, 'total' => count($records)];
			$pager['pages'] = ceil($pager['total']/$pager['limit']); $records = array_chunk($records, $pager['limit']);
			$records = $records[$pager['page']-1]; exit(json(compact('pager', 'records')));
		}
		
		//====================================================================================================
		function create()
		{
			//----- Check request
			$request = $this->validate(['name' => true]);

			//----- Prepare data
			$name = trim(substr($request->name, 0, 64));
			$key = md5(randomString(32));
			
			//----- Create record
			$record = R::dispense(TABLE_USERS)->import(compact('name', 'key'));
			R::store($record); exit(json($this->encode($record->export())));
		}
	}
?>