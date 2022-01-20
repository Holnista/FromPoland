<?php
/* Smarty version 3.1.39, created on 2021-11-22 15:52:22
  from '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/back/admins/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619baea6e26480_53545790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b07a08c1115f623a29c744bd624631a356619732' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/back/admins/index.tpl',
      1 => 1631891996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/topbar.tpl' => 1,
    'file:../addons/flash.tpl' => 2,
  ),
),false)) {
function content_619baea6e26480_53545790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_838687309619baea6deb0e0_58926195', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2036594098619baea6def083_87460447', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1955650438619baea6e1ff70_50115027', "modal");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1783101476619baea6e24a91_16151419', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "header"} */
class Block_838687309619baea6deb0e0_58926195 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_838687309619baea6deb0e0_58926195',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<link href="/<?php echo PATH_PUBLIC;?>
/vendor/datatables/datatables.min.css" rel="stylesheet">
<?php
}
}
/* {/block "header"} */
/* {block "content"} */
class Block_2036594098619baea6def083_87460447 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2036594098619baea6def083_87460447',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "custom", null, null);?>
		<div class="btn-group d-none d-md-flex ml-2">
			<a href="logs/admins" class="btn rounded btn-outline-primary">
				<span><?php echo $_smarty_tpl->tpl_vars['t']->value['LOGS'];?>
</span>
			</a>
		</div>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php $_smarty_tpl->_subTemplateRender("file:../addons/topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('topbar'=>array('title'=>array('icon'=>'user-circle-o','content'=>$_smarty_tpl->tpl_vars['t']->value['ADMINS']),'options'=>array($_smarty_tpl->tpl_vars['count']->value ? 'search' : '','add'))), 0, false);
?>
	<?php if ($_smarty_tpl->tpl_vars['admins']->value) {?>
		<table class="table table-bordered table-hover table-sm" id="table">
			<thead>
				<tr>
					<th class="text-left d-none d-lg-table-cell" width="80">ID</th>
					<th class="text-left"><?php echo $_smarty_tpl->tpl_vars['t']->value['PERSONAL_DATA'];?>
</th>
					<th class="text-left d-none d-lg-table-cell"><?php echo $_smarty_tpl->tpl_vars['t']->value['POSITION'];?>
</th>
					<th class="text-left d-none d-lg-table-cell" width="80"><?php echo $_smarty_tpl->tpl_vars['t']->value['PERMISSIONS'];?>
</th>
					<th class="text-center disabled" width="80"><?php echo $_smarty_tpl->tpl_vars['t']->value['OPTIONS'];?>
</th>
				</tr>
			</thead>
			<tbody class="small">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['admins']->value), 'admin');
$_smarty_tpl->tpl_vars['admin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['admin']->value) {
$_smarty_tpl->tpl_vars['admin']->do_else = false;
?>
					<tr>
						<td class="text-right text-muted d-none d-lg-table-cell"><?php echo $_smarty_tpl->tpl_vars['admin']->value['id'];?>
</td>
						<td class="text-left" data-order="<?php echo implode(' ',array($_smarty_tpl->tpl_vars['admin']->value['personal']['name'],$_smarty_tpl->tpl_vars['admin']->value['personal']['surname']));?>
">
							<div class="row align-items-center no-gutters flex-nowrap">
								<div class="col-auto mr-2">
									<?php if (!$_smarty_tpl->tpl_vars['admin']->value['file']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['admin']->value['data']['thumb'];?>
" class="img-thumbnail" width="48"><?php } else { ?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['admin']->value['data']['image'];?>
" data-fancybox="admins" data-caption="<?php echo implode(' ',array($_smarty_tpl->tpl_vars['admin']->value['personal']['name'],$_smarty_tpl->tpl_vars['admin']->value['personal']['surname']));?>
">
											<img src="<?php echo $_smarty_tpl->tpl_vars['admin']->value['data']['thumb'];?>
" alt="<?php echo implode(' ',array($_smarty_tpl->tpl_vars['admin']->value['personal']['name'],$_smarty_tpl->tpl_vars['admin']->value['personal']['surname']));?>
" class="img-thumbnail" width="48">
										</a>
									<?php }?>
								</div>
								<div class="col">
									<b><?php echo implode(' ',array($_smarty_tpl->tpl_vars['admin']->value['personal']['name'],$_smarty_tpl->tpl_vars['admin']->value['personal']['surname']));?>
</b><br>
									<small class="text-muted"><i class="fa fa-envelope"></i> <?php if ($_smarty_tpl->tpl_vars['admin']->value['email']) {?>
									<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['admin']->value['email'];?>
" class="text-muted"><?php echo $_smarty_tpl->tpl_vars['admin']->value['email'];?>
</a>
									<?php } else {
echo $_smarty_tpl->tpl_vars['t']->value['NONE'];
}?></small>
								</div>
							</div>
						</td>
						<td class="text-left d-none d-lg-table-cell" data-order="<?php echo $_smarty_tpl->tpl_vars['admin']->value['employment']['position'];?>
">
							<b><?php echo $_smarty_tpl->tpl_vars['admin']->value['employment']['position'] ? $_smarty_tpl->tpl_vars['admin']->value['employment']['position'] : $_smarty_tpl->tpl_vars['t']->value['NONE'];?>
</b><br>
							<small class="text-muted"><i class="fa fa-id-card"></i> <?php echo $_smarty_tpl->tpl_vars['admin']->value['employment']['department'] ? $_smarty_tpl->tpl_vars['admin']->value['employment']['department'] : $_smarty_tpl->tpl_vars['t']->value['NONE'];?>
</small>
						</td>
						<?php $_smarty_tpl->_assignInScope('count', count($_smarty_tpl->tpl_vars['admin']->value['permissions']));?>
						<td class="text-center d-none d-lg-table-cell" data-order="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
">
							<span class="badge <?php if ($_smarty_tpl->tpl_vars['count']->value) {?>badge-primary<?php } else { ?>badge-danger<?php }?>"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>
						</td>
						<td class="text-center">
							<div class="dropdown">
								<button type="button" class="btn rounded btn-sm btn-outline-primary" data-toggle="dropdown">
									<i class="fa fa-cog"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->PATH;?>
/edit/<?php echo $_smarty_tpl->tpl_vars['admin']->value['id'];?>
" class="dropdown-item">
										<span><?php echo $_smarty_tpl->tpl_vars['t']->value['EDIT'];?>
</span><i class="fa fa-pencil text-success"></i>
									</a>
									<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->PATH;?>
/logs/<?php echo $_smarty_tpl->tpl_vars['admin']->value['id'];?>
" class="dropdown-item">
										<span><?php echo $_smarty_tpl->tpl_vars['t']->value['LOGS'];?>
</span><i class="fa fa-history text-primary"></i>
									</a>
									<a href="#" data-toggle="modal" data-target="#remove<?php echo $_smarty_tpl->tpl_vars['admin']->value['id'];?>
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
	<?php } else { ?>
		<?php if (!$_smarty_tpl->tpl_vars['count']->value) {?>
			<?php $_smarty_tpl->_subTemplateRender("file:../addons/flash.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('flash'=>array('title'=>$_smarty_tpl->tpl_vars['t']->value['RECORDS_EMTY_TITLE'],'lead'=>array('icon'=>'plus text-success','content'=>$_smarty_tpl->tpl_vars['t']->value['RECORDS_EMPTY_TEXT']))), 0, false);
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
class Block_1955650438619baea6e1ff70_50115027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal' => 
  array (
    0 => 'Block_1955650438619baea6e1ff70_50115027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['admins']->value) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['admins']->value), 'admin');
$_smarty_tpl->tpl_vars['admin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['admin']->value) {
$_smarty_tpl->tpl_vars['admin']->do_else = false;
?>
			<div class="modal fade" id="remove<?php echo $_smarty_tpl->tpl_vars['admin']->value['id'];?>
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
							<p class="m-0"><?php echo sprintf($_smarty_tpl->tpl_vars['t']->value['RECORDS_REMOVE_TITLE'],$_smarty_tpl->tpl_vars['admin']->value['email']);?>
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
/remove/<?php echo $_smarty_tpl->tpl_vars['admin']->value['id'];?>
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
/* {block "footer"} */
class Block_1783101476619baea6e24a91_16151419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1783101476619baea6e24a91_16151419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/datatables/datatables.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		//----- Setup dataTable
		$.fn.dataTable.ext.classes.sInfo = "text-muted small";
		$("#table").DataTable({
			"autoWidth": false,
			"iDisplayLength": 10,
			"order": [[0, "desc"]],
			"columnDefs": [{ "targets": "disabled", "orderable": false }],
			"lengthMenu": [[10, 25, 50, -1], ["10", "25", "50", "<?php echo $_smarty_tpl->tpl_vars['t']->value['SELECT_ALL'];?>
"]],
			"language": { "url": "/<?php echo PATH_PUBLIC;?>
/vendor/datatables/langs/<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
.min.js" },
			"dom": "<'row'<'col-sm-12'tr>><'row align-items-center justify-content-center py-3 mt-3 "+
			"bg-light border-top border-bottom'<'col-auto mb-2 mb-md-0'i><'col-sm-12 col-md'p>>"
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "footer"} */
}
