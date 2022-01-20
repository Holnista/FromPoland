<?php
/* Smarty version 3.1.40, created on 2022-01-03 10:36:58
  from 'D:\wamp\www\Sztorm\system\views\back\translates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61d2d1ca68f767_59971158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e360845c9600d87cb773615003f2fe5281d0d4a1' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\translates\\index.tpl',
      1 => 1640770791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/topbar.tpl' => 1,
    'file:../addons/flash.tpl' => 2,
  ),
),false)) {
function content_61d2d1ca68f767_59971158 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6955979261d2d1ca674ea3_67273250', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171540013961d2d1ca676ec3_84253761', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150817711061d2d1ca688769_09701995', "modal");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3328406961d2d1ca68e368_35397766', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "header"} */
class Block_6955979261d2d1ca674ea3_67273250 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_6955979261d2d1ca674ea3_67273250',
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
class Block_171540013961d2d1ca676ec3_84253761 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_171540013961d2d1ca676ec3_84253761',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "custom", null, null);?>
		<?php if ($_smarty_tpl->tpl_vars['translates']->value) {?>
			<div class="btn-group">
				<button type="button" class="btn rounded btn-outline-dark ml-2" data-toggle="dropdown">
					<i class="fa fa-cog d-inline d-md-none"></i>
					<span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['t']->value['OPTIONS'];?>
</span>
				</button>
				<div class="dropdown-menu dropdown-menu-right mt-2">
					<a data-toggle="modal" data-target="#import" class="dropdown-item">
						<span class="pl-2"><?php echo $_smarty_tpl->tpl_vars['t']->value['IMPORT'];?>
</span>
						<i class="fa fa-download text-primary"></i>
					</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->PATH;?>
/export" class="dropdown-item">
						<span class="pl-2"><?php echo $_smarty_tpl->tpl_vars['t']->value['EXPORT'];?>
</span>
						<i class="fa fa-upload text-primary"></i>
					</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->PATH;?>
/unused" class="dropdown-item">
						<span class="pl-2"><?php echo $_smarty_tpl->tpl_vars['t']->value['FIND_UNUSED'];?>
</span>
						<i class="fa fa-binoculars text-primary"></i>
					</a>
				</div>
			</div>
		<?php }?>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php $_smarty_tpl->_subTemplateRender("file:../addons/topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('topbar'=>array('title'=>array('icon'=>'language','content'=>$_smarty_tpl->tpl_vars['t']->value['TRANSLATES']),'options'=>array($_smarty_tpl->tpl_vars['count']->value ? 'search' : '','add'))), 0, false);
?>
	<?php if ($_smarty_tpl->tpl_vars['translates']->value) {?>
		<table class="table table-bordered table-hover table-sm" id="table">
			<thead>
				<tr>
					<th class="text-left d-none d-md-table-cell" width="80">ID</th>
					<th class="text-left" width="300"><?php echo $_smarty_tpl->tpl_vars['t']->value['KEY'];?>
</th>
					<th class="text-left"><?php echo $_smarty_tpl->tpl_vars['t']->value['TRANSLATION'];?>
</th>
					<th class="text-center disabled" width="80"><?php echo $_smarty_tpl->tpl_vars['t']->value['OPTIONS'];?>
</th>
				</tr>
			</thead>
			<tbody class="small">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['translates']->value), 'translate');
$_smarty_tpl->tpl_vars['translate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['translate']->value) {
$_smarty_tpl->tpl_vars['translate']->do_else = false;
?>
					<tr>
						<td class="text-right text-muted d-none d-md-table-cell"><?php echo $_smarty_tpl->tpl_vars['translate']->value['id'];?>
</td>
						<td class="text-left text-monospace"><b><?php echo $_smarty_tpl->tpl_vars['translate']->value['key'];?>
</b></td>
						<td class="text-left text-nowrap overflow-hidden" style="max-width: 0;">
							<?php echo $_smarty_tpl->tpl_vars['base']->value->clean($_smarty_tpl->tpl_vars['translate']->value['translation']);?>

						</td>
						<td class="text-center">
							<div class="dropdown">
								<button type="button" class="btn rounded btn-sm btn-outline-primary" data-toggle="dropdown">
									<i class="fa fa-cog"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->PATH;?>
/edit/<?php echo $_smarty_tpl->tpl_vars['translate']->value['id'];?>
" class="dropdown-item">
										<span><?php echo $_smarty_tpl->tpl_vars['t']->value['EDIT'];?>
</span><i class="fa fa-pencil text-success"></i>
									</a>
									<a href="#" data-toggle="modal" data-target="#remove<?php echo $_smarty_tpl->tpl_vars['translate']->value['id'];?>
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
class Block_150817711061d2d1ca688769_09701995 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal' => 
  array (
    0 => 'Block_150817711061d2d1ca688769_09701995',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="modal fade" id="import">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base']->value->PATH;?>
/import" class="validate" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['t']->value['IMPORTING'];?>
</h5>
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body text-center">
						<input type="file" name="xlsx" class="form-control upload" required>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn rounded btn-outline-dark" data-dismiss="modal">
							<span><?php echo $_smarty_tpl->tpl_vars['t']->value['CANCEL'];?>
</span>
						</button>
						<input type="hidden" name="key" value="<?php echo $_smarty_tpl->tpl_vars['directory']->value['key'];?>
">
						<input type="hidden" name="token" value="<?php echo md5($_SESSION['csrf']);?>
">
						<button type="submit" class="btn rounded btn-primary">
							<span><?php echo $_smarty_tpl->tpl_vars['t']->value['IMPORT'];?>
</span>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['translates']->value) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['translates']->value), 'translate');
$_smarty_tpl->tpl_vars['translate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['translate']->value) {
$_smarty_tpl->tpl_vars['translate']->do_else = false;
?>
			<div class="modal fade" id="remove<?php echo $_smarty_tpl->tpl_vars['translate']->value['id'];?>
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
							<p class="m-0"><?php echo sprintf($_smarty_tpl->tpl_vars['t']->value['RECORDS_REMOVE_TITLE'],$_smarty_tpl->tpl_vars['translate']->value['key']);?>
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
/remove/<?php echo $_smarty_tpl->tpl_vars['translate']->value['id'];?>
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
class Block_3328406961d2d1ca68e368_35397766 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_3328406961d2d1ca68e368_35397766',
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
			"iDisplayLength": -1,
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
