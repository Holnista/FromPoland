<?php
/* Smarty version 3.1.40, created on 2022-01-03 10:34:48
  from 'D:\wamp\www\Sztorm\system\views\back\admins\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61d2d148a54376_10942782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1ea72eaf1ca2383968763775f5690726e35ab20' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\admins\\form.tpl',
      1 => 1640770791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/topbar.tpl' => 1,
  ),
),false)) {
function content_61d2d148a54376_10942782 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9326636761d2d148a42504_09141959', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117740392361d2d148a53ab2_58753408', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "content"} */
class Block_9326636761d2d148a42504_09141959 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9326636761d2d148a42504_09141959',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender("file:../addons/topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('topbar'=>array('title'=>array('icon'=>'user-circle-o','content'=>$_smarty_tpl->tpl_vars['t']->value['ADMINS'],'text'=>$_smarty_tpl->tpl_vars['admin']->value ? $_smarty_tpl->tpl_vars['t']->value['EDIT'] : $_smarty_tpl->tpl_vars['t']->value['CREATE']))), 0, false);
?>
	<div class="<?php echo $_smarty_tpl->tpl_vars['grow']->value;?>
 mt-2">
		<ul class="nav nav-tabs">
			<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-basic"><?php echo $_smarty_tpl->tpl_vars['t']->value['BASIC'];?>
</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-permissions"><?php echo $_smarty_tpl->tpl_vars['t']->value['PERMISSIONS'];?>
</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-image"><?php echo $_smarty_tpl->tpl_vars['t']->value['IMAGE'];?>
</a></li>
		</ul>
		<form method="POST" class="<?php echo $_smarty_tpl->tpl_vars['grow']->value;?>
 validate" enctype="multipart/form-data">
			<div class="tab-content rounded-bottom border border-top-0 mb-3">
				<div class="tab-pane fade show active px-3" id="tab-basic">
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="email" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['EMAIL'];?>
</label>
						<div class="col-sm-9">
							<input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['email'];?>
" id="email" minlength="2"
							maxlength="64" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['EMAIL'];?>
" class="form-control" required>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="password" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['PASSWORD'];?>
</label>
						<div class="col-sm-9">
							<div class="input-group">
								<input type="text" name="password" id="password" minlength="8"
								placeholder="<?php echo !$_smarty_tpl->tpl_vars['admin']->value ? $_smarty_tpl->tpl_vars['t']->value['PASSWORD'] : $_smarty_tpl->tpl_vars['t']->value['NEW_PASSWORD'];?>
"
								class="form-control" maxlength="64" <?php if (!$_smarty_tpl->tpl_vars['admin']->value) {?>required<?php }?>>
								<div class="input-group-append">
									<button class="btn rounded-right btn-outline-secondary" 
									type="button" data-random-password>
										<i class="fa fa-refresh"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="personal[name]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['NAME'];?>
</label>
						<div class="col-sm-9">
							<input type="text" name="personal[name]" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['personal']['name'];?>
" minlength="2"
							maxlength="64" id="personal[name]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['NAME'];?>
" class="form-control" required>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="personal[surname]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['SURNAME'];?>
</label>
						<div class="col-sm-9">
							<input type="text" name="personal[surname]" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['personal']['surname'];?>
" minlength="2"
							maxlength="64" id="personal[surname]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['SURNAME'];?>
" class="form-control" required>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="employment[department]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['DEPARTMENT'];?>
</label>
						<div class="col-sm-9">
							<input type="text" name="employment[department]" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['employment']['department'];?>
"
							id="employment[department]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['DEPARTMENT'];?>
" class="form-control typeahead"
							data-hints='[<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hints']->value["department"], 'hint');
$_smarty_tpl->tpl_vars['hint']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->do_else = false;
?>"<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
", <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>""]'
							autocomplete="off" minlength="2" maxlength="64" required>
						</div>
					</div>
					<div class="form-group row align-items-center bg-light mb-0 py-3">
						<label for="employment[position]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['POSITION'];?>
</label>
						<div class="col-sm-9">
							<input type="text" name="employment[position]" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['employment']['position'];?>
"
							id="employment[position]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['POSITION'];?>
" class="form-control typeahead"
							data-hints='[<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hints']->value["position"], 'hint');
$_smarty_tpl->tpl_vars['hint']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->do_else = false;
?>"<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
", <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>""]'
							autocomplete="off" minlength="2" maxlength="64" required>
						</div>
					</div>
				</div>
				<!---------------------------------------------------------------------------------------------------->
				<div class="tab-pane fade px-2 pb-3" id="tab-permissions">
					<div class="row no-gutters">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permissions']->value, 'permission', false, 'group');
$_smarty_tpl->tpl_vars['permission']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value => $_smarty_tpl->tpl_vars['permission']->value) {
$_smarty_tpl->tpl_vars['permission']->do_else = false;
?>
							<div class="col-12 col-md-6 px-2">
								<div class="card mt-3">
									<div class="card-header px-3"><?php echo $_smarty_tpl->tpl_vars['t']->value[$_smarty_tpl->tpl_vars['group']->value];?>
</div>
									<div class="card-body p-0">
										<table class="table table-hover table-sm m-0">
											<tbody class="small">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permission']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
													<tr>
														<td class="px-3"><?php echo $_smarty_tpl->tpl_vars['t']->value[$_smarty_tpl->tpl_vars['value']->value];?>
</td>
														<td class="text-center" width="50">
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" name="permissions[]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
																id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['admin']->value['permissions']) || !$_smarty_tpl->tpl_vars['admin']->value) {?>checked<?php }?>>
																<label class="custom-control-label" for="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"></label>
															</div>
														</td>
													</tr>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>
				<!---------------------------------------------------------------------------------------------------->
				<div class="tab-pane fade p-3" id="tab-image">
					<div class="form-group mb-0">
						<input type="file" name="images[]" class="form-control upload">
					</div>
					<?php if ($_smarty_tpl->tpl_vars['admin']->value['file']) {?>
						<div class="row">
							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-2" data-file>
								<div class="card mt-3">
									<img src="<?php echo $_smarty_tpl->tpl_vars['admin']->value['data']['image'];?>
" class="card-img">
									<div class="card-img-overlay d-flex align-items-start justify-content-end p-1">
										<button type="button" class="btn btn-danger badge-dot badge-float badge-sm" 
										data-remove-file="<?php echo path(TABLE_ADMINS,$_smarty_tpl->tpl_vars['admin']->value['id']);?>
">
											<i class="fa fa-times"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					<?php }?>
				</div>
			</div>
			<div class="row justify-content-between align-items-center flex-column-reverse flex-sm-row mt-auto">
				<div class="col-12 col-sm-auto mt-2 mt-sm-0">
					<a href="javascript:history.back()" class="btn rounded btn-block btn-outline-dark">
						<span><?php echo $_smarty_tpl->tpl_vars['t']->value['GO_BACK'];?>
</span>
					</a>
				</div>
				<div class="col-12 col-sm-auto">
					<input type="hidden" name="token" value="<?php echo md5($_SESSION['csrf']);?>
">
					<button type="submit" class="btn rounded btn-block btn-primary">
						<span><?php echo $_smarty_tpl->tpl_vars['t']->value['SAVE'];?>
</span>
					</button>
				</div>
			</div>
		</form>
	</div>
<?php
}
}
/* {/block "content"} */
/* {block "footer"} */
class Block_117740392361d2d148a53ab2_58753408 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_117740392361d2d148a53ab2_58753408',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
>
		//----- Random password
		$("[data-random-password]").click(function()
		{
			var result = '', characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', charactersLength = characters.length;
			for(var i = 0; i < 10; i++) result += characters.charAt(Math.floor(Math.random() * charactersLength));
			$("input[name='password']").val(result);
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "footer"} */
}
