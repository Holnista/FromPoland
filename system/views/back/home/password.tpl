{extends "../layout.tpl"}{assign "blank" true}

{block "content"}
	<section class="{$grow} justify-content-center align-items-center">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-12 col-md-6 col-lg-5 col-xl-4">
					<div class="row justify-content-between align-items-center flex-nowrap mb-3">
						<div class="col-auto">
							<h5 class="text-white">
								<b>{$base->NAME}</b>
							</h5>
						</div>
						<div class="col-auto">
							<h5>
								<span class="badge badge-primary p-2">CMS</span>
							</h5>
						</div>
					</div>
					<div class="bg-white p-3 mb-1 rounded">
						<form method="POST" action="{if !$key}password{/if}" class="validate">
							{if $key}
								<div class="form-group">
									<input name="password" type="password" class="form-control {$class}" required
									id="password" placeholder="{$t['NEW_PASSWORD']}" minlength="8" maxlength="32">
								</div>
							{else}
								<div class="form-group">
									<input name="email" type="email" class="form-control {$class}" required
									id="email" placeholder="{$t['EMAIL']}" minlength="3" maxlength="32">
								</div>
							{/if}
							<div class="row justify-content-between align-items-center flex-column-reverse flex-sm-row">
								<div class="col-12 col-sm-auto mt-2 mt-sm-0">
									<a href="/admin" class="d-block m-auto text-center">{$t['SIGNIN']}</a>
								</div>
								<div class="col-12 col-sm-auto">
									<input type="hidden" name="token" value="{md5($smarty.session.csrf)}">
									<button type="submit" class="btn rounded btn-block btn-primary">
										<span>{($key) ? $t['SAVE'] : $t['RESET_PASSWORD']}</span>
									</button>
								</div>
							</div>
						</form>
					</div>
					<div class="row justify-content-between align-items-center">
						<div class="col-auto">
							<small class="text-right text-uppercase text-muted">
								<small>Powered by KODIGO</small>
							</small>
						</div>
						<div class="col-auto">
							<small class="text-right text-uppercase text-muted">
								<small>v. {$base->VERSION}</small>
							</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
{/block}