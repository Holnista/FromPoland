<?php
/* Smarty version 3.1.39, created on 2021-09-16 13:59:12
  from 'D:\wamp\www\HelloStranger\system\views\back\addons\sections.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61434db05f3058_08010557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87277b86c548cc5788d71e3811bb28cbe09ff695' => 
    array (
      0 => 'D:\\wamp\\www\\HelloStranger\\system\\views\\back\\addons\\sections.tpl',
      1 => 1631800738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/sections.tpl' => 2,
  ),
),false)) {
function content_61434db05f3058_08010557 (Smarty_Internal_Template $_smarty_tpl) {
if (strlen($_smarty_tpl->tpl_vars['index']->value)) {?>
	<?php $_smarty_tpl->_assignInScope('background', array('accent'=>'Basic 1','second'=>'Basic 2','light'=>'Light','shade'=>'Shade','dark'=>'Dark'));?>
	<?php if ($_smarty_tpl->tpl_vars['section']->value['background']) {
$_smarty_tpl->_assignInScope('custom', !in_array($_smarty_tpl->tpl_vars['section']->value['background'],array_keys($_smarty_tpl->tpl_vars['background']->value)));
}?>
	<?php $_smarty_tpl->_assignInScope('width', array('col-md-12'=>'12/12','col-md-10'=>'10/12','col-md-8'=>'8/12','col-md-6'=>'6/12','col-md-4'=>'4/12','col-md-3'=>'3/12','col-md-2'=>'2/12'));?>
	<fieldset class="bg-light border mb-3 p-3 <?php if ($_smarty_tpl->tpl_vars['section']->value['background'] && !$_smarty_tpl->tpl_vars['custom']->value) {?>bg-custom-<?php echo $_smarty_tpl->tpl_vars['section']->value['background'];
}?>" data-section="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
		<div class="row no-gutters mb-3">
			<?php if ($_smarty_tpl->tpl_vars['section']->value['file']) {?>
				<div class="col-auto" style="width: 134px;">
					<div class="card">
						<input type="hidden" name="text[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][file]" value="<?php echo $_smarty_tpl->tpl_vars['section']->value['file'];?>
">
						<div style="aspect-ratio: 1; background: url(/<?php echo $_smarty_tpl->tpl_vars['section']->value['file'];?>
) center; background-size: cover;">
						</div><div class="card-img-overlay d-flex align-items-start justify-content-start p-1">
						<button type="button" class="btn btn-danger badge-dot badge-float-o badge-sm m-0" 
						onclick="removeSectionFile(this)"><i class="fa fa-times"></i></button></div>
					</div>
				</div>
			<?php }?>
			<div class="col">
				<div class="row align-items-center no-gutters mb-3">
					<div class="col-auto">
						<button type="button" class="btn rounded btn-dark handle">
							<i class="fa fa-arrows-v"></i>
						</button>
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
									<input type="text" name="text[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][title][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo quotes($_smarty_tpl->tpl_vars['section']->value['title'][$_smarty_tpl->tpl_vars['language']->value]);?>
" 
									placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['TITLE'];?>
" class="form-control typeahead" minlength="2" maxlength="128" 
									style="border-radius: 0 .25rem .25rem 0;">
								</div>
							</div>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
					<div class="col-2">
						<div data-select="background">
							<select name="text[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][background]" class="form-control custom-select select2" 
							<?php if ($_smarty_tpl->tpl_vars['custom']->value) {?>style="display: none;"<?php }?> onchange="changeSectionBackground(this)">
								<option value="" <?php if (!$_smarty_tpl->tpl_vars['section']->value['background']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['DEFAULT'];?>
</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['background']->value, 'title', false, 'color');
$_smarty_tpl->tpl_vars['title']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['color']->value => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" 
								<?php if ($_smarty_tpl->tpl_vars['section']->value['background'] == $_smarty_tpl->tpl_vars['color']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><option value="custom">Własne...</option>
							</select>
						</div>
						<input type="<?php if ($_smarty_tpl->tpl_vars['custom']->value) {?>text<?php } else { ?>hidden<?php }?>" name="text[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][background]" 
						value="<?php echo $_smarty_tpl->tpl_vars['section']->value['background'];?>
"minlength="7" maxlength="7" placeholder="#000000" 
						class="form-control" <?php if (!$_smarty_tpl->tpl_vars['custom']->value) {?>disabled<?php }?> onchange="changeSectionBackground(this)">
					</div>
					<div class="col-2">
						<div data-select="width">
							<select name="text[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][width]" class="form-control custom-select select2">
								<option value="" <?php if (!$_smarty_tpl->tpl_vars['section']->value['width']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['DEFAULT'];?>
</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['width']->value, 'title', false, 'column');
$_smarty_tpl->tpl_vars['title']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['column']->value => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['column']->value;?>
" 
								<?php if ($_smarty_tpl->tpl_vars['section']->value['width'] == $_smarty_tpl->tpl_vars['column']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
					</div>
					<div class="col-auto">
						<button type="button" class="btn rounded btn-danger" onclick="removeSection(this)">
							<i class="fa fa-times"></i>
						</button>
					</div>
				</div>
				<input type="file" name="text[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]" class="form-control upload">
			</div>
		</div>
		<fieldset>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['base']->value->languages, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
				<div data-language="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
					<textarea name="text[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][content][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" 
					class="form-control"><?php echo $_smarty_tpl->tpl_vars['section']->value['content'][$_smarty_tpl->tpl_vars['language']->value];?>
</textarea>
				</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</fieldset>
	</fieldset>
<?php } else { ?>
	<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/sortable/sortable.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		function addSection(button)
		{
			var section = $($.parseHTML(`<?php $_smarty_tpl->_subTemplateRender("file:../addons/sections.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>null,'index'=>"0"), 0, true);
?>`)).
			insertAfter($(button).prev("[data-section]")), index = section.parent().find("[data-section]").length-1; 
			section.find("[name^='text']").each(function() { $(this).attr("name", $(this).attr("name").replace("[0]", "["+index+"]")); });
			section.data("section", index).attr("data-section", index);
			refreshSections();
		}
		
		function removeSection(button)
		{
			var section = $(button).closest("[data-section]");
			if($("#sections [data-section]").length > 1)
			{
				$(button).attr("disabled", "disabled");
				section.fadeOut(function()
				{
					section.remove();
					$("#sections [data-section]").each(function(index)
					{
						var current = $(this).data("section");
						$(this).data("section", index).attr("data-section", index);
						$(this).find("[name^='text']").each(function() { $(this).attr("name", 
						$(this).attr("name").replace("["+current+"]", "["+index+"]")); });
					});
				});
			}
		}
		
		function removeSectionFile(button)
		{
			var card = $(button).closest(".card").parent();
			$(button).attr("disabled", "disabled");
			card.fadeOut(function() { 
			card.remove(); });
		}
		
		function changeSectionBackground(button)
		{
			var section = $(button).closest("[data-section]");
			if(!$(button).is("select"))
			{
				//As input
				if($(button).val().length) section.removeClass("bg-light").css({ "background" : $(button).val() });
				else { $(button).attr("type", "hidden").attr("disabled", true).hide();
				section.addClass("bg-light").find("[data-select='background']")
				.show().find("select").prop("selectedIndex", 0); }
			}
			else 
			{
				//As select
				section.removeClass(function(index, cls) { return (cls.match (/\bbg-custom-\S+/g) || []).join(" "); });
				if($(button).val() == "custom") section.find("[data-select='background']").hide().nextAll("input")
				.first().attr("type", "text").removeAttr("disabled").show(); else section.addClass("bg-custom-"+$(button).val());
			}
			refreshSections();
		}
		
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
		
		$(document).ready(function()
		{
			//----- Setup sortable
			Sortable.create(document.getElementById("sections"),
			{
				delay: 0,
				animation: 150,
				touchStartThreshold: 0,
				handle: ".handle",
				direction: "vertical",
				draggable: "[data-section]",
				onSort: function()
				{
					$("#sections [data-section]").each(function(index)
					{
						var current = $(this).data("section");
						$(this).data("section", index).attr("data-section", index);
						$(this).find("[name^='text']").each(function() { $(this).attr("name", 
						$(this).attr("name").replace("["+current+"]", "["+index+"]")); });
					});
				}
			});
			
			//----- Init sections
			refreshSections();
		});
	<?php echo '</script'; ?>
>
<?php }
}
}
