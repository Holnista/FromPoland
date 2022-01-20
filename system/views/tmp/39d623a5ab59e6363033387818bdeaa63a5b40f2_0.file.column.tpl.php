<?php
/* Smarty version 3.1.40, created on 2022-01-17 12:24:27
  from 'D:\wamp\www\Sztorm\system\views\back\addons\blocks\column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61e55ffba47977_08043095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d623a5ab59e6363033387818bdeaa63a5b40f2' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\addons\\blocks\\column.tpl',
      1 => 1642422264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e55ffba47977_08043095 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col <?php echo $_smarty_tpl->tpl_vars['column']->value['width'];?>
 mt-3" data-column>
	<div class="card upload">
		<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'blocks');?>

		<a href="#" class="btn rounded btn-block btn-light" 
		data-toggle="modal" data-target="#blocks" 
		onclick="addBlockButton = this;">
		<i class="fa fa-plus"></i></a>
		
		<button type="button" class="btn btn-danger badge-dot badge-float badge-sm"
		onclick="removeColumn(this)"><i class="fa fa-times"></i></button>
	</div>
	<div class="row justify-content-between no-gutters mt-1">
		<div class="col-auto">
			<button type="button" class="btn btn-outline-info btn-sm d-flex align-items-center h-100"
			onclick="moveColumn(this, 'left')"><i class="fa fa-arrow-left"></i></button>
		</div>
		<div class="col">
			<select name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value['section'];?>
][columns][<?php echo $_smarty_tpl->tpl_vars['index']->value['column'];?>
][width]" class="form-control select2" onchange="settingsChangeColumnWidth(this)">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array(3,4,6,8,9,12), 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?><option value="col-md-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['column']->value['width'] == sprintf('col-md-%s',$_smarty_tpl->tpl_vars['i']->value)) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
/12</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<option value="col-md" <?php if ($_smarty_tpl->tpl_vars['column']->value['width'] == 'col-md' || !$_smarty_tpl->tpl_vars['column']->value['width']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['DEFAULT'];?>
</option>
			</select>	
		</div>
		<div class="col-auto">
			<button type="button" class="btn btn-outline-info btn-sm d-flex align-items-center h-100"
			onclick="moveColumn(this, 'right')"><i class="fa fa-arrow-right"></i></button>
		</div>
	</div>
</div><?php }
}
