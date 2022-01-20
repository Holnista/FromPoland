{if strlen($index)}
	<fieldset class="bg-light border mb-3 p-3" data-section="{$index}">
		<div class="row justify-content-between align-items-center no-gutters">
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
				<a href="#" class="btn rounded btn-danger" 
				data-toggle="modal" data-target="#remove" 
				onclick="removeSectionButton = this;">
					<i class="fa fa-times"></i>
				</a>
			</div>
			<div class="col-auto">
				<a href="#" class="btn rounded btn-primary" 
				data-target="#sections_settings_{$index}"
				data-toggle="collapse">
					<i class="fa fa-cog"></i>
				</a>
			</div>
		</div>
		<div class="accordion">
			<div id="sections_settings_{$index}" class="accordion-collapse collapse">
				<div class="accordion-body mt-3">
					<div class="card">
						<div class="card-body p-0 px-3">
							<div class="form-group row align-items-center border-bottom mb-0 py-3">
								<label for="sections[{$index}][settings][header][align]" class="col-sm-3 col-form-label">Rodzaj nagłówka</label>
								<div class="col-sm-9">
									<select name="sections[{$index}][settings][header][align]" 
									id="sections[{$index}][settings][header][align]"
									class="form-control select2">
										<option value="" {if !$section['settings']['header']['align']}selected{/if}>{$t['DEFAULT']}</option>
										<option value="left" {if $section['settings']['header']['align'] == 'left'}selected{/if}>Do lewej</option>
										<option value="center" {if $section['settings']['header']['align'] == 'center'}selected{/if}>Wyśrodkowany</option>
										<option value="right" {if $section['settings']['header']['align'] == 'right'}selected{/if}>Do prawej</option>
									</select>
								</div>
							</div>
							<div class="form-group row align-items-center border-bottom mb-0 py-3">
								<label for="sections[{$index}][settings][background][type]" class="col-sm-3 col-form-label">Rodzaj tła</label>
								<div class="col-sm-9">
									<select name="sections[{$index}][settings][background][type]" 
									id="sections[{$index}][settings][background][type]" 
									onchange="settingsSwitchBackground(this)"
									class="form-control select2">
										<option value="" {if !$section['settings']['background']['type']}selected{/if}>{$t['DEFAULT']}</option>
										<option value="class" {if $section['settings']['background']['type'] == 'class'}selected{/if}>Klasa CSS</option>
										<option value="image" {if $section['settings']['background']['type'] == 'image'}selected{/if}>{$t['IMAGE']}</option>
										<option value="color" {if $section['settings']['background']['type'] == 'color'}selected{/if}>Kolor</option>
									</select>
								</div>
							</div>
							<div data-section-settings-background="class" {if $section['settings']['background']['type'] != 'class'}style="display: none;"{/if}>
								<div class="form-group row align-items-center border-bottom mb-0 py-3">
									<label for="sections_{$index}_settings_background_class" class="col-sm-3 col-form-label">Klasa CSS</label>
									<div class="col-sm-9">
										<input type="text" name="sections[{$index}][settings][background][value]" value="{$section['settings']['background']['value']}"
										id="sections_{$index}_settings_background_class" placeholder="Klasa CSS" class="form-control" required 
										{if $section['settings']['background']['type'] != 'class'}disabled{/if}>
									</div>
								</div>
							</div>
							<div data-section-settings-background="image" {if $section['settings']['background']['type'] != 'image'}style="display: none;"{/if}>
								<div class="form-group row align-items-center border-bottom mb-0 py-3">
									<label for="sections_{$index}_settings_background_image" class="col-sm-3 col-form-label">{$t['IMAGE']}</label>
									<div class="col-sm-9">
										<div class="input-group">
											<input type="text" name="sections[{$index}][settings][background][value]" value="{$section['settings']['background']['value']}"
											id="sections_{$index}_settings_background_image" placeholder="{$t['IMAGE']}" class="form-control" required 
											{if $section['settings']['background']['type'] != 'image'}disabled{/if}>
											<div class="input-group-append">
												<button type="button" data-src="/{PATH_PUBLIC}/vendor/tinymce/plugins/filemanager/dialog.php
												?akey=5d2e69f5f8be6695acbebfa1b2553d1e&type=1&popup=1&relative_url=1&field_id=sections_{$index}_settings_background_image"
												class="btn rounded-right btn-primary" data-fancybox data-type="iframe">{$t['SELECT']}</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div data-section-settings-background="color" {if $section['settings']['background']['type'] != 'color'}style="display: none;"{/if}>
								<div class="form-group row align-items-center border-bottom mb-0 py-3">
									<label for="sections_{$index}_settings_background_color" class="col-sm-3 col-form-label">Kolor</label>
									<div class="col-sm-9">
										<input type="text" name="sections[{$index}][settings][background][value]" value="{$section['settings']['background']['value']}"
										id="sections_{$index}_settings_background_color" placeholder="Kolor" class="form-control" required
										{if $section['settings']['background']['type'] != 'color'}disabled{/if}>
									</div>
								</div>
							</div>
							<div class="form-group row align-items-center border-bottom mb-0 py-3">
								<label for="sections[{$index}][settings][size][width]" class="col-sm-3 col-form-label">Rozmiar</label>
								<div class="col-sm-9">
									<div class="form-row">
										<div class="col-sm">
											<select name="sections[{$index}][settings][size][width]" 
											id="sections[{$index}][settings][size][width]" 
											class="form-control select2">
												<option value="container" {if $section['settings']['size']['width'] == 'container'}selected{/if}>Domyślna szerokość</option>
												<option value="fullwidth" {if $section['settings']['size']['width'] == 'fullwidth'}selected{/if}>Pełna szerokość</option>
											</select>
										</div>
										<div class="col-sm">
											<select name="sections[{$index}][settings][size][height]" 
											id="sections[{$index}][settings][size][height]" 
											class="form-control select2">
												<option value="auto" {if $section['settings']['size']['height'] == 'auto'}selected{/if}>Domyślna wysokość</option>
												<option value="fullheight" {if $section['settings']['size']['height'] == 'fullheight'}selected{/if}>Pełna wysokość</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group row align-items-center border-bottom mb-0 py-3">
								<label for="sections[{$index}][settings][columns][gutters]" class="col-sm-3 col-form-label">Układ kolumn</label>
								<div class="col-sm-9">
									<div class="form-row">
										<div class="col-sm">
											<select name="sections[{$index}][settings][columns][gutters]" 
											id="sections[{$index}][settings][columns][gutters]" 
											class="form-control select2">
												<option value="" {if !strlen($section['settings']['columns']['gutters'])}selected{/if}>Domyślne odstępy</option>
												<option value="0" {if strlen($section['settings']['columns']['gutters'])}selected{/if}>Bez odstępów</option>
											</select>
										</div>
										<div class="col-sm">
											<select name="sections[{$index}][settings][columns][justify]" 
											id="sections[{$index}][settings][columns][justify]" 
											class="form-control select2">
												<option value="" {if !$section['settings']['columns']['justify']}selected{/if}>Domyślne wyśrodkowanie</option>
												<option value="center" {if $section['settings']['columns']['justify'] == 'center'}selected{/if}>Do środka</option>
												<option value="flex-end" {if $section['settings']['columns']['justify'] == 'flex-end'}selected{/if}>Do prawej</option>
												<option value="flex-start" {if $section['settings']['columns']['justify'] == 'flex-start'}selected{/if}>Do lewej</option>
												<option value="space-between" {if $section['settings']['columns']['justify'] == 'space-between'}selected{/if}>Rozepchnij</option>
											</select>
										</div>
										<div class="col-sm">
											<select name="sections[{$index}][settings][columns][align]" 
											id="sections[{$index}][settings][columns][align]" 
											class="form-control select2">
												<option value="" {if !$section['settings']['columns']['align']}selected{/if}>Domyślne wyrównanie</option>
												<option value="center" {if $section['settings']['columns']['align'] == 'center'}selected{/if}>Do środka</option>
												<option value="flex-end" {if $section['settings']['columns']['align'] == 'flex-end'}selected{/if}>Do dołu</option>
												<option value="flex-start" {if $section['settings']['columns']['align'] == 'flex-start'}selected{/if}>Do góry</option>
												<option value="stretch" {if $section['settings']['columns']['align'] == 'stretch'}selected{/if}>Rozciągnij</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group row align-items-center border-bottom mb-0 py-3">
								<label for="sections[{$index}][settings][others][margin][top]" class="col-sm-3 col-form-label">Marginesy</label>
								<div class="col-sm-9">
									<div class="form-row">
										{foreach from = ['top' => 'Góra', 'right' => 'Prawo', 'bottom' => 'Dół', 'left' => 'Lewo'] item = title key = key}
											<div class="col-sm">
												<input type="text" name="sections[{$index}][settings][others][margin][{$key}]" 
												value="{$section['settings']['others']['margin'][$key]}"
												id="sections[{$index}][settings][others][margin][{$key}]" 
												placeholder="{$title}" class="form-control">
											</div>
										{/foreach}
									</div>
								</div>
							</div>
							<div class="form-group row align-items-center border-bottom mb-0 py-3">
								<label for="sections[{$index}][settings][others][padding][top]" class="col-sm-3 col-form-label">Wcięcie</label>
								<div class="col-sm-9">
									<div class="form-row">
										{foreach from = ['top' => 'Góra', 'right' => 'Prawo', 'bottom' => 'Dół', 'left' => 'Lewo'] item = title key = key}
											<div class="col-sm">
												<input type="text" name="sections[{$index}][settings][others][padding][{$key}]" 
												value="{$section['settings']['others']['padding'][$key]}"
												id="sections[{$index}][settings][others][padding][{$key}]" 
												placeholder="{$title}" class="form-control">
											</div>
										{/foreach}
									</div>
								</div>
							</div>
							<div class="form-group row align-items-center mb-0 py-3">
								<label for="sections[{$index}][settings][others][css]" class="col-sm-3 col-form-label">Dodatkowy styl CSS</label>
								<div class="col-sm-9">
									<div class="form-row">
										<div class="col-sm">
											<input type="text" name="sections[{$index}][settings][others][css]" 
											value="{$section['settings']['others']['css']}"
											id="sections[{$index}][settings][others][css]" 
											placeholder="{$t['NONE']}" class="form-control">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row no-gutters" data-columns>
			{foreach from = array_values($section['columns']) item = column key = c}
				{capture name="blocks"}
					{foreach from = array_values($column['blocks']) item = block key = b}
						<!--{literal}{include file=sprintf("../addons/blocks/%s.tpl", $block['type']) index 
						= ['section' => $index, 'column' => $c, 'block' => $b] block = $block}{/literal}-->
						{$base->mock('POST /admin/sections/block [ajax]', ['index' => ['section' => $index,
						'column' => $c, 'block' => $b], 'type' => $block['type'], 'block' => $block])}
					{/foreach}
				{/capture}
				{include "../addons/blocks/column.tpl" index = ['section' => $index, 'column' => $c]}
			{/foreach}
			{if !$section['columns']}
				{capture name="blocks"}{/capture}
				{include "../addons/blocks/column.tpl" index = ['section' => $index, 'column' => 0]}
			{/if}
			<div class="col-auto ml-auto mt-3">
				<button type="button" class="btn rounded btn-block btn-outline-success h-100" 
				onclick="addColumn(this)"><i class="fa fa-plus"></i></button>
			</div>
		</div>
	</fieldset>
{else}
	<div class="modal fade" id="blocks">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">{$t['SELECT']}</h5>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center p-5">
					{foreach from = [
						'text' => 'Kod HTML',
						'icon' => 'Prosta ikona',
						'button' => 'Prosty przycisk',
						'tinymce' => 'Edytor tekstowy',
						'member' => 'Członek zespołu', 
						'article' => 'Artykuł bloga',
						'counter' => 'Licznik cyfrowy',
						'image' => 'Prosty obraz',
						'map' => 'Mapa Google',
						'counter' => 'Cyfrowy licznik',
						'collapse' => 'Rozwijany tekst',
						'youtube' => 'Film YouTube',
						'slider' => 'Karuzela zdjęć',
						'gallery' => 'Galeria zdjęć'
					] 
					item = title key = key}{assign "path" path($base->get('UI'), 'back', 'addons', 'blocks', sprintf('%s.tpl', $key))}
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
	<script>
		//------ Default variables
		var addBlockButton = null, removeSectionButton = null;
		
		//====================================================================================================
		function addSection(button)
		{
			var index = $("[data-section]").length;
			$.ajax({ type: "POST", url: "/admin/sections",
			data: { "index": index }, dataType: "html" })
			.done(function(result)
			{
				$(result).insertBefore(button);
				refreshSections();
			});
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
			var section = $(removeSectionButton).closest("[data-section]");
			section.find("button").attr("disabled", "disabled");
			$(button).attr("disabled", "disabled");
			section.fadeOut(function()
			{
				section.remove(); refreshSections();
				$(button).closest(".modal").modal("toggle");
				$(button).removeAttr("disabled");
			});
		}
		
		//====================================================================================================
		function addColumn(button)
		{
			var columns = $(button).closest("[data-section]").find("[data-columns]");
			$.ajax({ type: "POST", url: "/admin/sections/column", dataType: "html",
			data: { "index": columns.find("> .col").length } })
			.done(function(result)
			{
				$(result).insertBefore(button.closest(".col-auto"));
				refreshSections();
			});
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
			refreshSections();
		}
		
		//====================================================================================================
		function addBlock(type)
		{
			var index = { 
				"section": $(addBlockButton).closest("[data-section]").data("section"),
				"column": $(addBlockButton).closest(".card").closest(".col").index(),
				"block": $(addBlockButton).closest(".card").find(".card").length
			};
			
			$.ajax({ type: "POST", url: "/admin/sections/block", dataType: "html",
			data: { "index": index, "type": type } }).done(function(result) 
			{
				$(result).insertBefore(addBlockButton);
				refreshSections();
			});
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
			refreshSections();
		}
		
		//====================================================================================================
		function refreshSections()
		{
			//----- Reindex sections
			$("[data-section]").each(function()
			{
				var section = $(this);
				section.find("[data-columns] > .col").each(function()
				{
					var column = $(this);
					column.find("[name^='sections']").each(function()
					{
						var name = $(this).attr("name");
						name = name.replace(/(sections\[)\d(\])/, "sections["+section.index()+"]");
						name = name.replace(/(\[columns\]\[)\d(\])/, "[columns]["+column.index()+"]");
						//$(this).attr("id", name.replace(/\[/g, "_").replace(/\]/g, ""));
						$(this).attr("name", name);
					});
					column.find(".card > [data-block]").each(function()
					{
						var block = $(this);
						block.find("[name^='sections']").each(function()
						{
							//Replace input names
							var name = $(this).attr("name");
							name = name.replace(/(sections\[)\d(\])/, "sections["+section.index()+"]");
							name = name.replace(/(\[columns\]\[)\d(\])/, "[columns]["+column.index()+"]");
							name = name.replace(/(\[blocks\]\[)\d(\])/, "[blocks]["+block.index()+"]");
							//$(this).attr("id", name.replace(/\[/g, "_").replace(/\]/g, ""));
							$(this).attr("name", name);
							
							//Replace filemanager URL parameter
							/*if($(this).attr("id")?.indexOf("_value") >= 0)
							{
								var button = $(this).parent().find("button"), url = new URLSearchParams(button.attr("data-src"));
								url.set("field_id", $(this).attr("id")); button.attr("data-src", decodeURIComponent(url.toString()));
							}*/
						});
					});
				});
			});
			
			//----- Setup select2
			$(".select2").each(function()
			{
				if($(this).data("select2"))
				$(this).select2("destroy");
				$(this).select2({
					theme: "bootstrap4",
					minimumResultsForSearch: -1,
					language: "{$base->language}"
				});
			});
			
			//----- Setup TinyMCE
			TinyMCE();
			
			//----- Move modals
			$(".modal").appendTo("body");
		}
		
		//====================================================================================================
		function settingsSwitchBackground(select)
		{
			var panel = $(select).closest("[id^='sections_settings']");
			panel.find("[data-section-settings-background]").hide().find("input, button").attr("disabled", "disabled");
			panel.find("[data-section-settings-background='"+$(select).val()+"']").show().find("input, button").removeAttr("disabled");
		}
		
		//====================================================================================================
		function settingsChangeColumnWidth(select)
		{
			var column = $(select).closest("[data-column]");
			column.removeClass(function(index, className)
			{
				return (className.match (/(^|\s)col-md-\S+/g) || []).join(' ');
			});
			column.addClass($(select).val());
		}
		
		//====================================================================================================
		function responsive_filemanager_callback(id)
		{
			var field = $("#"+id), value = field.val(),
			block = field.closest("[data-block]").data("block"),
			url = "/public/uploads/tinymce/source/", array = [];
			if(isJson(value)) $.each(JSON.parse(value), 
			function(k, v) { array[k] = url+v; });
			else array = [url+value]; 
	
			if(block == "slider") field.val(JSON.stringify(array));
			else field.val(array[0]); field.prev().attr("src", 
			array[0]).removeClass("d-none");
			$.fancybox.close();
		}
		
		//====================================================================================================
		function isJson(string)
		{
			try { JSON.parse(string); }
			catch(e) { return false;
			} return true;
		}
		
		//====================================================================================================
		$("[data-toggle='tab']").on("click", function()
		{
			if($(this).attr("href") == "#tab-text") $("#sidebar").addClass("hidden");
			else $("#sidebar").removeClass("hidden");
		});
		
		//====================================================================================================
		$(document).ready(function()
		{
			//----- Init sections
			refreshSections();
		});
	</script>
{/if}