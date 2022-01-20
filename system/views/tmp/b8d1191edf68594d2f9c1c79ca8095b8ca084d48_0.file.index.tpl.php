<?php
/* Smarty version 3.1.39, created on 2021-09-13 13:33:55
  from 'D:\wamp\www\HelloStranger\system\views\back\events\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613f5343dd2758_65931317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8d1191edf68594d2f9c1c79ca8095b8ca084d48' => 
    array (
      0 => 'D:\\wamp\\www\\HelloStranger\\system\\views\\back\\events\\index.tpl',
      1 => 1631540033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/topbar.tpl' => 1,
    'file:../addons/flash.tpl' => 2,
  ),
),false)) {
function content_613f5343dd2758_65931317 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_749220888613f5343cf2035_58449876', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1200090884613f5343cf5a98_98386783', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94230921613f5343d81082_72134069', "modal");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1350113084613f5343dcaa31_57376608', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "header"} */
class Block_749220888613f5343cf2035_58449876 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_749220888613f5343cf2035_58449876',
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
class Block_1200090884613f5343cf5a98_98386783 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1200090884613f5343cf5a98_98386783',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender("file:../addons/topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('topbar'=>array('title'=>array('icon'=>'calendar-o','content'=>$_smarty_tpl->tpl_vars['t']->value['EVENTS']),'options'=>array($_smarty_tpl->tpl_vars['count']->value ? 'search' : '','add'))), 0, false);
?>
	<?php if ($_smarty_tpl->tpl_vars['events']->value) {?>
		<table class="table table-bordered table-hover table-sm" id="table">
			<thead>
				<tr>
					<th class="text-left d-none d-lg-table-cell" width="80">ID</th>
					<th class="text-left"><?php echo $_smarty_tpl->tpl_vars['t']->value['TITLE'];?>
</th>
					<th class="text-left" width="80"><?php echo $_smarty_tpl->tpl_vars['t']->value['CLIENTS'];?>
</th>
					<th class="text-left" width="80"><?php echo $_smarty_tpl->tpl_vars['t']->value['TAGS'];?>
</th>
					<th class="text-center d-none d-sm-table-cell" width="80"><?php echo $_smarty_tpl->tpl_vars['t']->value['ACTIVE'];?>
</th>
					<th class="text-center disabled" width="80"><?php echo $_smarty_tpl->tpl_vars['t']->value['OPTIONS'];?>
</th>
				</tr>
			</thead>
			<tbody class="small">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['events']->value), 'event');
$_smarty_tpl->tpl_vars['event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->do_else = false;
?>
					<tr>
						<td class="text-right text-muted d-none d-lg-table-cell"><?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
</td>
						<td class="text-left" data-order="<?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
">
							<div class="row align-items-center no-gutters flex-nowrap">
								<div class="col-auto mr-2">
									<?php if (!$_smarty_tpl->tpl_vars['event']->value['file']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['event']->value['data']['thumb'];?>
" class="img-thumbnail" width="48"><?php } else { ?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['event']->value['data']['image'];?>
" data-fancybox="events" data-caption="<?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
">
											<img src="<?php echo $_smarty_tpl->tpl_vars['event']->value['data']['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
" class="img-thumbnail p-0" width="48">
										</a>
									<?php }?>
								</div>
								<div class="col">
									<b><?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
</b><br>
									<small class="text-muted"><?php echo date('d.m.Y H:i',strtotime($_smarty_tpl->tpl_vars['event']->value['date']));?>
</small>
								</div>
								<div class="col-auto ml-auto text-right">
									<?php if ($_smarty_tpl->tpl_vars['event']->value['others']['price']['promotion']) {?>
										<b class="text-success"><?php echo price($_smarty_tpl->tpl_vars['event']->value['others']['price']['promotion']);?>
</b><br>
										<small class="text-muted"><s><?php echo price($_smarty_tpl->tpl_vars['event']->value['others']['price']['basic']);?>
</s></small>
									<?php } elseif ($_smarty_tpl->tpl_vars['event']->value['others']['price']['basic']) {?>
										<b class="text-success"><?php echo price($_smarty_tpl->tpl_vars['event']->value['others']['price']['basic']);?>
</b>
									<?php } else { ?>
										<span class="badge badge-primary"><?php echo $_smarty_tpl->tpl_vars['t']->value['PREORDER'];?>
</span>
									<?php }?>
								</div>
							</div>
						</td>
						<td class="text-center" data-order="<?php echo count($_smarty_tpl->tpl_vars['event']->value['data']['clients']);?>
">
							<?php if (!$_smarty_tpl->tpl_vars['event']->value['data']['clients']) {?>
								<span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['t']->value['NONE'];?>
</span>
							<?php } else { ?>
								<a href="#" data-toggle="modal" data-target="#clients<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
">
									<span class="badge badge-dark"><?php echo count($_smarty_tpl->tpl_vars['event']->value['data']['clients']);?>
</span>
								</a>
							<?php }?>
						</td>
						<td class="text-center" data-order="<?php echo count($_smarty_tpl->tpl_vars['event']->value['tags'][0]);?>
">
							<?php if (!$_smarty_tpl->tpl_vars['event']->value['tags'][0]) {?>
								<span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['t']->value['NONE'];?>
</span>
							<?php } else { ?>
								<a href="#" data-toggle="modal" data-target="#tags<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
">
									<span class="badge badge-dark"><?php echo count($_smarty_tpl->tpl_vars['event']->value['tags'][0]);?>
</span>
								</a>
							<?php }?>
						</td>
						<td class="text-center d-none d-sm-table-cell" data-order="<?php echo $_smarty_tpl->tpl_vars['event']->value['active'];?>
">
							<div class="custom-control custom-switch custom-switch-success">
								<input type="checkbox" id="event[<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
][active]" 
								data-toggle-active="<?php echo path(TABLE_EVENTS,$_smarty_tpl->tpl_vars['event']->value['id']);?>
"
								class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['event']->value['active']) {?>checked<?php }?> readonly>
								<label class="custom-control-label" for="event[<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
][active]"></label>
							</div>
						</td>
						<td class="text-center">
							<div class="dropdown">
								<button type="button" class="btn rounded btn-sm btn-outline-primary" data-toggle="dropdown">
									<i class="fa fa-cog"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->PATH;?>
/edit/<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
" class="dropdown-item">
										<span><?php echo $_smarty_tpl->tpl_vars['t']->value['EDIT'];?>
</span><i class="fa fa-pencil text-success"></i>
									</a>
									<a href="#" data-toggle="modal" data-target="#remove<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
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
class Block_94230921613f5343d81082_72134069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal' => 
  array (
    0 => 'Block_94230921613f5343d81082_72134069',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['events']->value) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['events']->value), 'event');
$_smarty_tpl->tpl_vars['event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->do_else = false;
?>
			<div class="modal fade" id="clients<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
">
				<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['t']->value['RELATED_CLIENTS'];?>
</h5>
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body text-center py-5">
							<p class="m-0"><?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
 (ID: <?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
)</p>
							<p><?php echo $_smarty_tpl->tpl_vars['t']->value['RELATED_CLIENTS'];?>
: <b><?php echo count($_smarty_tpl->tpl_vars['event']->value['data']['clients']);?>
</b></p>
							<table class="table table-bordered table-hover table-sm m-0">
								<thead>
									<tr>
										<th class="text-right d-none d-md-table-cell" width="80">ID</th>
										<th class="text-left" colspan="2"><?php echo $_smarty_tpl->tpl_vars['t']->value['PERSONAL_DATA'];?>
</th>
									</tr>
								</thead>
								<tbody class="small">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['event']->value['data']['clients']), 'client');
$_smarty_tpl->tpl_vars['client']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->do_else = false;
?>
										<tr>
											<td class="text-right text-muted d-none d-md-table-cell"><?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
</td>
											<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['client']->value['name'];?>
</td>
											<td class="text-center" width="10">
												<a href="<?php echo TABLE_CLIENTS;?>
/edit/<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
" class="btn rounded btn-sm btn-outline-success">
													<i class="fa fa-pencil"></i>
												</a>
											</td>
										</tr>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</tbody>
							</table>
						</div>
						<div class="modal-footer justify-content-end">
							<button type="button" class="btn rounded btn-outline-dark" data-dismiss="modal">
								<span><?php echo $_smarty_tpl->tpl_vars['t']->value['CLOSE'];?>
</span>
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="tags<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
">
				<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['t']->value['TAGS'];?>
</h5>
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body text-center py-5">
							<p class="m-0"><?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
 (ID: <?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
)</p>
							<p><?php echo $_smarty_tpl->tpl_vars['t']->value['TAGS'];?>
: <b><?php echo count($_smarty_tpl->tpl_vars['event']->value['tags'][0]);?>
</b></p>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['event']->value['tags'][0]), 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
								<span class="badge badge-primary"><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</span>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
						<div class="modal-footer justify-content-between">
							<a href="<?php echo TABLE_EVENTS;?>
/edit/<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
" class="btn rounded btn-outline-success">
								<span><?php echo $_smarty_tpl->tpl_vars['t']->value['EDIT'];?>
</span>
							</a>
							<button type="button" class="btn rounded btn-outline-dark" data-dismiss="modal">
								<span><?php echo $_smarty_tpl->tpl_vars['t']->value['CLOSE'];?>
</span>
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="remove<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
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
							<p class="m-0"><?php echo sprintf($_smarty_tpl->tpl_vars['t']->value['RECORDS_REMOVE_TITLE'],$_smarty_tpl->tpl_vars['event']->value['title']);?>
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
/remove/<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
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
class Block_1350113084613f5343dcaa31_57376608 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1350113084613f5343dcaa31_57376608',
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
			"order": [],
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
