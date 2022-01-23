<?php
	use \RedBeanPHP\R as R;
	class Reservations extends API
	{
		//====================================================================================================
		function index()
		{
			//----- Check request
			$request = $this->auth()->validate(['pager' => false]);

			//----- Get records
			$records = R::find(TABLE_RESERVATIONS, 'ORDER BY `id` DESC');
			
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
			$record = R::load(TABLE_RESERVATIONS, $request->id);
			exit(json($record->id ? $record : null));
		}
		
		//====================================================================================================
		function create()
		{
			//----- Check request
			$request = $this->auth()->validate(['book' => true]);
			
			//----- Prepare data
			$book = R::load(TABLE_BOOKS, $request->book);
			if(!$book->id) $this->base->error(404, 'Book not exists');
			else $book = $book->id; $user = $this->user->id;
			$valid = date('Y-m-d', strtotime('+3 days'));
			
			//----- Check reservation
			if(R::count(TABLE_RESERVATIONS, '`book` = ?', [$book]))
			$this->base->error(406, 'Book already reserved');
			
			//----- Create record
			$record = R::dispense(TABLE_RESERVATIONS)
			->import(compact('user', 'book', 'valid'));
			R::store($record); 
			
			//----- Reload record
			$record = R::load(TABLE_RESERVATIONS, $record->id);
			exit(json($record));
		}
		
		//====================================================================================================
		function remove()
		{
			//----- Check request
			$request = $this->auth()->validate(['book' => false, 'reservation' => false]);
			if(!$request->book && !$request->reservation) $this->base->error(400, 'Book ID or reservation ID required');
			
			//----- Build query
			$query['user'] = sprintf('`user` = %d', $this->user->id);
			if($request->book || $request->reservation) $query['book'] 
			= sprintf('(`book` = %d OR `id` = %d)', $request->book, 
			$request->reservation);
			
			//----- Get records
			$records = R::find(TABLE_RESERVATIONS, implode(' AND ', $query).' ORDER BY `id` DESC');
			if($records) R::trashAll($records); else $records = null; exit(json($records));
		}
	}
?>