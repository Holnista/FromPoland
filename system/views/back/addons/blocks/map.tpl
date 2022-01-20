{extends "../blocks/block.tpl"}

{block "content"}
	<div class="title badge badge-info rounded p-2">Mapa Google</div>
	<div class="input-group">
		<iframe src="{$block['value']}" class="w-100 img-fluid rounded mb-1 {if !$block}d-none{/if}" style="aspect-ratio: 1; border: none;"></iframe>
		<input type="text" name="{$field}[value]" value="{$block['value']}" class="form-control rounded-left"
		placeholder="Adres URL mapy Google" onchange="googlemap(this)">
	</div>
	<script>
		function googlemap(input)
		{
			var value = $(input).val();
			if(value.length) $(input).prev().attr("src", value).removeClass("d-none");
			else $(input).prev().attr("src", "").addClass("d-none");
		}
	</script>
{/block}