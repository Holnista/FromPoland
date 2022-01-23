<?php
	use \Firebase\JWT\JWT;
	use \RedBeanPHP\R as R;
	class API extends System
	{
		//---- JWT key
		protected $key;
		protected $user;
		
		//====================================================================================================
		function __construct()
		{
			//----- Parent construct
			parent::__construct();
			
			//----- Set CORS
			header('Access-Control-Allow-Origin: *');
			header('Access-Control-Allow-Methods: OPTIONS, GET, POST');
			header('Access-Control-Allow-Headers: authorization, content-type, origin, x-requested-with');
			header('Content-Type: application/json; charset='.$this->base->get('ENCODING'));
			if(in_array($this->base->get('VERB'), ['OPTIONS'])) exit;
			
			//----- Error handler
			$this->base->set('ONERROR', function($base)
			{
				while(ob_get_level()) ob_end_clean(); $error = $this->base->get('ERROR');
				exit(json(['code' => $error['code'], 'status' => $error['status'], 'text' => $error['text']]));
			});

			//----- Error reporting
			ini_set('display_errors', $this->base->get('DEBUG'));
			ini_set('display_startup_errors', $this->base->get('DEBUG'));
			error_reporting(E_ALL ^ E_STRICT ^ E_NOTICE ^ E_WARNING ^ E_DEPRECATED);

			//----- Connect database
			$this->data->connect($this->base->get('database'));
			
			//----- Create key
			$this->key = md5(base64_encode(path($this->base->get('NAME'), 'HOLNISTA')));
		}
		
		//====================================================================================================
		function auth()
		{
			try
			{
				//----- Get headers
				$headers = $this->base->get('HEADERS'); 
				if(!strlen($headers['Authorization'])) 
				$this->base->error(400, 'Token not provided');
				else
				{
					//----- Get token
					$token = $this->decode($headers['Authorization']);
					
					//----- Get key
					$user = R::findOne(TABLE_USERS, '`key` = ?', [$token->key]);
					if(!$user || !$user->active) $this->base->error(401, 'Authorization error');
					else { $this->user = $user; return $this; }
				}
			}
			catch(Exception $error)
			{
				$this->base->error(500, $error->getMessage());
			}
		}
		
		//=============================================================================================================================
		function validate(array $allowed = [])
		{
			$params = ($this->base->get('PARAMS') ? : []); unset($params[0]);
			$allowed = array_merge($allowed, ['method' => false, '_ga' => false, '_gid' => false]);
			$payload = array_merge((json_decode($this->base->get('BODY'), true) ? : []), $this->base->get('REQUEST'), $params);
			foreach(array_keys($payload) as $key) if(!in_array($key, array_keys($allowed))) $this->base->error(400, sprintf('Not allowed (%s) parameter in [%s]', $key, $this->base->get('VERB')));
			foreach(array_keys($allowed) as $key) if($allowed[$key] && !isset($payload[$key])) $this->base->error(400, sprintf('Required (%s) parameter in [%s]', $key, $this->base->get('VERB')));
			return (object) $payload;
		}
		
		//=============================================================================================================================
		function encode($data = null)
		{
			try { return JWT::encode($data, $this->key); }
			catch(Exception $error) { $this->base->error(400, $error->getMessage()); }
		}
		
		//=============================================================================================================================
		function decode($token = null)
		{
			try { return JWT::decode($token, $this->key, ['HS256']); }
			catch(Exception $error) { $this->base->error(400, $error->getMessage()); }
		}
	}
?>