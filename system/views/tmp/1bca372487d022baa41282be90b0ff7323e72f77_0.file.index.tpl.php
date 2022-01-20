<?php
/* Smarty version 3.1.39, created on 2021-11-22 15:51:46
  from '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/back/logs/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619bae82bdd0e5_83398408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bca372487d022baa41282be90b0ff7323e72f77' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/back/logs/index.tpl',
      1 => 1633384049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/topbar.tpl' => 1,
    'file:../addons/pager.tpl' => 1,
    'file:../addons/flash.tpl' => 2,
  ),
),false)) {
function content_619bae82bdd0e5_83398408 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1058315925619bae82b9e098_19608022', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1590041167619bae82bd7118_19045755', "modal");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "content"} */
class Block_1058315925619bae82b9e098_19608022 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1058315925619bae82b9e098_19608022',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "custom", null, null);?>
		<!--div class="btn-group d-none d-md-flex ml-2">
			<a href="logs/clients" class="btn rounded-left <?php if ($_smarty_tpl->tpl_vars['base']->value->get('PARAMS.table') == TABLE_CLIENTS) {?>btn-primary<?php } else { ?>btn-outline-primary<?php }?>">
				<span><?php echo $_smarty_tpl->tpl_vars['t']->value['CLIENTS'];?>
</span>
			</a>
			<a href="logs/admins" class="btn rounded-right <?php if ($_smarty_tpl->tpl_vars['base']->value->get('PARAMS.table') == TABLE_ADMINS) {?>btn-primary<?php } else { ?>btn-outline-primary<?php }?>">
				<span><?php echo $_smarty_tpl->tpl_vars['t']->value['ADMINS'];?>
</span>
			</a>
		</div-->
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php if ($_smarty_tpl->tpl_vars['base']->value->get('PARAMS.table') == TABLE_CLIENTS) {
$_smarty_tpl->_assignInScope('text', $_smarty_tpl->tpl_vars['t']->value['CLIENTS']);
}?>
	<?php if ($_smarty_tpl->tpl_vars['base']->value->get('PARAMS.table') == TABLE_ADMINS) {
$_smarty_tpl->_assignInScope('text', $_smarty_tpl->tpl_vars['t']->value['ADMINS']);
}?>
	<?php $_smarty_tpl->_subTemplateRender("file:../addons/topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('topbar'=>array('title'=>array('icon'=>'history','content'=>$_smarty_tpl->tpl_vars['t']->value['LOGS'],'text'=>$_smarty_tpl->tpl_vars['text']->value),'options'=>array($_smarty_tpl->tpl_vars['count']->value ? 'search' : ''))), 0, false);
?>
	<?php if ($_smarty_tpl->tpl_vars['logs']->value) {?>
		<table class="table table-bordered table-hover table-sm">
			<thead>
				<tr>
					<th class="text-right d-none d-md-table-cell" width="80">ID</th>
					<th class="text-left d-none d-md-table-cell" colspan="3"><?php echo $_smarty_tpl->tpl_vars['t']->value['ENTRY'];?>
</th>
					<th class="text-left d-table-cell d-md-none" colspan="3"><?php echo $_smarty_tpl->tpl_vars['t']->value['ENTRY'];?>
</th>
					<th class="text-left d-none d-md-table-cell" width="100"><?php echo $_smarty_tpl->tpl_vars['t']->value['DATE'];?>
</th>
					<th class="text-center d-none d-md-table-cell" width="80"><?php echo $_smarty_tpl->tpl_vars['t']->value['OPTIONS'];?>
</th>
				</tr>
			</thead>
			<tbody class="small">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['logs']->value), 'log');
$_smarty_tpl->tpl_vars['log']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->do_else = false;
?>
					<tr>
						<td class="text-right text-muted d-none d-md-table-cell"><?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
</td>
						<td class="text-center" width="53">
							<i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['log']->value['log']['icon'];?>
 text-<?php echo $_smarty_tpl->tpl_vars['log']->value['log']['color'];?>
"></i>
						</td>
						<td class="text-left text-monospace">
							<?php echo $_smarty_tpl->tpl_vars['log']->value['data']['display'];?>

						</td>
						<td class="text-left" width="200">
							<div class="row align-items-center no-gutters flex-nowrap">
								<div class="col-auto mr-2">
									<?php if (!$_smarty_tpl->tpl_vars['log']->value['data']['doer']['file']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['log']->value['data']['doer']['data']['thumb'];?>
" class="img-thumbnail" width="48"><?php } else { ?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['log']->value['data']['doer']['data']['image'];?>
" data-fancybox="<?php echo $_smarty_tpl->tpl_vars['log']->value['table'];?>
" data-caption="<?php echo $_smarty_tpl->tpl_vars['log']->value['data']['doer']['title'];?>
">
											<img src="<?php echo $_smarty_tpl->tpl_vars['log']->value['data']['doer']['data']['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['log']->value['data']['doer']['title'];?>
" class="img-thumbnail" width="48">
										</a>
									<?php }?>
								</div>
								<div class="col">
									<b><?php echo $_smarty_tpl->tpl_vars['log']->value['data']['doer']['title'];?>
</b><br>
									<small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['log']->value['data']['doer']['subtitle'];?>
</small>
								</div>
							</div>
						</td>
						<td class="text-right d-none d-md-table-cell">
							<b><?php echo date('H:i',strtotime($_smarty_tpl->tpl_vars['log']->value['created']));?>
</b><br>
							<small class="text-muted"><?php echo date('d.m.Y',strtotime($_smarty_tpl->tpl_vars['log']->value['created']));?>
</small>
						</td>
						<td class="text-center d-none d-md-table-cell">
							<a href="#" data-toggle="modal" data-target="#remove<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
" class="btn rounded btn-sm btn-outline-danger">
								<i class="fa fa-times"></i>
							</a>
						</td>
					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
		<?php $_smarty_tpl->_subTemplateRender("file:../addons/pager.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php } else { ?>
		<?php if (!$_smarty_tpl->tpl_vars['count']->value) {?>
			<?php $_smarty_tpl->_subTemplateRender("file:../addons/flash.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('flash'=>array('title'=>$_smarty_tpl->tpl_vars['t']->value['RECORDS_EMTY_TITLE'])), 0, false);
?>
		<?php } elseif ($_GET['word']) {?>
			<?php $_smarty_tpl->_subTemplateRender("file:../addons/flash.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('flash'=>array('title'=>$_smarty_tpl->tpl_vars['t']->value['SEARCH_EMPTY_TITLE'],'lead'=>array('content'=>sprintf($_smarty_tpl->tpl_vars['t']->value['SEARCH_EMPTY_TEXT'],$_GET['word'])))), 0, true);
?>	
		<?php }?>
	<?php }
}
}
/* {/block "content"} */
/* {block "modal"} */
class Block_1590041167619bae82bd7118_19045755 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal' => 
  array (
    0 => 'Block_1590041167619bae82bd7118_19045755',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['logs']->value) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['logs']->value), 'log');
$_smarty_tpl->tpl_vars['log']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->do_else = false;
?>
			<div class="modal fade" id="remove<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
">
				<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['t']->value['WARNING'];?>
</h5>
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body text-center py-5">
							<p class="m-0"><?php echo sprintf($_smarty_tpl->tpl_vars['t']->value['RECORDS_REMOVE_TITLE'],sprintf('%s (ID: %s)',strtolower($_smarty_tpl->tpl_vars['t']->value['ENTRY']),$_smarty_tpl->tpl_vars['log']->value['id']));?>
</p>
							<p class="m-0 text-danger"><?php echo $_smarty_tpl->tpl_vars['t']->value['RECORDS_REMOVE_TEXT'];?>
</p>
						</div>
						<div class="modal-footer justify-content-between">
							<button type="button" class="btn rounded btn-outline-dark" data-dismiss="modal">
								<span><?php echo $_smarty_tpl->tpl_vars['t']->value['CANCEL'];?>
</span>
							</button>
							<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->PATH;?>
/remove/<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
" class="btn rounded btn-danger">
								<span><?php echo $_smarty_tpl->tpl_vars['t']->value['REMOVE'];?>
</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }
}
}
/* {/block "modal"} */
}
