{extends "../blocks/block.tpl"}{assign "type" "image"}

{block "content"}
	<div class="input-group">
		<img src="{$block['value']}" class="img-fluid {if !$block}d-none{/if}" alt="">
		<input type="text" name="sections[{$index}][columns][{$cindex}][blocks][{$bindex}][value]" value="{$block['value']}"
		id="{if $block}{implode('_', ['sections', $index, 'columns', $cindex, 'blocks', $bindex, 'value'])}{/if}" class="form-control">
		<div class="input-group-append">
			<button data-src="/{PATH_PUBLIC}/vendor/tinymce/plugins/filemanager/dialog.php?akey=5d2e69f5f8be6695acbebfa1b2553d1e&type=1&popup=1&relative_url=1&field_id=
			{if $block}{implode('_', ['sections', $index, 'columns', $cindex, 'blocks', $bindex, 'value'])}{/if}" type="button" class="btn rounded-right btn-primary" 
			data-fancybox data-type="iframe">{$t['SELECT']}</button>
		</div>
	</div>
{/block}