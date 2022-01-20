<?php
/* Smarty version 3.1.40, created on 2022-01-11 15:22:22
  from 'D:\wamp\www\Sztorm\system\views\back\addons\blocks\youtube.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61dda0ae8d2fe8_66401631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5004de7b9190f169d6c88dd98d3823c51e9c432f' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\addons\\blocks\\youtube.tpl',
      1 => 1641914537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61dda0ae8d2fe8_66401631 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78951886961dda0ae8ce184_31457800', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../blocks/block.tpl");
}
/* {block "content"} */
class Block_78951886961dda0ae8ce184_31457800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_78951886961dda0ae8ce184_31457800',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="title badge badge-info rounded p-2">Film YouTube</div>
	<div class="input-group">
		<?php $_smarty_tpl->_assignInScope('video', parse_url($_smarty_tpl->tpl_vars['block']->value['value']));
echo parse_str($_smarty_tpl->tpl_vars['video']->value['query'],$_smarty_tpl->tpl_vars['video']->value);?>

		<img src="http://img.youtube.com/vi/<?php echo $_smarty_tpl->tpl_vars['video']->value['v'];?>
/sddefault.jpg" class="w-100 img-fluid rounded mb-1 <?php if (!$_smarty_tpl->tpl_vars['block']->value) {?>d-none<?php }?>">
		<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
[value]" value="<?php echo $_smarty_tpl->tpl_vars['block']->value['value'];?>
" class="form-control rounded-left" 
		placeholder="Adres URL filmu YouTube" onchange="youtube(this)">
	</div>
	<?php echo '<script'; ?>
>
		function youtube(input)
		{
			var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/;
			var match = $(input).val().match(regExp), video = (match && match[7].length == 11) ? match[7] : false;
			if(video) $(input).prev().attr("src", "http://img.youtube.com/vi/"+video+"/sddefault.jpg").removeClass("d-none");
			else $(input).prev().attr("src", "").addClass("d-none");
		}
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
