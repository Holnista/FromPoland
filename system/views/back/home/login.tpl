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
								<span class="badge badge-danger p-2">CMS</span>
							</h5>
						</div>
					</div>
					{if $smarty.session.attempt >= 3}
						<div class="alert alert-danger text-center py-5">
							<h4 class="alert-heading">
							<i class="fa fa-ban"></i> {$t['SIGNIN_BLOCKED_TITLE']}</h4>
							<p class="m-0">{$t['SIGNIN_BLOCKED_TEXT']}</p>
						</div>
					{else}
						<div class="bg-white p-3 mb-1 rounded">
							<form method="POST" action="/admin" class="validate">
								<div class="form-group">
									<input name="email" type="email" class="form-control {$class}" required
									id="email" placeholder="{$t['EMAIL']}" minlength="3" maxlength="32">
								</div>
								<div class="form-group">
									<input name="password" type="password" class="form-control {$class}" required
									id="password" placeholder="{$t['PASSWORD']}" minlength="8" maxlength="32">
								</div>
								<div class="row justify-content-between align-items-center flex-column-reverse flex-sm-row">
									<div class="col-12 col-sm-auto mt-2 mt-sm-0">
										<a href="password" class="d-block m-auto text-center">{$t['RESET_PASSWORD']}</a>
									</div>
									<div class="col-12 col-sm-auto">
										<input type="hidden" name="token" value="{md5($base->get('SESSION.csrf'))}">
										<button type="submit" class="btn rounded btn-block btn-danger">
											<span>{$t['SIGNIN']}</span>
										</button>
									</div>
								</div>
							</form>
						</div>
						<div class="row justify-content-between align-items-center">
							<div class="col-auto">
								<small class="text-right text-uppercase text-muted">
									<small>Powered by <a href="https://kodigo.pl" target="_blank" rel="noopener, nofollow" class="text-muted">KODIGO</a></small>
								</small>
							</div>
							<div class="col-auto">
								<small class="text-right text-uppercase text-muted">
									<small>v. {$base->VERSION}</small>
								</small>
							</div>
						</div>
					{/if}
				</div>
			</div>
		</div>
	</section>
{/block}