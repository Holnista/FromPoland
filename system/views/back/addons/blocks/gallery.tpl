{extends "../blocks/block.tpl"}

{block "content"}
	<div class="title badge badge-info rounded p-2">Galeria zdjęć</div>
	<script>var selectGalleryButton = (selectGalleryButton ? selectGalleryButton : null);</script>
	<div class="input-group">
		<img src="{$content[$type][$block['value']]['data']['thumb']}" 
		class="w-100 img-fluid rounded pointer mb-1 {if !$block}d-none{/if}" 
		onclick="$(this).next().next().next().find('button').trigger('click');">
		
		<input type="text" value="{$content[$type][$block['value']]['title']}" class="form-control rounded-left" disabled readonly>
		<input type="hidden" name="{$field}[value]" value="{$block['value']}" class="form-control rounded-left" readonly>
		<div class="input-group-append">
			<button data-target="#{$id}_settings" data-toggle="modal" onclick="selectGalleryButton = this;"
			type="button" class="btn rounded-right btn-primary">{$t['SELECT']}</button>
		</div>
	</div>
	<div class="modal fade" id="{$id}_settings">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">{$t['SELECT']}</h5>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center">
					{if $content[$type]}
						<table class="table table-bordered table-hover table-sm">
							<thead>
								<tr>
									<th class="text-left d-none d-md-table-cell" width="80">ID</th>
									<th class="text-left">{$t['TITLE']}</th>
									<th class="text-center disabled" width="160">{$t['OPTIONS']}</th>
								</tr>
							</thead>
							<tbody>
								{foreach from = array_values($content[$type]) item = gallery}
									<tr>
										<td class="text-right text-muted d-none d-md-table-cell">{$gallery['id']}</td>
										<td class="text-left" data-order="{clear($gallery['title'])}">
											<div class="row align-items-center no-gutters flex-nowrap">
												<div class="col-auto d-none d-xl-block mr-2">
													{if !$gallery['data']['images']}<img src="{$gallery['data']['thumb']}" class="img-thumbnail" width="48">{else}
														<a href="{$gallery['data']['image']}" data-fancybox="galleries" data-caption="{$gallery['title']}">
															<img src="{$gallery['data']['thumb']}" alt="{$gallery['title']}" class="img-thumbnail p-0" width="48">
														</a>
													{/if}
												</div>
												<div class="col">
													<b>{$gallery['title']}</b><br>
													<small class="text-muted">{$gallery['alias']}</small>
												</div>
											</div>
										</td>
										<td class="text-center">
											<button data-dismiss="modal" onclick="$(selectGalleryButton).parent().prev().val('{$gallery['id']}')
											.prev().val('{$gallery['title']}').prev().attr('src', '{$gallery['data']['thumb']}').removeClass('d-none');"
											type="button" class="btn rounded-right btn-primary">{$t['SELECT']}</button>
										</td>
									</tr>
								{/foreach}
							</tbody>
						</table>
					{else}
						{include "../../addons/flash.tpl" flash=['title' => $t['RECORDS_EMTY_TITLE']]}
					{/if}
				</div>
			</div>
		</div>
	</div>
	
{/block}