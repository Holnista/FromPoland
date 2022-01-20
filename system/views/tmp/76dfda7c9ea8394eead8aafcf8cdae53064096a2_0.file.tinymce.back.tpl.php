<?php
/* Smarty version 3.1.40, created on 2021-12-22 13:39:19
  from 'D:\wamp\www\Sztorm\system\views\back\addons\blocks\tinymce.back.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61c32a876fab35_33436201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76dfda7c9ea8394eead8aafcf8cdae53064096a2' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\addons\\blocks\\tinymce.back.tpl',
      1 => 1640180358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c32a876fab35_33436201 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('type', "tinymce");?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121406353061c32a876f4d33_75844456', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../blocks/block.tpl");
}
/* {block "content"} */
class Block_121406353061c32a876f4d33_75844456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_121406353061c32a876f4d33_75844456',
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
				<textarea name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][columns][<?php echo $_smarty_tpl->tpl_vars['cindex']->value;?>
][blocks][<?php echo $_smarty_tpl->tpl_vars['bindex']->value;?>
][value][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" 
				id="<?php if ($_smarty_tpl->tpl_vars['block']->value) {
echo implode('_',array('sections',$_smarty_tpl->tpl_vars['index']->value,'columns',$_smarty_tpl->tpl_vars['cindex']->value,'blocks',$_smarty_tpl->tpl_vars['bindex']->value,'value'));
}?>"
				class="form-control"><?php echo $_smarty_tpl->tpl_vars['block']->value['value'][$_smarty_tpl->tpl_vars['language']->value];?>
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
