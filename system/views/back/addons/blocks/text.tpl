{extends "../blocks/block.tpl"}

{block "content"}
	<div class="title badge badge-info rounded p-2">Kod HTML</div>
	<fieldset>
		{foreach from = $base->languages item = language}
			<div data-language="{$language}">
				<textarea name="{$field}[value][{$language}]"
				class="form-control raw">{$block['value'][$language]}</textarea>
			</div>
		{/foreach}
	</fieldset>
{/block}