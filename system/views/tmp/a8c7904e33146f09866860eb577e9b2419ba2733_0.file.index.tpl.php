<?php
/* Smarty version 3.1.40, created on 2022-01-10 14:48:35
  from 'D:\wamp\www\Sztorm\system\views\back\categories\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61dc474325f045_17346238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8c7904e33146f09866860eb577e9b2419ba2733' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\categories\\index.tpl',
      1 => 1641824869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/topbar.tpl' => 1,
    'file:../addons/flash.tpl' => 2,
  ),
),false)) {
function content_61dc474325f045_17346238 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52114414461dc47432432a8_05936170', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138133932361dc4743244321_45356279', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135579464261dc4743257e00_74260403', "modal");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142429816561dc474325d4c9_31773858', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "header"} */
class Block_52114414461dc47432432a8_05936170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_52114414461dc47432432a8_05936170',
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
class Block_138133932361dc4743244321_45356279 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_138133932361dc4743244321_45356279',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender("file:../addons/topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('topbar'=>array('title'=>array('icon'=>'list','content'=>$_smarty_tpl->tpl_vars['t']->value['CATEGORIES']),'options'=>array($_smarty_tpl->tpl_vars['count']->value ? 'search' : '','add'))), 0, false);
?>
	<?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
		<table class="table table-bordered table-hover table-sm" id="table">
			<thead>
				<tr>
					<th class="text-left d-none d-md-table-cell" width="80">ID</th>
					<th class="text-left"><?php echo $_smarty_tpl->tpl_vars['t']->value['TITLE'];?>
</th>
					<th class="text-left d-none d-sm-table-cell" width="80"><?php echo $_smarty_tpl->tpl_vars['t']->value['ACTIVE'];?>
</th>
					<th class="text-center disabled" width="80"><?php echo $_smarty_tpl->tpl_vars['t']->value['OPTIONS'];?>
</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['categories']->value), 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
					<tr>
						<td class="text-right text-muted d-none d-md-table-cell"><?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
</td>
						<td class="text-left" data-order="<?php echo clear($_smarty_tpl->tpl_vars['category']->value['title']);?>
">
							<div class="row align-items-center no-gutters flex-nowrap">
								<div class="col-auto d-none d-xl-block mr-2">
									<?php if (!$_smarty_tpl->tpl_vars['category']->value['file']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['category']->value['data']['thumb'];?>
" class="img-thumbnail" width="48"><?php } else { ?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['data']['image'];?>
" data-fancybox="categories" data-caption="<?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
">
											<img src="<?php echo $_smarty_tpl->tpl_vars['category']->value['data']['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
" class="img-thumbnail p-0" width="48">
										</a>
									<?php }?>
								</div>
								<div class="col">
									<div class="d-flex align-items-center">
										<?php if ($_smarty_tpl->tpl_vars['category']->value['parent'] && !$_GET['word']) {?>
											<span class="mover" style="width: <?php echo 50*count(parents(TABLE_CATEGORIES,$_smarty_tpl->tpl_vars['category']->value['id']));?>
px;"></span>
										<?php }?>
										<div>
											<b><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</b><br>
											<small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['category']->value['alias'];?>
</small>
										</div>
									</div>
								</div>
								<div class="col-auto d-none d-sm-block ml-auto text-right">
									<?php if ($_smarty_tpl->tpl_vars['category']->value['place']) {?><span class="badge <?php if ($_smarty_tpl->tpl_vars['category']->value['place'] == 'home') {?>
									badge-dark<?php } else { ?>badge-success<?php }?>"><?php echo $_smarty_tpl->tpl_vars['t']->value[strtoupper($_smarty_tpl->tpl_vars['category']->value['place'])];?>
</span>
									<?php } else { ?><span class="badge badge-dark"><?php echo $_smarty_tpl->tpl_vars['t']->value['NONE'];?>
</span><?php }?>
								</div>
							</div>
						</td>
						<td class="text-center d-none d-sm-table-cell" data-order="<?php echo $_smarty_tpl->tpl_vars['category']->value['active'];?>
">
							<div class="custom-control custom-switch custom-switch-success">
								<input type="checkbox" id="category[<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
][active]" 
								data-toggle-active="<?php echo path(TABLE_CATEGORIES,$_smarty_tpl->tpl_vars['category']->value['id']);?>
"
								class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['category']->value['active']) {?>checked<?php }?> readonly>
								<label class="custom-control-label" for="category[<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
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
/edit/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="dropdown-item">
										<span><?php echo $_smarty_tpl->tpl_vars['t']->value['EDIT'];?>
</span><i class="fa fa-pencil text-success"></i>
									</a>
									<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->PATH;?>
/duplicate/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="dropdown-item">
										<span><?php echo $_smarty_tpl->tpl_vars['t']->value['DUPLICATE'];?>
</span><i class="fa fa-copy text-primary"></i>
									</a>
									<a href="#" data-toggle="modal" data-target="#remove<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
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
class Block_135579464261dc4743257e00_74260403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal' => 
  array (
    0 => 'Block_135579464261dc4743257e00_74260403',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['categories']->value), 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
			<div class="modal fade" id="remove<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
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
							<p class="m-0"><?php echo sprintf($_smarty_tpl->tpl_vars['t']->value['RECORDS_REMOVE_TITLE'],$_smarty_tpl->tpl_vars['category']->value['title']);?>
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
/remove/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
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
class Block_142429816561dc474325d4c9_31773858 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_142429816561dc474325d4c9_31773858',
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
