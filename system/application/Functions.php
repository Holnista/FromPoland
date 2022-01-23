<?php
	use \RedBeanPHP\R as R;
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
?>