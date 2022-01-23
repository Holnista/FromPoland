<?php
	class System extends Prefab
	{
		protected $base;
		protected $data;

		//====================================================================================================
		function __construct()
		{
			$this->base = Base::instance();
			$this->data = Database::instance();
			$this->base->set('ONERROR', 'Home->error');
		}
		
		//====================================================================================================
		function run()
		{
			//----- Set paths
			$this->base->set('path.system', 'system'); $this->base->set('path.public', 'public');
			$this->base->set('path.models', path($this->base->get('path.system'), 'models'));
			
			//----- Define paths
			foreach(array_keys($this->base->get('path')) as $key) define('PATH_'.strtoupper($key), $this->base->get('path.'.$key));
			
			//----- Load configs
			foreach(['config', 'routes'] as $file) $this->base->config(path(PATH_SYSTEM, 'application', 'config', $file.'.cfg'));

			//----- Select surface
			$surface = current(explode('/', trim($this->base->get('PATH'), $this->base->fixslashes('/'))));
			$surface = (in_array($surface, ['admin', 'api']) ? str_replace('admin', 'back', $surface) : 'api');
			$this->base->mset(['AUTOLOAD' => sprintf('%s;%s/', $this->base->get('AUTOLOAD'), path($this->base->get('path.system'), 
			'controllers', $surface)), 'SURFACE' => $surface, 'URL' => $this->base->get('SCHEME').'://'.$this->base->get('HOST')]);
			define('PATH_BASE', $this->base->get('URL'));
			
			//----- Run
			$this->base->run();
		}
	}
?>