<?php
/* Smarty version 3.1.40, created on 2021-12-22 14:08:31
  from 'D:\wamp\www\Sztorm\system\views\back\addons\section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61c3315f6158d9_75584723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f773a6fe83230a2ffa2dc75fe59d5891ececab78' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\addons\\section.tpl',
      1 => 1640182110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/section.tpl' => 2,
  ),
),false)) {
function content_61c3315f6158d9_75584723 (Smarty_Internal_Template $_smarty_tpl) {
if (strlen($_smarty_tpl->tpl_vars['index']->value)) {?>
	<?php $_smarty_tpl->_assignInScope('background', array('accent'=>'Basic 1','second'=>'Basic 2','light'=>'Light','shade'=>'Shade','dark'=>'Dark'));?>
	<?php if ($_smarty_tpl->tpl_vars['section']->value['background']) {
$_smarty_tpl->_assignInScope('custom', !in_array($_smarty_tpl->tpl_vars['section']->value['background'],array_keys($_smarty_tpl->tpl_vars['background']->value)));
}?>
	<?php $_smarty_tpl->_assignInScope('width', array('col-md-12'=>'12/12','col-md-10'=>'10/12','col-md-8'=>'8/12','col-md-6'=>'6/12','col-md-4'=>'4/12','col-md-3'=>'3/12','col-md-2'=>'2/12'));?>
	<fieldset class="bg-light border mb-3 p-3 <?php if ($_smarty_tpl->tpl_vars['section']->value['background'] && !$_smarty_tpl->tpl_vars['custom']->value) {?>bg-custom-<?php echo $_smarty_tpl->tpl_vars['section']->value['background'];
}?>" data-section="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
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
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['base']->value->languages), 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
					<div data-language="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
						<div class="input-group flex-nowrap">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<img src="/<?php echo PATH_IMAGES;?>
/template/icons/flags/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.png">
								</div>
							</div>
							<input type="text" name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][header][title][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo quotes($_smarty_tpl->tpl_vars['section']->value['header']['title'][$_smarty_tpl->tpl_vars['language']->value]);?>
" 
							placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['TITLE'];?>
" class="form-control typeahead" minlength="2" maxlength="128" style="border-radius: 0 .25rem .25rem 0;">
						</div>
					</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<div class="col">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['base']->value->languages), 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
					<div data-language="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
						<div class="input-group flex-nowrap">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<img src="/<?php echo PATH_IMAGES;?>
/template/icons/flags/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.png">
								</div>
							</div>
							<input type="text" name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][header][subtitle][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo quotes($_smarty_tpl->tpl_vars['section']->value['header']['subtitle'][$_smarty_tpl->tpl_vars['language']->value]);?>
" 
							placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['SUBTITLE'];?>
" class="form-control typeahead" minlength="2" maxlength="128" style="border-radius: 0 .25rem .25rem 0;">
						</div>
					</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<div class="col-auto">
				<a href="#" class="btn rounded btn-danger" data-toggle="modal" data-target="#sections_remove_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
					<i class="fa fa-times"></i>
				</a>
			</div>
			<div class="col-auto">
				<a href="#" class="btn rounded btn-primary" data-toggle="collapse" data-target="#sections_settings_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
					<i class="fa fa-cog"></i>
				</a>
			</div>
		</div>
		<div class="accordion">
			<div id="sections_settings_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="accordion-collapse collapse">
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
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['section']->value['columns']), 'column', false, 'cindex');
$_smarty_tpl->tpl_vars['column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cindex']->value => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->do_else = false;
?>
				<div class="col">
					<div class="card upload">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['column']->value['blocks']), 'block', false, 'bindex');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bindex']->value => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
							<?php $_smarty_tpl->_subTemplateRender(sprintf('../addons/blocks/%s.back.tpl',$_smarty_tpl->tpl_vars['block']->value['type']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "column", null, null);?>
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
			<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php if (!$_smarty_tpl->tpl_vars['section']->value['columns']) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'column');
}?>
			<div class="col-auto ml-auto">
				<button type="button" class="btn rounded btn-block btn-outline-success h-100" 
				onclick="addColumn(this)"><i class="fa fa-plus"></i></button>
			</div>
		</div>
		<div class="modal fade" id="sections_remove_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['t']->value['WARNING'];?>
</h5>
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body text-center py-5">
						<p class="m-0"><?php echo sprintf($_smarty_tpl->tpl_vars['t']->value['RECORDS_REMOVE_TITLE'],'tą sekcję');?>
</p>
						<p class="m-0 text-danger"><?php echo $_smarty_tpl->tpl_vars['t']->value['RECORDS_REMOVE_TEXT'];?>
</p>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn rounded btn-outline-dark" data-dismiss="modal">
							<span><?php echo $_smarty_tpl->tpl_vars['t']->value['CANCEL'];?>
</span>
						</button>
						<button type="button" class="btn rounded btn-danger" data-dismiss="modal"
						onclick="removeSection(this)"><span><?php echo $_smarty_tpl->tpl_vars['t']->value['REMOVE'];?>
</span></button>
					</div>
				</div>
			</div>
		</div>
	</fieldset>
<?php } else { ?>
	<div class="modal fade" id="remove">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['t']->value['WARNING'];?>
</h5>
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body text-center py-5">
						<p class="m-0"><?php echo sprintf($_smarty_tpl->tpl_vars['t']->value['RECORDS_REMOVE_TITLE'],'tą sekcję');?>
</p>
						<p class="m-0 text-danger"><?php echo $_smarty_tpl->tpl_vars['t']->value['RECORDS_REMOVE_TEXT'];?>
</p>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn rounded btn-outline-dark" data-dismiss="modal">
							<span><?php echo $_smarty_tpl->tpl_vars['t']->value['CANCEL'];?>
</span>
						</button>
						<button type="button" class="btn rounded btn-danger" data-dismiss="modal"
						onclick="removeSection(this)"><span><?php echo $_smarty_tpl->tpl_vars['t']->value['REMOVE'];?>
</span></button>
					</div>
				</div>
			</div>
		</div>
	
	
	<?php echo '<script'; ?>
>var addBlockButton = null, blocksArray = [];<?php echo '</script'; ?>
>
	<?php $_smarty_tpl->_assignInScope('blocks', array('text'=>'Pole tekstowe','tinymce'=>'Edytor tekstowy','gallery'=>'Galeria zdjęć','member'=>'Członek zespołu','article'=>'Artykuł bloga','counter'=>'Licznik danych','image'=>'Prosty obraz','youtube'=>'Film YouTube','slider'=>'Karuzela zdjęć'));?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'title', false, 'key');
$_smarty_tpl->tpl_vars['title']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->do_else = false;
$_smarty_tpl->_assignInScope('path', path($_smarty_tpl->tpl_vars['base']->value->get('UI'),'back','addons','blocks',sprintf('%s.back.tpl',$_smarty_tpl->tpl_vars['key']->value)));?>
	<?php if (file_exists($_smarty_tpl->tpl_vars['path']->value)) {
echo '<script'; ?>
>blocksArray["<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"] = `<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['path']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>`;<?php echo '</script'; ?>
><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	
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
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'title', false, 'key');
$_smarty_tpl->tpl_vars['title']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->do_else = false;
?>
						<?php $_smarty_tpl->_assignInScope('path', path($_smarty_tpl->tpl_vars['base']->value->get('UI'),'back','addons','blocks',sprintf('%s.back.tpl',$_smarty_tpl->tpl_vars['key']->value)));?>
						<?php if (file_exists($_smarty_tpl->tpl_vars['path']->value)) {?>
							<div class="row my-1">
								<div class="col">
									<button type="button" class="btn rounded btn-block btn-dark"
									onclick="addBlock('<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
')" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</button>
								</div>
							</div>
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/jquery.md5@1.0.2/index.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		
		//====================================================================================================
		function addSection(button)
		{
			var index = $.md5(""+Date.now()+""), section = $($.parseHTML(`<?php $_smarty_tpl->_subTemplateRender("file:../addons/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>null,'index'=>"0"), 0, true);
?>`));
			
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
			$($.parseHTML(`<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'column');?>
`)).insertAfter(columns.find("> .col").last());
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
				language: "<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
"
			});
			
			//----- Setup TinyMCE
			TinyMCE();
		}
		
		//====================================================================================================
		function responsive_filemanager_callback(id)
		{
			var field = $("#"+id), file = field.val(), url = "/public/uploads/tinymce/source/"+file;
			if(file) field.prev().attr("src", url).removeClass("d-none");
			field.val(url); $.fancybox.close();
		}

		//====================================================================================================
		$(document).ready(function()
		{
			//----- Init sections
			refreshSections();
		});
	<?php echo '</script'; ?>
>
<?php }
}
}
