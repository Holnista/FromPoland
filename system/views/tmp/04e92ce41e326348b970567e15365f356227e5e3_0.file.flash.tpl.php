<?php
/* Smarty version 3.1.40, created on 2021-12-15 10:44:04
  from 'D:\wamp\www\Sztorm\system\views\back\addons\flash.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61b9c6f4a9d4f2_90822054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04e92ce41e326348b970567e15365f356227e5e3' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\addons\\flash.tpl',
      1 => 1639044548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b9c6f4a9d4f2_90822054 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="<?php echo $_smarty_tpl->tpl_vars['grow']->value;?>
 justify-content-center align-items-center bg-light px-3 py-5 rounded text-center h-100">
	<?php if ($_smarty_tpl->tpl_vars['flash']->value['title']) {?>
		<h4 class="my-2"><?php echo $_smarty_tpl->tpl_vars['flash']->value['title'];?>
</h4>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['flash']->value['lead']) {?>
		<p class="lead my-2">
			<?php if ($_smarty_tpl->tpl_vars['flash']->value['lead']['icon']) {?>
				<i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['flash']->value['lead']['icon'];?>
"></i>
			<?php }?> <?php echo $_smarty_tpl->tpl_vars['flash']->value['lead']['content'];?>

		</p>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['flash']->value['text']) {?>
		<p class="text-muted my-2"><?php echo $_smarty_tpl->tpl_vars['flash']->value['text'];?>
</p>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['flash']->value['button']) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['flash']->value['button']['link'];?>
" class="btn rounded px-3 btn-primary my-2">
			<span><?php echo $_smarty_tpl->tpl_vars['flash']->value['button']['content'];?>
</span>
		</a>
	<?php }?>
</div><?php }
}