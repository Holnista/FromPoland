{extends "../layout.tpl"}

{block "content"}
	<div class="row h-100 no-gutters">
		{if $count}
			<div class="col-12 col-xl-4 d-flex flex-column">
				<div class="row flex-grow-1 no-gutters">
					<div class="col-12 col-md-6 col-lg-4 col-xl-6 p-2">
						<div class="card shadow-sm text-center h-100">
							<div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
								<h1 class="card-title text-primary mb-3"><i class="fa fa-user-circle-o"></i></h1>
								<h6 class="card-subtitle mb-3 text-muted">{$count['admins']} {$t['ADMINS']}</h6>
								<a href="admins" class="btn rounded btn-sm btn-outline-info">{$t['SHOW']}</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-6 p-2">
						<div class="card shadow-sm text-center h-100">
							<div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
								<h1 class="card-title text-primary mb-3"><i class="fa fa-users"></i></h1>
								<h6 class="card-subtitle mb-3 text-muted">{$count['clients']} {$t['CLIENTS']}</h6>
								<a href="clients" class="btn rounded btn-sm btn-outline-info">{$t['SHOW']}</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-6 p-2">
						<div class="card shadow-sm text-center h-100">
							<div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
								<h1 class="card-title text-primary mb-3"><i class="fa fa-calendar-o"></i></h1>
								<h6 class="card-subtitle mb-3 text-muted">{$count['events']} {$t['EVENTS']}</h6>
								<a href="events" class="btn rounded btn-sm btn-outline-info">{$t['SHOW']}</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-6 p-2">
						<div class="card shadow-sm text-center h-100">
							<div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
								<h1 class="card-title text-primary mb-3"><i class="fa fa-ticket"></i></h1>
								<h6 class="card-subtitle mb-3 text-muted">{$count['coupons']} {$t['COUPONS']}</h6>
								<a href="coupons" class="btn rounded btn-sm btn-outline-info">{$t['SHOW']}</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-6 p-2">
						<div class="card shadow-sm text-center h-100">
							<div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
								<h1 class="card-title text-primary mb-3"><i class="fa fa-envelope-o"></i></h1>
								<h6 class="card-subtitle mb-3 text-muted">{$count['emails']} {$t['EMAILS']}</h6>
								<a href="emails" class="btn rounded btn-sm btn-outline-info">{$t['SHOW']}</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-6 p-2">
						<div class="card shadow-sm text-center h-100">
							<div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
								<h1 class="card-title text-primary mb-3"><i class="fa fa-rocket"></i></h1>
								<h6 class="card-subtitle mb-3 text-muted">{$count['logs']} {$t['ENTRIES']}</h6>
								<a href="logs" class="btn rounded btn-sm btn-outline-info">{$t['SHOW']}</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		{/if}
		<div class="col-12 col-md p-2">
			<div class="card shadow-sm">
				<div class="card-body bg-light">
					<span class="lead position-absolute">{$t['ACTIVITY']}</span>
					<canvas id="logs" height="154"></canvas>
				</div>
			</div>
			{if $events}
				<table class="table table-bordered table-hover table-sm mt-3 mb-0">
					<thead>
						<tr>
							<th class="text-left">{$t['TITLE']}</th>
							<th class="text-left d-none d-xl-table-cell">{$t['DATE']}</th>
						</tr>
					</thead>
					<tbody class="small">
						{foreach from = array_values($events) item = event}
							<tr>
								<td class="text-left" data-order="{clear($event['title'])}">
									<div class="row flex-column flex-xl-row align-items-center no-gutters flex-nowrap">
										<div class="col-auto mr-2 d-none d-xl-block">
											{if !$event['file']}<img src="{$event['data']['thumb']}" class="img-thumbnail" width="48">{else}
												<a href="{$event['data']['image']}" data-fancybox="events" data-caption="{$event['title']}">
													<img src="{$event['data']['thumb']}" alt="{$event['title']}" class="img-thumbnail p-0" width="48">
												</a>
											{/if}
										</div>
										<div class="col">
											<b>{$event['title']}</b>{if $event['subtitle']}<br>
											<small class="text-muted">{truncate(clear($event['subtitle']), 80)}</small>{/if}
										</div>
										<div class="col-auto ml-auto text-right">
											{if $event['others']['price']['promotion']}
												<b class="text-success">{price($event['others']['price']['promotion'])}</b><br>
												<small class="text-muted"><s>{price($event['others']['price']['basic'])}</s></small>
											{else if $event['others']['price']['basic']}
												<b class="text-success">{price($event['others']['price']['basic'])}</b>
											{else}
												<span class="badge badge-primary">{$t['PREORDER']}</span>
											{/if}
										</div>
									</div>
								</td>
								<td class="text-right d-none d-xl-table-cell" data-order="{$event['date']['day']}">
									<b>{date('d.m.Y', strtotime($event['date']['day']))}</b><br>
									<small class="text-muted">{sprintf('%s - %s', $event['date']['start'], $event['date']['end'])}</small>
								</td>
							</tr>
						{/foreach}
					</tbody>
				</table>
			{/if}
		</div>
	</div>
{/block}

{block "footer"}
	<script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>
	<script>
		new Chart(document.getElementById("logs").getContext("2d"),
		{
			type: "line",
			data: {
				labels: [{foreach from = $count['chart'] item = value key = date}"{date('d.m.Y', strtotime($date))}",{/foreach}],
				datasets: [{ data: [{foreach from = $count['chart'] item = value key = date}"{$value}",{/foreach}],
				backgroundColor: "rgba(199, 24, 31, 0.5)", borderColor: "{$base->COLOR}", borderWidth: 3, fill: true,
				cubicInterpolationMode: "monotone" }]
			},
			options:
			{
				responsive: true,
				maintainAspectRatio: false,
				plugins:
				{
					legend:
					{
						display: false
					}
				},
				layout:
				{
					padding:
					{
						top: 32
					}
				},
				scales:
				{
					x:
					{
						display: false,
						ticks:
						{
							display: false
						}
					},
					y:
					{
						display: false,
						ticks:
						{
							display: false,				
						}
					}
				}
			}
		});
	</script>
{/block}