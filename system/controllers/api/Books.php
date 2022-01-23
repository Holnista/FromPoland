<?php
	use \RedBeanPHP\R as R;
	class Books extends API
	{
		//====================================================================================================
		function index()
		{
			//----- Check request
			$request = $this->auth()->validate(['title' => false, 
			'author' => false, 'genre' => false, 'pager' => false]);

			//----- Prepare data
			if($request->genre) $genre = mb_strtolower(trim(substr($request->genre, 0, 16)));
			if($request->title) $title = mb_strtolower(trim(substr($request->title, 0, 128)));
			if($request->author) $author = mb_strtolower(trim(substr($request->author, 0, 64)));
			
			//----- Build query
			if($title) $query['title'] = sprintf("LOWER(`title`) LIKE '%s'", like($title));
			if($genre) $query['genre'] = sprintf("LOWER(`genre`) LIKE '%s'", like($genre));
			if($author)
			{
				$author = R::getCell(sprintf("SELECT `id` FROM `%s` WHERE LOWER(`name`) LIKE '%s'", TABLE_AUTHORS, like($author)));
				$query['author'] = sprintf('`author` = %d', $author ?? 0);
			}
			
			//----- Get records
			$records = R::find(TABLE_BOOKS, implode(' AND ', $query).' ORDER BY `id` DESC');
			
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
			$record = R::load(TABLE_BOOKS, $request->id);
			exit(json($record->id ? $record : null));
		}
	}
?>