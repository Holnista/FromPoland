<?php
/* Smarty version 3.1.40, created on 2022-01-11 11:29:55
  from 'D:\wamp\www\Sztorm\system\views\back\addons\blocks\tinymce.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61dd6a33a2f889_20976434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fdb9d11ec0bad9d8ed60b4cbfb9d174034c671d' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\addons\\blocks\\tinymce.tpl',
      1 => 1641900514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61dd6a33a2f889_20976434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74079102861dd6a33a2c2a6_78929998', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../blocks/block.tpl");
}
/* {block "content"} */
class Block_74079102861dd6a33a2c2a6_78929998 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_74079102861dd6a33a2c2a6_78929998',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="title badge badge-info rounded p-2">Edytor tekstowy</div>
	<fieldset>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['base']->value->languages, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
			<div data-language="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
				<textarea name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
[value][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]"
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
