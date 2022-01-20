{extends "../layout.tpl"}

{block "content"}
	{capture name="custom"}
		<!--div class="btn-group d-none d-md-flex ml-2">
			<a href="logs/clients" class="btn rounded-left {if $base->get('PARAMS.table') == TABLE_CLIENTS}btn-primary{else}btn-outline-primary{/if}">
				<span>{$t['CLIENTS']}</span>
			</a>
			<a href="logs/admins" class="btn rounded-right {if $base->get('PARAMS.table') == TABLE_ADMINS}btn-primary{else}btn-outline-primary{/if}">
				<span>{$t['ADMINS']}</span>
			</a>
		</div-->
	{/capture}
	{if $base->get('PARAMS.table') == TABLE_CLIENTS}{assign "text" $t['CLIENTS']}{/if}
	{if $base->get('PARAMS.table') == TABLE_ADMINS}{assign "text" $t['ADMINS']}{/if}
	{include "../addons/topbar.tpl" topbar=['title' => ['icon' => 'history', 'content' => $t['LOGS'], 'text' => $text], 'options' => [($count) ? 'search' : '']]}
	{if $logs}
		<table class="table table-bordered table-hover table-sm">
			<thead>
				<tr>
					<th class="text-right d-none d-md-table-cell" width="80">ID</th>
					<th class="text-left d-none d-md-table-cell" colspan="3">{$t['ENTRY']}</th>
					<th class="text-left d-table-cell d-md-none" colspan="3">{$t['ENTRY']}</th>
					<th class="text-left d-none d-md-table-cell" width="100">{$t['DATE']}</th>
					<th class="text-center d-none d-md-table-cell" width="80">{$t['OPTIONS']}</th>
				</tr>
			</thead>
			<tbody class="small">
				{foreach from = array_values($logs) item = log}
					<tr>
						<td class="text-right text-muted d-none d-md-table-cell">{$log['id']}</td>
						<td class="text-center" width="53">
							<i class="fa fa-{$log['log']['icon']} text-{$log['log']['color']}"></i>
						</td>
						<td class="text-left text-monospace">
							{$log['data']['display']}
						</td>
						<td class="text-left" width="200">
							<div class="row align-items-center no-gutters flex-nowrap">
								<div class="col-auto mr-2">
									{if !$log['data']['doer']['file']}<img src="{$log['data']['doer']['data']['thumb']}" class="img-thumbnail" width="48">{else}
										<a href="{$log['data']['doer']['data']['image']}" data-fancybox="{$log['table']}" data-caption="{$log['data']['doer']['title']}">
											<img src="{$log['data']['doer']['data']['thumb']}" alt="{$log['data']['doer']['title']}" class="img-thumbnail" width="48">
										</a>
									{/if}
								</div>
								<div class="col">
									<b>{$log['data']['doer']['title']}</b><br>
									<small class="text-muted">{$log['data']['doer']['subtitle']}</small>
								</div>
							</div>
						</td>
						<td class="text-right d-none d-md-table-cell">
							<b>{date('H:i', strtotime($log['created']))}</b><br>
							<small class="text-muted">{date('d.m.Y', strtotime($log['created']))}</small>
						</td>
						<td class="text-center d-none d-md-table-cell">
							<a href="#" data-toggle="modal" data-target="#remove{$log['id']}" class="btn rounded btn-sm btn-outline-danger">
								<i class="fa fa-times"></i>
							</a>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
		{include "../addons/pager.tpl"}
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
	{if $logs}
		{foreach from = array_values($logs) item = log}
			<div class="modal fade" id="remove{$log['id']}">
				<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">{$t['WARNING']}</h5>
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body text-center py-5">
							<p class="m-0">{sprintf($t['RECORDS_REMOVE_TITLE'], sprintf('%s (ID: %s)', strtolower($t['ENTRY']), $log['id']))}</p>
							<p class="m-0 text-danger">{$t['RECORDS_REMOVE_TEXT']}</p>
						</div>
						<div class="modal-footer justify-content-between">
							<button type="button" class="btn rounded btn-outline-dark" data-dismiss="modal">
								<span>{$t['CANCEL']}</span>
							</button>
							<a href="{$base->PATH}/remove/{$log['id']}" class="btn rounded btn-danger">
								<span>{$t['REMOVE']}</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		{/foreach}
	{/if}
{/block}