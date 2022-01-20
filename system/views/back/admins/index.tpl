{extends "../layout.tpl"}

{block "header"}
	<link href="/{PATH_PUBLIC}/vendor/datatables/datatables.min.css" rel="stylesheet">
{/block}

{block "content"}
	{capture name="custom"}
		<div class="btn-group d-none d-md-flex ml-2">
			<a href="logs/admins" class="btn rounded btn-outline-primary">
				<span>{$t['LOGS']}</span>
			</a>
		</div>
	{/capture}
	{include "../addons/topbar.tpl" topbar=['title' => ['icon' => 'user-circle-o', 'content' => $t['ADMINS']], 'options' => [($count) ? 'search' : '', 'add']]}
	{if $admins}
		<table class="table table-bordered table-hover table-sm" id="table">
			<thead>
				<tr>
					<th class="text-left d-none d-lg-table-cell" width="80">ID</th>
					<th class="text-left">{$t['PERSONAL_DATA']}</th>
					<th class="text-left d-none d-lg-table-cell">{$t['POSITION']}</th>
					<th class="text-left d-none d-lg-table-cell" width="80">{$t['PERMISSIONS']}</th>
					<th class="text-center disabled" width="80">{$t['OPTIONS']}</th>
				</tr>
			</thead>
			<tbody class="small">
				{foreach from = array_values($admins) item = admin}
					<tr>
						<td class="text-right text-muted d-none d-lg-table-cell">{$admin['id']}</td>
						<td class="text-left" data-order="{implode(' ', [$admin['personal']['name'], $admin['personal']['surname']])}">
							<div class="row align-items-center no-gutters flex-nowrap">
								<div class="col-auto mr-2">
									{if !$admin['file']}<img src="{$admin['data']['thumb']}" class="img-thumbnail" width="48">{else}
										<a href="{$admin['data']['image']}" data-fancybox="admins" data-caption="{implode(' ', [$admin['personal']['name'], $admin['personal']['surname']])}">
											<img src="{$admin['data']['thumb']}" alt="{implode(' ', [$admin['personal']['name'], $admin['personal']['surname']])}" class="img-thumbnail" width="48">
										</a>
									{/if}
								</div>
								<div class="col">
									<b>{implode(' ', [$admin['personal']['name'], $admin['personal']['surname']])}</b><br>
									<small class="text-muted"><i class="fa fa-envelope"></i> {if $admin['email']}
									<a href="mailto:{$admin['email']}" class="text-muted">{$admin['email']}</a>
									{else}{$t['NONE']}{/if}</small>
								</div>
							</div>
						</td>
						<td class="text-left d-none d-lg-table-cell" data-order="{$admin['employment']['position']}">
							<b>{($admin['employment']['position']) ? $admin['employment']['position'] : $t['NONE']}</b><br>
							<small class="text-muted"><i class="fa fa-id-card"></i> {($admin['employment']['department']) ? $admin['employment']['department'] : $t['NONE']}</small>
						</td>
						{assign "count" count($admin['permissions'])}
						<td class="text-center d-none d-lg-table-cell" data-order="{$count}">
							<span class="badge {if $count}badge-primary{else}badge-danger{/if}">{$count}</span>
						</td>
						<td class="text-center">
							<div class="dropdown">
								<button type="button" class="btn rounded btn-sm btn-outline-primary" data-toggle="dropdown">
									<i class="fa fa-cog"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="{$base->PATH}/edit/{$admin['id']}" class="dropdown-item">
										<span>{$t['EDIT']}</span><i class="fa fa-pencil text-success"></i>
									</a>
									<a href="{$base->PATH}/logs/{$admin['id']}" class="dropdown-item">
										<span>{$t['LOGS']}</span><i class="fa fa-history text-primary"></i>
									</a>
									<a href="#" data-toggle="modal" data-target="#remove{$admin['id']}" class="dropdown-item">
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
	{if $admins}
		{foreach from = array_values($admins) item = admin}
			<div class="modal fade" id="remove{$admin['id']}">
				<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">{$t['WARNING']}</h5>
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body text-center py-5">
							<p class="m-0">{sprintf($t['RECORDS_REMOVE_TITLE'], $admin['email'])}</p>
							<p class="m-0 text-danger">{$t['RECORDS_REMOVE_TEXT']}</p>
						</div>
						<div class="modal-footer justify-content-between">
							<button type="button" class="btn rounded btn-outline-dark" data-dismiss="modal">
								<span>{$t['CANCEL']}</span>
							</button>
							<a href="{$base->PATH}/remove/{$admin['id']}" class="btn rounded btn-danger">
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
			"order": [[0, "desc"]],
			"columnDefs": [{ "targets": "disabled", "orderable": false }],
			"lengthMenu": [[10, 25, 50, -1], ["10", "25", "50", "{$t['SELECT_ALL']}"]],
			"language": { "url": "/{PATH_PUBLIC}/vendor/datatables/langs/{$base->language}.min.js" },
			"dom": "<'row'<'col-sm-12'tr>><'row align-items-center justify-content-center py-3 mt-3 "+
			"bg-light border-top border-bottom'<'col-auto mb-2 mb-md-0'i><'col-sm-12 col-md'p>>"
		});
	</script>
{/block}