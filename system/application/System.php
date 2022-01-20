<?php
	class System extends Prefab
	{
		protected $base;
		protected $view;
		protected $data;

		//====================================================================================================
		function __construct()
		{
			$this->base = Base::instance();
			$this->view = Template::instance();
			$this->data = Database::instance();
			//$this->base->set('ONERROR', 'Home->error'); //This cause double login error
		}
		
		//====================================================================================================
		function run()
		{
			//----- Set paths
			$this->base->set('path.system', 'system'); $this->base->set('path.public', 'public');
			$this->base->set('path.scripts', path($this->base->get('path.public'), 'scripts'));
			$this->base->set('path.uploads', path($this->base->get('path.public'), 'uploads'));
			$this->base->set('path.styles', path($this->base->get('path.public'), 'styles'));
			$this->base->set('path.images', path($this->base->get('path.public'), 'images'));
			$this->base->set('path.models', path($this->base->get('path.system'), 'models'));
			
			//----- Define paths
			foreach(array_keys($this->base->get('path')) as $key) define('PATH_'.strtoupper($key), $this->base->get('path.'.$key));
			
			//----- Load configs
			foreach(['config', 'routes', 'cron'] as $file) $this->base->config(path(PATH_SYSTEM, 'application', 'config', $file.'.cfg'));

			//----- Run multilang plugin
			Multilang::instance();
			
			//----- Run cron plugin
			Cron::instance();

			//----- Select surface
			$surface = explode('/', trim($this->base->get('PATH'), $this->base->fixslashes('/')));
			foreach($surface as $key => $element) if(in_array($element, explode(',', $this->base->get('LANGUAGE')))) unset($surface[$key]);
			$surface = reset($surface); $surface = (in_array($surface, ['admin']) ? str_replace('admin', 'back', $surface) : 'front');
			$this->base->mset(['AUTOLOAD' => sprintf('%s;%s/', $this->base->get('AUTOLOAD'), path($this->base->get('path.system'), 
			'controllers', $surface)), 'SURFACE' => $surface, 'languages' => Multilang::instance()->languages(), 'language'
			=> Multilang::instance()->current, 'URL' => $this->base->get('SCHEME').'://'.$this->base->get('HOST')]);
			define('PATH_BASE', $this->base->get('URL'));
			
			//----- Force PL
			if(!in_array($this->base->get('language'), ['pl'])) 
			$this->base->reroute('/pl');

			//----- Run
			$this->base->run();
		}
	}
?>