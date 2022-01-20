{extends "../layout.tpl"}

{block "content"}
	{include "../addons/flash.tpl" flash=['title' => $t['NO_PERMISSIONS_TITLE'],
	'lead' => ['icon' => 'warning text-warning', 'content' => $t['NO_PERMISSIONS_TEXT']]]}
{/block}