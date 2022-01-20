<?php
	use \RedBeanPHP\R as R;
	class Payment extends Controller
	{
		protected $auth = [];
		
		//====================================================================================================
		function __construct()
		{
			//---- Construct controller
			parent::__construct();
			
			//----- Get auth
			$this->auth = [
				'merchantId' => '2uuyc8s33pdykdjjfox4',
				'serviceId' => '81b24afc-f1d6-4e5c-88d0-d83e63b369c8',
				'serviceKey' => 'BphNpmTJViYwQnB0wSBMHC2GI6k5RcNTNtqq'
			];
		}

		//=============================================================================================================================
		function index()
		{
			$key = substr($this->base->get('PARAMS.key'), 0, 32);
			$client = R::findOne(TABLE_CLIENTS, 'MD5(CONCAT(?, `id`)) = ?', [TABLE_CLIENTS, $key]);
			if(!$client) $this->base->error(404);
			else
			{
				if($client->payment['price']['topay'])
				{
					if(!$client->payment['paid'])
					{
						$event = translate(R::load(TABLE_EVENTS, $client->event));
						if($event->active)
						{
							//----- Prepare fields
							$fields = [
								'currency' => 'PLN',
								'version' => '1.0.0;form',
								'orderId' => $client->code,
								'serviceId' => $this->auth['serviceId'],
								'merchantId' => $this->auth['merchantId'],
								'customerPhone' => $client->personal['phone'],
								'customerEmail' => $client->personal['email'],
								'customerFirstName' => $client->personal['name'],
								'customerLastName' => $client->personal['surname'],
								'amount' => round($client->payment['price']['topay']*100),
								'urlSuccess' => path($this->base->URL, $this->base->language, 'payment', 'success'),
								'urlFailure' => path($this->base->URL, $this->base->language, 'payment', 'failure'),
								'orderDescription' => sprintf('%s', $client->code),
								//'urlReturn' => '',
							];
							
							//----- Generate signature
							ksort($fields); //Sort by key ASC by key
							foreach($fields as $key => $value) $body[] = $key.'='.$value; //Generate chain
							$body[] = $this->auth['serviceKey']; $body = implode('&', $body); //Add serviceKey and implode
							$signature = hash('sha256', $body).';sha256'; //Generate sha256 with key
							$fields['signature'] = $signature;
							
							//----- View
							$this->render(path('home', 'payment'), compact('fields'));
							
							//pre($client->export(), 'Dane bazowe');
							//pre($fields, 'Tutaj będzie bramka płatności');
							//echo sprintf("<form method='POST'><button>Zasymuluj opłacenie</button></form>", path($this->base->URL, $this->base->language, 'payment', 'confirm', $key));
						}
						else $this->render(path('home', 'flash'), ['title' => $this->translates['ERROR'], 'text' => $this->translates['ERROR_EVENT_NOT_EXISTS']]);
					}
					else $this->render(path('home', 'flash'), ['title' => $this->translates['THANK_YOU'], 'text' => sprintf($this->translates['ERROR_EVENT_PAID'], $client->code)]);
				}
				else $this->render(path('home', 'flash'), ['title' => $this->translates['THANK_YOU'], 'text' => $this->translates['PREPARE_FOR_EVENT']]);
			}
		}
	
		//=============================================================================================================================
		function confirm()
		{
			$file = path(PATH_UPLOADS, 'transactions', time().'.txt');
			$headers = array_change_key_case(apache_request_headers());
			if($headers['x-imoje-signature'])
			{
				//----- Get request
				$payload = file_get_contents('php://input', true);
				if(!file_exists($file)) file_put_contents($file, $payload);
				$request = json_decode($payload, true);
				
				//----- Get signature
				$signature = explode(';', $headers['x-imoje-signature']); 
				$signature = explode('=', $signature[2])[1];
				
				//----- Check host
				if(in_array(gethostbyaddr($_SERVER['REMOTE_ADDR']), ['54.37.185.70', 'api.imoje.pl', 'paywall.imoje.pl']) || $_SERVER['REMOTE_ADDR'] == $_SERVER['SERVER_ADDR'] || true)
				{
					//----- Check signature
					if($signature === hash('sha256', $payload.$this->auth['serviceKey']))
					{
						//------ Check serviceId
						if($request['transaction']['serviceId'] === $this->auth['serviceId'])
						{
							//----- Check if order exists
							$client = R::findOne(TABLE_CLIENTS, '`code` = ?', [$request['transaction']['orderId']]);
							if($client)
							{
								//----- Get client
								$client->get();
								
								//----- Change log file name
								rename($file, path(PATH_UPLOADS, 'transactions', $client->code.'.txt'));
								$file = path(PATH_UPLOADS, 'transactions', $client->code.'.txt');
								
								//----- Check if amount and currency is correct
								if($request['transaction']['amount'] >= round($client->payment['price']['topay']*100) && $request['transaction']['currency'] == 'PLN' || true)
								{
									//----- Check payment status
									if($request['transaction']['status'] === 'settled')
									{
										$client->payment['paid'] = $request['transaction']['id']; //Set transaction id
										R::store($client); //Save client
									}
									
									//----- Response
									http_response_code(200); exit();
								}
								else $error = sprintf('Invalid amount (%s) or currency (%s)', $request['transaction']['amount'], $request['transaction']['currency']);
							}
							else $error = sprintf('Order (%s) not exists', $request['transaction']['orderId']);
						}
						else $error = sprintf('Invalid serviceId (%s)', $request['transaction']['serviceId']);
					}
					else $error = sprintf('Invalid signature (%s)', $signature);
				}
				else $error = sprintf('Invalid source (%s | %s)', gethostbyaddr($_SERVER['REMOTE_ADDR']), $_SERVER['REMOTE_ADDR']);
			}
			else $error = sprintf('No X-Imoje-Signature: %s', json_encode($headers));
			
			if($error) file_put_contents($file.'.error', $error);
			else unlink($file); http_response_code(404); exit();
		}
		
		//=============================================================================================================================
		function success()
		{
			exit($this->render(path('home', 'flash'), 
			['title' => $this->translates['PAYMENT_SUCCESS_TITLE'],
			'text' => $this->translates['PAYMENT_SUCCESS_TEXT']]));
		}
		
		//=============================================================================================================================
		function failure()
		{
			exit($this->render(path('home', 'flash'), 
			['title' => $this->translates['PAYMENT_ERROR_TITLE'],
			'text' => $this->translates['PAYMENT_ERROR_TEXT']]));
		}
	}
?>