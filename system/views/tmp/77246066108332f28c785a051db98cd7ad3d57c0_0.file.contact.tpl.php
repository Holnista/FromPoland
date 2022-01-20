<?php
/* Smarty version 3.1.39, created on 2021-10-08 12:33:04
  from '/home/klient.dhosting.pl/kodigo/hellostranger.kodigo.pl/public_html/system/views/mail/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61601e6016e8b5_74600725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77246066108332f28c785a051db98cd7ad3d57c0' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.kodigo.pl/public_html/system/views/mail/contact.tpl',
      1 => 1632410653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61601e6016e8b5_74600725 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130091946561601e60162103_89817894', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97539741461601e60165831_17435664', "recipient");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3686117261601e60167dc4_69987710', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../mail/layout.tpl");
}
/* {block "title"} */
class Block_130091946561601e60162103_89817894 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_130091946561601e60162103_89817894',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['title']->value;
}
}
/* {/block "title"} */
/* {block "recipient"} */
class Block_97539741461601e60165831_17435664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'recipient' => 
  array (
    0 => 'Block_97539741461601e60165831_17435664',
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
class Block_3686117261601e60167dc4_69987710 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3686117261601e60167dc4_69987710',
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
