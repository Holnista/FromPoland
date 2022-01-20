<?php
/* Smarty version 3.1.40, created on 2021-12-22 14:07:46
  from 'D:\wamp\www\Sztorm\system\views\back\addons\blocks\youtube.back.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61c331326ab1b3_04021550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9d6eec821865c5d65cb6b58399cfb1693194242' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\addons\\blocks\\youtube.back.tpl',
      1 => 1640181977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c331326ab1b3_04021550 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('type', "youtube");?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108223133261c331326a2791_20261036', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../blocks/block.tpl");
}
/* {block "content"} */
class Block_108223133261c331326a2791_20261036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_108223133261c331326a2791_20261036',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="input-group">
		<iframe src="<?php echo $_smarty_tpl->tpl_vars['block']->value['value'];?>
" class="img-fluid <?php if (!$_smarty_tpl->tpl_vars['block']->value) {?>d-none<?php }?>"></iframe>
		<input type="text" name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][columns][<?php echo $_smarty_tpl->tpl_vars['cindex']->value;?>
][blocks][<?php echo $_smarty_tpl->tpl_vars['bindex']->value;?>
][value]" value="<?php echo $_smarty_tpl->tpl_vars['block']->value['value'];?>
"
		id="<?php if ($_smarty_tpl->tpl_vars['block']->value) {
echo implode('_',array('sections',$_smarty_tpl->tpl_vars['index']->value,'columns',$_smarty_tpl->tpl_vars['cindex']->value,'blocks',$_smarty_tpl->tpl_vars['bindex']->value,'value'));
}?>" class="form-control"
		placeholder="Adres URL filmu YouTube">
	</div>
<?php
}
}
/* {/block "content"} */
}
