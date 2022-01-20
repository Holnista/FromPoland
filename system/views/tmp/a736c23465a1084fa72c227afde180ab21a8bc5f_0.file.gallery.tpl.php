<?php
/* Smarty version 3.1.40, created on 2022-01-11 15:21:38
  from 'D:\wamp\www\Sztorm\system\views\back\addons\blocks\gallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61dda082f39bb6_47598686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a736c23465a1084fa72c227afde180ab21a8bc5f' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\addons\\blocks\\gallery.tpl',
      1 => 1641914497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../addons/flash.tpl' => 1,
  ),
),false)) {
function content_61dda082f39bb6_47598686 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166078137961dda082f2dec3_79069249', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../blocks/block.tpl");
}
/* {block "content"} */
class Block_166078137961dda082f2dec3_79069249 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_166078137961dda082f2dec3_79069249',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="title badge badge-info rounded p-2">Galeria zdjęć</div>
	<?php echo '<script'; ?>
>var selectGalleryButton = (selectGalleryButton ? selectGalleryButton : null);<?php echo '</script'; ?>
>
	<div class="input-group">
		<img src="<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['type']->value][$_smarty_tpl->tpl_vars['block']->value['value']]['data']['thumb'];?>
" 
		class="w-100 img-fluid rounded pointer mb-1 <?php if (!$_smarty_tpl->tpl_vars['block']->value) {?>d-none<?php }?>" 
		onclick="$(this).next().next().next().find('button').trigger('click');">
		
		<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['type']->value][$_smarty_tpl->tpl_vars['block']->value['value']]['title'];?>
" class="form-control rounded-left" disabled readonly>
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
[value]" value="<?php echo $_smarty_tpl->tpl_vars['block']->value['value'];?>
" class="form-control rounded-left" readonly>
		<div class="input-group-append">
			<button data-target="#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_settings" data-toggle="modal" onclick="selectGalleryButton = this;"
			type="button" class="btn rounded-right btn-primary"><?php echo $_smarty_tpl->tpl_vars['t']->value['SELECT'];?>
</button>
		</div>
	</div>
	<div class="modal fade" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_settings">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['t']->value['SELECT'];?>
</h5>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center">
					<?php if ($_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['type']->value]) {?>
						<table class="table table-bordered table-hover table-sm">
							<thead>
								<tr>
									<th class="text-left d-none d-md-table-cell" width="80">ID</th>
									<th class="text-left"><?php echo $_smarty_tpl->tpl_vars['t']->value['TITLE'];?>
</th>
									<th class="text-center disabled" width="160"><?php echo $_smarty_tpl->tpl_vars['t']->value['OPTIONS'];?>
</th>
								</tr>
							</thead>
							<tbody>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['type']->value]), 'gallery');
$_smarty_tpl->tpl_vars['gallery']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gallery']->value) {
$_smarty_tpl->tpl_vars['gallery']->do_else = false;
?>
									<tr>
										<td class="text-right text-muted d-none d-md-table-cell"><?php echo $_smarty_tpl->tpl_vars['gallery']->value['id'];?>
</td>
										<td class="text-left" data-order="<?php echo clear($_smarty_tpl->tpl_vars['gallery']->value['title']);?>
">
											<div class="row align-items-center no-gutters flex-nowrap">
												<div class="col-auto d-none d-xl-block mr-2">
													<?php if (!$_smarty_tpl->tpl_vars['gallery']->value['data']['images']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['data']['thumb'];?>
" class="img-thumbnail" width="48"><?php } else { ?>
														<a href="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['data']['image'];?>
" data-fancybox="galleries" data-caption="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['title'];?>
">
															<img src="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['data']['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['title'];?>
" class="img-thumbnail p-0" width="48">
														</a>
													<?php }?>
												</div>
												<div class="col">
													<b><?php echo $_smarty_tpl->tpl_vars['gallery']->value['title'];?>
</b><br>
													<small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['gallery']->value['alias'];?>
</small>
												</div>
											</div>
										</td>
										<td class="text-center">
											<button data-dismiss="modal" onclick="$(selectGalleryButton).parent().prev().val('<?php echo $_smarty_tpl->tpl_vars['gallery']->value['id'];?>
')
											.prev().val('<?php echo $_smarty_tpl->tpl_vars['gallery']->value['title'];?>
').prev().attr('src', '<?php echo $_smarty_tpl->tpl_vars['gallery']->value['data']['thumb'];?>
').removeClass('d-none');"
											type="button" class="btn rounded-right btn-primary"><?php echo $_smarty_tpl->tpl_vars['t']->value['SELECT'];?>
</button>
										</td>
									</tr>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</tbody>
						</table>
					<?php } else { ?>
						<?php $_smarty_tpl->_subTemplateRender("file:../../addons/flash.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('flash'=>array('title'=>$_smarty_tpl->tpl_vars['t']->value['RECORDS_EMTY_TITLE'])), 0, false);
?>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
	
<?php
}
}
/* {/block "content"} */
}
