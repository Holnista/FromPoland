{extends "../layout.tpl"}

{block "header"}
	<link href="/{PATH_PUBLIC}/vendor/datatables/datatables.min.css" rel="stylesheet">
{/block}

{block "content"}
	{capture name="custom"}
		{if $translates}
			<div class="btn-group">
				<button type="button" class="btn rounded btn-outline-dark ml-2" data-toggle="dropdown">
					<i class="fa fa-cog d-inline d-md-none"></i>
					<span class="d-none d-md-inline">{$t['OPTIONS']}</span>
				</button>
				<div class="dropdown-menu dropdown-menu-right mt-2">
					<a data-toggle="modal" data-target="#import" class="dropdown-item">
						<span class="pl-2">{$t['IMPORT']}</span>
						<i class="fa fa-download text-primary"></i>
					</a>
					<a href="{$base->PATH}/export" class="dropdown-item">
						<span class="pl-2">{$t['EXPORT']}</span>
						<i class="fa fa-upload text-primary"></i>
					</a>
					<a href="{$base->PATH}/unused" class="dropdown-item">
						<span class="pl-2">{$t['FIND_UNUSED']}</span>
						<i class="fa fa-binoculars text-primary"></i>
					</a>
				</div>
			</div>
		{/if}
	{/capture}
	{include "../addons/topbar.tpl" topbar=['title' => ['icon' => 'language', 'content' => $t['TRANSLATES']], 'options' => [($count) ? 'search' : '', 'add']]}
	{if $translates}
		<table class="table table-bordered table-hover table-sm" id="table">
			<thead>
				<tr>
					<th class="text-left d-none d-md-table-cell" width="80">ID</th>
					<th class="text-left" width="300">{$t['KEY']}</th>
					<th class="text-left">{$t['TRANSLATION']}</th>
					<th class="text-center disabled" width="80">{$t['OPTIONS']}</th>
				</tr>
			</thead>
			<tbody class="small">
				{foreach from = array_values($translates) item = translate}
					<tr>
						<td class="text-right text-muted d-none d-md-table-cell">{$translate['id']}</td>
						<td class="text-left text-monospace"><b>{$translate['key']}</b></td>
						<td class="text-left text-nowrap overflow-hidden" style="max-width: 0;">
							{$base->clean($translate['translation'])}
						</td>
						<td class="text-center">
							<div class="dropdown">
								<button type="button" class="btn rounded btn-sm btn-outline-primary" data-toggle="dropdown">
									<i class="fa fa-cog"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="{$base->PATH}/edit/{$translate['id']}" class="dropdown-item">
										<span>{$t['EDIT']}</span><i class="fa fa-pencil text-success"></i>
									</a>
									<a href="#" data-toggle="modal" data-target="#remove{$translate['id']}" class="dropdown-item">
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
	<div class="modal fade" id="import">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<form method="POST" action="{$base->PATH}/import" class="validate" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title">{$t['IMPORTING']}</h5>
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body text-center">
						<input type="file" name="xlsx" class="form-control upload" required>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn rounded btn-outline-dark" data-dismiss="modal">
							<span>{$t['CANCEL']}</span>
						</button>
						<input type="hidden" name="key" value="{$directory['key']}">
						<input type="hidden" name="token" value="{md5($smarty.session.csrf)}">
						<button type="submit" class="btn rounded btn-primary">
							<span>{$t['IMPORT']}</span>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	{if $translates}
		{foreach from = array_values($translates) item = translate}
			<div class="modal fade" id="remove{$translate['id']}">
				<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">{$t['WARNING']}</h5>
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body text-center py-5">
							<p class="m-0">{sprintf($t['RECORDS_REMOVE_TITLE'], $translate['key'])}</p>
							<p class="m-0 text-danger">{$t['RECORDS_REMOVE_TEXT']}</p>
						</div>
						<div class="modal-footer justify-content-between">
							<button type="button" class="btn rounded btn-outline-dark" data-dismiss="modal">
								<span>{$t['CANCEL']}</span>
							</button>
							<a href="{$base->PATH}/remove/{$translate['id']}" class="btn rounded btn-danger">
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
			"iDisplayLength": -1,
			"order": [[0, "desc"]],
			"columnDefs": [{ "targets": "disabled", "orderable": false }],
			"lengthMenu": [[10, 25, 50, -1], ["10", "25", "50", "{$t['SELECT_ALL']}"]],
			"language": { "url": "/{PATH_PUBLIC}/vendor/datatables/langs/{$base->language}.min.js" },
			"dom": "<'row'<'col-sm-12'tr>><'row align-items-center justify-content-center py-3 mt-3 "+
			"bg-light border-top border-bottom'<'col-auto mb-2 mb-md-0'i><'col-sm-12 col-md'p>>"
		});
	</script>
{/block}