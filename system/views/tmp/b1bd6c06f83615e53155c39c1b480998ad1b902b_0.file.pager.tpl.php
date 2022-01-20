<?php
/* Smarty version 3.1.39, created on 2021-11-22 15:51:46
  from '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/back/addons/pager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619bae82c112c9_59583905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1bd6c06f83615e53155c39c1b480998ad1b902b' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/back/addons/pager.tpl',
      1 => 1631891995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619bae82c112c9_59583905 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['pager']->value) {?>
	<div class="row justify-content-between align-items-center flex-nowrap">
		<div class="col-auto">
			<p class="text-muted mb-1">
				<strong><?php echo $_smarty_tpl->tpl_vars['pager']->value['total'];?>
</strong> 
				<span><?php echo mb_strtolower($_smarty_tpl->tpl_vars['t']->value['RECORDS']);?>
</span>
			</p>
		</div>
		<div class="col-auto">
			<?php $_smarty_tpl->_assignInScope('start', ($_smarty_tpl->tpl_vars['pager']->value['page']-$_smarty_tpl->tpl_vars['pager']->value['links']) > 0 ? $_smarty_tpl->tpl_vars['pager']->value['page']-$_smarty_tpl->tpl_vars['pager']->value['links'] : 1);?>
			<?php $_smarty_tpl->_assignInScope('end', $_smarty_tpl->tpl_vars['pager']->value['pages'] > ($_smarty_tpl->tpl_vars['pager']->value['page']+$_smarty_tpl->tpl_vars['pager']->value['links']) ? $_smarty_tpl->tpl_vars['pager']->value['page']+$_smarty_tpl->tpl_vars['pager']->value['links'] : $_smarty_tpl->tpl_vars['pager']->value['pages']);?>
			<ul class="pagination m-0">
				<li class="page-item <?php if ($_smarty_tpl->tpl_vars['pager']->value['page'] == 1) {?>disabled<?php }?>">
					<a href="<?php echo replaceUrl(array('page'=>$_smarty_tpl->tpl_vars['pager']->value['page']-1));?>
" class="page-link">
						<i class="fa fa-arrow-left"></i>
					</a>
				</li>
				<?php if ($_smarty_tpl->tpl_vars['start']->value > 1) {?>
					<li class="page-item d-none d-md-block <?php if ($_smarty_tpl->tpl_vars['pager']->value['page'] == 1) {?>active<?php }?>">
						<a href="<?php echo replaceUrl(array('page'=>1));?>
" class="page-link">1</a>
					</li>
					<li class="page-item d-none d-md-block disabled">
						<a class="page-link">&hellip;</a>
					</li>
				<?php }?>
				<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
					<li class="page-item d-none d-md-block <?php if ($_smarty_tpl->tpl_vars['pager']->value['page'] == $_smarty_tpl->tpl_vars['i']->value) {?>active<?php }?>">
						<a href="<?php echo replaceUrl(array('page'=>$_smarty_tpl->tpl_vars['i']->value));?>
" class="page-link"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
					</li>
				<?php }
}
?>
				<li class="page-item d-block d-md-none active">
					<a href="<?php echo replaceUrl(array('page'=>$_smarty_tpl->tpl_vars['pager']->value['page']));?>
" class="page-link"><?php echo $_smarty_tpl->tpl_vars['pager']->value['page'];?>
</a>
				</li>
				<?php if ($_smarty_tpl->tpl_vars['pager']->value['pages'] > $_smarty_tpl->tpl_vars['end']->value) {?>
					<li class="page-item d-none d-md-block disabled">
						<a class="page-link">&hellip;</a>
					</li>
					<li class="page-item d-none d-md-block <?php if ($_smarty_tpl->tpl_vars['pager']->value['page'] == $_smarty_tpl->tpl_vars['pager']->value['pages']) {?>active<?php }?>">
						<a href="<?php echo replaceUrl(array('page'=>$_smarty_tpl->tpl_vars['pager']->value['pages']));?>
" class="page-link"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pages'];?>
</a>
					</li>
				<?php }?>
				<li class="page-item <?php if ($_smarty_tpl->tpl_vars['pager']->value['page'] == $_smarty_tpl->tpl_vars['pager']->value['pages']) {?>disabled<?php }?>">
					<a href="<?php echo replaceUrl(array('page'=>$_smarty_tpl->tpl_vars['pager']->value['page']+1));?>
" class="page-link">
						<i class="fa fa-arrow-right"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
<?php }
}
}
