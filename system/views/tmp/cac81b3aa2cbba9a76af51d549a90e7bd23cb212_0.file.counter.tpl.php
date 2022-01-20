<?php
/* Smarty version 3.1.40, created on 2022-01-17 12:25:39
  from 'D:\wamp\www\Sztorm\system\views\back\addons\blocks\counter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61e56043bf1218_34937923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cac81b3aa2cbba9a76af51d549a90e7bd23cb212' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\addons\\blocks\\counter.tpl',
      1 => 1642422326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e56043bf1218_34937923 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49451426061e56043be9a34_78215846', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../blocks/block.tpl");
}
/* {block "content"} */
class Block_49451426061e56043be9a34_78215846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_49451426061e56043be9a34_78215846',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="title badge badge-info rounded p-2">Cyfrowy licznik</div>
	<fieldset>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['base']->value->languages, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
			<div data-language="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
				<input type="number" name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
[value][0][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['block']->value['value'][0][$_smarty_tpl->tpl_vars['language']->value];?>
" 
				class="form-control btn btn-danger btn-lg py-5" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['COUNT'];?>
" min="0">
				<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
[value][1][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['block']->value['value'][1][$_smarty_tpl->tpl_vars['language']->value];?>
" 
				class="form-control text-center mt-1" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['TITLE'];?>
">
				<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
[value][2][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['block']->value['value'][2][$_smarty_tpl->tpl_vars['language']->value];?>
" 
				class="form-control form-control-sm text-center mt-1" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['SUBTITLE'];?>
">
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
