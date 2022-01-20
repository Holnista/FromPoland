<?php
/* Smarty version 3.1.39, created on 2021-08-26 11:55:53
  from 'D:\wamp\www\HelloStranger\system\views\back\newsletters\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612781495968a4_77984004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fad65181857104fcf603c5c2ecc76101f63b7455' => 
    array (
      0 => 'D:\\wamp\\www\\HelloStranger\\system\\views\\back\\newsletters\\index.tpl',
      1 => 1629285805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/topbar.tpl' => 1,
    'file:../addons/flash.tpl' => 2,
  ),
),false)) {
function content_612781495968a4_77984004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1662122457612781494e1d22_17579355', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5670864886127814955ad47_43615003', "modal");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "content"} */
class Block_1662122457612781494e1d22_17579355 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1662122457612781494e1d22_17579355',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender("file:../addons/topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('topbar'=>array('title'=>array('icon'=>'calendar-o','content'=>$_smarty_tpl->tpl_vars['t']->value['NEWSLETTERS']),'options'=>array($_smarty_tpl->tpl_vars['count']->value ? 'search' : '','add'))), 0, false);
?>
	<?php if ($_smarty_tpl->tpl_vars['threads']->value) {?>
		<div class="newsletters">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['threads']->value, 'newsletters', false, 'thread');
$_smarty_tpl->tpl_vars['newsletters']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thread']->value => $_smarty_tpl->tpl_vars['newsletters']->value) {
$_smarty_tpl->tpl_vars['newsletters']->do_else = false;
?>
				<div class="card mb-3" style="overflow: visible;">
					<div class="card-header px-3 list-group-item-action position-relative" data-toggle="collapse" data-target="#thread<?php echo md5($_smarty_tpl->tpl_vars['thread']->value);?>
">
						<div class="row justify-content-between align-items-center">
							<div class="col-auto">
								<span><?php echo $_smarty_tpl->tpl_vars['thread']->value;?>
</span>
							</div>
							<div class="col-auto">
								<span class="badge badge-primary badge-sm badge-dot">
									<?php echo count($_smarty_tpl->tpl_vars['newsletters']->value);?>

								</span>
							</div>
						</div>
					</div>
					<div class="collapse" id="thread<?php echo md5($_smarty_tpl->tpl_vars['thread']->value);?>
">
						<div class="card-body p-3">
							<table class="table table-sm table-bordered table-hover m-0">
								<thead>
									<tr>
										<th class="text-right d-none d-md-table-cell" width="80">ID</th>
										<th class="text-left" width="400"><?php echo $_smarty_tpl->tpl_vars['t']->value['RECIPIENT'];?>
</th>
										<th class="text-left d-none d-md-table-cell"><?php echo $_smarty_tpl->tpl_vars['t']->value['MESSAGE'];?>
</th>
										<th class="text-center" width="80"><?php echo $_smarty_tpl->tpl_vars['t']->value['STATUS'];?>
</th>
										<th class="text-center" width="80"><?php echo $_smarty_tpl->tpl_vars['t']->value['OPTIONS'];?>
</th>
									</tr>
								</thead>
								<tbody class="small">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['newsletters']->value), 'newsletter');
$_smarty_tpl->tpl_vars['newsletter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['newsletter']->value) {
$_smarty_tpl->tpl_vars['newsletter']->do_else = false;
?>
										<tr>
											<td class="text-right text-muted d-none d-md-table-cell"><?php echo $_smarty_tpl->tpl_vars['newsletter']->value['id'];?>
</td>
											<td class="text-left">
												<b><?php echo $_smarty_tpl->tpl_vars['newsletter']->value['recipient'][0];?>
</b>
												<small class="text-muted pull-right"><?php echo truncate(clear($_smarty_tpl->tpl_vars['newsletter']->value['recipient'][1]),60);?>
</small>
											</td>
											<td class="text-left d-none d-md-table-cell">
												<?php if (!$_smarty_tpl->tpl_vars['newsletter']->value['data']['email'] || $_smarty_tpl->tpl_vars['newsletter']->value['data']['email']['id']) {?>
													<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->PATH;?>
/preview/<?php echo $_smarty_tpl->tpl_vars['newsletter']->value['id'];?>
" data-fancybox="<?php echo md5($_smarty_tpl->tpl_vars['thread']->value);?>
" data-type="iframe">
														<span data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['t']->value['PREVIEW'];?>
"><?php echo $_smarty_tpl->tpl_vars['newsletter']->value['subject'];?>
</span>
													</a>
												<?php } else { ?>
													<?php echo $_smarty_tpl->tpl_vars['newsletter']->value['subject'];?>

												<?php }?>
											</td>
											<td class="text-center">
												<?php if ($_smarty_tpl->tpl_vars['newsletter']->value['sent']) {?>
													<span class="badge badge-success badge-sm badge-dot" data-toggle="tooltip" title="<?php echo sprintf('%s:<br> %s',$_smarty_tpl->tpl_vars['t']->value['SENT'],date('d.m.Y H:i',strtotime($_smarty_tpl->tpl_vars['newsletter']->value['sent'])));?>
">
														<i class="fa fa-check text-light"></i>
													</span>
												<?php } else { ?>
													<?php if (time() >= strtotime($_smarty_tpl->tpl_vars['newsletter']->value['schedule'])) {?>
														<span class="badge badge-light badge-sm badge-dot" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['t']->value['SENDING'];?>
...">
															<i class="fa fa-circle-o-notch fa-spin text-primary"></i>
														</span>
													<?php } else { ?>
														<span class="badge badge-light badge-sm badge-dot" data-toggle="tooltip" title="<?php echo sprintf('%s:<br> %s',$_smarty_tpl->tpl_vars['t']->value['SCHEDULE'],date('d.m.Y H:i',strtotime($_smarty_tpl->tpl_vars['newsletter']->value['schedule'])));?>
">
															<i class="fa fa-hourglass-end text-dark"></i>
														</span>
													<?php }?>
												<?php }?>
											</td>
											<td class="text-center">
												<div class="dropdown">
													<button type="button" class="btn rounded btn-sm btn-outline-primary" data-toggle="dropdown">
														<i class="fa fa-cog"></i>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->PATH;?>
/edit/<?php echo $_smarty_tpl->tpl_vars['newsletter']->value['id'];?>
" class="dropdown-item">
															<span><?php echo $_smarty_tpl->tpl_vars['t']->value['EDIT'];?>
</span><i class="fa fa-pencil text-success"></i>
														</a>
														<a href="#" data-toggle="modal" data-target="#remove<?php echo $_smarty_tpl->tpl_vars['newsletter']->value['id'];?>
" class="dropdown-item">
															<span><?php echo $_smarty_tpl->tpl_vars['t']->value['REMOVE'];?>
</span><i class="fa fa-times text-danger"></i>
														</a>
													</div>
												</div>
											</td>
										</tr>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</tbody>
							</table>
						</div>
						<div class="card-footer py-2 px-3 text-center">
							<div class="row justify-content-end align-items-center no-gutters flex-nowrap">
								<div class="col-auto small">
									<a href="#" data-toggle="modal" data-target="#remove<?php echo md5($_smarty_tpl->tpl_vars['thread']->value);?>
" class="btn btn-sm rounded btn-danger">
										<span><?php echo $_smarty_tpl->tpl_vars['t']->value['REMOVE'];?>
</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	<?php } else { ?>
		<?php if (!$_smarty_tpl->tpl_vars['count']->value) {?>
			<?php $_smarty_tpl->_subTemplateRender("file:../addons/flash.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('flash'=>array('title'=>$_smarty_tpl->tpl_vars['t']->value['RECORDS_EMTY_TITLE'],'lead'=>array('icon'=>'plus text-success','content'=>$_smarty_tpl->tpl_vars['t']->value['RECORDS_EMPTY_TEXT']))), 0, false);
?>
		<?php } elseif ($_REQUEST['word']) {?>
			<?php $_smarty_tpl->_subTemplateRender("file:../addons/flash.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('flash'=>array('title'=>$_smarty_tpl->tpl_vars['t']->value['SEARCH_EMPTY_TITLE'],'lead'=>array('content'=>sprintf($_smarty_tpl->tpl_vars['t']->value['SEARCH_EMPTY_TEXT'],$_REQUEST['word'])))), 0, true);
?>	
		<?php }?>
	<?php }
}
}
/* {/block "content"} */
/* {block "modal"} */
class Block_5670864886127814955ad47_43615003 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal' => 
  array (
    0 => 'Block_5670864886127814955ad47_43615003',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['threads']->value) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['threads']->value, 'newsletters', false, 'thread');
$_smarty_tpl->tpl_vars['newsletters']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thread']->value => $_smarty_tpl->tpl_vars['newsletters']->value) {
$_smarty_tpl->tpl_vars['newsletters']->do_else = false;
?>
			<div class="modal fade" id="remove<?php echo md5($_smarty_tpl->tpl_vars['thread']->value);?>
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
							<p class="m-0"><b><?php echo $_smarty_tpl->tpl_vars['thread']->value;?>
</b><br>
							<small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['t']->value['MESSAGES'];?>
: <?php echo count($_smarty_tpl->tpl_vars['threads']->value[$_smarty_tpl->tpl_vars['thread']->value]);?>
</small></p>
							<p class="my-3"></p>
							<p class="m-0"><?php echo sprintf($_smarty_tpl->tpl_vars['t']->value['RECORDS_REMOVE_TITLE'],mb_strtolower($_smarty_tpl->tpl_vars['t']->value['NEWSLETTERS']));?>
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
/remove/<?php echo md5($_smarty_tpl->tpl_vars['thread']->value);?>
" class="btn rounded btn-danger">
								<span><?php echo $_smarty_tpl->tpl_vars['t']->value['REMOVE'];?>
</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['newsletters']->value), 'newsletter');
$_smarty_tpl->tpl_vars['newsletter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['newsletter']->value) {
$_smarty_tpl->tpl_vars['newsletter']->do_else = false;
?>
				<div class="modal fade" id="remove<?php echo $_smarty_tpl->tpl_vars['newsletter']->value['id'];?>
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
								<p class="m-0"><b><?php echo $_smarty_tpl->tpl_vars['newsletter']->value['recipient'][0];?>
</b><br>
								<small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['newsletter']->value['recipient'][1];?>
</small></p>
								<p class="my-3"></p>
								<p class="m-0 text-muted"><?php echo sprintf('<i>"%s"</i>',truncate(clear($_smarty_tpl->tpl_vars['newsletter']->value['subject'])));?>
</p>
								<p class="my-3"></p>
								<p class="m-0"><?php echo sprintf($_smarty_tpl->tpl_vars['t']->value['RECORDS_REMOVE_TITLE'],mb_strtolower($_smarty_tpl->tpl_vars['t']->value['MESSAGE']));?>
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
/remove/<?php echo $_smarty_tpl->tpl_vars['newsletter']->value['id'];?>
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
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }
}
}
/* {/block "modal"} */
}
