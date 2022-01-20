<?php
	use \RedBeanPHP\R as R;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	//====================================================================================================
	function pre($data = null, $header = '')
	{
		echo '<pre style="background: #EEEEEE; padding: 1rem; font-family: consolas; font-size: 0.75rem; color: black;">';
		if(strlen($header)) echo '<b>'.$header.':</b><hr>'; print_r(str_replace(['<', '>'], ['&lt;', '&gt;'], $data));
		echo '</pre>';
	}
	
	//====================================================================================================
	function path()
	{
		return trim(preg_replace('#(^|[^:])//+#', '\\1/', implode('/', array_filter(func_get_args()))), '/');
	}

	//====================================================================================================
	function csrf($token = null)
	{
		$base = Base::instance();
		$csrf = md5($base->get('SESSION.csrf'));
		if(!$token) $token = $base->get('POST.token');
		/*$base->set('SESSION.csrf', uniqid());*/ $base->clear('POST.token');
		if(!empty($token) && !empty($csrf) && $token == $csrf) return true; return true; //false
	}
	
	//====================================================================================================
	function json($data = null)
	{
		return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
	}
	
	//====================================================================================================
	function randomString($length = 10)
	{
		return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)))), 1, $length);
	}
	
	//====================================================================================================
	function likeJson($column = null, $string = null)
	{
		if($column && $string) return sprintf("`%s` LIKE '[%s,%%' OR `%s` LIKE '%%,%s,%%' OR `%s` LIKE '%%,%s]' OR `%s` LIKE '[%s]'",
		$column, $string, $column, $string, $column, $string, $column, $string); return null;
	}
	
	//====================================================================================================
	function like($string = null, $quotes = false)
	{
		if($quotes) return '%"'.$string.'"%';
		else return '%'.$string.'%';
	}
	
	//====================================================================================================
	function alias($string = null)
	{
		$web = Web::instance();
		return $web->slug($string);
	}
	
	//====================================================================================================
	function price($price = 0, $format = '%s zł')
	{
		$price = (strlen($format) ? sprintf($format, number_format($price, 2, ',', '')) : number_format($price, 2, ',', ''));
		return str_replace('.', ',', $price);
	}
	
	//====================================================================================================
	function tree($table = null, $id = 0)
	{
		$elements = R::find($table, '`parent` = ? ORDER BY COALESCE(`parent`, `sort`), `parent` IS NOT NULL, `sort`', [$id]);
		foreach($elements as $element) { $items[] = $element->id; $items[] = tree($table, $element->id, $json); }
		$return = []; array_walk_recursive($items, function($a) use (&$return) { $return[] = $a; });
		return $return;
	}
	
	//====================================================================================================
	function parents($table = TABLE_CATEGORIES, $id = 0) 
	{
		$items = []; 
		$element = R::load($table, $id);
		if($element->id && $element->parent > 0) { $parent = R::load($table, $element->parent);
		if($parent->id) { $items[] = $parent->id; $items[] = parents($table, $parent->id); } }
		$return = []; array_walk_recursive($items, function($a) use (&$return) { $return[] = $a; });
		return $return;
	}
	
	//====================================================================================================
	function translate(&$data = null, $language = null)
	{
		$default = Multilang::instance()->primary;
		if(!$language) $language = Base::instance()->get('language');
		foreach($data as $key => $value)
		{
			if(is_object($value)) $data[$key] = translate($value, $language);
			else if(is_array($value))
			{
				if(array_key_exists($language, $value) && (strlen($value[$language]) || count($value[$language]))) $data[$key] = $value[$language];
				else if(array_key_exists($default, $value)) $data[$key] = (strlen($value[$default]) || count($value[$language]) ? $value[$default] : array_values($value)[0]);
				else translate($data[$key], $language);
			}
		}
		return $data;
	}
	
	//====================================================================================================
	function truncate($string = '', $length = 160, $ending = '...')
	{
		$string = (strlen($string) > $length) ? mb_substr(strip_tags($string), 0, $length).$ending : strip_tags($string);
		return $string;
	}
	
	//====================================================================================================
	function clear($string = '', $allow = '')
	{
		return trim(str_replace([PHP_EOL, '"', "'"], '', strip_tags($string, $allow)));
	}
	
	//====================================================================================================
	function quotes($value = '')
	{
		$value = is_array($value) ? array_map('quotes', $value) : htmlentities($value, ENT_QUOTES, CHARSET);
		return $value;
	}
	
	//====================================================================================================
	function replaceUrl($array = [])
	{
		$url = Base::instance()->get('GET');
		foreach($array as $key => $value) $url[$key] = $value;
		return Base::instance()->get('PATH').'?'.http_build_query($url);
	}
	
	//====================================================================================================
	function getFiles($dir = '', &$results = array())
	{
		$base = Base::instance();
		foreach(scandir($dir) as $file)
		{
			$path = realpath($dir.DIRECTORY_SEPARATOR.$file);
			if(!is_dir($path) && !in_array($path, $results)) 
			$results[] = $base->fixslashes($path);
			else if(!in_array($file, ['.', '..']))
			getFiles($path, $results);
		}
		return $results;
	}
	
	//====================================================================================================
	function polishDate($format, $timestamp = null)
	{
		$to_convert = array(
			'l' => array('dat' => 'N', 'str' => array('Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota', 'Niedziela')),
			'F'=> array('dat' => 'n', 'str' => array('styczeń', 'luty', 'marzec', 'kwiecień', 'maj', 'czerwiec', 'lipiec', 'sierpień', 'wrzesień', 'październik', 'listopad', 'grudzień')),
			'f' => array('dat' => 'n', 'str' => array('stycznia', 'lutego', 'marca', 'kwietnia', 'maja', 'czerwca', 'lipca', 'sierpnia', 'września', 'października', 'listopada', 'grudnia'))
		);
		if($pieces = preg_split('#[:/.\-, ]#', $format))
		{
			if($timestamp === null) $timestamp = time();
			foreach($pieces as $datepart)
			{
				if(array_key_exists($datepart, $to_convert)) $replace[] = $to_convert[$datepart]['str'][(date($to_convert[$datepart]['dat'],$timestamp)-1)];
				else $replace[] = date($datepart,$timestamp);
			}
			$result = strtr($format, array_combine($pieces, $replace));
			return $result;
		}
	}

	//====================================================================================================
	function email($to = [], $subject = '', $body = '', $reply = [], $attachments = [])
	{
		$base = Base::instance(); $mail = new PHPMailer(true);
		if(!$reply[0]) $reply = [$base->get('smtp.login'), $base->get('NAME')];

		try
		{
			//----- Setup connection
			$mail->isSMTP();
			$mail->SMTPAuth = true;
			$mail->CharSet = $base->ENCODING;
			$mail->Port = $base->get('smtp.port');
			$mail->Host = $base->get('smtp.host');
			$mail->SMTPDebug = $base->get('DEBUG');
			$mail->Username = $base->get('smtp.login');
			$mail->Password = $base->get('smtp.password');
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			
			//----- Add recipients
			if(is_array($to)) $mail->AddAddress($to[0], $to[1]); else $mail->AddAddress($to);
			if(is_array($reply)) $mail->AddReplyTo($reply[0], $reply[1]); else $mail->AddReplyTo($reply);
			if(count($attachments)) foreach($attachments as $file) if(file_exists($file)) $mail->AddAttachment($file);

			//----- Set content
			$mail->setFrom($mail->Username, $base->get('NAME'));
			$mail->isHTML(true); $mail->Body = $body; $mail->Subject = $subject;
			$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
			
			//----- Create record
			$email = R::load(TABLE_EMAILS, R::store(R::dispense(
			TABLE_EMAILS)->import(compact('subject', 'body'))));
			$email->recipient = (is_array($to) ? $to : [$to]);

			//----- Add pixel
			$body .= sprintf('<img src="%s" width="1" height="1">', 
			path(PATH_BASE, 'task', 'pixel', $email->data['key'].'.jpg'));
			$mail->Body = $body; R::store($email); $mail->send();

			//----- Send
			return $email->id;
		}
		catch(Exception $error)
		{
			Base::instance()->error(500, $error->getMessage());
		}
	}
?>