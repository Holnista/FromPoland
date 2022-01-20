<?php
	use \RedBeanPHP\R as R;
	class Task extends Controller
	{
		//====================================================================================================
		function email()
		{
			foreach(R::find(TABLE_NEWSLETTERS, '`sent` IS NULL AND `schedule` <= NOW() LIMIT 3') as $newsletter)
			{
				translate($newsletter, 'pl');
				$body = $this->fetch(path('mail', 'newsletter'), compact('newsletter'));
				$newsletter->email = email($newsletter->recipient, $newsletter->subject, $body);
				$newsletter->sent = date('Y-m-d H:i:s'); R::store($newsletter);
			}
		}
		
		//====================================================================================================
		function pixel()
		{
			$key = substr($this->base->get('PARAMS.key'), 0, 32);
			$email = R::findOne(TABLE_EMAILS, 'MD5(CONCAT(?, `id`)) = ?', [TABLE_EMAILS, $key]);
			if(strlen($key) != 32 || !$email) $this->base->status(404);
			else
			{
				$web = Web::instance();
				$web->send(path(PATH_IMAGES, 'template', 'email.jpg'), null, null, false);
				R::exec(sprintf('UPDATE `%s` SET `readed` = NOW() WHERE `id` = %d', TABLE_EMAILS, $email->id));
			}
		}
		
		//====================================================================================================
		function coupon()
		{
			//----- Get coupon
			$code = substr($this->base->get('POST.code'), 0, 16);
			$coupon = R::findOne(TABLE_COUPONS, '`active` = ? AND `code` = ?', [true, $code]);
			
			//----- Check if coupon exists
			if(!$coupon) $return = ['status' => 'error', 'title' => $this->translates['ERROR'], 'text' => $this->translates['ERROR_COUPON_NOT_EXISTS']];
			
			//----- Check if coupon limit reached
			if($coupon->others['limit'] > 0 && $coupon->others['usage'] >= $coupon->others['limit'])
			$return = ['status' => 'error', 'title' => $this->translates['ERROR'], 'text' => $this->translates['ERROR_COUPON_USED']];
			
			//----- Check if coupon expired
			if($coupon->others['expire'] && strtotime($coupon->others['expire']) <= time())
			$return = ['status' => 'error', 'title' => $this->translates['ERROR'], 'text' => $this->translates['ERROR_COUPON_EXPIRED']];
		
			//----- All valid
			if(!$return)
			{
				//$this->base->set('SESSION.coupon', $code);
				$string = ($coupon->discount['mode'] == 'PERCENT' ? $coupon->discount['value'].'%' : price($coupon->discount['value']));
				$return = ['status' => 'success', 'title' => $this->translates['COUPON'], 'text' => sprintf($this->translates['COUPON_VALID'], $string)];
				
				//----- Get price
				if($this->base->get('POST.event'))
				{
					$event = R::load(TABLE_EVENTS, $this->base->get('POST.event'));
					if($event->id && $event->active && array_sum($event->others['price']))
					{
						$price = ($event->others['price']['promotion'] ? : $event->others['price']['basic']);
						$price = ($coupon->discount['mode'] == 'PERCENT' ? $price-(($coupon->discount['value']/100)*$price)
						: $price-$coupon->discount['value']); $return['price'] = price($price);
					}
				}
			}
			
			//----- Return
			if($this->base->exists('GET.return'))
			return json($return); else 
			exit(json($return));
		}
	}
?>