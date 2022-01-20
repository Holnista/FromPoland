{if $topbar}
	<div class="row justify-content-between align-items-start no-gutters flex-xl-nowrap mb-3">
		{if $topbar['title']}
			<div class="col-12 col-xl-auto {if array_intersect(['search', 'manage', 'add'], $topbar['options']) || $smarty.capture.custom}mb-3 mb-xl-0{/if}">
				{if $topbar['title']['icon'] || $topbar['title']['content']}
					<h4 class="m-0 text-bold text-center d-inline">
						<strong>{if $topbar['title']['icon']}<i class="fa fa-{$topbar['title']['icon']}"></i>{/if}
						<span>{$base->clean($topbar['title']['content'])}</span></strong>
					</h4>
				{/if}
				{if $topbar['title']['text']}
					<small class="text-muted d-inline">
						<span>{$base->clean($topbar['title']['text'])}</span>
					</small>
				{/if}
			</div>
		{/if}
		{if array_intersect(['search', 'manage', 'add'], $topbar['options']) || $smarty.capture.custom || $smarty.capture.filters}
			<div class="col-12 col-xl-auto pl-xl-2">
				<div class="d-flex justify-content-between align-items-center flex-nowrap">
					{if array_intersect(['search'], $topbar['options'])}
						<form method="GET" class="input-group flex-grow-1 flex-nowrap">
							{$smarty.capture.filters}
							<input type="text" name="word" value="{$smarty.get.word}" class="form-control py-0 h-auto rounded-left" placeholder="{$t['SEARCH']}..." onchange="this.form.submit()">
							<div class="input-group-append">
								<button type="submit" class="btn rounded-right btn-outline-primary">
									<i class="fa fa-search"></i>
								</button>
							</div>
						</form>
					{/if}
					{$smarty.capture.custom}
					{if array_intersect(['manage', 'add'], $topbar['options'])}
						<div class="btn-group">
							{if array_intersect(['manage'], $topbar['options'])}
								<button type="button" class="btn rounded btn-outline-dark {if in_array('search', $topbar['options'])}ml-2{/if}" data-toggle="dropdown">
									<i class="fa fa-cog d-inline d-md-none"></i>
									<span class="d-none d-md-inline">{$t['OPTIONS']}</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right mt-2">
									<a href="{$base->PATH}/manage/import" class="dropdown-item">
										<span class="pl-2">{$t['IMPORT']}</span>
										<i class="fa fa-upload text-primary"></i>
									</a>
									<a href="{$base->PATH}/manage/export" class="dropdown-item">
										<span class="pl-2">{$t['EXPORT']}</span>
										<i class="fa fa-download text-primary"></i>
									</a>
								</div>
							{/if}
							{if array_intersect(['add'], $topbar['options'])}
								<a href="{$base->PATH}/add" class="btn rounded btn-primary {if array_intersect(['manage', 'search'], $topbar['options']) || $smarty.capture.custom}ml-2{/if}">
									<i class="fa fa-plus d-inline d-md-none"></i>
									<span class="d-none d-md-inline">{$t['CREATE']}</span>
								</a>
							{/if}
						</div>
					{/if}
				</div>
			</div>
		{/if}
	</div>
{/if}