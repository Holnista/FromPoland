<?php
	use \RedBeanPHP\R as R;
	class Contact extends Controller
	{
		//====================================================================================================
		function index()
		{
			//----- Send message
			if($this->base->get('VERB') == 'POST' && csrf())
			{
				//----- Check captcha
				if($this->base->get('POST.key') != md5($this->base->get('POST.captcha')))
				exit(json(['status' => 'error', 'title' => $this->translates['ERROR'], 
				'text' => $this->translates['ERROR_CAPTCHA']]));
				else
				{
					//----- Prepare values
					$this->base->set('POST.name', trim(mb_convert_case($this->base->get('POST.name'), MB_CASE_TITLE, $this->base->ENCODING)));
					$this->base->set('POST.email', trim(mb_convert_case($this->base->get('POST.email'), MB_CASE_LOWER, $this->base->ENCODING)));
				
					//----- Prepare title
					if($this->base->get('POST.email'))
					$title = sprintf('%s - %s (%s)', $this->translates['CONTACT_FORM'], 
					$this->base->get('POST.subject'), $this->base->get('POST.name')); 
					else $title = $this->translates['EVENT_IDEA'];
					
					//----- Send email
					email(['kontakt@hellostranger.io', $this->base->NAME], $title, $this->fetch(path('mail', 'contact'), 
					['title' => $title, 'data' => $this->base->get('POST')]), [$this->base->get('POST.email'), 
					$this->base->get('POST.name')]);
					
					exit(json(['status' => 'success', 
					'title' => $this->translates['MESSAGE_SENT'],
					'text' => $this->translates['MESSAGE_SENT_TEXT']]));
				}
			}
			else
			{
				//----- Set meta
				$this->base->meta['title'] = $this->translates['CONTACT'];
				$this->base->share['title'] = implode(' - ', [$this->base->NAME, $this->base->meta['title']]);
			
				//----- View
				$this->render(path('contact', 'index'));
			}
		}
		
		//====================================================================================================
		function newsletter()
		{
			//----- Get mailchimp
			$email = $this->base->get('POST.email');
			$mailchimp = new \MailchimpMarketing\ApiClient(); $id = 'af14248d74';
			$mailchimp->setConfig(['apiKey' => '1daa70ff19a07176ebcd3c7c69857237-us5', 'server' => 'us5']);
			try
			{
				//----- Ping
				$response = $mailchimp->ping->get();
				
				//----- Add to list
				$response = $mailchimp->lists->setListMember($id, md5($email),
				['email_address' => $email, 'status' => 'subscribed',
				'status_if_new' => 'subscribed']);
				
				//----- View
				if(!$this->base->exists('GET.return'))
				exit($this->render(path('home', 'flash'), 
				['title' => $this->translates['THANK_YOU'],
				'text' => $this->translates['NEWSLETTER_SUBSCRIBED']]));
			}
			catch (Exception $e)
			{
				//----- View
				if(!$this->base->exists('GET.return'))
				exit($this->render(path('home', 'flash'), 
				['title' => $this->translates['ERROR'],
				'text' => $e->getMessage()]));
			}
		}
	}
?>