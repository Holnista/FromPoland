<?php
/* Smarty version 3.1.40, created on 2022-01-17 12:23:43
  from 'D:\wamp\www\Sztorm\system\views\back\addons\blocks\image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61e55fcf931095_98443678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44140eddcc9d45ccc9d78d415d8cfde2d54aa39e' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\addons\\blocks\\image.tpl',
      1 => 1641914423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e55fcf931095_98443678 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113322386061e55fcf92da32_86165982', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../blocks/block.tpl");
}
/* {block "content"} */
class Block_113322386061e55fcf92da32_86165982 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_113322386061e55fcf92da32_86165982',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="title badge badge-info rounded p-2">Prosty obraz</div>
	<div class="input-group">
		<img src="<?php echo $_smarty_tpl->tpl_vars['block']->value['value'];?>
" class="w-100 img-fluid rounded pointer mb-1 <?php if (!$_smarty_tpl->tpl_vars['block']->value) {?>d-none<?php }?>" onclick="$(this).next().next().find('button').trigger('click');">
		<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
[value]" value="<?php echo $_smarty_tpl->tpl_vars['block']->value['value'];?>
" class="form-control rounded-left" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<div class="input-group-append">
			<button data-src="/<?php echo PATH_PUBLIC;?>
/vendor/tinymce/plugins/filemanager/dialog.php?akey=5d2e69f5f8be6695acbebfa1b2553d1e&type=1&popup=1&relative_url=1&field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			type="button" class="btn rounded-right btn-primary" data-fancybox data-type="iframe"><?php echo $_smarty_tpl->tpl_vars['t']->value['SELECT'];?>
</button>
		</div>
	</div>
<?php
}
}
/* {/block "content"} */
}
