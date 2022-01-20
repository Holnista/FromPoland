<?php
/* Smarty version 3.1.39, created on 2021-10-08 13:45:23
  from '/home/klient.dhosting.pl/kodigo/hellostranger.kodigo.pl/public_html/system/views/mail/order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61602f53d2a673_08484070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b118dee26c942910040b1dcdfd599198e305974' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.kodigo.pl/public_html/system/views/mail/order.tpl',
      1 => 1633607119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61602f53d2a673_08484070 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75397217761602f53d05564_93611469', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197182430161602f53d096c5_91020085', "recipient");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209356857761602f53d0bfc6_46971404', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../mail/layout.tpl");
}
/* {block "title"} */
class Block_75397217761602f53d05564_93611469 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_75397217761602f53d05564_93611469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['title']->value;
}
}
/* {/block "title"} */
/* {block "recipient"} */
class Block_197182430161602f53d096c5_91020085 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'recipient' => 
  array (
    0 => 'Block_197182430161602f53d096c5_91020085',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['client']->value['personal']['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['client']->value['personal']['email'];?>
</a><?php
}
}
/* {/block "recipient"} */
/* {block "content"} */
class Block_209356857761602f53d0bfc6_46971404 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_209356857761602f53d0bfc6_46971404',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['client']->value['personal']['sex'] == 'WOMAN') {
$_smarty_tpl->_assignInScope('woman', 'true');
}?>
	<h1 style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['t']->value['MAIL_ORDER_TITLE'];?>
</h1>
	<p style="text-align: center;">
		<?php echo $_smarty_tpl->tpl_vars['client']->value['data']['variant'];?>
, bardzo nam miło, że <?php echo $_smarty_tpl->tpl_vars['woman']->value ? 'dołączyłaś' : 'dołączyłeś';?>
 do eventu 
		organizowanego przez <b><?php echo $_smarty_tpl->tpl_vars['base']->value->NAME;?>
.</b><br> Mamy nadzieję, że pomożemy Ci spełnić Twoje 
		cele interpersonalne i znajdziesz drugą połówkę :)
	</p>
	<p style="text-align: center;">
		Poniżej znajdują się szczegóły Twojej rezerwacji.
	</p>
	<table border="0" cellpadding="16" style="width: 100%; max-width: 640px; margin: 0 auto;
	font-family: 'Open Sans', Helvetica, Arial; font-weight: 400; font-size: 0.875rem; color: #000000; line-height: 1.5;">
		<tr>
			<td width="128">
				<img src="<?php echo $_smarty_tpl->tpl_vars['client']->value['data']['event']['data']['thumb'];?>
" style="border: 1px solid <?php echo $_smarty_tpl->tpl_vars['base']->value->COLOR;?>
;" width="256">
			</td>
			<td>
				<h3 style="margin: 0.75rem 0;">
					<a href="<?php echo path($_smarty_tpl->tpl_vars['base']->value->URL,$_smarty_tpl->tpl_vars['base']->value->language,'event',$_smarty_tpl->tpl_vars['client']->value['data']['event']['alias']);?>
">
					<?php echo $_smarty_tpl->tpl_vars['client']->value['data']['event']['title'];?>
</a>
				</h3>
				<small style="display: block; color: grey; margin: 0.75rem 0;"><?php echo $_smarty_tpl->tpl_vars['client']->value['data']['event']['subtitle'];?>
</small>
				<?php if ($_smarty_tpl->tpl_vars['base']->value->language == 'pl') {?>
					<b style="display: block; margin: 0.75rem 0;">
					<?php echo sprintf('%s, %s - %s, %s',polishDate('d f Y',strtotime($_smarty_tpl->tpl_vars['client']->value['data']['event']['date']['day'])),$_smarty_tpl->tpl_vars['client']->value['data']['event']['date']['start'],$_smarty_tpl->tpl_vars['client']->value['data']['event']['date']['end'],$_smarty_tpl->tpl_vars['client']->value['data']['event']['location']);?>
</b>
				<?php } else { ?>
					<b style="display: block; margin: 0.75rem 0;">
					<?php echo sprintf('%s, %s - %s, %s',date('d f Y',strtotime($_smarty_tpl->tpl_vars['client']->value['data']['event']['date']['day'])),$_smarty_tpl->tpl_vars['client']->value['data']['event']['date']['start'],$_smarty_tpl->tpl_vars['client']->value['data']['event']['date']['end'],$_smarty_tpl->tpl_vars['client']->value['data']['event']['location']);?>
</b>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['client']->value['payment']['price']['topay']) {?>
					<?php echo $_smarty_tpl->tpl_vars['t']->value['TO_PAY'];?>
:
					<?php if ($_smarty_tpl->tpl_vars['client']->value['payment']['price']['promotion']) {?>
						<small style="color: grey;"><s><?php echo price($_smarty_tpl->tpl_vars['client']->value['payment']['price']['promotion']);?>
</s></small>
						<b style="color: <?php echo $_smarty_tpl->tpl_vars['base']->value->COLOR;?>
;"><?php echo price($_smarty_tpl->tpl_vars['client']->value['payment']['price']['topay']);?>
</b>
					<?php } elseif ($_smarty_tpl->tpl_vars['client']->value['payment']['price']['basic']) {?>
						<b style="color: <?php echo $_smarty_tpl->tpl_vars['base']->value->COLOR;?>
;"><?php echo price($_smarty_tpl->tpl_vars['client']->value['payment']['price']['topay']);?>
</b>
					<?php } else { ?>
						<span class="badge badge-primary"><?php echo $_smarty_tpl->tpl_vars['t']->value['PREORDER'];?>
</span>
					<?php }?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['client']->value['payment']['coupon']) {?>
					<?php if ($_smarty_tpl->tpl_vars['client']->value['payment']['price']['topay']) {?><br><?php }?>
					<small style="display: block; color: grey; margin: 0.25rem 0;">
					<?php echo $_smarty_tpl->tpl_vars['t']->value['COUPON'];?>
: <?php echo $_smarty_tpl->tpl_vars['client']->value['payment']['coupon'];?>

				<?php }?>
			</td>
		</tr>
	</table>
	<hr style="border: none; border-top: 3px dashed #CCCCCC; margin: 2rem 0;">
	<table border="0" cellpadding="16" style="width: 100%; margin: 0 auto;
	font-family: 'Open Sans', Helvetica, Arial; font-weight: 400; font-size: 0.875rem; color: #000000; line-height: 1.5;">
		<tr>
			<td>
				<h2><?php ob_start();
echo $_smarty_tpl->tpl_vars['client']->value['data']['variant'];
$_prefixVariable1 = ob_get_clean();
echo sprintf($_smarty_tpl->tpl_vars['t']->value['SEE_YOU_LATER'],$_prefixVariable1);?>
</h2>
				<img src="<?php echo path($_smarty_tpl->tpl_vars['base']->value->URL,PATH_IMAGES,'template','logo.png');?>
" width="240">
			</td>
			<?php if ($_smarty_tpl->tpl_vars['client']->value['payment']['price']['topay']) {?>
				<td>
					<p style="text-align: right;">
						Aha! Jeszcze jedno, jeżeli nie <?php echo $_smarty_tpl->tpl_vars['woman']->value ? 'dokonałaś' : 'dokonałeś';?>
 jeszcze płatności<br> 
						za tą rezerwację to możesz to zrobić teraz klikając w poniższy link:
					</p>
					<p style="text-align: right;">
						<a href="<?php echo path($_smarty_tpl->tpl_vars['base']->value->URL,$_smarty_tpl->tpl_vars['base']->value->language,'payment',$_smarty_tpl->tpl_vars['client']->value['data']['key']);?>
"
						style="background: <?php echo $_smarty_tpl->tpl_vars['base']->value->COLOR;?>
; color: white !important; height: 3rem;
						padding: 0 2rem; display: inline-block; line-height: 3rem;">
						<b><?php echo $_smarty_tpl->tpl_vars['t']->value['PAY_NOW'];?>
</b></a>
					</p>
				</td>
			<?php }?>
		</tr>
	</table>
<?php
}
}
/* {/block "content"} */
}
