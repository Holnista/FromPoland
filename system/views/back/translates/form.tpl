{extends "../layout.tpl"}

{block "content"}
	{include "../addons/topbar.tpl" topbar=['title' => ['icon' => 'language', 'content' => $t['TRANSLATES'], 'text' => ($translate) ? $t['EDIT'] : $t['CREATE']]]}
	<div class="{$grow} mt-2">
		<ul class="nav nav-tabs">
			<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-basic">{$t['BASIC']}</a></li>
		</ul>
		<form method="POST" class="{$grow} validate" enctype="multipart/form-data">
			<div class="tab-content rounded-bottom border border-top-0 mb-3">
				<div class="tab-pane fade show active px-3" id="tab-basic">
					<div class="form-group row align-items-center bg-light mb-0 py-3">
						<label for="key" class="col-sm-3 col-form-label">{$t['KEY']}</label>
						<div class="col-sm-9">
							<input type="text" name="key" value="{$translate['key']}" id="key"
							placeholder="{$t['KEY']}" class="form-control" required {if $translate && $me['id'] > 1}disabled{/if}>
						</div>
					</div>
					{foreach from = array_values($base->languages) item = language}
						<div class="form-group row align-items-center border-top bg-light mb-0 py-3">
							<label for="translation[{$language}]" class="col-sm-3 col-form-label">{$t['TRANSLATION']} ({mb_strtoupper($language)})</label>
							<div class="col-sm-9">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<img src="/{PATH_IMAGES}/template/icons/flags/{$language}.png">
										</div>
									</div>
									<input type="text" name="translation[{$language}]" value="{quotes($translate['translation'][$language])}"
									id="translation[{$language}]" placeholder="{$t['TRANSLATION']} ({mb_strtoupper($language)})" class="form-control">
								</div>
							</div>
						</div>
					{/foreach}
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