{extends "../blocks/block.tpl"}

{block "content"}
	<div class="title badge badge-info rounded p-2">Prosta ikona</div>
	<script>var selectIconButton = (selectIconButton ? selectIconButton : null);</script>
	<div class="text-center">
		{assign "default" path('/', PATH_IMAGES, 'template', 'icons', 'extensions', '7z.svg')}
		<img src="{($block['value'][0]) ? $block['value'][0] : sprintf('/%s', $default)}"
		class="img-thumbnail pointer" data-target="#{$id}_settings" data-toggle="modal" 
		onclick="selectIconButton = this;" width="128">
		<input type="hidden" name="{$field}[value][0]" value="{$block['value'][0]}">
		<input type="text" name="{$field}[value][1]" value="{$block['value'][1]}" 
		class="form-control text-center mt-1" placeholder="{$t['TITLE']}">
		<input type="text" name="{$field}[value][2]" value="{$block['value'][2]}" 
		class="form-control form-control-sm text-center mt-1" placeholder="{$t['SUBTITLE']}">
	</div>
	<div class="modal fade" id="{$id}_settings">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">{$t['SELECT']}</h5>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center">
					<div class="row no-gutters">
						{assign "path" path(PATH_PUBLIC, 'images', 'template', 'icons', 'extensions')}
						{foreach from = scandir($path) item = icon}
							{if is_file(path($path, $icon))}
								{assign "url" sprintf('/%s', path($path, $icon))}
								<div class="col-12 col-md-3 p-1">
									<a class="position-relative d-block" data-dismiss="modal"
									onclick="$(selectIconButton).attr('src', '{$url}').next().val('{$url}')">
										<img src="/{PATH_IMAGES}/template/1x1.png" class="card-img w-100">
										<div class="card-img-overlay d-flex align-items-center justify-content-center p-0">
											<img src="{$url}" class="pointer h-100">
										</div>
									</a>
								</div>
							{/if}
						{/foreach}
					</div>
				</div>
			</div>
		</div>
	</div>
{/block}