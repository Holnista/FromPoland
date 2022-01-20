{extends "../layout.tpl"}

{block "header"}
	<link href="/{PATH_PUBLIC}/vendor/datatables/datatables.min.css" rel="stylesheet">
{/block}

{block "content"}
	{include "../addons/topbar.tpl" topbar=['title' => ['icon' => 'list', 'content' => $t['CATEGORIES']], 'options' => [($count) ? 'search' : '', 'add']]}
	{if $categories}
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
				{foreach from = array_values($categories) item = category}
					<tr>
						<td class="text-right text-muted d-none d-md-table-cell">{$category['id']}</td>
						<td class="text-left" data-order="{clear($category['title'])}">
							<div class="row align-items-center no-gutters flex-nowrap">
								<div class="col-auto d-none d-xl-block mr-2">
									{if !$category['file']}<img src="{$category['data']['thumb']}" class="img-thumbnail" width="48">{else}
										<a href="{$category['data']['image']}" data-fancybox="categories" data-caption="{$category['title']}">
											<img src="{$category['data']['thumb']}" alt="{$category['title']}" class="img-thumbnail p-0" width="48">
										</a>
									{/if}
								</div>
								<div class="col">
									<div class="d-flex align-items-center">
										{if $category['parent'] && !$smarty.get.word}
											<span class="mover" style="width: {50*count(parents(TABLE_CATEGORIES, $category['id']))}px;"></span>
										{/if}
										<div>
											<b>{$category['title']}</b><br>
											<small class="text-muted">{$category['alias']}</small>
										</div>
									</div>
								</div>
								<div class="col-auto d-none d-sm-block ml-auto text-right">
									{if $category['place']}<span class="badge {if $category['place'] == 'home'}
									badge-dark{else}badge-success{/if}">{$t[strtoupper($category['place'])]}</span>
									{else}<span class="badge badge-dark">{$t['NONE']}</span>{/if}
								</div>
							</div>
						</td>
						<td class="text-center d-none d-sm-table-cell" data-order="{$category['active']}">
							<div class="custom-control custom-switch custom-switch-success">
								<input type="checkbox" id="category[{$category['id']}][active]" 
								data-toggle-active="{path(TABLE_CATEGORIES, $category['id'])}"
								class="custom-control-input" {if $category['active']}checked{/if} readonly>
								<label class="custom-control-label" for="category[{$category['id']}][active]"></label>
							</div>
						</td>
						<td class="text-center">
							<div class="dropdown">
								<button type="button" class="btn rounded btn-sm btn-outline-primary" data-toggle="dropdown">
									<i class="fa fa-cog"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="{$base->PATH}/edit/{$category['id']}" class="dropdown-item">
										<span>{$t['EDIT']}</span><i class="fa fa-pencil text-success"></i>
									</a>
									<a href="{$base->PATH}/duplicate/{$category['id']}" class="dropdown-item">
										<span>{$t['DUPLICATE']}</span><i class="fa fa-copy text-primary"></i>
									</a>
									<a href="#" data-toggle="modal" data-target="#remove{$category['id']}" class="dropdown-item">
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
	{if $categories}
		{foreach from = array_values($categories) item = category}
			<div class="modal fade" id="remove{$category['id']}">
				<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">{$t['WARNING']}</h5>
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body text-center py-5">
							<p class="m-0">{sprintf($t['RECORDS_REMOVE_TITLE'], $category['title'])}</p>
							<p class="m-0 text-danger">{$t['RECORDS_REMOVE_TEXT']}</p>
						</div>
						<div class="modal-footer justify-content-between">
							<button type="button" class="btn rounded btn-outline-dark" data-dismiss="modal">
								<span>{$t['CANCEL']}</span>
							</button>
							<a href="{$base->PATH}/remove/{$category['id']}" class="btn rounded btn-danger">
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