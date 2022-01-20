<?php
	use \RedBeanPHP\R as R;
	class Emails extends Admin
	{
		//====================================================================================================
		function index()
		{
			//----- Check permissions
			$this->permissions(TABLE_EMAILS);
			
			//----- Check count
			if(R::count(TABLE_EMAILS))
			{
				//----- Prepare query
				if($this->base->get('GET.word'))
				{
					$word = mb_strtolower($this->base->clean($this->base->get('GET.word')));
					$query = ['LOWER(CONCAT(`subject`, `recipient`)) LIKE ?', [like($word)]];
				}
				
				//----- Get records
				$emails = R::find(TABLE_EMAILS, ($query[0] ? : '')
				.' ORDER BY `created` DESC', ($query[1] ? : []));
				if($emails) { foreach($emails as $email) $email->get();
				$this->view->assign('emails', translate($emails)); }
			}
			
			//----- View
			$this->view->assign('count', R::count(TABLE_EMAILS));
			$this->render(path(TABLE_EMAILS, 'index'));
		}
		
		//====================================================================================================
		function preview()
		{
			//----- Check permissions
			$this->permissions(TABLE_EMAILS);
			
			//----- Get record
			$id = $this->base->get('PARAMS.id');
			$email = R::load(TABLE_EMAILS, $id);
			if($email->id) $email->get();
			else $this->base->error(404);
			
			//----- View
			echo $email->body;
		}
		
		//====================================================================================================
		function remove()
		{
			//----- Check permissions
			$this->permissions(path(TABLE_EMAILS, __FUNCTION__));
			
			//----- Remove record
			$id = $this->base->get('PARAMS.id');
			$email = R::load(TABLE_EMAILS, $id);
			if($email->id) R::trash($email);
			else $this->base->error(404);
			
			translate($email);
			$this->admin->log('LOG_EMAIL_REMOVE', 'danger', 'times', [$email->id]);
			$this->notifies[] = ['success', $this->translates['REMOVED'], $email->id];
			$this->base->reroute($this->base->get('SERVER.HTTP_REFERER'));
		}
	}
?>