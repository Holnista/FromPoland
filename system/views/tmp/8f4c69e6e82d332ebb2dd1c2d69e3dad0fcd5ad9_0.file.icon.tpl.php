<?php
/* Smarty version 3.1.40, created on 2022-01-17 12:25:57
  from 'D:\wamp\www\Sztorm\system\views\back\addons\blocks\icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61e56055ef3280_84012166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f4c69e6e82d332ebb2dd1c2d69e3dad0fcd5ad9' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\addons\\blocks\\icon.tpl',
      1 => 1642422351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e56055ef3280_84012166 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12036975861e56055ee9136_17472413', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../blocks/block.tpl");
}
/* {block "content"} */
class Block_12036975861e56055ee9136_17472413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12036975861e56055ee9136_17472413',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="title badge badge-info rounded p-2">Prosta ikona</div>
	<?php echo '<script'; ?>
>var selectIconButton = (selectIconButton ? selectIconButton : null);<?php echo '</script'; ?>
>
	<div class="text-center">
		<?php $_smarty_tpl->_assignInScope('default', path('/',PATH_IMAGES,'template','icons','extensions','7z.svg'));?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['block']->value['value'][0] ? $_smarty_tpl->tpl_vars['block']->value['value'][0] : sprintf('/%s',$_smarty_tpl->tpl_vars['default']->value);?>
"
		class="img-thumbnail pointer" data-target="#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_settings" data-toggle="modal" 
		onclick="selectIconButton = this;" width="128">
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
[value][0]" value="<?php echo $_smarty_tpl->tpl_vars['block']->value['value'][0];?>
">
		<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
[value][1]" value="<?php echo $_smarty_tpl->tpl_vars['block']->value['value'][1];?>
" 
		class="form-control text-center mt-1" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['TITLE'];?>
">
		<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
[value][2]" value="<?php echo $_smarty_tpl->tpl_vars['block']->value['value'][2];?>
" 
		class="form-control form-control-sm text-center mt-1" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['SUBTITLE'];?>
">
	</div>
	<div class="modal fade" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_settings">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['t']->value['SELECT'];?>
</h5>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center">
					<div class="row no-gutters">
						<?php $_smarty_tpl->_assignInScope('path', path(PATH_PUBLIC,'images','template','icons','extensions'));?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, scandir($_smarty_tpl->tpl_vars['path']->value), 'icon');
$_smarty_tpl->tpl_vars['icon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->do_else = false;
?>
							<?php if (is_file(path($_smarty_tpl->tpl_vars['path']->value,$_smarty_tpl->tpl_vars['icon']->value))) {?>
								<?php $_smarty_tpl->_assignInScope('url', sprintf('/%s',path($_smarty_tpl->tpl_vars['path']->value,$_smarty_tpl->tpl_vars['icon']->value)));?>
								<div class="col-12 col-md-3 p-1">
									<a class="position-relative d-block" data-dismiss="modal"
									onclick="$(selectIconButton).attr('src', '<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
').next().val('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
')">
										<img src="/<?php echo PATH_IMAGES;?>
/template/1x1.png" class="card-img w-100">
										<div class="card-img-overlay d-flex align-items-center justify-content-center p-0">
											<img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="pointer h-100">
										</div>
									</a>
								</div>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
}
}
/* {/block "content"} */
}
