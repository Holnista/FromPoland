<?php
/* Smarty version 3.1.39, created on 2021-10-05 16:29:30
  from '/home/klient.dhosting.pl/kodigo/hellostranger.kodigo.pl/public_html/system/views/front/home/flash.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615c614a518fd5_47994776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b6e5ce5091b71cbea85302761ca4e280231e35c' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.kodigo.pl/public_html/system/views/front/home/flash.tpl',
      1 => 1633444056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615c614a518fd5_47994776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_282382314615c614a507df1_87044251', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "content"} */
class Block_282382314615c614a507df1_87044251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_282382314615c614a507df1_87044251',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section class="padding">
		<div class="container">
			<div class="section-header">
				<div class="section-header-title my-4">
					<?php if (!$_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['base']->value->get('ERROR.code'));
}?>
					<span><?php $_smarty_tpl->_assignInScope('title', explode(' ',clear($_smarty_tpl->tpl_vars['title']->value)));?>
					<?php $_smarty_tpl->_assignInScope('last', array_pop($_smarty_tpl->tpl_vars['title']->value));
echo implode(' ',$_smarty_tpl->tpl_vars['title']->value);?>

					<b><?php echo $_smarty_tpl->tpl_vars['last']->value;?>
</b></span>
				</div>
				<div class="section-header-subtitle my-4">
					<i><?php echo $_smarty_tpl->tpl_vars['text']->value ? $_smarty_tpl->tpl_vars['text']->value : $_smarty_tpl->tpl_vars['base']->value->get('ERROR.status');?>
</i>
				</div>
			</div>
		</div>
	</section>
<?php
}
}
/* {/block "content"} */
}
