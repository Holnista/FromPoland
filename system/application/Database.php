<?php
	use \RedBeanPHP\R as R;
	class Database extends Prefab
	{
		//====================================================================================================
		function connect(array $db = [])
		{
			try
			{
				//----- Define prefix
				define('REDBEAN_MODEL_PREFIX', '\\Model\\');
				
				//----- Load models
				foreach(scandir(PATH_MODELS) as $model) 
				if(is_file(path(PATH_MODELS, $model))) 
				require_once(path(PATH_MODELS, $model));
				
				//----- Setup connection
				R::setup('mysql:host='.$db['host'].';dbname='.$db['database'], $db['login'], $db['password']);
				
				//----- Prevent alter table
				R::exec('SET SQL_MODE = ""');

				//----- Set debug
				R::debug(false);
				R::freeze(true);
				
				//----- Define tables
				foreach(R::inspect() as $key) if(!defined('TABLE_'.strtoupper($table)))
				define('TABLE_'.strtoupper($key), Base::instance()->get('tables.'.$key) ?? $key);
			}
			catch(Exception $error)
			{
				Base::instance()->error(500, $error->getMessage());
			}
		}
	}
?>