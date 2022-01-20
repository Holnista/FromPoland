<?php
/* Smarty version 3.1.40, created on 2022-01-11 11:31:30
  from 'D:\wamp\www\Sztorm\system\views\back\addons\blocks\collapse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61dd6a9226a453_99134608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc0fd0665e5a4f7ca63c5dd381767c24208303af' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\addons\\blocks\\collapse.tpl',
      1 => 1641900636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61dd6a9226a453_99134608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107334782261dd6a92264a50_31514941', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../blocks/block.tpl");
}
/* {block "content"} */
class Block_107334782261dd6a92264a50_31514941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_107334782261dd6a92264a50_31514941',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="title badge badge-info rounded p-2">Rozwijany tekst</div>
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
[value][0][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['block']->value['value'][0][$_smarty_tpl->tpl_vars['language']->value];?>
" 
				class="form-control form-control-lg" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['TITLE'];?>
" data-target="#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_settings" data-toggle="collapse">
				<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_settings" class="accordion-collapse collapse">
					<div class="accordion-body mt-1">
						<textarea name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
[value][1][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" class="form-control">
						<?php echo $_smarty_tpl->tpl_vars['block']->value['value'][1][$_smarty_tpl->tpl_vars['language']->value];?>
</textarea>
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
