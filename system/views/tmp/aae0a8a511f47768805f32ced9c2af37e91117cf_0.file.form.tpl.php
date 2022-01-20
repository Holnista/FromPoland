<?php
/* Smarty version 3.1.39, created on 2021-11-02 16:22:07
  from '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/back/coupons/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6181579f67ef65_96564544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aae0a8a511f47768805f32ced9c2af37e91117cf' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/back/coupons/form.tpl',
      1 => 1633442300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/topbar.tpl' => 1,
    'file:../addons/tinymce.tpl' => 1,
  ),
),false)) {
function content_6181579f67ef65_96564544 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9202955956181579f6662b9_08258743', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8186084926181579f669075_16990668', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17264300426181579f67c1c0_92604175', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "header"} */
class Block_9202955956181579f6662b9_08258743 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_9202955956181579f6662b9_08258743',
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
class Block_8186084926181579f669075_16990668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8186084926181579f669075_16990668',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender("file:../addons/topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('topbar'=>array('title'=>array('icon'=>'ticket','content'=>$_smarty_tpl->tpl_vars['t']->value['COUPONS'],'text'=>$_smarty_tpl->tpl_vars['coupon']->value ? $_smarty_tpl->tpl_vars['t']->value['EDIT'] : $_smarty_tpl->tpl_vars['t']->value['CREATE']))), 0, false);
?>
	<div class="<?php echo $_smarty_tpl->tpl_vars['grow']->value;?>
 mt-2">
		<ul class="nav nav-tabs">
			<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-basic"><?php echo $_smarty_tpl->tpl_vars['t']->value['BASIC'];?>
</a></li>
		</ul>
		<form method="POST" class="<?php echo $_smarty_tpl->tpl_vars['grow']->value;?>
 validate" enctype="multipart/form-data">
			<div class="tab-content rounded-bottom border border-top-0 mb-3">
				<div class="tab-pane fade show active px-3" id="tab-basic">
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="code" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['COUPON'];?>
</label>
						<div class="col-sm-9">
							<input type="text" name="code" maxlength="16" value="<?php echo $_smarty_tpl->tpl_vars['coupon']->value['code'];?>
"
							id="code" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['COUPON'];?>
" class="form-control" required>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="discount[value]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['DISCOUNT'];?>
</label>
						<div class="col-sm-9">
							<div class="row align-items-center">
								<div class="col-12 col-lg mb-1 mb-lg-0">
									<input type="number" name="discount[value]" min="0" value="<?php echo $_smarty_tpl->tpl_vars['coupon']->value['discount']['value'];?>
"
									id="discount[value]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['VALUE'];?>
" class="form-control" required>
								</div>
								<div class="col-12 col-lg">
									<select name="discount[mode]" id="discount[mode]" class="form-control select2">
										<option value="PERCENT" <?php if ($_smarty_tpl->tpl_vars['coupon']->value['discount']['mode'] == 'PERCENT') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['DISCOUNT_MODE_PERCENT'];?>
</option>
										<option value="PRICE" <?php if ($_smarty_tpl->tpl_vars['coupon']->value['discount']['mode'] == 'PRICE') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['DISCOUNT_MODE_PRICE'];?>
</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="others[usage]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['USAGE'];?>
</label>
						<div class="col-sm-9">
							<div class="row align-items-center">
								<div class="col-12 col-lg mb-1 mb-lg-0">
									<input type="number" name="others[usage]" min="0" value="<?php echo $_smarty_tpl->tpl_vars['coupon']->value['others']['usage'];?>
"
									id="others[usage]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['USAGE'];?>
" class="form-control">
								</div>
								<div class="col-12 col-lg mb-1 mb-lg-0">
									<input type="number" name="others[limit]" min="0" value="<?php echo $_smarty_tpl->tpl_vars['coupon']->value['others']['limit'];?>
"
									id="others[limit]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['LIMIT'];?>
" class="form-control">
								</div>
								<div class="col-12 col-lg">
									<input type="date" name="others[expire]" value="<?php echo $_smarty_tpl->tpl_vars['coupon']->value['others']['expire'] ? $_smarty_tpl->tpl_vars['coupon']->value['others']['expire'] : '';?>
"
									id="others[expire]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['EXPIRE'];?>
" class="form-control flatpickr bg-white">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row align-items-center bg-light mb-0 py-3">
						<label for="active" class="col col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['ACTIVE'];?>
</label>
						<div class="col-auto col-sm-9 pt-1">
							<div class="custom-control custom-switch custom-switch-success">
								<input type="hidden" name="active" value="0">
								<input type="checkbox" id="active" name="active" value="1"
								<?php if ($_smarty_tpl->tpl_vars['coupon']->value['active'] || !$_smarty_tpl->tpl_vars['coupon']->value) {?>checked<?php }?> class="custom-control-input">
								<label class="custom-control-label" for="active"></label>
							</div>
						</div>
					</div>
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
class Block_17264300426181579f67c1c0_92604175 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_17264300426181579f67c1c0_92604175',
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
			minimumResultsForSearch: -1,
			language: "<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
",
			placeholder: "<?php echo $_smarty_tpl->tpl_vars['t']->value['SELECT'];?>
..."
		});
		
		//----- Setup flatpickr
		flatpickr(".flatpickr",
		{
			altInput: true,
			time_24hr: true,
			enableTime: true,
			disableMobile: true,
			dateFormat: "Y-m-d H:i",
			locale: "<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
",
			altFormat: "j F Y H:i"
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "footer"} */
}
