<?php
/* Smarty version 3.1.40, created on 2021-12-09 10:38:43
  from 'D:\wamp\www\Sztorm\system\views\back\admins\logs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61b1dcb37c9f47_83506473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f45919854f55114bc2af5fbc214f197527153c0' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\admins\\logs.tpl',
      1 => 1639044548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/topbar.tpl' => 1,
    'file:../addons/flash.tpl' => 1,
  ),
),false)) {
function content_61b1dcb37c9f47_83506473 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34846978661b1dcb37bc803_98606660', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "content"} */
class Block_34846978661b1dcb37bc803_98606660 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_34846978661b1dcb37bc803_98606660',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "custom", null, null);?>
		<div class="btn-group ml-md-2">
			<a href="javascript:history.back()" class="btn rounded btn-outline-primary">
				<span><?php echo $_smarty_tpl->tpl_vars['t']->value['GO_BACK'];?>
</span>
			</a>
		</div>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php $_smarty_tpl->_subTemplateRender("file:../addons/topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('topbar'=>array('title'=>array('icon'=>'history','content'=>implode(' ',array($_smarty_tpl->tpl_vars['admin']->value['personal']['name'],$_smarty_tpl->tpl_vars['admin']->value['personal']['surname'])),'text'=>$_smarty_tpl->tpl_vars['t']->value['LOGS']))), 0, false);
?>
	<?php if ($_smarty_tpl->tpl_vars['logs']->value) {?>	
		<div class="<?php echo $_smarty_tpl->tpl_vars['grow']->value;?>
">
			<div class="rounded border">
				<div class="container">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['logs']->value), 'log', false, 'index');
$_smarty_tpl->tpl_vars['log']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->do_else = false;
?>
						<div class="row <?php if ($_smarty_tpl->tpl_vars['index']->value%2) {?>flex-lg-row-reverse<?php }?> no-gutters align-items-center my-3 my-sm-0">
							<div class="col-auto col-lg pr-3 pr-lg-0">
								<div class="text-right <?php if ($_smarty_tpl->tpl_vars['index']->value%2 != 0) {?>text-lg-left<?php }?> text-muted small">
									<b><?php echo date('H:i',strtotime($_smarty_tpl->tpl_vars['log']->value['created']));?>
</b><br>
									<small class="text-muted"><?php echo date('d.m.Y',strtotime($_smarty_tpl->tpl_vars['log']->value['created']));?>
</small>
								</div>
							</div>
							<div class="col-auto col-lg-1 pr-3 pr-lg-0 text-center flex-column d-none d-sm-flex">
								<?php if (!$_smarty_tpl->tpl_vars['index']->value) {?>
									<div class="row h-50">
										<div class="col">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
								<?php } else { ?>
									<div class="row h-50">
										<div class="col border-right">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
								<?php }?>
								<div class="my-2">
									<span class="badge badge-dot bg-<?php echo $_smarty_tpl->tpl_vars['log']->value['log']['color'];?>
 text-light <?php echo $_smarty_tpl->tpl_vars['log']->value['log']['color'];?>
">
										<i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['log']->value['log']['icon'];?>
 <?php if (in_array($_smarty_tpl->tpl_vars['log']->value['log']['icon'],array('plus'))) {?>pt-1<?php }?>"></i>
									</span>
								</div>
								<div class="row h-50">
									<div class="col <?php if ($_smarty_tpl->tpl_vars['index']->value != count($_smarty_tpl->tpl_vars['logs']->value)-1) {?>border-right<?php }?>">&nbsp;</div>
									<div class="col">&nbsp;</div>
								</div>
							</div>
							<div class="col col-sm">
								<div class="card border-<?php echo $_smarty_tpl->tpl_vars['log']->value['log']['color'];?>
 text-<?php echo $_smarty_tpl->tpl_vars['log']->value['log']['color'];?>
">
									<div class="card-body <?php if ($_smarty_tpl->tpl_vars['index']->value%2) {?>text-lg-right<?php }?> small py-2 py-sm-3">
										<?php echo $_smarty_tpl->tpl_vars['log']->value['data']['display'];?>

									</div>
								</div>
							</div>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
		</div>
	<?php } else { ?>
		<?php $_smarty_tpl->_subTemplateRender("file:../addons/flash.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('flash'=>array('title'=>$_smarty_tpl->tpl_vars['t']->value['RECORDS_EMTY_TITLE'])), 0, false);
?>
	<?php }
}
}
/* {/block "content"} */
}
