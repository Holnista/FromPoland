{extends "../layout.tpl"}

{block "header"}
	<link href="/{PATH_PUBLIC}/vendor/datatables/datatables.min.css" rel="stylesheet">
{/block}

{block "content"}
	{include "../addons/topbar.tpl" topbar=['title' => ['icon' => 'picture-o', 'content' => $t['SLIDES']], 'options' => [($count) ? 'search' : '', 'add']]}
	{if $slides}
		<table class="table table-bordered table-hover table-sm" id="table">
			<thead>
				<tr>
					<th class="text-left d-none d-md-table-cell" width="80">ID</th>
					<th class="text-left">{$t['TITLE']}</th>
					<th class="text-left d-none d-sm-table-cell" width="80">{$t['ACTIVE']}</th>
					<th class="text-center disabled" width="80">{$t['OPTIONS']}</th>
				</tr>
			</thead>
			<tbody>
				{foreach from = array_values($slides) item = slide}
					<tr>
						<td class="text-right text-muted d-none d-md-table-cell">{$slide['id']}</td>
						<td class="text-left" data-order="{clear($slide['title'])}">
							<div class="row align-items-center no-gutters flex-nowrap">
								<div class="col-auto mr-2">
									{if !$slide['file']}<img src="{$slide['data']['thumb']}" class="img-thumbnail" width="48">{else}
										<a href="{$slide['data']['image']}" data-fancybox="slides" data-caption="{$slide['title']}">
											<img src="{$slide['data']['thumb']}" alt="{$slide['title']}" class="img-thumbnail p-0" width="48">
										</a>
									{/if}
								</div>
								<div class="col">
									<b>{$slide['title']}</b><br>
									<small class="text-muted">{$slide['alias']}</small>
								</div>
							</div>
						</td>
						<td class="text-center d-none d-sm-table-cell" data-order="{$slide['active']}">
							<div class="custom-control custom-switch custom-switch-success">
								<input type="checkbox" id="slide[{$slide['id']}][active]" 
								data-toggle-active="{path(TABLE_SLIDES, $slide['id'])}"
								class="custom-control-input" {if $slide['active']}checked{/if} readonly>
								<label class="custom-control-label" for="slide[{$slide['id']}][active]"></label>
							</div>
						</td>
						<td class="text-center">
							<div class="dropdown">
								<button type="button" class="btn rounded btn-sm btn-outline-primary" data-toggle="dropdown">
									<i class="fa fa-cog"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="{$base->PATH}/edit/{$slide['id']}" class="dropdown-item">
										<span>{$t['EDIT']}</span><i class="fa fa-pencil text-success"></i>
									</a>
									<a href="#" data-toggle="modal" data-target="#remove{$slide['id']}" class="dropdown-item">
										<span>{$t['REMOVE']}</span><i class="fa fa-times text-danger"></i>
									</a>
								</div>
							</div>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	{else}
		{if !$count}
			{include "../addons/flash.tpl" flash=['title' => $t['RECORDS_EMTY_TITLE'],
			'lead' => ['icon' => 'plus text-success', 'content' => $t['RECORDS_EMPTY_TEXT']]]}
		{else if $smarty.get.word}
			{include "../addons/flash.tpl" flash=['title' => $t['SEARCH_EMPTY_TITLE'],
			'lead' => ['content' => sprintf($t['SEARCH_EMPTY_TEXT'], $smarty.get.word)]]}	
		{/if}
	{/if}
{/block}

{block "modal"}
	{if $slides}
		{foreach from = array_values($slides) item = slide}
			<div class="modal fade" id="remove{$slide['id']}">
				<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">{$t['WARNING']}</h5>
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body text-center py-5">
							<p class="m-0">{sprintf($t['RECORDS_REMOVE_TITLE'], $slide['title'])}</p>
							<p class="m-0 text-danger">{$t['RECORDS_REMOVE_TEXT']}</p>
						</div>
						<div class="modal-footer justify-content-between">
							<button type="button" class="btn rounded btn-outline-dark" data-dismiss="modal">
								<span>{$t['CANCEL']}</span>
							</button>
							<a href="{$base->PATH}/remove/{$slide['id']}" class="btn rounded btn-danger">
								<span>{$t['REMOVE']}</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		{/foreach}
	{/if}
{/block}

{block "footer"}
	<script src="/{PATH_PUBLIC}/vendor/datatables/datatables.min.js"></script>
	<script>
		//----- Setup dataTable
		$.fn.dataTable.ext.classes.sInfo = "text-muted small";
		$("#table").DataTable({
			"autoWidth": false,
			"iDisplayLength": 10,
			"order": [],
			"columnDefs": [{ "targets": "disabled", "orderable": false }],
			"lengthMenu": [[10, 25, 50, -1], ["10", "25", "50", "{$t['SELECT_ALL']}"]],
			"language": { "url": "/{PATH_PUBLIC}/vendor/datatables/langs/{$base->language}.min.js" },
			"dom": "<'row'<'col-sm-12'tr>><'row align-items-center justify-content-center py-3 mt-3 "+
			"bg-light border-top border-bottom'<'col-auto mb-2 mb-md-0'i><'col-sm-12 col-md'p>>"
		});
	</script>
{/block}