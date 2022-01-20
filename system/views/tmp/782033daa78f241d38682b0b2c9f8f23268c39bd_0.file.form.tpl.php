<?php
/* Smarty version 3.1.39, created on 2021-08-26 11:56:10
  from 'D:\wamp\www\HelloStranger\system\views\back\newsletters\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6127815a977f08_63336929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '782033daa78f241d38682b0b2c9f8f23268c39bd' => 
    array (
      0 => 'D:\\wamp\\www\\HelloStranger\\system\\views\\back\\newsletters\\form.tpl',
      1 => 1629964225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/topbar.tpl' => 1,
    'file:../addons/languages.tpl' => 1,
    'file:../addons/tinymce.tpl' => 1,
  ),
),false)) {
function content_6127815a977f08_63336929 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10408204976127815a905ac0_72763319', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_290276086127815a90a9b7_07619445', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19125602846127815a9689f1_82988877', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "header"} */
class Block_10408204976127815a905ac0_72763319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_10408204976127815a905ac0_72763319',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<link href="/<?php echo PATH_PUBLIC;?>
/vendor/select2/select2.min.css" rel="stylesheet">
	<link href="/<?php echo PATH_PUBLIC;?>
/vendor/flatpickr/flatpickr.min.css" rel="stylesheet">
	<link href="/<?php echo PATH_PUBLIC;?>
/vendor/select2/select2-bootstrap4.min.css" rel="stylesheet">
<?php
}
}
/* {/block "header"} */
/* {block "content"} */
class Block_290276086127815a90a9b7_07619445 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_290276086127815a90a9b7_07619445',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender("file:../addons/topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('topbar'=>array('title'=>array('icon'=>'calendar-o','content'=>$_smarty_tpl->tpl_vars['t']->value['NEWSLETTERS'],'text'=>$_smarty_tpl->tpl_vars['newsletter']->value ? $_smarty_tpl->tpl_vars['t']->value['EDIT'] : $_smarty_tpl->tpl_vars['t']->value['CREATE']))), 0, false);
?>
	<div class="<?php echo $_smarty_tpl->tpl_vars['grow']->value;?>
 mt-2">
		<ul class="nav nav-tabs">
			<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-basic"><?php echo $_smarty_tpl->tpl_vars['t']->value['BASIC'];?>
</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-text"><?php echo $_smarty_tpl->tpl_vars['t']->value['CONTENT'];?>
</a></li>
			<?php $_smarty_tpl->_subTemplateRender("file:../addons/languages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</ul>
		<form method="POST" class="<?php echo $_smarty_tpl->tpl_vars['grow']->value;?>
 validate" enctype="multipart/form-data">
			<div class="tab-content rounded-bottom border border-top-0 mb-3">
				<div class="tab-pane fade show active px-3" id="tab-basic">
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="title" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['TITLE'];?>
</label>
						<div class="col-sm-9">
							<input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['newsletter']->value['title'];?>
"
							id="title" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['TITLE'];?>
" class="form-control typeahead"
							data-hints='[<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hints']->value["title"], 'hint');
$_smarty_tpl->tpl_vars['hint']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->do_else = false;
?>"<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
", <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>""]'
							autocomplete="off" minlength="2" maxlength="128" required>
						</div>
					</div>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['base']->value->languages), 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
						<div data-language="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
							<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
								<label for="subject[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['SUBJECT'];?>
</label>
								<div class="col-sm-9">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<img src="/<?php echo PATH_IMAGES;?>
/template/icons/flags/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.png">
											</div>
										</div>
										<input type="text" name="subject[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['newsletter']->value['subject'][$_smarty_tpl->tpl_vars['language']->value];?>
" minlength="2"
										maxlength="64" id="subject[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['SUBJECT'];?>
" class="form-control" required>
									</div>
								</div>
							</div>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="schedule" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['SCHEDULE'];?>
</label>
						<div class="col-sm-9">
							<div class="row align-items-center no-gutters">
								<div class="col-auto pr-3">
									<div class="custom-control custom-switch">
										<input type="checkbox" id="schedule" class="custom-control-input" 
										<?php if ($_smarty_tpl->tpl_vars['newsletter']->value['schedule']) {?>checked<?php }?> readonly>
										<label class="custom-control-label" for="schedule"></label>
									</div>
								</div>
								<div class="col">
									<input type="text" name="schedule" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['DATE'];?>
"
									class="form-control flatpickr <?php if ($_smarty_tpl->tpl_vars['newsletter']->value['schedule']) {?>bg-white<?php }?>" 
									value="<?php echo $_smarty_tpl->tpl_vars['newsletter']->value['schedule'];?>
" <?php if (!$_smarty_tpl->tpl_vars['newsletter']->value['schedule']) {?>disabled<?php }?>>
								</div>
							</div>
						</div>
					</div>
					<?php if (!$_smarty_tpl->tpl_vars['newsletter']->value) {?>
						<div class="form-group row align-items-center bg-light mb-0 py-3">
							<label for="recipients" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['RECIPIENTS'];?>
</label>
							<div class="col-sm-9">
								<select name="recipients" id="recipients" class="custom-select select2" required>
									<option value="0" selected><?php echo $_smarty_tpl->tpl_vars['t']->value['ALL_CLIENTS'];?>
</span>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['groups']->value), 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
">
											<?php echo sprintf('%s (%s)',$_smarty_tpl->tpl_vars['group']->value['title'],count($_smarty_tpl->tpl_vars['group']->value['clients']));?>

										</option>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
						</div>
					<?php } else { ?>
						<div class="form-group row align-items-center bg-light mb-0 py-3">
							<label for="active" class="col-sm-3 col-form-label">
								<span><?php echo $_smarty_tpl->tpl_vars['t']->value['EMAIL_UPDATE_TITLE'];?>
</span>
								<i class="fa fa-question-circle text-info ml-1" 
								data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['t']->value['EMAIL_UPDATE_TEXT'];?>
"></i>
							</label>
							<div class="col-sm-9">
								<div class="custom-control custom-switch">
									<input type="hidden" name="update" value="0">
									<input type="checkbox" id="update" name="update"
									value="1" class="custom-control-input" checked>
									<label class="custom-control-label" for="update"></label>
								</div>
							</div>
						</div>
					<?php }?>
				</div>
				<!---------------------------------------------------------------------------------------------------->
				<div class="tab-pane fade p-3" id="tab-text">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['base']->value->languages), 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
						<div data-language="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
							<textarea name="text[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]"><?php echo $_smarty_tpl->tpl_vars['newsletter']->value['text'][$_smarty_tpl->tpl_vars['language']->value];?>
</textarea>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
			<div class="row justify-content-between align-items-center flex-column-reverse flex-sm-row mt-auto">
				<div class="col-12 col-sm-auto mt-2 mt-sm-0">
					<a href="javascript:history.back()" class="btn rounded btn-block btn-outline-dark">
						<span><?php echo $_smarty_tpl->tpl_vars['t']->value['GO_BACK'];?>
</span>
					</a>
				</div>
				<div class="col-12 col-sm-auto">
					<input type="hidden" name="token" value="<?php echo md5($_SESSION['csrf']);?>
">
					<button type="submit" class="btn rounded btn-block btn-primary">
						<span><?php echo $_smarty_tpl->tpl_vars['t']->value['SAVE'];?>
</span>
					</button>
				</div>
			</div>
		</form>
	</div>
<?php
}
}
/* {/block "content"} */
/* {block "footer"} */
class Block_19125602846127815a9689f1_82988877 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_19125602846127815a9689f1_82988877',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/select2/select2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/flatpickr/flatpickr.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/select2/langs/<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/flatpickr/langs/<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
.min.js"><?php echo '</script'; ?>
>
	<?php $_smarty_tpl->_subTemplateRender("file:../addons/tinymce.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php echo '<script'; ?>
>
		//----- Setup select2
		$(".select2").select2({
			theme: "bootstrap4",
			language: "<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
",
			placeholder: "<?php echo $_smarty_tpl->tpl_vars['t']->value['SELECT'];?>
..."
		});
		
		//----- Setup flatpickr
		calendars = {
			altInput: true,
			time_24hr: true,
			enableTime: true,
			disableMobile: true,
			dateFormat: "Y-m-d H:i",
			locale: "<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
",
			altFormat: "j F Y H:i"
		};
		flatpickr(".flatpickr", calendars);
		
		//----- Toggle schedule
		$("#schedule").change(function()
		{
			if($(this).is(":checked")) $("input[name='schedule']").removeAttr("disabled").attr("required", true).addClass("bg-white");
			else $("input[name='schedule']").removeAttr("required").attr("disabled", true).removeClass("is-valid is-invalid bg-white").val("");
			flatpickr(".flatpickr", calendars);
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "footer"} */
}
