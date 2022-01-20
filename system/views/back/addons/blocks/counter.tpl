{extends "../blocks/block.tpl"}

{block "content"}
	<div class="title badge badge-info rounded p-2">Cyfrowy licznik</div>
	<fieldset>
		{foreach from = $base->languages item = language}
			<div data-language="{$language}">
				<input type="number" name="{$field}[value][0][{$language}]" value="{$block['value'][0][$language]}" 
				class="form-control btn btn-danger btn-lg py-5" placeholder="{$t['COUNT']}" min="0">
				<input type="text" name="{$field}[value][1][{$language}]" value="{$block['value'][1][$language]}" 
				class="form-control text-center mt-1" placeholder="{$t['TITLE']}">
				<input type="text" name="{$field}[value][2][{$language}]" value="{$block['value'][2][$language]}" 
				class="form-control form-control-sm text-center mt-1" placeholder="{$t['SUBTITLE']}">
			</div>
		{/foreach}
	</fieldset>
{/block}