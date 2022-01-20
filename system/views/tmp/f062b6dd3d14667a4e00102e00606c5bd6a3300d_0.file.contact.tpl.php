<?php
/* Smarty version 3.1.39, created on 2021-11-22 11:31:02
  from '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/mail/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619b716646ad67_58859216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f062b6dd3d14667a4e00102e00606c5bd6a3300d' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/mail/contact.tpl',
      1 => 1632410653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619b716646ad67_58859216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126599741619b716645b217_78637227', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_647119400619b7166460b79_24577884', "recipient");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1651423354619b7166462b79_59456094', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../mail/layout.tpl");
}
/* {block "title"} */
class Block_126599741619b716645b217_78637227 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_126599741619b716645b217_78637227',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['title']->value;
}
}
/* {/block "title"} */
/* {block "recipient"} */
class Block_647119400619b7166460b79_24577884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'recipient' => 
  array (
    0 => 'Block_647119400619b7166460b79_24577884',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['base']->value->get('smtp.login');?>
"><?php echo $_smarty_tpl->tpl_vars['base']->value->get('smtp.login');?>
</a><?php
}
}
/* {/block "recipient"} */
/* {block "content"} */
class Block_1651423354619b7166462b79_59456094 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1651423354619b7166462b79_59456094',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['data']->value['name']) {?><b><?php echo $_smarty_tpl->tpl_vars['t']->value['SENDER'];?>
:</b> <?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
<br><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['data']->value['subject']) {?><b><?php echo $_smarty_tpl->tpl_vars['t']->value['SUBJECT'];?>
:</b> <?php echo $_smarty_tpl->tpl_vars['data']->value['subject'];?>
<br><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['data']->value['email']) {?><b><?php echo $_smarty_tpl->tpl_vars['t']->value['EMAIL'];?>
:</b> <?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
<br><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['data']->value['phone']) {?><b><?php echo $_smarty_tpl->tpl_vars['t']->value['PHONE'];?>
:</b> <?php echo $_smarty_tpl->tpl_vars['data']->value['phone'];?>
<br><?php }?>
	---<br>
	<?php echo $_smarty_tpl->tpl_vars['data']->value['text'];?>

<?php
}
}
/* {/block "content"} */
}
