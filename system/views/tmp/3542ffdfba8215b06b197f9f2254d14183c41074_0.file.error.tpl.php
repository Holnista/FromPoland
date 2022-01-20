<?php
/* Smarty version 3.1.39, created on 2021-08-26 11:16:24
  from 'D:\wamp\www\HelloStranger\system\views\back\home\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612778080916c0_04672979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3542ffdfba8215b06b197f9f2254d14183c41074' => 
    array (
      0 => 'D:\\wamp\\www\\HelloStranger\\system\\views\\back\\home\\error.tpl',
      1 => 1629285804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/flash.tpl' => 1,
  ),
),false)) {
function content_612778080916c0_04672979 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89049287361277808084ed4_53906569', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "content"} */
class Block_89049287361277808084ed4_53906569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_89049287361277808084ed4_53906569',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender("file:../addons/flash.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('flash'=>array('title'=>$_smarty_tpl->tpl_vars['base']->value->get('ERROR.code'),'lead'=>array('icon'=>'times text-danger','content'=>$_smarty_tpl->tpl_vars['base']->value->get('ERROR.status')),'text'=>$_smarty_tpl->tpl_vars['base']->value->get('ERROR.text'))), 0, false);
}
}
/* {/block "content"} */
}
