<?php
/* Smarty version 3.1.39, created on 2021-10-05 15:59:48
  from '/home/klient.dhosting.pl/kodigo/hellostranger.kodigo.pl/public_html/system/views/front/addons/event.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615c5a54503631_37304221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fba5dd14c0fe71ab6850c38e057229ed8a1d9395' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.kodigo.pl/public_html/system/views/front/addons/event.tpl',
      1 => 1633442303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615c5a54503631_37304221 (Smarty_Internal_Template $_smarty_tpl) {
?><a <?php if ($_smarty_tpl->tpl_vars['event']->value['alias']) {?>href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/event/<?php echo $_smarty_tpl->tpl_vars['event']->value['alias'];?>
"<?php }?> class="tiles-tile">
	<div class="tiles-tile-picture">
		<img src="<?php echo PATH_IMAGES;?>
/template/7x5.png" alt="sizer" class="tiles-tile-picture-sizer">
		<div class="tiles-tile-picture-image" style="<?php if ($_smarty_tpl->tpl_vars['event']->value['file']) {?>background-image: url('<?php echo $_smarty_tpl->tpl_vars['event']->value['data']['image'];?>
');<?php }?>"></div>
		<?php if (!array_sum($_smarty_tpl->tpl_vars['event']->value['others']['price']) || $_smarty_tpl->tpl_vars['event']->value['others']['price']['promotion']) {?>
			<div class="tiles-tile-picture-cover align-items-start justify-content-start">
				<div class="tiles-tile-picture-cover-labels">
					<?php if (!array_sum($_smarty_tpl->tpl_vars['event']->value['others']['price'])) {?><label class="label"><?php echo $_smarty_tpl->tpl_vars['t']->value['PREORDER'];?>
</label><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['event']->value['others']['price']['promotion']) {?><label class="label dark"><?php echo $_smarty_tpl->tpl_vars['t']->value['PROMOTION'];?>
</label><?php }?>
				</div>
			</div>
		<?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['event']->value['date'] || $_smarty_tpl->tpl_vars['event']->value['title'] || $_smarty_tpl->tpl_vars['event']->value['location'] || $_smarty_tpl->tpl_vars['event']->value['others']['limit'] || $_smarty_tpl->tpl_vars['event']->value['alias']) {?>
		<div class="tiles-tile-inner">
			<?php if ($_smarty_tpl->tpl_vars['event']->value['date'] || $_smarty_tpl->tpl_vars['event']->value['title'] || $_smarty_tpl->tpl_vars['event']->value['location'] || $_smarty_tpl->tpl_vars['event']->value['others']['limit']) {?>
				<div class="row justify-content-center align-items-center no-gutters flex-nowrap mb-3 mb-md-4">
					<?php if ($_smarty_tpl->tpl_vars['event']->value['date']) {?>
						<div class="col-auto col-md-auto pr-3 pr-md-4">
							<div class="date">
								<b><?php echo date('d',strtotime($_smarty_tpl->tpl_vars['event']->value['date']['day']));?>
</b>
								<?php if ($_smarty_tpl->tpl_vars['base']->value->language == 'pl') {?><p><?php echo polishDate('f Y',strtotime($_smarty_tpl->tpl_vars['event']->value['date']['day']));?>
</p>
								<?php } else { ?><p><?php echo date('f Y',strtotime($_smarty_tpl->tpl_vars['event']->value['date']['day']));?>
</p><?php }?>
								<p><?php echo sprintf('%s - %s',$_smarty_tpl->tpl_vars['event']->value['date']['start'],$_smarty_tpl->tpl_vars['event']->value['date']['end']);?>
</p>
							</div>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['event']->value['title'] || $_smarty_tpl->tpl_vars['event']->value['location'] || $_smarty_tpl->tpl_vars['event']->value['others']['limit']) {?>
						<div class="col-8 col-md-6">
							<?php if ($_smarty_tpl->tpl_vars['event']->value['title'] || $_smarty_tpl->tpl_vars['event']->value['location']) {?>
								<div class="tinymce <?php if ($_smarty_tpl->tpl_vars['event']->value['others']['limit']) {?>mb-md-3<?php }?>">
									<b class="d-none d-md-inline"><?php echo truncate(clear($_smarty_tpl->tpl_vars['event']->value['title']),33);?>
</b>
									<b class="d-block d-md-none"><?php echo clear($_smarty_tpl->tpl_vars['event']->value['title']);?>
</b>
									<br class="d-none d-md-inline">
									<?php echo truncate(clear($_smarty_tpl->tpl_vars['event']->value['location']));?>

								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['event']->value['others']['limit']) {?>
								<div class="d-flex align-items-center">
									<?php if ($_smarty_tpl->tpl_vars['event']->value['others']['limit']['women']) {?>
										<div class="d-flex align-items-center mr-3">
											<img src="<?php echo PATH_IMAGES;?>
/template/icons/female.svg" alt="female" width="12" class="mr-1">
											<?php if (array_sum($_smarty_tpl->tpl_vars['event']->value['data']['count']) >= 25) {?>
												<span><?php echo $_smarty_tpl->tpl_vars['event']->value['data']['count']['FEMALE'];?>
/<?php echo $_smarty_tpl->tpl_vars['event']->value['others']['limit']['women'];?>
</span>
											<?php } else { ?>
												<span><?php echo $_smarty_tpl->tpl_vars['event']->value['others']['limit']['women'];?>
</span>
											<?php }?>
										</div>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['event']->value['others']['limit']['men']) {?>
										<div class="d-flex align-items-center">
											<img src="<?php echo PATH_IMAGES;?>
/template/icons/male.svg" alt="male" width="12" class="mr-1">
											<?php if (array_sum($_smarty_tpl->tpl_vars['event']->value['data']['count']) >= 5) {?>
												<span><?php echo $_smarty_tpl->tpl_vars['event']->value['data']['count']['MALE'];?>
/<?php echo $_smarty_tpl->tpl_vars['event']->value['others']['limit']['men'];?>
</span>
											<?php } else { ?>
												<span><?php echo $_smarty_tpl->tpl_vars['event']->value['others']['limit']['men'];?>
</span>
											<?php }?>
										</div>
									<?php }?>
								</div>
							<?php }?>
						</div>
					<?php }?>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['event']->value['alias']) {?>
				<div class="row justify-content-center">
					<div class="col-12 col-md-10">
						<button type="button" class="btn accent ghost">
							<span><?php echo $_smarty_tpl->tpl_vars['t']->value['KNOW_MORE'];?>
</span>
						</button>
					</div>
				</div>
			<?php }?>
		</div>
	<?php }?>
</a><?php }
}
