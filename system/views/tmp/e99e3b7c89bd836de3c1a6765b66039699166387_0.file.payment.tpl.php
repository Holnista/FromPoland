<?php
/* Smarty version 3.1.39, created on 2021-10-27 14:14:53
  from '/home/klient.dhosting.pl/kodigo/hellostranger.kodigo.pl/public_html/system/views/front/home/payment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617942bd27f332_96573125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e99e3b7c89bd836de3c1a6765b66039699166387' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.kodigo.pl/public_html/system/views/front/home/payment.tpl',
      1 => 1635336637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617942bd27f332_96573125 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('blank', 'true');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1167367924617942bd272c72_47353384', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1367088211617942bd27e9f8_02959166', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "content"} */
class Block_1167367924617942bd272c72_47353384 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1167367924617942bd272c72_47353384',
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
class Block_1367088211617942bd27e9f8_02959166 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1367088211617942bd27e9f8_02959166',
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
