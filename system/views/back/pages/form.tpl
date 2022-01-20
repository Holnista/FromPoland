{extends "../layout.tpl"}

{block "header"}
	<link href="/{PATH_PUBLIC}/vendor/select2/select2.min.css" rel="stylesheet">
	<link href="/{PATH_PUBLIC}/vendor/select2/select2-bootstrap4.min.css" rel="stylesheet">
{/block}

{block "content"}
	{include "../addons/topbar.tpl" topbar=['title' => ['icon' => 'desktop', 'content' => $t['PAGES'], 'text' => ($page) ? $t['EDIT'] : $t['CREATE']]]}
	<div class="{$grow} mt-2">
		<ul class="nav nav-tabs">
			<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-basic">{$t['BASIC']}</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-text">{$t['CONTENT']}</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-meta">{$t['META']}</a></li>
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
										<input type="text" name="title[{$language}]" value="{$page['title'][$language]}"
										id="title[{$language}]" placeholder="{$t['TITLE']}" class="form-control" required>
									</div>
								</div>
							</div>
						</div>
					{/foreach}
					{foreach from = array_values($base->languages) item = language}
						<div data-language="{$language}">
							<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
								<label for="alias[{$language}]" class="col-sm-3 col-form-label">{$t['ALIAS']}</label>
								<div class="col-sm-9">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<img src="/{PATH_IMAGES}/template/icons/flags/{$language}.png">
											</div>
										</div>
										<input type="text" name="alias[{$language}]" value="{$page['alias'][$language]}"
										id="alias[{$language}]" placeholder="{$t['ALIAS']}" class="form-control" required>
									</div>
								</div>
							</div>
						</div>
					{/foreach}
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="place" class="col-sm-3 col-form-label">{$t['PLACEMENT']}</label>
						<div class="col-sm-9">
							<select name="place" id="place" class="form-control custom-select select2">
								<option value="" {if !$page['place']}selected{/if}>{$t['NONE']}</option>
								<option value="header" {if $page['place'] == 'header'}selected{/if}>{$t['HEADER']}</option>
								<option value="home" {if $page['place'] == 'home'}selected{/if}>{$t['HOME']}</option>
								<option value="footer" {if $page['place'] == 'footer'}selected{/if}>{$t['FOOTER']}</option>
							</select>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="place" class="col-sm-3 col-form-label">{$t['PARENT']}</label>
						<div class="col-sm-9">
							<select name="parent" id="parent" class="form-control custom-select select2">
								<option value="" {if !$page['parent']}selected{/if}>{$t['NONE']}</option>
								{foreach from = $parents item = parent}
									{if $parent['id'] != $category['id']}
										<option value="{$parent['id']}" {if $page['parent'] == $parent['id']}selected{/if}>
											{for $i = 1 to count(parents(TABLE_PAGES, $parent['id']))}──{/for} 
											{$parent['title']}
										</option>
									{/if}
								{/foreach}
							</select>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="sort" class="col-sm-3 col-form-label">{$t['SORT']}</label>
						<div class="col-sm-9">
							<input type="number" name="sort" value="{$page['sort']}"
							id="sort" placeholder="{$t['SORT']}" class="form-control">
						</div>
					</div>
					<div class="form-group row align-items-center bg-light mb-0 py-3">
						<label for="active" class="col col-sm-3 col-form-label">{$t['ACTIVE']}</label>
						<div class="col-auto col-sm-9 pt-1">
							<div class="custom-control custom-switch custom-switch-success">
								<input type="hidden" name="active" value="0">
								<input type="checkbox" id="active" name="active" value="1"
								{if $page['active'] || !$page}checked{/if} class="custom-control-input">
								<label class="custom-control-label" for="active"></label>
							</div>
						</div>
					</div>
				</div>
				<!---------------------------------------------------------------------------------------------------->
				<div class="tab-pane fade p-3" id="tab-text">
					<div id="sections">
						{if $page['sections']}{foreach from = $page['sections'] item = section key = index}
						{include file='../addons/sections.tpl' index = $index}{/foreach}{/if}
						<button type="button" class="btn rounded btn-block btn-success" 
						onclick="addSection(this)"><i class="fa fa-plus"></i></button>
					</div>
				</div>
				<!---------------------------------------------------------------------------------------------------->
				<div class="tab-pane fade px-3" id="tab-meta">
					{foreach from = array_values($base->languages) item = language}
						<div data-language="{$language}">
							<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
								<label for="meta[title][{$language}]" class="col-sm-3 col-form-label">{$t['META_TITLE']}</label>
								<div class="col-sm-9">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<img src="/{PATH_IMAGES}/template/icons/flags/{$language}.png">
											</div>
										</div>
										<input type="text" name="meta[title][{$language}]" value="{$page['meta']['title'][$language]}"
										id="meta[title][{$language}]" placeholder="{$t['META_TITLE']}" class="form-control">
									</div>
								</div>
							</div>
						</div>
					{/foreach}
					{foreach from = array_values($base->languages) item = language}
						<div data-language="{$language}">
							<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
								<label for="meta[desc][{$language}]" class="col-sm-3 col-form-label">{$t['META_DESC']}</label>
								<div class="col-sm-9">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<img src="/{PATH_IMAGES}/template/icons/flags/{$language}.png">
											</div>
										</div>
										<input type="text" name="meta[desc][{$language}]" value="{$page['meta']['desc'][$language]}"
										id="meta[desc][{$language}]" placeholder="{$t['META_DESC']}" class="form-control">
									</div>
								</div>
							</div>
						</div>
					{/foreach}
					{foreach from = array_values($base->languages) item = language}
						<div data-language="{$language}">
							<div class="form-group row align-items-center bg-light mb-0 py-3">
								<label for="meta[keys][{$language}]" class="col-sm-3 col-form-label">{$t['META_KEYS']}</label>
								<div class="col-sm-9">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<img src="/{PATH_IMAGES}/template/icons/flags/{$language}.png">
											</div>
										</div>
										<input type="text" name="meta[keys][{$language}]" value="{$page['meta']['keys'][$language]}"
										id="meta[keys][{$language}]" placeholder="{$t['META_KEYS']}" class="form-control">
									</div>
								</div>
							</div>
						</div>
					{/foreach}
				</div>
				<!---------------------------------------------------------------------------------------------------->
				<div class="tab-pane fade p-3" id="tab-image">
					<div class="form-group mb-0">
						<input type="file" name="images[]" class="form-control upload">
					</div>
					{if $page['file']}
						<div class="row">
							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-2" data-file>
								<div class="card mt-3">
									<img src="{$page['data']['image']}" class="card-img">
									<div class="card-img-overlay d-flex align-items-start justify-content-end p-1">
										<button type="button" class="btn btn-danger badge-dot badge-float badge-sm" 
										data-remove-file="{path(TABLE_PAGES, $page['id'])}">
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
	<script src="/{PATH_PUBLIC}/vendor/select2/select2.min.js"></script>
	{include "../addons/sections.tpl" index=""}
	{include "../addons/tinymce.tpl"}
{/block}