<?php
/* Smarty version 3.1.39, created on 2021-09-22 15:25:27
  from '/home/klient.dhosting.pl/kodigo/hellostranger.kodigo.pl/public_html/system/views/front/home/error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614b2ec7f0e7b1_45388065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '349e7864029b4c69f8c0425016d5797018aec665' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.kodigo.pl/public_html/system/views/front/home/error.tpl',
      1 => 1632315072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614b2ec7f0e7b1_45388065 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_376211353614b2ec7f05dd3_65307048', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "content"} */
class Block_376211353614b2ec7f05dd3_65307048 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_376211353614b2ec7f05dd3_65307048',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section class="padding">
		<div class="container">
			<div class="section-header">
				<div class="section-header-title my-4">
					<b><?php echo $_smarty_tpl->tpl_vars['title']->value ? $_smarty_tpl->tpl_vars['title']->value : $_smarty_tpl->tpl_vars['base']->value->get('ERROR.code');?>
</b>
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
