<?php
/* Smarty version 3.1.39, created on 2021-11-02 20:17:30
  from '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/front/home/payment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61818ecae33507_05587054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd2307582fb8e18d21e5c50140d6b1f92ab9cb73' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/front/home/payment.tpl',
      1 => 1635880644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61818ecae33507_05587054 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('blank', 'true');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15290334061818ecae25d66_30303572', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182413602861818ecae32a77_50609973', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "content"} */
class Block_15290334061818ecae25d66_30303572 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15290334061818ecae25d66_30303572',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section class="padding">
		<div class="container">
			<!--div class="section-header">
				<div class="section-header-title my-4">
					<span><?php $_smarty_tpl->_assignInScope('title', explode(' ',clear($_smarty_tpl->tpl_vars['t']->value['LOADING'])));?>
					<?php $_smarty_tpl->_assignInScope('last', array_pop($_smarty_tpl->tpl_vars['title']->value));
echo implode(' ',$_smarty_tpl->tpl_vars['title']->value);?>

					<b><?php echo $_smarty_tpl->tpl_vars['last']->value;?>
</b></span>
				</div>
			</div-->
			<form method="POST" action="https://paywall.imoje.pl/payment">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
					<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</form>
			<cneter>
				<img src="<?php echo PATH_IMAGES;?>
/template/loader.svg" width="160" class="m-auto">
			</center>
		</div>
	</section>
<?php
}
}
/* {/block "content"} */
/* {block "footer"} */
class Block_182413602861818ecae32a77_50609973 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_182413602861818ecae32a77_50609973',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
>
		$(document).ready(function()
		{
			setTimeout(function()
			{
				$("form").submit();
			}, 1000);
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "footer"} */
}
