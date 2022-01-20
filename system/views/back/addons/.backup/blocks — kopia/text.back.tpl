{extends "../blocks/block.tpl"}{assign "type" "text"}

{block "content"}
	<fieldset>
		{foreach from = $base->languages item = language}
			<div data-language="{$language}">
				<textarea name="sections[{$index}][columns][{$cindex}][blocks][{$bindex}][value][{$language}]" 
				id="{if $block}{implode('_', ['sections', $index, 'columns', $cindex, 'blocks', $bindex, 'value'])}{/if}"
				class="form-control raw">{$block['value'][$language]}</textarea>
			</div>
		{/foreach}
	</fieldset>
{/block}