{extends "../layout.tpl"}

{block "content"}
	{include "../addons/topbar.tpl" topbar=['title' => ['icon' => 'user-circle-o', 'content' => $t['ADMINS'], 'text' => ($admin) ? $t['EDIT'] : $t['CREATE']]]}
	<div class="{$grow} mt-2">
		<ul class="nav nav-tabs">
			<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-basic">{$t['BASIC']}</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-permissions">{$t['PERMISSIONS']}</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-image">{$t['IMAGE']}</a></li>
		</ul>
		<form method="POST" class="{$grow} validate" enctype="multipart/form-data">
			<div class="tab-content rounded-bottom border border-top-0 mb-3">
				<div class="tab-pane fade show active px-3" id="tab-basic">
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="email" class="col-sm-3 col-form-label">{$t['EMAIL']}</label>
						<div class="col-sm-9">
							<input type="email" name="email" value="{$admin['email']}" id="email" minlength="2"
							maxlength="64" placeholder="{$t['EMAIL']}" class="form-control" required>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="password" class="col-sm-3 col-form-label">{$t['PASSWORD']}</label>
						<div class="col-sm-9">
							<div class="input-group">
								<input type="text" name="password" id="password" minlength="8"
								placeholder="{(!$admin) ? $t['PASSWORD'] : $t['NEW_PASSWORD']}"
								class="form-control" maxlength="64" {if !$admin}required{/if}>
								<div class="input-group-append">
									<button class="btn rounded-right btn-outline-secondary" 
									type="button" data-random-password>
										<i class="fa fa-refresh"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="personal[name]" class="col-sm-3 col-form-label">{$t['NAME']}</label>
						<div class="col-sm-9">
							<input type="text" name="personal[name]" value="{$admin['personal']['name']}" minlength="2"
							maxlength="64" id="personal[name]" placeholder="{$t['NAME']}" class="form-control" required>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="personal[surname]" class="col-sm-3 col-form-label">{$t['SURNAME']}</label>
						<div class="col-sm-9">
							<input type="text" name="personal[surname]" value="{$admin['personal']['surname']}" minlength="2"
							maxlength="64" id="personal[surname]" placeholder="{$t['SURNAME']}" class="form-control" required>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="employment[department]" class="col-sm-3 col-form-label">{$t['DEPARTMENT']}</label>
						<div class="col-sm-9">
							<input type="text" name="employment[department]" value="{$admin['employment']['department']}"
							id="employment[department]" placeholder="{$t['DEPARTMENT']}" class="form-control typeahead"
							data-hints='[{foreach from = $hints["department"] item = hint}"{$hint}", {/foreach}""]'
							autocomplete="off" minlength="2" maxlength="64" required>
						</div>
					</div>
					<div class="form-group row align-items-center bg-light mb-0 py-3">
						<label for="employment[position]" class="col-sm-3 col-form-label">{$t['POSITION']}</label>
						<div class="col-sm-9">
							<input type="text" name="employment[position]" value="{$admin['employment']['position']}"
							id="employment[position]" placeholder="{$t['POSITION']}" class="form-control typeahead"
							data-hints='[{foreach from = $hints["position"] item = hint}"{$hint}", {/foreach}""]'
							autocomplete="off" minlength="2" maxlength="64" required>
						</div>
					</div>
				</div>
				<!---------------------------------------------------------------------------------------------------->
				<div class="tab-pane fade px-2 pb-3" id="tab-permissions">
					<div class="row no-gutters">
						{foreach from = $permissions item = permission key = group}
							<div class="col-12 col-md-6 px-2">
								<div class="card mt-3">
									<div class="card-header px-3">{$t[$group]}</div>
									<div class="card-body p-0">
										<table class="table table-hover table-sm m-0">
											<tbody class="small">
												{foreach from = $permission item = value key = key}
													<tr>
														<td class="px-3">{$t[$value]}</td>
														<td class="text-center" width="50">
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" name="permissions[]" value="{$key}"
																id="{$key}"{if in_array($key, $admin['permissions']) || !$admin}checked{/if}>
																<label class="custom-control-label" for="{$key}"></label>
															</div>
														</td>
													</tr>
												{/foreach}
											</tbody>
										</table>
									</div>
								</div>
							</div>
						{/foreach}
					</div>
				</div>
				<!---------------------------------------------------------------------------------------------------->
				<div class="tab-pane fade p-3" id="tab-image">
					<div class="form-group mb-0">
						<input type="file" name="images[]" class="form-control upload">
					</div>
					{if $admin['file']}
						<div class="row">
							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-2" data-file>
								<div class="card mt-3">
									<img src="{$admin['data']['image']}" class="card-img">
									<div class="card-img-overlay d-flex align-items-start justify-content-end p-1">
										<button type="button" class="btn btn-danger badge-dot badge-float badge-sm" 
										data-remove-file="{path(TABLE_ADMINS, $admin['id'])}">
											<i class="fa fa-times"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					{/if}
				</div>
			</div>
			<div class="row justify-content-between align-items-center flex-column-reverse flex-sm-row mt-auto">
				<div class="col-12 col-sm-auto mt-2 mt-sm-0">
					<a href="javascript:history.back()" class="btn rounded btn-block btn-outline-dark">
						<span>{$t['GO_BACK']}</span>
					</a>
				</div>
				<div class="col-12 col-sm-auto">
					<input type="hidden" name="token" value="{md5($smarty.session.csrf)}">
					<button type="submit" class="btn rounded btn-block btn-primary">
						<span>{$t['SAVE']}</span>
					</button>
				</div>
			</div>
		</form>
	</div>
{/block}

{block "footer"}
	<script>
		//----- Random password
		$("[data-random-password]").click(function()
		{
			var result = '', characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', charactersLength = characters.length;
			for(var i = 0; i < 10; i++) result += characters.charAt(Math.floor(Math.random() * charactersLength));
			$("input[name='password']").val(result);
		});
	</script>
{/block}