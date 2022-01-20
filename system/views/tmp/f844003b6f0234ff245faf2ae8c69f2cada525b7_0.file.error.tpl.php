<?php
/* Smarty version 3.1.39, created on 2021-09-16 09:04:50
  from 'D:\wamp\www\HelloStranger\system\views\front\home\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614308b2cd5eb5_81797156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f844003b6f0234ff245faf2ae8c69f2cada525b7' => 
    array (
      0 => 'D:\\wamp\\www\\HelloStranger\\system\\views\\front\\home\\error.tpl',
      1 => 1631783084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614308b2cd5eb5_81797156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1550921861614308b2ccd5e0_83623082', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "content"} */
class Block_1550921861614308b2ccd5e0_83623082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1550921861614308b2ccd5e0_83623082',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section class="padding">
		<div class="container">
			<div class="section-header center">
				<div class="section-header-title">
					<b><?php echo $_smarty_tpl->tpl_vars['base']->value->get('ERROR.code');?>
</b>
				</div>
				<div class="section-header-subtitle">
					<i><?php echo $_smarty_tpl->tpl_vars['base']->value->get('ERROR.status');?>
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
