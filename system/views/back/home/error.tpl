{extends "../layout.tpl"}

{block "content"}
	{include "../addons/flash.tpl" flash=['title' => $base->get('ERROR.code'),
	'lead' => ['icon' => 'times text-danger', 'content' => $base->get('ERROR.status')],
	'text' => $base->get('ERROR.text')]}
{/block}