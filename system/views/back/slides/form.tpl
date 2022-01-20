{extends "../layout.tpl"}

{block "content"}
	{include "../addons/topbar.tpl" topbar=['title' => ['icon' => 'picture-o', 'content' => $t['SLIDES'], 'text' => ($slide) ? $t['EDIT'] : $t['CREATE']]]}
	<div class="{$grow} mt-2">
		<ul class="nav nav-tabs">
			<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-basic">{$t['BASIC']}</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-text">{$t['CONTENT']}</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-image">{$t['IMAGE']}</a></li>
			{include "../addons/languages.tpl"}
		</ul>
		<form method="POST" class="{$grow} validate" enctype="multipart/form-data">
			<div class="tab-content rounded-bottom border border-top-0 mb-3">
				<div class="tab-pane fade show active px-3" id="tab-basic">
					{foreach from = array_values($base->languages) item = language}
						<div data-language="{$language}">
							<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
								<label for="title[{$language}]" class="col-sm-3 col-form-label">{$t['TITLE']}</label>
								<div class="col-sm-9">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<img src="/{PATH_IMAGES}/template/icons/flags/{$language}.png">
											</div>
										</div>
										<input type="text" name="title[{$language}]" value="{$slide['title'][$language]}"
										id="title[{$language}]" placeholder="{$t['TITLE']}" class="form-control" required>
									</div>
								</div>
							</div>
						</div>
					{/foreach}
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="sort" class="col-sm-3 col-form-label">{$t['SORT']}</label>
						<div class="col-sm-9">
							<input type="number" name="sort" value="{$slide['sort']}"
							id="sort" placeholder="{$t['SORT']}" class="form-control">
						</div>
					</div>
					<div class="form-group row align-items-center bg-light mb-0 py-3">
						<label for="active" class="col col-sm-3 col-form-label">{$t['ACTIVE']}</label>
						<div class="col-auto col-sm-9 pt-1">
							<div class="custom-control custom-switch custom-switch-success">
								<input type="hidden" name="active" value="0">
								<input type="checkbox" id="active" name="active" value="1"
								{if $slide['active'] || !$slide}checked{/if} class="custom-control-input">
								<label class="custom-control-label" for="active"></label>
							</div>
						</div>
					</div>
				</div>
				<!---------------------------------------------------------------------------------------------------->
				<div class="tab-pane fade p-3" id="tab-text">
					{foreach from = array_values($base->languages) item = language}
						<div data-language="{$language}">
							<textarea name="text[{$language}]">{$slide['text'][$language]}</textarea>
						</div>
					{/foreach}
				</div>
				<!---------------------------------------------------------------------------------------------------->
				<div class="tab-pane fade p-3" id="tab-image">
					<div class="form-group mb-0">
						<input type="file" name="images[]" class="form-control upload">
					</div>
					{if $slide['file']}
						<div class="row">
							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-2" data-file>
								<div class="card mt-3">
									<img src="{$slide['data']['image']}" class="card-img">
									<div class="card-img-overlay d-flex align-items-start justify-content-end p-1">
										<button type="button" class="btn btn-danger badge-dot badge-float badge-sm" 
										data-remove-file="{path(TABLE_SLIDES, $slide['id'])}">
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
	{include "../addons/tinymce.tpl"}
{/block}