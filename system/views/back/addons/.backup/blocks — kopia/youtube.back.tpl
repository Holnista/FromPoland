{extends "../blocks/block.tpl"}{assign "type" "youtube"}

{block "content"}
	<div class="input-group">
		<iframe src="{$block['value']}" class="img-fluid {if !$block}d-none{/if}"></iframe>
		<input type="text" name="sections[{$index}][columns][{$cindex}][blocks][{$bindex}][value]" value="{$block['value']}"
		id="{if $block}{implode('_', ['sections', $index, 'columns', $cindex, 'blocks', $bindex, 'value'])}{/if}" class="form-control"
		placeholder="Adres URL filmu YouTube">
	</div>
{/block}