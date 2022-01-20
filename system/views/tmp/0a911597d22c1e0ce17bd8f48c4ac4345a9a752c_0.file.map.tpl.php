<?php
/* Smarty version 3.1.40, created on 2022-01-11 11:29:44
  from 'D:\wamp\www\Sztorm\system\views\back\addons\blocks\map.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61dd6a28ee72f4_37326438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a911597d22c1e0ce17bd8f48c4ac4345a9a752c' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\addons\\blocks\\map.tpl',
      1 => 1641900572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61dd6a28ee72f4_37326438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94185859261dd6a28ee4b13_47886674', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../blocks/block.tpl");
}
/* {block "content"} */
class Block_94185859261dd6a28ee4b13_47886674 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_94185859261dd6a28ee4b13_47886674',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="title badge badge-info rounded p-2">Mapa Google</div>
	<div class="input-group">
		<iframe src="<?php echo $_smarty_tpl->tpl_vars['block']->value['value'];?>
" class="w-100 img-fluid rounded mb-1 <?php if (!$_smarty_tpl->tpl_vars['block']->value) {?>d-none<?php }?>" style="aspect-ratio: 1; border: none;"></iframe>
		<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
[value]" value="<?php echo $_smarty_tpl->tpl_vars['block']->value['value'];?>
" class="form-control rounded-left"
		placeholder="Adres URL mapy Google" onchange="googlemap(this)">
	</div>
	<?php echo '<script'; ?>
>
		function googlemap(input)
		{
			var value = $(input).val();
			if(value.length) $(input).prev().attr("src", value).removeClass("d-none");
			else $(input).prev().attr("src", "").addClass("d-none");
		}
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
