<?php
/* Smarty version 3.1.39, created on 2021-10-29 15:46:08
  from '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/back/addons/languages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617bfb201ba1b4_44590581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ab272c719049e085339db176b8421bd179356c6' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/back/addons/languages.tpl',
      1 => 1631891994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617bfb201ba1b4_44590581 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="d-flex align-self-center ml-auto languages">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['base']->value->languages), 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
		<li class="nav-item">
			<a class="nav-link <?php if ($_smarty_tpl->tpl_vars['base']->value->language == $_smarty_tpl->tpl_vars['language']->value) {?>active<?php }?>" data-toggle-language="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
				<img src="/<?php echo PATH_IMAGES;?>
/template/icons/flags/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.png">
			</a>
		</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
