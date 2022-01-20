{extends "../layout.tpl"}

{block "header"}
	<link href="/{PATH_PUBLIC}/vendor/datatables/datatables.min.css" rel="stylesheet">
{/block}

{block "content"}
	{include "../addons/topbar.tpl" topbar=['title' => ['icon' => 'envelope-o', 'content' => $t['EMAILS']], 'options' => [($count) ? 'search' : '']]}
	{if $emails}
		<table class="table table-sm table-bordered table-hover m-0" id="table">
			<thead>
				<tr>
					<th class="text-left d-none d-md-table-cell" width="80">ID</th>
					<th class="text-left" width="400">{$t['RECIPIENT']}</th>
					<th class="text-left d-none d-md-table-cell">{$t['MESSAGE']}</th>
					<th class="text-left" width="80">{$t['STATUS']}</th>
					<th class="text-center disabled" width="32"></th>
				</tr>
			</thead>
			<tbody class="small">
				{foreach from = array_values($emails) item = email}
					<tr>
						<td class="text-right text-muted d-none d-md-table-cell">{$email['id']}</td>
						<td class="text-left" data-order="{$email['recipient'][0]}">
							<b>{$email['recipient'][0]}</b>
							<small class="text-muted pull-right">{truncate(clear($email['recipient'][1]), 60)}</small>
						</td>
						<td class="text-left d-none d-md-table-cell" data-order="{$email['subject']}">
							<a href="{$base->PATH}/preview/{$email['id']}" data-fancybox data-type="iframe">
								<span data-toggle="tooltip" title="{$t['PREVIEW']}">{$email['subject']}</span>
							</a>
						</td>
						<td class="text-center" data-order="{strtotime($email['readed'])}">
							{if $email['readed']}
								<span class="badge badge-success badge-sm badge-dot" data-toggle="tooltip" title="{sprintf('%s:<br> %s', $t['READED'], date('d.m.Y H:i', strtotime($email['readed'])))}">
									<i class="fa fa-eye text-light"></i>
								</span>
							{else}
								<span class="badge badge-light badge-sm badge-dot" data-toggle="tooltip" title="{$t['NOT_READED']}">
									<i class="fa fa-eye-slash text-dark"></i>
								</span>
							{/if}
						</td>
						<td class="text-center">
							<a href="#" data-toggle="modal" data-target="#remove{$email['id']}" class="btn rounded btn-sm btn-outline-danger">
								<i class="fa fa-times"></i>
							</a>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	{else}
		{if !$count}
			{include "../addons/flash.tpl" flash=['title' => $t['RECORDS_EMTY_TITLE']]}
		{else if $smarty.get.word}
			{include "../addons/flash.tpl" flash=['title' => $t['SEARCH_EMPTY_TITLE'],
			'lead' => ['content' => sprintf($t['SEARCH_EMPTY_TEXT'], $smarty.get.word)]]}	
		{/if}
	{/if}
{/block}

{block "modal"}
	{if $emails}
		{foreach from = array_values($emails) item = email}
			<div class="modal fade" id="remove{$email['id']}">
				<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">{$t['WARNING']}</h5>
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body text-center py-5">
							<p class="m-0"><b>{$email['recipient'][0]}</b><br>
							<small class="text-muted">{$email['recipient'][1]}</small></p>
							<p class="my-3"></p>
							<p class="m-0 text-muted">{sprintf('<i>"%s"</i>', truncate(clear($email['subject'])))}</p>
							<p class="my-3"></p>
							<p class="m-0">{sprintf($t['RECORDS_REMOVE_TITLE'], mb_strtolower($t['MESSAGE']))}</p>
							<p class="m-0 text-danger">{$t['RECORDS_REMOVE_TEXT']}</p>
						</div>
						<div class="modal-footer justify-content-between">
							<button type="button" class="btn rounded btn-outline-dark" data-dismiss="modal">
								<span>{$t['CANCEL']}</span>
							</button>
							<a href="{$base->PATH}/remove/{$email['id']}" class="btn rounded btn-danger">
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
			"iDisplayLength": 50,
			"order": [[0, "desc"]],
			"columnDefs": [{ "targets": "disabled", "orderable": false }],
			"lengthMenu": [[10, 25, 50, -1], ["10", "25", "50", "{$t['SELECT_ALL']}"]],
			"language": { "url": "/{PATH_PUBLIC}/vendor/datatables/langs/{$base->language}.min.js" },
			"dom": "<'row'<'col-sm-12'tr>><'row align-items-center justify-content-center py-3 mt-3 "+
			"bg-light border-top border-bottom'<'col-auto mb-2 mb-md-0'i><'col-sm-12 col-md'p>>"
		});
	</script>
{/block}