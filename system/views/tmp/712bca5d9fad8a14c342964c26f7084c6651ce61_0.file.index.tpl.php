<?php
/* Smarty version 3.1.39, created on 2021-09-09 08:18:43
  from 'D:\wamp\www\HelloStranger\system\views\back\emails\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6139c3635c10b5_21867488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '712bca5d9fad8a14c342964c26f7084c6651ce61' => 
    array (
      0 => 'D:\\wamp\\www\\HelloStranger\\system\\views\\back\\emails\\index.tpl',
      1 => 1629285804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/topbar.tpl' => 1,
    'file:../addons/flash.tpl' => 2,
  ),
),false)) {
function content_6139c3635c10b5_21867488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2543451266139c3632cfde6_77247470', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18627280226139c3632e1926_70092962', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1371236396139c363573125_82142924', "modal");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7911633306139c3635b3682_80251618', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "header"} */
class Block_2543451266139c3632cfde6_77247470 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_2543451266139c3632cfde6_77247470',
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
class Block_18627280226139c3632e1926_70092962 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18627280226139c3632e1926_70092962',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender("file:../addons/topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('topbar'=>array('title'=>array('icon'=>'envelope-o','content'=>$_smarty_tpl->tpl_vars['t']->value['EMAILS']),'options'=>array($_smarty_tpl->tpl_vars['count']->value ? 'search' : ''))), 0, false);
?>
	<?php if ($_smarty_tpl->tpl_vars['emails']->value) {?>
		<table class="table table-sm table-bordered table-hover m-0" id="table">
			<thead>
				<tr>
					<th class="text-left d-none d-md-table-cell" width="80">ID</th>
					<th class="text-left" width="400"><?php echo $_smarty_tpl->tpl_vars['t']->value['RECIPIENT'];?>
</th>
					<th class="text-left d-none d-md-table-cell"><?php echo $_smarty_tpl->tpl_vars['t']->value['MESSAGE'];?>
</th>
					<th class="text-center" width="80"><?php echo $_smarty_tpl->tpl_vars['t']->value['STATUS'];?>
</th>
					<th class="text-center disabled" width="32"></th>
				</tr>
			</thead>
			<tbody class="small">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['emails']->value), 'email');
$_smarty_tpl->tpl_vars['email']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['email']->value) {
$_smarty_tpl->tpl_vars['email']->do_else = false;
?>
					<tr>
						<td class="text-right text-muted d-none d-md-table-cell"><?php echo $_smarty_tpl->tpl_vars['email']->value['id'];?>
</td>
						<td class="text-left" data-order="<?php echo $_smarty_tpl->tpl_vars['email']->value['recipient'][0];?>
">
							<b><?php echo $_smarty_tpl->tpl_vars['email']->value['recipient'][0];?>
</b>
							<small class="text-muted pull-right"><?php echo truncate(clear($_smarty_tpl->tpl_vars['email']->value['recipient'][1]),60);?>
</small>
						</td>
						<td class="text-left d-none d-md-table-cell" data-order="<?php echo $_smarty_tpl->tpl_vars['email']->value['subject'];?>
">
							<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->PATH;?>
/preview/<?php echo $_smarty_tpl->tpl_vars['email']->value['id'];?>
" data-fancybox data-type="iframe">
								<span data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['t']->value['PREVIEW'];?>
"><?php echo $_smarty_tpl->tpl_vars['email']->value['subject'];?>
</span>
							</a>
						</td>
						<td class="text-center" data-order="<?php echo strtotime($_smarty_tpl->tpl_vars['email']->value['readed']);?>
">
							<?php if ($_smarty_tpl->tpl_vars['email']->value['readed']) {?>
								<span class="badge badge-success badge-sm badge-dot" data-toggle="tooltip" title="<?php echo sprintf('%s:<br> %s',$_smarty_tpl->tpl_vars['t']->value['READED'],date('d.m.Y H:i',strtotime($_smarty_tpl->tpl_vars['email']->value['readed'])));?>
">
									<i class="fa fa-eye text-light"></i>
								</span>
							<?php } else { ?>
								<span class="badge badge-light badge-sm badge-dot" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['t']->value['NOT_READED'];?>
">
									<i class="fa fa-eye-slash text-dark"></i>
								</span>
							<?php }?>
						</td>
						<td class="text-center">
							<a href="#" data-toggle="modal" data-target="#remove<?php echo $_smarty_tpl->tpl_vars['email']->value['id'];?>
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
	<?php } else { ?>
		<?php if (!$_smarty_tpl->tpl_vars['count']->value) {?>
			<?php $_smarty_tpl->_subTemplateRender("file:../addons/flash.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('flash'=>array('title'=>$_smarty_tpl->tpl_vars['t']->value['RECORDS_EMTY_TITLE'])), 0, false);
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
class Block_1371236396139c363573125_82142924 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal' => 
  array (
    0 => 'Block_1371236396139c363573125_82142924',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['emails']->value) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['emails']->value), 'email');
$_smarty_tpl->tpl_vars['email']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['email']->value) {
$_smarty_tpl->tpl_vars['email']->do_else = false;
?>
			<div class="modal fade" id="remove<?php echo $_smarty_tpl->tpl_vars['email']->value['id'];?>
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
							<p class="m-0"><b><?php echo $_smarty_tpl->tpl_vars['email']->value['recipient'][0];?>
</b><br>
							<small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['email']->value['recipient'][1];?>
</small></p>
							<p class="my-3"></p>
							<p class="m-0 text-muted"><?php echo sprintf('<i>"%s"</i>',truncate(clear($_smarty_tpl->tpl_vars['email']->value['subject'])));?>
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
/remove/<?php echo $_smarty_tpl->tpl_vars['email']->value['id'];?>
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
class Block_7911633306139c3635b3682_80251618 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_7911633306139c3635b3682_80251618',
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
			"iDisplayLength": 50,
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
