<?php
	use \RedBeanPHP\R as R;
	class Event extends Controller
	{
		//====================================================================================================
		function search()
		{
			//----- Get events
			foreach(translate(R::find(TABLE_EVENTS, '`active` = ?', [true])) as $event)
			{
				if(strtotime($event->date['day']) >= time())
				{
					$tags = array_merge(($tags ? : []), $event->tags);
					$groups = array_merge(($groups ? : []), [$event->group]);
					$locations = array_merge(($locations ? : []), [$event->location]);
					$events[] = $event;
				}
			}
			
			//----- Setup filters
			$tags = array_unique(array_filter($tags));
			$groups = array_unique(array_filter($groups));
			$locations = array_unique(array_filter($locations));
			uasort($tags, function($a, $b) { return strlen($a) - strlen($b); });
			uasort($groups, function($a, $b) { return strval($a) - strval($b); });
			uasort($locations, function($a, $b) { return strcmp($a, $b); });
			uasort($events, function($a, $b) { return strtotime($a->date['day'])
			- strtotime($b->date['day']); });
			
			//----- Paginate records
			/*$pager = ['limit' => 9, 'links' => 3, 'page' => $this->base->get('GET.page') ?? 1, 'total' => count($events)];
			$pager['pages'] = ceil($pager['total']/$pager['limit']); if($pager['total'] && $pager['page'] > $pager['pages']) 
			$this->base->reroute(replaceUrl(['page' => 1])); $events = array_chunk($events, $pager['limit']);
			$events = $events[$pager['page']-1];*/
			
			//----- Assign events
			foreach($events as $event) 
			$event->get('image', 'count');
			
			//----- Set meta
			$this->base->meta['title'] = $this->translates['EVENTS'];
			$this->base->share['title'] = implode(' - ', [$this->base->NAME, $this->base->meta['title']]);
			
			//----- View
			$this->render(path('event', 'search'), compact('pager', 'events', 'tags', 'locations', 'groups'));
		}
		
		//====================================================================================================
		function read()
		{
			$alias = $this->base->get('PARAMS.alias');
			$event = R::findOne(TABLE_EVENTS, '`active` = ? AND `alias` LIKE ?', [true, like($alias, true)]);
			if(!$event) $this->base->error(404);
			else
			{
				//----- Get event
				translate($event->get());
				
				//----- Get events
				$events = translate(R::find(TABLE_EVENTS, '`active` = ? AND `id` != ?', [true, $event->id]));
				uasort($events, function($a, $b) { return strtotime($a->date['day']) - strtotime($b->date['day']); });
				$events = array_slice($events, 0, 9);
				
				//----- Assign events
				foreach($events as $index => $other) if(strtotime($other->date['day']) >= time())
				$other->get('image', 'count'); else unset($other, $events[$index]);

				//----- Set meta
				$this->base->meta = [
					'title' => ($event->meta['title'] ? : $event->title),
					'keys' => ($event->meta['keys'] ? : current($event->text)['content']),
					'desc' => ($event->meta['desc'] ? : current($event->text)['content'])
				];
				
				//----- Set share
				$this->base->share['desc'] = $this->base->meta['desc'];
				if($event->file) $this->base->share['image'] = $event->data['image'];
				$this->base->share['title'] = implode(' - ', [$this->base->NAME, $this->base->meta['title']]);
				
				//----- View
				$this->render(path('event', 'read'), compact('event', 'events'));
			}
		}
		
		//====================================================================================================
		function register()
		{
			$alias = $this->base->get('PARAMS.alias');
			$event = R::findOne(TABLE_EVENTS, '`active` = ? AND `alias` LIKE ?', [true, like($alias, true)]);
			if(!$event) $this->base->error(404);
			else
			{
				//----- Check captcha
				if($this->base->get('POST.key') != md5($this->base->get('POST.captcha')))
				exit(json(['status' => 'error', 'title' => $this->translates['ERROR'], 
				'text' => $this->translates['ERROR_CAPTCHA']]));
				else
				{
					//----- Prepare values
					$this->base->set('POST.name', trim(mb_convert_case($this->base->get('POST.name'), MB_CASE_TITLE, $this->base->ENCODING)));
					$this->base->set('POST.city', trim(mb_convert_case($this->base->get('POST.city'), MB_CASE_TITLE, $this->base->ENCODING)));
					$this->base->set('POST.email', trim(mb_convert_case($this->base->get('POST.email'), MB_CASE_LOWER, $this->base->ENCODING)));
					
					//----- Prevent multiple
					if(R::find(TABLE_CLIENTS, '`event` = ? AND `personal` LIKE ?', [$event->id, like($this->base->get('POST.email'), true)]))
					exit(json(['status' => 'error', 'title' => $this->translates['ERROR'], 'text' => $this->translates['ERROR_CLIENT_EXISTS']]));
					
					//----- Prepare bean
					$client = R::dispense(TABLE_CLIENTS)->import(['event' => $event->id]);
					foreach(['name', 'email', 'phone', 'city', 'sex', 'year'] as $key)
					$client->personal[$key] = $this->base->get('POST.'.$key);
					
					//----- Reformat name
					$name = explode(' ', $client->personal['name']);
					$client->personal['surname'] = $name[1];
					$client->personal['name'] = $name[0];
					
					//----- Generate  code
					while(!$client->code || R::count(TABLE_CLIENTS, '`code` = ?',
					[$client->code])) $client->code = '#'.strtoupper(randomString(8));
					
					//----- Set payment
					$client->payment['price'] = $event->others['price'];
					$client->payment['price']['topay'] = ($event->others['price']['promotion'] ? : $event->others['price']['basic']);
					if($this->base->get('POST.payment')) $client->payment['method'] = $this->base->get('POST.payment');
					if($this->base->get('POST.coupon'))
					{
						//----- Set coupon
						$code = substr($this->base->get('POST.coupon'), 0, 16);
						$result = $this->base->mock(sprintf('POST /%s/task/coupon?return [ajax]', $this->base->language), compact('code'));
						if(json_decode($result, true)['status'] == 'error') exit($result);
						else
						{
							$coupon = R::findOne(TABLE_COUPONS, '`active` = ? AND `code` = ?', [true, $code]);
							$client->payment['coupon'] = $coupon->code; $price = $client->payment['price']['topay'];
							$client->payment['price']['topay'] = ($coupon->discount['mode'] == 'PERCENT' ? $price
							-(($coupon->discount['value']/100)*$price) : $price-$coupon->discount['value']);
							$coupon->others['usage']++; R::store($coupon);
						}
					}
					
					//----- Format prices
					foreach(['basic', 'promotion', 'topay'] as $key) $client->payment['price'][$key]
					= ($client->payment['price'][$key] ? number_format(round($client->payment['price'][$key], 2), 2, '.', '') : null);
					//if(!$client->payment['price']['topay']) $client->payment['paid'] = 'N/D';
					
					//----- Store client
					$client = translate(R::load(TABLE_CLIENTS, R::store($client))->get());
					
					//----- Send email
					$title = sprintf('%s (%s)', $this->translates['MAIL_ORDER_TITLE'], $client->code);
					email([$client->personal['email'], $client->personal['name']], $title, 
					$this->fetch(path('mail', 'order'), compact('client', 'title')));
					
					//----- Newsletter
					if($this->base->get('POST.newsletter'))
					$this->base->mock(sprintf('POST /%s/newsletter?return [ajax]', 
					$this->base->language), ['email' => $client->personal['email']]);

					//----- Return
					echo json(['status' => 'success', 'title' => $this->translates['THANK_YOU'], 
					'text' => $this->translates['PREPARE_FOR_EVENT'], 'button' => [path($this->base->language,
					'page', 'mentoring'), $this->translates['KNOW_MORE']], 'redirect' => ($client->payment['price']['topay']
					? path($this->base->language, 'payment', $client->data['key']) : null), 'code' => $client->code]);
				}
			}
		}
	}
?>