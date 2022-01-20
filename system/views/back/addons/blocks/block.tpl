<div data-block="{($block['type']) ? $block['type'] : $type}">
	{assign "field" "sections[{$index['section']}][columns][{$index['column']}][blocks][{$index['block']}]"}
	<!--{literal}{assign "id" implode('_', ['sections', $index['section'], 'columns', $index['column'], 'blocks', $index['block']])}{/literal}-->
	{assign "id" sprintf('block_%s', md5(sprintf('%s%s', microtime(), uniqid())))}
	<input type="hidden" name="{$field}[type]" value="{($block['type']) ? $block['type'] : $type}">
	<div class="card upload mb-4">
		<div class="position-absolute">
			<button type="button" class="btn btn-light border badge-dot badge-sm"
			onclick="moveBlock(this, 'up')"><i class="fa fa-arrow-up"></i></button>
			
			<button type="button" class="btn btn-light border badge-dot badge-sm"
			onclick="moveBlock(this, 'down')"><i class="fa fa-arrow-down"></i></button>
			
			<button type="button" class="btn btn-light border-danger badge-dot badge-sm"
			onclick="removeBlock(this)"><i class="fa fa-times text-danger"></i></button>
		</div>
		{block "content"}{/block}
	</div>
</div>