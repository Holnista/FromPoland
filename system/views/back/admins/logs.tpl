{extends "../layout.tpl"}

{block "content"}
	{capture name="custom"}
		<div class="btn-group ml-md-2">
			<a href="javascript:history.back()" class="btn rounded btn-outline-primary">
				<span>{$t['GO_BACK']}</span>
			</a>
		</div>
	{/capture}
	{include "../addons/topbar.tpl" topbar=['title' => ['icon' => 'history', 'content' => implode(' ', [$admin['personal']['name'], $admin['personal']['surname']]), 'text' => $t['LOGS']]]}
	{if $logs}	
		<div class="{$grow}">
			<div class="rounded border">
				<div class="container">
					{foreach from = array_values($logs) item = log key = index}
						<div class="row {if $index%2}flex-lg-row-reverse{/if} no-gutters align-items-center my-3 my-sm-0">
							<div class="col-auto col-lg pr-3 pr-lg-0">
								<div class="text-right {if $index%2 != 0}text-lg-left{/if} text-muted small">
									<b>{date('H:i', strtotime($log['created']))}</b><br>
									<small class="text-muted">{date('d.m.Y', strtotime($log['created']))}</small>
								</div>
							</div>
							<div class="col-auto col-lg-1 pr-3 pr-lg-0 text-center flex-column d-none d-sm-flex">
								{if !$index}
									<div class="row h-50">
										<div class="col">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
								{else}
									<div class="row h-50">
										<div class="col border-right">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
								{/if}
								<div class="my-2">
									<span class="badge badge-dot bg-{$log['log']['color']} text-light {$log['log']['color']}">
										<i class="fa fa-{$log['log']['icon']} {if in_array($log['log']['icon'], ['plus'])}pt-1{/if}"></i>
									</span>
								</div>
								<div class="row h-50">
									<div class="col {if $index != count($logs)-1}border-right{/if}">&nbsp;</div>
									<div class="col">&nbsp;</div>
								</div>
							</div>
							<div class="col col-sm">
								<div class="card border-{$log['log']['color']} text-{$log['log']['color']}">
									<div class="card-body {if $index%2}text-lg-right{/if} small py-2 py-sm-3">
										{$log['data']['display']}
									</div>
								</div>
							</div>
						</div>
					{/foreach}
				</div>
			</div>
		</div>
	{else}
		{include "../addons/flash.tpl" flash=['title' => $t['RECORDS_EMTY_TITLE']]}
	{/if}
{/block}