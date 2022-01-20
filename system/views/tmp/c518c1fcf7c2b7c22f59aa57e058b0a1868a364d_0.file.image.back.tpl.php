<?php
/* Smarty version 3.1.40, created on 2021-12-23 10:18:07
  from 'D:\wamp\www\Sztorm\system\views\back\addons\blocks\image.back.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61c44cdf80c500_14138778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c518c1fcf7c2b7c22f59aa57e058b0a1868a364d' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\addons\\blocks\\image.back.tpl',
      1 => 1640254681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c44cdf80c500_14138778 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154618054661c44cdf806337_05638014', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../blocks/block.tpl");
}
/* {block "content"} */
class Block_154618054661c44cdf806337_05638014 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_154618054661c44cdf806337_05638014',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="input-group">
		<img src="<?php echo $_smarty_tpl->tpl_vars['block']->value['value'];?>
" class="img-fluid <?php if (!$_smarty_tpl->tpl_vars['block']->value) {?>d-none<?php }?>" alt="">
		<input type="text" name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value['section'];?>
][columns][<?php echo $_smarty_tpl->tpl_vars['index']->value['column'];?>
][blocks][<?php echo $_smarty_tpl->tpl_vars['index']->value['block'];?>
][value]" value="<?php echo $_smarty_tpl->tpl_vars['block']->value['value'];?>
"
		id="<?php if ($_smarty_tpl->tpl_vars['block']->value) {
echo implode('_',array('sections',$_smarty_tpl->tpl_vars['index']->value['section'],'columns',$_smarty_tpl->tpl_vars['index']->value['column'],'blocks',$_smarty_tpl->tpl_vars['index']->value['block'],'value'));
}?>" class="form-control">
		<div class="input-group-append">
			<button data-src="/<?php echo PATH_PUBLIC;?>
/vendor/tinymce/plugins/filemanager/dialog.php?akey=5d2e69f5f8be6695acbebfa1b2553d1e&type=1&popup=1&relative_url=1&field_id=
			<?php if ($_smarty_tpl->tpl_vars['block']->value) {
echo implode('_',array('sections',$_smarty_tpl->tpl_vars['index']->value['section'],'columns',$_smarty_tpl->tpl_vars['index']->value['column'],'blocks',$_smarty_tpl->tpl_vars['index']->value['block'],'value'));
}?>" type="button" class="btn rounded-right btn-primary" 
			data-fancybox data-type="iframe"><?php echo $_smarty_tpl->tpl_vars['t']->value['SELECT'];?>
</button>
		</div>
	</div>
<?php
}
}
/* {/block "content"} */
}
