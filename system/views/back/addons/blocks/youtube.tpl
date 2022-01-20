{extends "../blocks/block.tpl"}

{block "content"}
	<div class="title badge badge-info rounded p-2">Film YouTube</div>
	<div class="input-group">
		{assign "video" parse_url($block['value'])}{parse_str($video['query'], $video)}
		<img src="http://img.youtube.com/vi/{$video['v']}/sddefault.jpg" class="w-100 img-fluid rounded mb-1 {if !$block}d-none{/if}">
		<input type="text" name="{$field}[value]" value="{$block['value']}" class="form-control rounded-left" 
		placeholder="Adres URL filmu YouTube" onchange="youtube(this)">
	</div>
	<script>
		function youtube(input)
		{
			var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/;
			var match = $(input).val().match(regExp), video = (match && match[7].length == 11) ? match[7] : false;
			if(video) $(input).prev().attr("src", "http://img.youtube.com/vi/"+video+"/sddefault.jpg").removeClass("d-none");
			else $(input).prev().attr("src", "").addClass("d-none");
		}
	</script>
{/block}