<?php
/* Smarty version 3.1.39, created on 2021-10-07 14:41:27
  from '/home/klient.dhosting.pl/kodigo/hellostranger.kodigo.pl/public_html/system/views/back/addons/topbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615eeaf726fe28_41082026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9241b6c590df51efa5f849298e7fe813937d8fb2' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.kodigo.pl/public_html/system/views/back/addons/topbar.tpl',
      1 => 1631891995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615eeaf726fe28_41082026 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['topbar']->value) {?>
	<div class="row justify-content-between align-items-start no-gutters flex-xl-nowrap mb-3">
		<?php if ($_smarty_tpl->tpl_vars['topbar']->value['title']) {?>
			<div class="col-12 col-xl-auto <?php if (array_intersect(array('search','manage','add'),$_smarty_tpl->tpl_vars['topbar']->value['options']) || $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom')) {?>mb-3 mb-xl-0<?php }?>">
				<?php if ($_smarty_tpl->tpl_vars['topbar']->value['title']['icon'] || $_smarty_tpl->tpl_vars['topbar']->value['title']['content']) {?>
					<h4 class="m-0 text-bold text-center d-inline">
						<strong><?php if ($_smarty_tpl->tpl_vars['topbar']->value['title']['icon']) {?><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['topbar']->value['title']['icon'];?>
"></i><?php }?>
						<span><?php echo $_smarty_tpl->tpl_vars['base']->value->clean($_smarty_tpl->tpl_vars['topbar']->value['title']['content']);?>
</span></strong>
					</h4>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['topbar']->value['title']['text']) {?>
					<small class="text-muted d-inline">
						<span><?php echo $_smarty_tpl->tpl_vars['base']->value->clean($_smarty_tpl->tpl_vars['topbar']->value['title']['text']);?>
</span>
					</small>
				<?php }?>
			</div>
		<?php }?>
		<?php if (array_intersect(array('search','manage','add'),$_smarty_tpl->tpl_vars['topbar']->value['options']) || $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom') || $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'filters')) {?>
			<div class="col-12 col-xl-auto pl-xl-2">
				<div class="d-flex justify-content-between align-items-center flex-nowrap">
					<?php if (array_intersect(array('search'),$_smarty_tpl->tpl_vars['topbar']->value['options'])) {?>
						<form method="GET" class="input-group flex-grow-1 flex-nowrap">
							<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'filters');?>

							<input type="text" name="word" value="<?php echo $_GET['word'];?>
" class="form-control py-0 h-auto rounded-left" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['SEARCH'];?>
..." onchange="this.form.submit()">
							<div class="input-group-append">
								<button type="submit" class="btn rounded-right btn-outline-primary">
									<i class="fa fa-search"></i>
								</button>
							</div>
						</form>
					<?php }?>
					<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom');?>

					<?php if (array_intersect(array('manage','add'),$_smarty_tpl->tpl_vars['topbar']->value['options'])) {?>
						<div class="btn-group">
							<?php if (array_intersect(array('manage'),$_smarty_tpl->tpl_vars['topbar']->value['options'])) {?>
								<button type="button" class="btn rounded btn-outline-dark <?php if (in_array('search',$_smarty_tpl->tpl_vars['topbar']->value['options'])) {?>ml-2<?php }?>" data-toggle="dropdown">
									<i class="fa fa-cog d-inline d-md-none"></i>
									<span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['t']->value['OPTIONS'];?>
</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right mt-2">
									<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->PATH;?>
/manage/import" class="dropdown-item">
										<span class="pl-2"><?php echo $_smarty_tpl->tpl_vars['t']->value['IMPORT'];?>
</span>
										<i class="fa fa-upload text-primary"></i>
									</a>
									<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->PATH;?>
/manage/export" class="dropdown-item">
										<span class="pl-2"><?php echo $_smarty_tpl->tpl_vars['t']->value['EXPORT'];?>
</span>
										<i class="fa fa-download text-primary"></i>
									</a>
								</div>
							<?php }?>
							<?php if (array_intersect(array('add'),$_smarty_tpl->tpl_vars['topbar']->value['options'])) {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->PATH;?>
/add" class="btn rounded btn-primary <?php if (array_intersect(array('manage','search'),$_smarty_tpl->tpl_vars['topbar']->value['options']) || $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom')) {?>ml-2<?php }?>">
									<i class="fa fa-plus d-inline d-md-none"></i>
									<span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['t']->value['CREATE'];?>
</span>
								</a>
							<?php }?>
						</div>
					<?php }?>
				</div>
			</div>
		<?php }?>
	</div>
<?php }
}
}
