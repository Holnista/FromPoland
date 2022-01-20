<?php
/* Smarty version 3.1.40, created on 2021-12-23 10:15:49
  from 'D:\wamp\www\Sztorm\system\views\back\addons\blocks\text.back.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61c44c551f24d5_95992544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a42034946bae62ad83ac961058057889c8ecfee' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\addons\\blocks\\text.back.tpl',
      1 => 1640254496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c44c551f24d5_95992544 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('type', "text");?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140929535761c44c551ee959_44047555', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../blocks/block.tpl");
}
/* {block "content"} */
class Block_140929535761c44c551ee959_44047555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_140929535761c44c551ee959_44047555',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<fieldset>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['base']->value->languages, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
			<div data-language="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
				<textarea name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value['section'];?>
][columns][<?php echo $_smarty_tpl->tpl_vars['index']->value['column'];?>
][blocks][<?php echo $_smarty_tpl->tpl_vars['index']->value['block'];?>
][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" 
				id="<?php if ($_smarty_tpl->tpl_vars['block']->value) {
echo implode('_',array('sections',$_smarty_tpl->tpl_vars['index']->value,'columns',$_smarty_tpl->tpl_vars['cindex']->value,'blocks',$_smarty_tpl->tpl_vars['bindex']->value,'value'));
}?>"
				class="form-control raw"><?php echo $_smarty_tpl->tpl_vars['block']->value['value'][$_smarty_tpl->tpl_vars['language']->value];?>
</textarea>
			</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</fieldset>
<?php
}
}
/* {/block "content"} */
}
