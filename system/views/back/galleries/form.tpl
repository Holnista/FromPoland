{extends "../layout.tpl"}

{block "header"}
	<link href="/{PATH_PUBLIC}/vendor/select2/select2.min.css" rel="stylesheet">
	<link href="/{PATH_PUBLIC}/vendor/select2/select2-bootstrap4.min.css" rel="stylesheet">
{/block}

{block "content"}
	{include "../addons/topbar.tpl" topbar=['title' => ['icon' => 'camera', 'content' => $t['GALLERIES'], 'text' => ($gallery) ? $t['EDIT'] : $t['CREATE']]]}
	<div class="{$grow} mt-2">
		<ul class="nav nav-tabs">
			<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-basic">{$t['BASIC']}</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-meta">{$t['META']}</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-image">{$t['IMAGES']}</a></li>
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
										<input type="text" name="title[{$language}]" value="{$gallery['title'][$language]}"
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
										<input type="text" name="alias[{$language}]" value="{$gallery['alias'][$language]}"
										id="alias[{$language}]" placeholder="{$t['ALIAS']}" class="form-control" required>
									</div>
								</div>
							</div>
						</div>
					{/foreach}
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="sort" class="col-sm-3 col-form-label">{$t['SORT']}</label>
						<div class="col-sm-9">
							<input type="number" name="sort" value="{$gallery['sort']}"
							id="sort" placeholder="{$t['SORT']}" class="form-control">
						</div>
					</div>
					<div class="form-group row align-items-center bg-light mb-0 py-3">
						<label for="active" class="col col-sm-3 col-form-label">{$t['ACTIVE']}</label>
						<div class="col-auto col-sm-9 pt-1">
							<div class="custom-control custom-switch custom-switch-success">
								<input type="hidden" name="active" value="0">
								<input type="checkbox" id="active" name="active" value="1"
								{if $gallery['active'] || !$gallery}checked{/if} class="custom-control-input">
								<label class="custom-control-label" for="active"></label>
							</div>
						</div>
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
										<input type="text" name="meta[title][{$language}]" value="{$gallery['meta']['title'][$language]}"
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
										<input type="text" name="meta[desc][{$language}]" value="{$gallery['meta']['desc'][$language]}"
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
										<input type="text" name="meta[keys][{$language}]" value="{$gallery['meta']['keys'][$language]}"
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
						<input type="file" name="images[]" multiple="true" class="form-control upload">
					</div>
					{if $gallery['data']['images']}
						<div class="row" id="sortable">
							{foreach from = array_values($gallery['data']['images']) item = image}
								<div class="col-sm-6 col-md-6 col-lg-3" data-file="{path(TABLE_IMAGES, $image['id'])}">
									<a href="{$image['data']['image']}" class="card mt-3" data-fancybox="gallery">
										<img src="{$image['data']['thumb']}" class="card-img">
										<div class="card-img-overlay d-flex align-items-start justify-content-end p-1">
											<button type="button" class="btn btn-danger badge-dot badge-float badge-sm" 
											data-remove-file="{path(TABLE_IMAGES, $image['id'])}">
												<i class="fa fa-times"></i>
											</button>
										</div>
									</a>
								</div>
							{/foreach}
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
	<script src="/{PATH_PUBLIC}/vendor/sortable/sortable.min.js"></script>
	<script src="/{PATH_PUBLIC}/vendor/select2/select2.min.js"></script>
	{include "../addons/tinymce.tpl"}
	{if $gallery}
		<script>
			//----- Setup sortable
			if($("#sortable").length)
			{
				Sortable.create(document.getElementById("sortable"),
				{
					animation: 150,
					onSort: function()
					{
						$("#sortable [data-file]").each(function()
						{
							var url = $(this).data("file"), sort = parseInt($(this).index())+1;
							$.ajax({ type: "POST", url: "ajax/update/"+url, data: { sort: sort } });
						});
					}
				});
			}
		</script>
	{/if}
{/block}