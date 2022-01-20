<div class="col {$column['width']} mt-3" data-column>
	<div class="card upload">
		{$smarty.capture.blocks}
		<a href="#" class="btn rounded btn-block btn-light" 
		data-toggle="modal" data-target="#blocks" 
		onclick="addBlockButton = this;">
		<i class="fa fa-plus"></i></a>
		
		<button type="button" class="btn btn-danger badge-dot badge-float badge-sm"
		onclick="removeColumn(this)"><i class="fa fa-times"></i></button>
	</div>
	<div class="row justify-content-between no-gutters mt-1">
		<div class="col-auto">
			<button type="button" class="btn btn-outline-info btn-sm d-flex align-items-center h-100"
			onclick="moveColumn(this, 'left')"><i class="fa fa-arrow-left"></i></button>
		</div>
		<div class="col">
			<select name="sections[{$index['section']}][columns][{$index['column']}][width]" class="form-control select2" onchange="settingsChangeColumnWidth(this)">
				{foreach from = [3, 4, 6, 8, 9, 12] item = i}<option value="col-md-{$i}" {if $column['width'] == sprintf('col-md-%s', $i)}selected{/if}>{$i}/12</option>{/foreach}
				<option value="col-md" {if $column['width'] == 'col-md' || !$column['width']}selected{/if}>{$t['DEFAULT']}</option>
			</select>	
		</div>
		<div class="col-auto">
			<button type="button" class="btn btn-outline-info btn-sm d-flex align-items-center h-100"
			onclick="moveColumn(this, 'right')"><i class="fa fa-arrow-right"></i></button>
		</div>
	</div>
</div>