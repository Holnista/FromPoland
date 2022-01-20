<?php
/* Smarty version 3.1.40, created on 2022-01-03 10:35:55
  from 'D:\wamp\www\Sztorm\system\views\back\clients\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61d2d18b8a10f2_61974877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2976e46709dbe93781f2759fa9c72526f1b6ace1' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\clients\\index.tpl',
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
function content_61d2d18b8a10f2_61974877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85736358661d2d18b8700b6_67479855', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149547215561d2d18b8714c6_75010110', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185382282461d2d18b898500_78675702', "modal");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203731869561d2d18b89ec11_50287032', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "header"} */
class Block_85736358661d2d18b8700b6_67479855 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_85736358661d2d18b8700b6_67479855',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<link href="/<?php echo PATH_PUBLIC;?>
/vendor/select2/select2.min.css" rel="stylesheet">
	<link href="/<?php echo PATH_PUBLIC;?>
/vendor/datatables/datatables.min.css" rel="stylesheet">
	<link href="/<?php echo PATH_PUBLIC;?>
/vendor/select2/select2-bootstrap4.min.css" rel="stylesheet">
<?php
}
}
/* {/block "header"} */
/* {block "content"} */
class Block_149547215561d2d18b8714c6_75010110 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_149547215561d2d18b8714c6_75010110',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "filters", null, null);?>
		<div style="width: 15vw; max-width: 100%;" class="mr-2 d-none d-lg-block">
			<select name="event" onchange="this.form.submit()" class="custom-select select2">
				<option value="0"><?php echo $_smarty_tpl->tpl_vars['t']->value['ALL_EVENTS'];?>
</option>
				<?php if ($_smarty_tpl->tpl_vars['events']->value) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['events']->value), 'event');
$_smarty_tpl->tpl_vars['event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['event']->value['id'] == $_GET['event']) {?>selected<?php }?> data-image="<?php echo $_smarty_tpl->tpl_vars['event']->value['data']['thumb'];?>
">
							<?php echo sprintf('%s (ID: %s)',$_smarty_tpl->tpl_vars['event']->value['title'],$_smarty_tpl->tpl_vars['event']->value['id']);?>

						</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			</select>
		</div>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "custom", null, null);?>
		<div class="btn-group d-none d-md-flex ml-2">
			<button type="button" class="btn rounded btn-outline-dark" data-toggle="dropdown">
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
			</div>
		</div>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php $_smarty_tpl->_subTemplateRender("file:../addons/topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('topbar'=>array('title'=>array('icon'=>'users','content'=>$_smarty_tpl->tpl_vars['t']->value['CLIENTS']),'options'=>array($_smarty_tpl->tpl_vars['count']->value ? 'search' : '','add'))), 0, false);
?>
	<?php if ($_smarty_tpl->tpl_vars['clients']->value) {?>
		<table class="table table-bordered table-hover table-sm" id="table">
			<thead>
				<tr>
					<th class="text-right d-none d-lg-table-cell" width="80">ID</th>
					<th class="text-center d-none d-xl-table-cell disabled" width="48"><?php echo $_smarty_tpl->tpl_vars['t']->value['EVENT'];?>
</th>
					<th class="text-left"><?php echo $_smarty_tpl->tpl_vars['t']->value['PERSONAL_DATA'];?>
</th>
					<th class="text-left"><?php echo $_smarty_tpl->tpl_vars['t']->value['PAYMENT'];?>
</th>
					<th class="text-center disabled" width="80"><?php echo $_smarty_tpl->tpl_vars['t']->value['OPTIONS'];?>
</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['clients']->value), 'client');
$_smarty_tpl->tpl_vars['client']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->do_else = false;
?>
					<tr>
						<td class="text-right text-muted d-none d-lg-table-cell"><?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
</td>
						<td class="text-left d-none d-xl-table-cell" data-order="<?php echo $_smarty_tpl->tpl_vars['client']->value['data']['event']['data']['thumb'];?>
">
							<!--div data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['client']->value['data']['event']['title'];?>
"-->
								<?php if (!$_smarty_tpl->tpl_vars['client']->value['data']['event']['file']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['client']->value['data']['event']['data']['thumb'];?>
" class="img-thumbnail" width="48"><?php } else { ?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['client']->value['data']['event']['data']['image'];?>
" data-fancybox="events" data-caption="<?php echo $_smarty_tpl->tpl_vars['client']->value['data']['event']['title'];?>
">
										<img src="<?php echo $_smarty_tpl->tpl_vars['client']->value['data']['event']['data']['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['client']->value['data']['event']['title'];?>
" class="img-thumbnail p-0" width="48">
									</a>
								<?php }?>
							<!--/div-->
						</td>
						<td class="text-left" data-order="<?php echo implode(' ',array($_smarty_tpl->tpl_vars['client']->value['personal']['name'],$_smarty_tpl->tpl_vars['client']->value['personal']['surname']));?>
">
							<div class="row align-items-center no-gutters flex-nowrap">
								<div class="col">
									<?php if ($_smarty_tpl->tpl_vars['client']->value['personal']['name']) {?>
									<b><?php echo implode(' ',array($_smarty_tpl->tpl_vars['client']->value['personal']['name'],$_smarty_tpl->tpl_vars['client']->value['personal']['surname']));?>
</b>
									<?php } else { ?><b><?php echo NO_DATA;?>
</b><?php }?><br>
									<small class="text-muted"><i class="fa fa-envelope"></i> <?php if ($_smarty_tpl->tpl_vars['client']->value['personal']['email']) {?>
									<a class="text-muted" href="mailto:<?php echo $_smarty_tpl->tpl_vars['client']->value['personal']['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['client']->value['personal']['email'];?>
</a>
									<?php } else {
echo $_smarty_tpl->tpl_vars['t']->value['NO_DATA'];
}?></small>
									<small class="text-muted ml-2"><i class="fa fa-phone-square"></i> <?php if ($_smarty_tpl->tpl_vars['client']->value['personal']['phone']) {?>
									<a class="text-muted" href="tel:<?php echo $_smarty_tpl->tpl_vars['client']->value['personal']['phone'];?>
"><?php echo $_smarty_tpl->tpl_vars['client']->value['personal']['phone'];?>
</a>
									<?php } else {
echo $_smarty_tpl->tpl_vars['t']->value['NO_DATA'];
}?></small>
									<small class="text-muted ml-2"><i class="fa fa-venus-mars"></i> <?php if ($_smarty_tpl->tpl_vars['client']->value['personal']['sex']) {?>
									<a class="text-muted"><?php echo $_smarty_tpl->tpl_vars['t']->value[$_smarty_tpl->tpl_vars['client']->value['personal']['sex']];?>
 (<?php echo date('Y')-$_smarty_tpl->tpl_vars['client']->value['personal']['year'];?>
 lat)</a>
									<?php } else {
echo $_smarty_tpl->tpl_vars['t']->value['NO_DATA'];
}?></small>
									<small class="text-muted ml-2"><i class="fa fa-map-marker"></i> <?php if ($_smarty_tpl->tpl_vars['client']->value['personal']['city']) {?>
									<a class="text-muted"><?php echo $_smarty_tpl->tpl_vars['client']->value['personal']['city'];?>
</a>
									<?php } else {
echo $_smarty_tpl->tpl_vars['t']->value['NO_DATA'];
}?></small>
								</div>
								<div class="col-auto d-none d-xl-table-cell">
									<span class="badge badge-light">
										<?php echo $_smarty_tpl->tpl_vars['client']->value['code'];?>

									</span>
								</div>
							</div>
						</td>
						<td class="text-left">
							<div class="row align-items-center no-gutters flex-nowrap">
								<div class="col">
									<?php if ($_smarty_tpl->tpl_vars['client']->value['payment']['price']['promotion']) {?>
										<b class="text-success"><?php echo price($_smarty_tpl->tpl_vars['client']->value['payment']['price']['topay']);?>
</b><br>
										<small class="text-muted"><s><?php echo price($_smarty_tpl->tpl_vars['client']->value['payment']['price']['promotion']);?>
</s></small>
									<?php } elseif ($_smarty_tpl->tpl_vars['client']->value['payment']['price']['basic']) {?>
										<b class="text-success"><?php echo price($_smarty_tpl->tpl_vars['client']->value['payment']['price']['topay']);?>
</b>
									<?php } else { ?>
										<span class="badge badge-primary"><?php echo $_smarty_tpl->tpl_vars['t']->value['PREORDER'];?>
</span>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['client']->value['payment']['coupon']) {?>
										<i class="fa fa-info-circle text-info" data-toggle="tooltip"
										title="<?php echo $_smarty_tpl->tpl_vars['t']->value['COUPON'];?>
: <?php echo $_smarty_tpl->tpl_vars['client']->value['payment']['coupon'];?>
"></i>
									<?php }?>
								</div>
								<div class="col-auto ml-auto">
									<?php if ($_smarty_tpl->tpl_vars['client']->value['payment']['paid'] || !$_smarty_tpl->tpl_vars['client']->value['payment']['price']['topay']) {?>
										<?php if ($_smarty_tpl->tpl_vars['client']->value['payment']['price']['topay']) {?>
											<span class="badge badge-success badge-sm badge-dot" data-toggle="tooltip" title="<?php echo sprintf('%s:<br> %s',$_smarty_tpl->tpl_vars['t']->value['PAID'],$_smarty_tpl->tpl_vars['client']->value['payment']['paid']);?>
">
												<i class="fa fa-usd text-light"></i>
											</span>
										<?php } else { ?>
											<span class="badge badge-primary badge-sm badge-dot" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['t']->value['NO_DATA'];?>
">
												<i class="fa fa-check text-light"></i>
											</span>
										<?php }?>
									<?php } else { ?>
										<span class="badge badge-danger badge-sm badge-dot" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['t']->value['NOT_PAID'];?>
">
											<i class="fa fa-usd text-light"></i>
										</span>
									<?php }?>
								</div>
							</div>
						</td>
						<td class="text-center">
							<div class="dropdown">
								<button type="button" class="btn rounded btn-sm btn-outline-primary" data-toggle="dropdown">
									<i class="fa fa-cog"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->PATH;?>
/edit/<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
" class="dropdown-item">
										<span><?php echo $_smarty_tpl->tpl_vars['t']->value['EDIT'];?>
</span><i class="fa fa-pencil text-success"></i>
									</a>
									<!--a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->PATH;?>
/logs/<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
" class="dropdown-item">
										<span><?php echo $_smarty_tpl->tpl_vars['t']->value['LOGS'];?>
</span><i class="fa fa-history text-primary"></i>
									</a-->
									<a href="#" data-toggle="modal" data-target="#remove<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
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
		<?php if (!$_smarty_tpl->tpl_vars['count']->value || $_GET['event'] && !$_GET['word']) {?>
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
class Block_185382282461d2d18b898500_78675702 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal' => 
  array (
    0 => 'Block_185382282461d2d18b898500_78675702',
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
	<?php if ($_smarty_tpl->tpl_vars['clients']->value) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['clients']->value), 'client');
$_smarty_tpl->tpl_vars['client']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->do_else = false;
?>
			<div class="modal fade" id="remove<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
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
							<p class="m-0"><?php echo sprintf($_smarty_tpl->tpl_vars['t']->value['RECORDS_REMOVE_TITLE'],implode(' ',array($_smarty_tpl->tpl_vars['client']->value['personal']['name'],$_smarty_tpl->tpl_vars['client']->value['personal']['surname'])));?>
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
/remove/<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
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
class Block_203731869561d2d18b89ec11_50287032 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_203731869561d2d18b89ec11_50287032',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/select2/select2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/datatables/datatables.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/select2/langs/<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		//----- Setup select2
		$(".select2").select2({
			theme: "bootstrap4",
			language: "<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
",
			placeholder: "<?php echo $_smarty_tpl->tpl_vars['t']->value['SELECT'];?>
...",
			templateResult: function(option)
			{
				if(!option.id || option.id == 0) return option.text;
				return $("<span><img src='"+option.element.dataset.image+
				"' width='32' class='img-thumbnail p-0 mr-2'>"+option.text+"</span>");
			}
		});
		
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
