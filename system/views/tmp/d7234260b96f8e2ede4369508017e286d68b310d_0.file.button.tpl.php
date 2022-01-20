<?php
/* Smarty version 3.1.40, created on 2022-01-11 14:44:13
  from 'D:\wamp\www\Sztorm\system\views\back\addons\blocks\button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61dd97bda53b04_73449465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7234260b96f8e2ede4369508017e286d68b310d' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\addons\\blocks\\button.tpl',
      1 => 1641900649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61dd97bda53b04_73449465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144552231961dd97bda4f537_13560822', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../blocks/block.tpl");
}
/* {block "content"} */
class Block_144552231961dd97bda4f537_13560822 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_144552231961dd97bda4f537_13560822',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="title badge badge-info rounded p-2">Prosty przycisk</div>
	<fieldset>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['base']->value->languages, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
			<div data-language="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
				<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
[value][1][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['block']->value['value'][1][$_smarty_tpl->tpl_vars['language']->value];?>
" 
				class="form-control btn btn-danger btn-lg" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['TITLE'];?>
" data-target="#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_settings" data-toggle="collapse">
				<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_settings" class="accordion-collapse collapse">
					<div class="accordion-body mt-1">
						<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
[value][0][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['block']->value['value'][0][$_smarty_tpl->tpl_vars['language']->value];?>
" 
						class="form-control form-control-sm" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['LINK'];?>
">
					</div>
				</div>
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
