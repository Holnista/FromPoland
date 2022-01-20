{extends "../blocks/block.tpl"}

{block "content"}
	<div class="title badge badge-info rounded p-2">Karuzela zdjęć</div>
	<div class="input-group">
		<img src="{$block['value']}" class="w-100 img-fluid rounded pointer mb-1 {if !$block}d-none{/if}" onclick="$(this).next().next().find('button').trigger('click');">
		<input type="text" name="{$field}[value]" value="{$block['value']}" class="form-control rounded-left" id="{$id}">
		<div class="input-group-append">
			<button data-src="/{PATH_PUBLIC}/vendor/tinymce/plugins/filemanager/dialog.php?akey=5d2e69f5f8be6695acbebfa1b2553d1e&type=1&popup=1&relative_url=1&field_id={$id}"
			type="button" class="btn rounded-right btn-primary" data-fancybox data-type="iframe">{$t['SELECT']}</button>
		</div>
	</div>
{/block}