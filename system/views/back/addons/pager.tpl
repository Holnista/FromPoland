{if $pager}
	<div class="row justify-content-between align-items-center flex-nowrap">
		<div class="col-auto">
			<p class="text-muted mb-1">
				<strong>{$pager['total']}</strong> 
				<span>{mb_strtolower($t['RECORDS'])}</span>
			</p>
		</div>
		<div class="col-auto">
			{assign "start" value=(($pager['page'] - $pager['links']) > 0) ? $pager['page'] - $pager['links'] : 1}
			{assign "end" value=($pager['pages'] > ($pager['page'] + $pager['links'])) ? $pager['page'] + $pager['links'] : $pager['pages']}
			<ul class="pagination m-0">
				<li class="page-item {if $pager['page'] == 1}disabled{/if}">
					<a href="{replaceUrl(['page' => $pager['page']-1])}" class="page-link">
						<i class="fa fa-arrow-left"></i>
					</a>
				</li>
				{if $start > 1}
					<li class="page-item d-none d-md-block {if $pager['page'] == 1}active{/if}">
						<a href="{replaceUrl(['page' => 1])}" class="page-link">1</a>
					</li>
					<li class="page-item d-none d-md-block disabled">
						<a class="page-link">&hellip;</a>
					</li>
				{/if}
				{for $i = $start to $end}
					<li class="page-item d-none d-md-block {if $pager['page'] == $i}active{/if}">
						<a href="{replaceUrl(['page' => $i])}" class="page-link">{$i}</a>
					</li>
				{/for}
				<li class="page-item d-block d-md-none active">
					<a href="{replaceUrl(['page' => $pager['page']])}" class="page-link">{$pager['page']}</a>
				</li>
				{if $pager['pages'] > $end}
					<li class="page-item d-none d-md-block disabled">
						<a class="page-link">&hellip;</a>
					</li>
					<li class="page-item d-none d-md-block {if $pager['page'] == $pager['pages']}active{/if}">
						<a href="{replaceUrl(['page' => $pager['pages']])}" class="page-link">{$pager['pages']}</a>
					</li>
				{/if}
				<li class="page-item {if $pager['page'] == $pager['pages']}disabled{/if}">
					<a href="{replaceUrl(['page' => $pager['page']+1])}" class="page-link">
						<i class="fa fa-arrow-right"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
{/if}