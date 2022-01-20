<div data-block>
	<input type="hidden" name="sections[{$index}][columns][{$cindex}][blocks][{$bindex}][type]" value="{$type}">
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