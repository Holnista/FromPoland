{if strlen($index)}
	{assign "background" ['accent' => 'Basic 1', 'second' => 'Basic 2', 'light' => 'Light', 'shade' => 'Shade', 'dark' => 'Dark']}
	{if $section['background']}{assign "custom" !in_array($section['background'], array_keys($background))}{/if}
	{assign "width" ['col-md-12' => '12/12', 'col-md-10' => '10/12', 'col-md-8' => '8/12', 'col-md-6' => '6/12', 'col-md-4' => '4/12', 'col-md-3' => '3/12', 'col-md-2' => '2/12']}
	<fieldset class="bg-light border mb-3 p-3 {if $section['background'] && !$custom}bg-custom-{$section['background']}{/if}" data-section="{$index}">
		<div class="row justify-content-between align-items-center no-gutters mb-3">
			<div class="col-auto">
				<div class="btn-group">
					<button type="button" 
					class="btn rounded-left btn-light border" onclick="moveSection(this, 'up')">
					<i class="fa fa-arrow-up"></i></button>
					<button type="button" 
					class="btn rounded-right btn-light border" onclick="moveSection(this, 'down')">
					<i class="fa fa-arrow-down"></i></button>
				</div>
			</div>
			<div class="col">
				{foreach from = array_values($base->languages) item = language}
					<div data-language="{$language}">
						<div class="input-group flex-nowrap">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<img src="/{PATH_IMAGES}/template/icons/flags/{$language}.png">
								</div>
							</div>
							<input type="text" name="sections[{$index}][header][title][{$language}]" value="{quotes($section['header']['title'][$language])}" 
							placeholder="{$t['TITLE']}" class="form-control typeahead" minlength="2" maxlength="128" style="border-radius: 0 .25rem .25rem 0;">
						</div>
					</div>
				{/foreach}
			</div>
			<div class="col">
				{foreach from = array_values($base->languages) item = language}
					<div data-language="{$language}">
						<div class="input-group flex-nowrap">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<img src="/{PATH_IMAGES}/template/icons/flags/{$language}.png">
								</div>
							</div>
							<input type="text" name="sections[{$index}][header][subtitle][{$language}]" value="{quotes($section['header']['subtitle'][$language])}" 
							placeholder="{$t['SUBTITLE']}" class="form-control typeahead" minlength="2" maxlength="128" style="border-radius: 0 .25rem .25rem 0;">
						</div>
					</div>
				{/foreach}
			</div>
			<div class="col-auto">
				<a href="#" class="btn rounded btn-danger" data-toggle="modal" data-target="#sections_remove_{$index}">
					<i class="fa fa-times"></i>
				</a>
			</div>
			<div class="col-auto">
				<a href="#" class="btn rounded btn-primary" data-toggle="collapse" data-target="#sections_settings_{$index}">
					<i class="fa fa-cog"></i>
				</a>
			</div>
		</div>
		<div class="accordion">
			<div id="sections_settings_{$index}" class="accordion-collapse collapse">
				<div class="accordion-body mb-3">
					<div class="card">
						<div class="card-body">
							<strong>This is the first item's accordion body.</strong> It is shown by default, 
							until the collapse plugin adds the appropriate classes that we use to style each element. 
							These classes control the overall appearance, as well as the showing and hiding via CSS transitions. 
							You can modify any of this with custom CSS or overriding our default variables. It's also worth noting 
							that just about any HTML can go within the <code>.accordion-body</code>, 
							though the transition does limit overflow.
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="row no-gutters" data-columns>
			{foreach from = array_values($section['columns']) item = column key = cindex}
				<div class="col">
					<div class="card upload">
						{foreach from = array_values($column['blocks']) item = block key = bindex}
							{include file=sprintf('../addons/blocks/%s.back.tpl', $block['type'])}
						{/foreach}
						<a href="#" class="btn rounded btn-block btn-light" 
						data-toggle="modal" data-target="#blocks" 
						onclick="addBlockButton = this;">
						<i class="fa fa-plus"></i></a>
					</div>
					<div class="row align-items-end justify-content-between no-gutters mt-2">
						<div class="col-auto">
							<button type="button" 
							class="btn btn-outline-info btn-sm"
							onclick="moveColumn(this, 'left')">
							<i class="fa fa-arrow-left"></i>
							</button>
						</div>
						<div class="col-auto">
							<button type="button" 
							class="btn btn-outline-info btn-sm"
							onclick="moveColumn(this, 'right')">
							<i class="fa fa-arrow-right"></i>
							</button>
						</div>
					</div>
				</div>
			{/foreach}
			{capture name="column"}
				<div class="col">
					<div class="card upload">
						<button type="button" class="btn btn-danger badge-dot badge-float badge-sm"
						onclick="removeColumn(this)"><i class="fa fa-times"></i></button>
						
						<a href="#" class="btn rounded btn-block btn-light" 
						data-toggle="modal" data-target="#blocks" 
						onclick="addBlockButton = this;">
						<i class="fa fa-plus"></i></a>
					</div>
					<div class="row align-items-end justify-content-between no-gutters mt-2">
						<div class="col-auto">
							<button type="button" 
							class="btn btn-outline-info btn-sm"
							onclick="moveColumn(this, 'left')">
							<i class="fa fa-arrow-left"></i>
							</button>
						</div>
						<div class="col-auto">
							<button type="button" 
							class="btn btn-outline-info btn-sm"
							onclick="moveColumn(this, 'right')">
							<i class="fa fa-arrow-right"></i>
							</button>
						</div>
					</div>
				</div>
			{/capture}
			{if !$section['columns']}{$smarty.capture.column}{/if}
			<div class="col-auto ml-auto">
				<button type="button" class="btn rounded btn-block btn-outline-success h-100" 
				onclick="addColumn(this)"><i class="fa fa-plus"></i></button>
			</div>
		</div>
		<div class="modal fade" id="sections_remove_{$index}">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">{$t['WARNING']}</h5>
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body text-center py-5">
						<p class="m-0">{sprintf($t['RECORDS_REMOVE_TITLE'], 'tą sekcję')}</p>
						<p class="m-0 text-danger">{$t['RECORDS_REMOVE_TEXT']}</p>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn rounded btn-outline-dark" data-dismiss="modal">
							<span>{$t['CANCEL']}</span>
						</button>
						<button type="button" class="btn rounded btn-danger" data-dismiss="modal"
						onclick="removeSection(this)"><span>{$t['REMOVE']}</span></button>
					</div>
				</div>
			</div>
		</div>
	</fieldset>
{else}
	<script>var addBlockButton = null, removeSectionButton = null, blocksArray = [];</script>
	{assign "blocks" ['text' => 'Pole tekstowe', 'tinymce' => 'Edytor tekstowy', 'gallery' => 'Galeria zdjęć', 'member' => 'Członek zespołu', 
	'article' => 'Artykuł bloga', 'counter' => 'Licznik cyfrowy', 'image' => 'Prosty obraz', 'youtube' => 'Film YouTube', 'slider' => 'Karuzela zdjęć']}
	{foreach from = $blocks item = title key = key}{assign "path" path($base->get('UI'), 'back', 'addons', 'blocks', sprintf('%s.back.tpl', $key))}
	{if file_exists($path)}<script>blocksArray["{$key}"] = `{include file=$path}`;</script>{/if}{/foreach}
	
	<div class="modal fade" id="blocks">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Wybierz element</h5>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center p-5">
					{foreach from = $blocks item = title key = key}
						{assign "path" path($base->get('UI'), 'back', 'addons', 'blocks', sprintf('%s.back.tpl', $key))}
						{if file_exists($path)}
							<div class="row my-1">
								<div class="col">
									<button type="button" class="btn rounded btn-block btn-dark"
									onclick="addBlock('{$key}')" data-dismiss="modal">{$title}</button>
								</div>
							</div>
						{/if}
					{/foreach}
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="remove">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">{$t['WARNING']}</h5>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center py-5">
					<p class="m-0">{sprintf($t['RECORDS_REMOVE_TITLE'], 'tą sekcję')}</p>
					<p class="m-0 text-danger">{$t['RECORDS_REMOVE_TEXT']}</p>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn rounded btn-outline-dark" data-dismiss="modal">
						<span>{$t['CANCEL']}</span>
					</button>
					<button type="button" class="btn rounded btn-danger" data-dismiss="modal"
					onclick="removeSection(this)"><span>{$t['REMOVE']}</span></button>
				</div>
			</div>
		</div>
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/jquery.md5@1.0.2/index.min.js"></script>
	<script>

		//====================================================================================================
		function addSection(button)
		{
			var index = $.md5(""+Date.now()+""), section = $($.parseHTML(`{include "../addons/sections.tpl" section = null index="0"}`));
			
			section.attr("data-section", index);
			section.find("[id='sections_remove_0']").attr("id", "sections_remove_"+index);
			section.find("[id='sections_settings_0']").attr("id", "sections_settings_"+index);
			section.find("[data-target='#sections_remove_0']").attr("data-target", "#sections_remove_"+index);
			section.find("[data-target='#sections_settings_0']").attr("data-target", "#sections_settings_"+index);
			section.find("[name^='sections']").each(function() { $(this).attr("name", 
			$(this).attr("name").replace("[0]", "["+index+"]")); });
			
			section.insertBefore(button);
			$(section).find(".modal").appendTo("body");
			refreshSections();
		}
		
		//====================================================================================================
		function moveSection(button, direction)
		{
			var section = $(button).closest("[data-section]");
			if(direction == "up" && section.prev("[data-section]").length) section.insertBefore(section.prev("[data-section]"));
			if(direction == "down" && section.next("[data-section]").length) section.insertAfter(section.next("[data-section]"));
			refreshSections();
		}
		
		//====================================================================================================
		function removeSection(button)
		{
			var section = $(button).closest("[id^='sections_remove_']").attr("id").replace("sections_remove_", "");
			if($("#sections [data-section]").length > 1)
			{
				$(button).attr("disabled", "disabled");
				section = $("[data-section='"+section+"']");
				section.find("button").attr("disabled", "disabled");
				section.fadeOut(function()
				{
					section.remove();
					$(button).closest(".modal").modal("toggle");
				});
			}
		}
		
		//====================================================================================================
		function addColumn(button)
		{
			var columns = $(button).closest("[data-section]").find("[data-columns]");
			$($.parseHTML(`{$smarty.capture.column}`)).insertAfter(columns.find("> .col").last());
		}
		
		//====================================================================================================
		function moveColumn(button, direction)
		{
			var column = $(button).closest(".col");
			if(direction == "left" && column.prev(".col").length) column.insertBefore(column.prev(".col"));
			if(direction == "right" && column.next(".col").length) column.insertAfter(column.next(".col"));
			refreshSections();
		}
		
		//====================================================================================================
		function removeColumn(button)
		{
			var columns = $(button).closest("[data-section]").find("[data-columns]");
			if(columns.find(".col").length > 1) $(button).closest(".col").remove();
		}
		
		//====================================================================================================
		function addBlock(block)
		{
			var column = $(addBlockButton).closest(".card");
			var section = column.closest("[data-section]").data("section");
			var block = $($.parseHTML(blocksArray[block])).insertBefore(addBlockButton);
			
			block.find("[name^='sections']").each(function()
			{
				var name = $(this).attr("name");
				name = name.replace("sections[]", "sections["+section+"]");
				name = name.replace("[columns][]", "[columns]["+column.closest(".col").index()+"]");
				name = name.replace("[blocks][]", "[blocks]["+(column.find(".card").length-1)+"]");
				
				//Update input names
				$(this).attr("name", $(this).attr("name").replace("sections[]", "sections["+column.closest("[data-section]").data("section")+"]")
				.replace("[columns][]", "[columns]["+column.closest(".col").index()+"]").replace("[blocks][]", "[blocks]["+(column.find(".card").length-1)+"]"));
				
				//Update input ids
				$(this).attr("id", name.replace(/\[/g, "_").replace(/\]/g, "")); 
				
				if($(this).attr("id").indexOf("_value") >= 0)
				if($(this).parent().find("button").attr("data-src")) $(this).parent().find("button").attr("data-src", 
				$(this).parent().find("button").attr("data-src").replace("field_id=", "field_id="+$(this).attr("id")));
			});
			
			refreshSections();
		}
		
		//====================================================================================================
		function moveBlock(button, direction)
		{
			var block = $(button).closest("[data-block]");
			if(direction == "up" && block.prev("[data-block]").length) block.insertBefore(block.prev("[data-block]"));
			if(direction == "down" && block.next("[data-block]").length) block.insertAfter(block.next("[data-block]"));
			refreshSections();
		}
		
		//====================================================================================================
		function removeBlock(button)
		{
			$(button).closest("[data-block]").remove();
		}
		
		//====================================================================================================
		function refreshSections()
		{
			//----- Setup select2
			$(".select2").select2({
				theme: "bootstrap4",
				minimumResultsForSearch: -1,
				language: "{$base->language}"
			});
			
			//----- Setup TinyMCE
			TinyMCE();
		}
		
		//====================================================================================================
		function responsive_filemanager_callback(id)
		{
			var field = $("#"+id), file = jQuery.parseJSON(field.val());
			//if(file.length == 1)
			console.log(file);
			
			//var url = "/public/uploads/tinymce/source/"+file;
			//if(file) field.prev().attr("src", url).removeClass("d-none");
			//field.val(url); //$.fancybox.close();
		}

		//====================================================================================================
		$(document).ready(function()
		{
			//----- Init sections
			refreshSections();
		});
	</script>
{/if}