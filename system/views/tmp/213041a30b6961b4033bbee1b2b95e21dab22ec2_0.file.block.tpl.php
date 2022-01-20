<?php
/* Smarty version 3.1.40, created on 2022-01-11 11:24:38
  from 'D:\wamp\www\Sztorm\system\views\back\addons\blocks\block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61dd68f6bb68d7_37740420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '213041a30b6961b4033bbee1b2b95e21dab22ec2' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\addons\\blocks\\block.tpl',
      1 => 1641900277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61dd68f6bb68d7_37740420 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div data-block="<?php echo $_smarty_tpl->tpl_vars['block']->value['type'] ? $_smarty_tpl->tpl_vars['block']->value['type'] : $_smarty_tpl->tpl_vars['type']->value;?>
">
	<?php $_smarty_tpl->_assignInScope('field', "sections[".((string)$_smarty_tpl->tpl_vars['index']->value['section'])."][columns][".((string)$_smarty_tpl->tpl_vars['index']->value['column'])."][blocks][".((string)$_smarty_tpl->tpl_vars['index']->value['block'])."]");?>
	<!--{assign "id" implode('_', ['sections', $index['section'], 'columns', $index['column'], 'blocks', $index['block']])}-->
	<?php $_smarty_tpl->_assignInScope('id', sprintf('block_%s',md5(sprintf('%s%s',microtime(),uniqid()))));?>
	<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
[type]" value="<?php echo $_smarty_tpl->tpl_vars['block']->value['type'] ? $_smarty_tpl->tpl_vars['block']->value['type'] : $_smarty_tpl->tpl_vars['type']->value;?>
">
	<div class="card upload mb-4">
		<div class="position-absolute">
			<button type="button" class="btn btn-light border badge-dot badge-sm"
			onclick="moveBlock(this, 'up')"><i class="fa fa-arrow-up"></i></button>
			
			<button type="button" class="btn btn-light border badge-dot badge-sm"
			onclick="moveBlock(this, 'down')"><i class="fa fa-arrow-down"></i></button>
			
			<button type="button" class="btn btn-light border-danger badge-dot badge-sm"
			onclick="removeBlock(this)"><i class="fa fa-times text-danger"></i></button>
		</div>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140838610661dd68f6bb60d1_17084664', "content");
?>

	</div>
</div><?php }
/* {block "content"} */
class Block_140838610661dd68f6bb60d1_17084664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_140838610661dd68f6bb60d1_17084664',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
