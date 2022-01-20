{extends "../mail/layout.tpl"}
{block "title"}{$title}{/block}
{block "recipient"}<a href="mailto:{$base->get('smtp.login')}">{$base->get('smtp.login')}</a>{/block}
{block "content"}
	{if $data['name']}<b>{$t['SENDER']}:</b> {$data['name']}<br>{/if}
	{if $data['subject']}<b>{$t['SUBJECT']}:</b> {$data['subject']}<br>{/if}
	{if $data['email']}<b>{$t['EMAIL']}:</b> {$data['email']}<br>{/if}
	{if $data['phone']}<b>{$t['PHONE']}:</b> {$data['phone']}<br>{/if}
	---<br>
	{$data['text']}
{/block}