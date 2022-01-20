<?php
/* Smarty version 3.1.39, created on 2021-11-23 12:55:42
  from '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/front/event/read.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619cd6be685b29_29151554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7b4f40b794400bade1d09f7ab4fd08cb30140d2' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/front/event/read.tpl',
      1 => 1637668540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/event.tpl' => 1,
  ),
),false)) {
function content_619cd6be685b29_29151554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_731458963619cd6be618a19_76315557', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_258077553619cd6be61a309_23755868', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_320697532619cd6be65df58_87493698', "modal");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_471766941619cd6be681b60_93384454', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "header"} */
class Block_731458963619cd6be618a19_76315557 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_731458963619cd6be618a19_76315557',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<style>
		section.slider[data-type="events"]::before
		{
			background: #FCF9F7;
			background: linear-gradient(90deg, #FCF9F7 0%, #FCF9F7 50%, rgba(252, 249, 247, 0%) 100%);
		}
		section.slider[data-type="events"]::after
		{
			background: #FCF9F7;
			background: linear-gradient(270deg, #FCF9F7 0%, #FCF9F7 50%, rgba(252, 249, 247, 0%) 100%);
		}
	</style>
<?php
}
}
/* {/block "header"} */
/* {block "content"} */
class Block_258077553619cd6be61a309_23755868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_258077553619cd6be61a309_23755868',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section class="event mb-auto">
		<?php if ($_smarty_tpl->tpl_vars['event']->value['file']) {?>
			<section class="tiles">
				<div class="tiles-tile">
					<div class="tiles-tile-picture" data-parallax="scroll" data-image-src="<?php echo $_smarty_tpl->tpl_vars['event']->value['data']['image'];?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['event']->value['data']['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['event']->value['file'];?>
" class="d-none">
						<img src="<?php echo PATH_IMAGES;?>
/template/17x4.png" alt="sizer" class="tiles-tile-picture-sizer">
						<!--div class="tiles-tile-picture-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['event']->value['data']['image'];?>
');"></div-->
					</div>
				</div>
			</section>
		<?php }?>
		<section class="padding">
			<div class="container">
				<?php if ($_smarty_tpl->tpl_vars['event']->value['title'] || $_smarty_tpl->tpl_vars['event']->value['subtitle']) {?>
					<div class="section-header">
						<?php if ($_smarty_tpl->tpl_vars['event']->value['title']) {?>
							<h1 class="section-header-title">
								<span><?php $_smarty_tpl->_assignInScope('title', explode(' ',clear($_smarty_tpl->tpl_vars['event']->value['title'])));?>
								<?php $_smarty_tpl->_assignInScope('first', array_shift($_smarty_tpl->tpl_vars['title']->value));?><b><?php echo $_smarty_tpl->tpl_vars['first']->value;?>
</b>
								<?php echo implode(' ',$_smarty_tpl->tpl_vars['title']->value);?>
</span>
							</h1>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['event']->value['subtitle']) {?>
							<div class="section-header-subtitle">
								<span><?php echo $_smarty_tpl->tpl_vars['event']->value['subtitle'];?>
</span>
							</div>
						<?php }?>
					</div>
				<?php }?>
				<div class="row justify-content-between">
					<div class="col-12 col-md-8 col-lg-7 order-2 order-md-1">
						<?php if ($_smarty_tpl->tpl_vars['event']->value['text']) {?>
							<div class="row justify-content-center">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['event']->value['text']), 'section', false, 'index');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
									<?php if ($_smarty_tpl->tpl_vars['section']->value['file'] || $_smarty_tpl->tpl_vars['section']->value['title'] || $_smarty_tpl->tpl_vars['section']->value['content']) {?>
										<div class="col-12 col-sm <?php echo $_smarty_tpl->tpl_vars['section']->value['width'];?>
 d-flex flex-column <?php if ($_smarty_tpl->tpl_vars['index']->value) {?>mt-5<?php }?>">
											<?php if ($_smarty_tpl->tpl_vars['section']->value['file']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['section']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['section']->value['file'];?>
" class="w-100"><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['section']->value['title'] || $_smarty_tpl->tpl_vars['section']->value['content']) {?>
												<section class="<?php if ($_smarty_tpl->tpl_vars['section']->value['background']) {?>p-3 p-md-5 <?php echo $_smarty_tpl->tpl_vars['section']->value['background'];
} elseif ($_smarty_tpl->tpl_vars['section']->value['file']) {?>mt-5<?php }?> h-100">
													<?php if ($_smarty_tpl->tpl_vars['section']->value['title']) {?>
														<div class="section-header <?php if ($_smarty_tpl->tpl_vars['section']->value['content']) {?>mb-5<?php }?>">
															<div class="section-header-title">
																<span><?php echo $_smarty_tpl->tpl_vars['section']->value['title'];?>
</span>
															</div>
														</div>
													<?php }?>
													<?php if ($_smarty_tpl->tpl_vars['section']->value['content']) {?>
														<div class="tinymce">
															<?php echo $_smarty_tpl->tpl_vars['section']->value['content'];?>

														</div>
													<?php }?>
												</section>
											<?php }?>
										</div>
									<?php }?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						<?php }?>
					</div>
					<div class="col-12 col-md-4 order-1 order-md-2">
						<div class="sticky mb-5 mb-md-0">
							<div class="tinymce mb-4">
								<h6 class="dark mb-1">
									<b><?php echo $_smarty_tpl->tpl_vars['t']->value['WHEN'];?>
</b>
								</h6>
								<ul class="default">
									<?php if ($_smarty_tpl->tpl_vars['base']->value->language == 'pl') {?><li><?php echo polishDate('d F Y',strtotime($_smarty_tpl->tpl_vars['event']->value['date']['day']));?>
</li>
									<?php } else { ?><li><?php echo date('d F Y',strtotime($_smarty_tpl->tpl_vars['event']->value['date']['day']));?>
</li><?php }?>
									<li><?php echo sprintf('%s - %s',$_smarty_tpl->tpl_vars['event']->value['date']['start'],$_smarty_tpl->tpl_vars['event']->value['date']['end']);?>
</li>
									<li><?php echo $_smarty_tpl->tpl_vars['event']->value['location'];?>
</li>
									<li><?php echo $_smarty_tpl->tpl_vars['t']->value['WOMEN'];?>
: <?php echo $_smarty_tpl->tpl_vars['event']->value['others']['limit']['women'];?>
</li>
									<li><?php echo $_smarty_tpl->tpl_vars['t']->value['MEN'];?>
: <?php echo $_smarty_tpl->tpl_vars['event']->value['others']['limit']['men'];?>
</li>
									<li><?php echo $_smarty_tpl->tpl_vars['t']->value['AGE_RANGE'];?>
: <?php echo $_smarty_tpl->tpl_vars['event']->value['group'];?>
</li>
								</ul>
							</div>
							<div class="tinymce mb-4">
								<h6 class="dark mb-1">
									<b><?php echo $_smarty_tpl->tpl_vars['t']->value['TICKETS'];?>
</b>
								</h6>
								<div class="tinymce">
									<ul class="default">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array('WOMEN','MEN'), 'sex');
$_smarty_tpl->tpl_vars['sex']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sex']->value) {
$_smarty_tpl->tpl_vars['sex']->do_else = false;
?>
											<li class="d-flex align-items-center justify-content-between p-0" style="text-indent: 0;">
												<div class="d-flex justify-content-between" style="flex-grow: 1;">
													<div><?php echo $_smarty_tpl->tpl_vars['t']->value[$_smarty_tpl->tpl_vars['sex']->value];?>
</div>
													<div>
														<?php if ($_smarty_tpl->tpl_vars['event']->value['others']['price']['promotion']) {?>
															<small><s><?php echo price($_smarty_tpl->tpl_vars['event']->value['others']['price']['basic']);?>
</s></small>
															<b class="accent"><?php echo price($_smarty_tpl->tpl_vars['event']->value['others']['price']['promotion']);?>
</b>
														<?php } elseif ($_smarty_tpl->tpl_vars['event']->value['others']['price']['basic']) {?>
															<b><?php echo price($_smarty_tpl->tpl_vars['event']->value['others']['price']['basic']);?>
</b>
														<?php } else { ?>
															<b class="accent"><?php echo $_smarty_tpl->tpl_vars['t']->value['PREORDER'];?>
</b>
														<?php }?>
													</div>
												</div>
											</li>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</ul>
								</div>
							</div>
							<button type="button" class="btn accent ghost"
							data-fancybox data-src="#popup"><span>
							<?php if (!array_sum($_smarty_tpl->tpl_vars['event']->value['others']['price'])) {?>
							<?php echo $_smarty_tpl->tpl_vars['t']->value['NEWSLETTER_JOIN'];
} else { ?>
							<?php echo $_smarty_tpl->tpl_vars['t']->value['BUY_TICKET'];
}?></span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	<?php if ($_smarty_tpl->tpl_vars['events']->value) {?>
		<section class="shade padding <?php if (count($_smarty_tpl->tpl_vars['events']->value) > 3) {?>pb-5<?php }?>">
			<div class="container">
				<div class="section-header margin">
					<div class="section-header-title">
						<span><?php $_smarty_tpl->_assignInScope('title', explode(' ',clear($_smarty_tpl->tpl_vars['t']->value['UPCOMING_EVENTS'])));?>
						<?php $_smarty_tpl->_assignInScope('last', array_pop($_smarty_tpl->tpl_vars['title']->value));
echo implode(' ',$_smarty_tpl->tpl_vars['title']->value);?>

						<b><?php echo $_smarty_tpl->tpl_vars['last']->value;?>
</b></span>
					</div>
				</div>
				<section class="tiles">
					<section class="slider" data-type="events">
						<ul class="lightslider" data-index="<?php echo microtime(1);?>
">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['events']->value), 'event', false, 'index');
$_smarty_tpl->tpl_vars['event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->do_else = false;
?>
								<li class="slider-slide">
									<?php $_smarty_tpl->_subTemplateRender("file:../addons/event.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
								</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
						<?php if (count($_smarty_tpl->tpl_vars['events']->value) > 3) {?>
							<div class="slider-controls">
								<div class="slider-controls-pager mt-5">
									<ul class="d-none d-md-none d-lg-flex">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['events']->value), 'event', false, 'index');
$_smarty_tpl->tpl_vars['event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->do_else = false;
?>
											<?php if ($_smarty_tpl->tpl_vars['index']->value%3 == 0) {?><li <?php if (!$_smarty_tpl->tpl_vars['index']->value) {?>class="active"<?php }?>><a><?php echo $_smarty_tpl->tpl_vars['index']->value/3;?>
</a></li><?php }?>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</ul>
									<ul class="d-none d-md-flex d-lg-none">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['events']->value), 'event', false, 'index');
$_smarty_tpl->tpl_vars['event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->do_else = false;
?>
											<?php if ($_smarty_tpl->tpl_vars['index']->value%2 == 0) {?><li <?php if (!$_smarty_tpl->tpl_vars['index']->value) {?>class="active"<?php }?>><a><?php echo $_smarty_tpl->tpl_vars['index']->value/2;?>
</a></li><?php }?>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</ul>
									<ul class="d-flex d-md-none d-lg-none">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['events']->value), 'event', false, 'index');
$_smarty_tpl->tpl_vars['event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->do_else = false;
?>
											<?php if ($_smarty_tpl->tpl_vars['index']->value%1 == 0) {?><li <?php if (!$_smarty_tpl->tpl_vars['index']->value) {?>class="active"<?php }?>><a><?php echo $_smarty_tpl->tpl_vars['index']->value/1;?>
</a></li><?php }?>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</ul>
								</div>
							</div>
						<?php }?>
					</section>
				</section>
			</div>
		</section>
	<?php }
}
}
/* {/block "content"} */
/* {block "modal"} */
class Block_320697532619cd6be65df58_87493698 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal' => 
  array (
    0 => 'Block_320697532619cd6be65df58_87493698',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section class="modal large px-0" id="popup">
		<img src="<?php echo PATH_IMAGES;?>
/template/logo-vertical.svg" alt="<?php echo $_smarty_tpl->tpl_vars['base']->value->NAME;?>
" width="137" class="mx-auto">
		<div class="section-header mt-4 mb-5">
			<div class="section-header-title">
				<?php $_smarty_tpl->_assignInScope('title', explode(' ',clear($_smarty_tpl->tpl_vars['t']->value['BUY_TICKET'])));?>
				<?php $_smarty_tpl->_assignInScope('last', array_pop($_smarty_tpl->tpl_vars['title']->value));?>
				<?php echo implode(' ',$_smarty_tpl->tpl_vars['title']->value);?>

				<b><?php echo $_smarty_tpl->tpl_vars['last']->value;?>
</b>
			</div>
			<div class="section-header-subtitle">
				<span><?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
</span>
			</div>
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-lg-8">
					<form method="POST" class="form" id="orderForm">
						<div class="mb-4">
							<div class="form-field required animated">
								<input type="text" name="name" minlength="2" maxlength="64" class="form-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['NAME'];?>
 <?php echo $_smarty_tpl->tpl_vars['t']->value['AND'];?>
 <?php echo $_smarty_tpl->tpl_vars['t']->value['SURNAME'];?>
" required>
								<label class="form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['NAME'];?>
 <?php echo $_smarty_tpl->tpl_vars['t']->value['AND'];?>
 <?php echo $_smarty_tpl->tpl_vars['t']->value['SURNAME'];?>
</label>
							</div>
							<label class="form-label mt-2"><?php echo $_smarty_tpl->tpl_vars['t']->value['ORDER_NAME_NOTICE'];?>
</label>
						</div>
						<div class="row justify-content-between align-items-center">
							<div class="col-12 col-md">
								<div class="form-field required mb-4">
									<div class="form-select">
										<select name="year" class="form-input selectric" required>
											<option value="" selected disabled><?php echo $_smarty_tpl->tpl_vars['t']->value['BIRTH_YEAR'];?>
</option>
											<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? date('Y')-19+1 - (1920) : 1920-(date('Y')-19)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1920, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?><option><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option><?php }
}
?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-12 col-md">
								<div class="form-field required mb-4">
									<div class="form-select">
										<select name="sex" class="form-input selectric" required>
											<option value="" selected disabled><?php echo $_smarty_tpl->tpl_vars['t']->value['SEX'];?>
</option>
											<option value="FEMALE"><?php echo $_smarty_tpl->tpl_vars['t']->value['FEMALE'];?>
</option>
											<option value="MALE"><?php echo $_smarty_tpl->tpl_vars['t']->value['MALE'];?>
</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="form-field required animated mb-4">
							<input type="text" name="city" minlength="2" maxlength="64" class="form-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['CITY'];?>
" required>
							<label class="form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['CITY'];?>
</label>
						</div>
						<div class="form-field required animated mb-4">
							<input type="email" name="email" minlength="6" maxlength="64" class="form-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['EMAIL'];?>
" required>
							<label class="form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['EMAIL'];?>
</label>
						</div>
						<div class="row justify-content-center align-items-center">
							<div class="col-12 col-md">
								<div class="form-field required animated mb-4">
									<input type="text" name="phone" minlength="6" maxlength="64" class="form-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['PHONE'];?>
" required>
									<label class="form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['PHONE'];?>
</label>
								</div>
							</div>
							<?php if (array_sum($_smarty_tpl->tpl_vars['event']->value['others']['price'])) {?>
								<div class="col-12 col-md">
									<div class="form-field animated mb-4">
										<input type="text" name="coupon" minlength="1" maxlength="16" class="form-input" value="<?php echo $_SESSION['coupon'];?>
" 
										placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['COUPON'];?>
" onchange="checkCoupon($(this).val())"><label class="form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['COUPON'];?>
</label>
									</div>
								</div>
							<?php }?>
						</div>
						<?php if (array_sum($_smarty_tpl->tpl_vars['event']->value['others']['price'])) {?>
							<div class="form-field mb-4">
								<label class="form-label mb-2"><b><?php echo $_smarty_tpl->tpl_vars['t']->value['PAYMENT_METHOD'];?>
:</b></label>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array('card','online','blik'), 'method', false, 'index');
$_smarty_tpl->tpl_vars['method']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['method']->value) {
$_smarty_tpl->tpl_vars['method']->do_else = false;
?>
									<div class="form-field d-flex align-items-center <?php if ($_smarty_tpl->tpl_vars['index']->value) {?>mt-2<?php }?>">
										<input type="radio" name="payment" value="<?php echo sprintf('PAYMENT_%s',strtoupper($_smarty_tpl->tpl_vars['method']->value));?>
" class="form-input" id="paymnent[<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
]" required>
										<label class="form-label ml-3" for="paymnent[<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
]"><?php echo $_smarty_tpl->tpl_vars['t']->value[sprintf('PAYMENT_%s',strtoupper($_smarty_tpl->tpl_vars['method']->value))];?>
</label>
									</div>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						<?php }?>
						<div class="form-field mb-5">
							<label class="form-label mb-2"><b><?php echo $_smarty_tpl->tpl_vars['t']->value['CONSENTS'];?>
:</b></label>
							<div class="row align-items-center no-gutters flex-nowrap mb-3">
								<div class="col-auto">
									<div class="form-field required d-flex align-items-center pr-3">
										<input type="hidden" name="rodo" value="0" class="form-input">
										<input type="checkbox" name="rodo" value="1" class="form-input" id="check[rodo]" required>
									</div>
								</div>
								<div class="col">
									<label class="form-label" for="check[rodo]"><?php echo $_smarty_tpl->tpl_vars['t']->value['RODO_NOTICE'];?>
</label>
								</div>
							</div>
							<div class="row align-items-center no-gutters flex-nowrap mb-3">
								<div class="col-auto">
									<div class="form-field required d-flex align-items-center pr-3">
										<input type="hidden" name="terms" value="0" class="form-input">
										<input type="checkbox" name="terms" value="1" class="form-input" id="check[terms]" required>
									</div>
								</div>
								<div class="col">
									<label class="form-label" for="check[terms]"><?php echo $_smarty_tpl->tpl_vars['t']->value['TERMS_NOTICE'];?>
</label>
								</div>
							</div>
							<div class="form-field d-flex align-items-center">
								<input type="hidden" name="newsletter" value="0" class="form-input">
								<input type="checkbox" name="newsletter" value="1" class="form-input" id="check[newsletter]">
								<label class="form-label ml-3" for="check[newsletter]"><?php echo $_smarty_tpl->tpl_vars['t']->value['NEWSLETTER_NOTICE'];?>
</label>
							</div>
						</div>
						<div class="row justify-content-between">
							<div class="col-12 col-md-4">
								<div class="form-field required animated">
									<?php $_smarty_tpl->_assignInScope('captcha', array(rand(1,10),rand(1,10)));?>
									<input type="text" name="captcha" class="form-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['captcha']->value[0];?>
 + <?php echo $_smarty_tpl->tpl_vars['captcha']->value[1];?>
 = ?" required>
									<label class="form-label"><?php echo $_smarty_tpl->tpl_vars['captcha']->value[0];?>
 + <?php echo $_smarty_tpl->tpl_vars['captcha']->value[1];?>
 = ?</label>
								</div>
							</div>
							<div class="col-12 col-md mt-1 mt-md-0">
								<input type="hidden" name="key" value="<?php echo md5($_smarty_tpl->tpl_vars['captcha']->value[0]+$_smarty_tpl->tpl_vars['captcha']->value[1]);?>
">
								<button type="submit" class="btn accent">
									<?php if (!array_sum($_smarty_tpl->tpl_vars['event']->value['others']['price'])) {?>
										<span><?php echo $_smarty_tpl->tpl_vars['t']->value['NEWSLETTER_JOIN'];?>
</span>
									<?php } else { ?>
										<span class="d-flex justify-content-between align-items-center w-100">
											<?php echo $_smarty_tpl->tpl_vars['t']->value['BUY_TICKET'];?>

											<small>
												<?php if ($_smarty_tpl->tpl_vars['event']->value['others']['price']['promotion']) {?>
												<s><?php echo price($_smarty_tpl->tpl_vars['event']->value['others']['price']['basic']);?>
</s>
												<b data-init="<?php echo price($_smarty_tpl->tpl_vars['event']->value['others']['price']['promotion']);?>
">
												<?php echo price($_smarty_tpl->tpl_vars['event']->value['others']['price']['promotion']);?>
</b>
												<?php } elseif ($_smarty_tpl->tpl_vars['event']->value['others']['price']['basic']) {?>
												<b data-init="<?php echo price($_smarty_tpl->tpl_vars['event']->value['others']['price']['basic']);?>
">
												<?php echo price($_smarty_tpl->tpl_vars['event']->value['others']['price']['basic']);?>
</b>
												<?php } else {
echo $_smarty_tpl->tpl_vars['t']->value['PREORDER'];
}?>
											</small>
										</span>
									<?php }?>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section class="modal" id="message">
		<img src="<?php echo PATH_IMAGES;?>
/template/logo-vertical.svg" alt="<?php echo $_smarty_tpl->tpl_vars['base']->value->NAME;?>
" width="137" class="mx-auto">
		<div class="section-header my-4">
			<div class="section-header-title">
				<span></span>
			</div>
		</div>
		<center class="tinymce">
			<img src="<?php echo PATH_IMAGES;?>
/template/loader.svg" width="32">
		</center>
		<center class="mt-4" style="display: none;">
			<a href="#" target="_blank" class="btn accent ghost">
				<span></span>
			</a>
		</center>
	</section>
<?php
}
}
/* {/block "modal"} */
/* {block "footer"} */
class Block_471766941619cd6be681b60_93384454 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_471766941619cd6be681b60_93384454',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/validate/jquery.validate.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/validate/additional-methods.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/validate/localization/messages_<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/parallax.js/1.5.0/parallax.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js.map"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		$(document).ready(function()
		{
			//----- Setup sticky
			if(!isMobile) $(".sticky").sticky({ topSpacing: 160, bottomSpacing: 
			$(document).innerHeight() - $("section.event").innerHeight() - 32 });
			$("#orderForm select").change(function() { if($(this).hasClass("error")) $("#orderForm").valid(); });
		});
		
		//----- Validate form
		$("#orderForm").validate(
		{
			highlight: function(element, errorClass, validClass)
			{
				$(element).addClass(errorClass).removeClass(validClass).closest(".form-field").addClass(errorClass);
			},
			unhighlight: function(element, errorClass, validClass)
			{
				$(element).removeClass(errorClass).addClass(validClass).closest(".form-field").removeClass(errorClass);
			},
			errorPlacement: function(error, element)
			{
				if(element.attr("type") != "checkbox" && element.attr("type") != "radio") 
				$(element).closest(".form-field").prepend(error);
			},
			/*submitHandler: function(form)
			{
				$(".wrapper").addClass("lock"); $(form).find("button").attr("disabled", "disabled");
				$.ajax({ type: "POST", dataType: "json",data: $(form).serialize() }).done(function(result)
				{
					resetForm();
					$(".wrapper").removeClass("lock"); $(form).find("button").removeAttr("disabled");
					$("#message .section-header-title span").html(result.title); $("#message .tinymce").html(result.text);
					if(!result.button) $("#message .btn").parent().hide();
					else
					{
						$("#message .btn").parent().show();
						$("#message .btn span").html(result.button[1]);
						$("#message .btn").attr("href", result.button[0]);
					}
					$.fancybox.close(); $.fancybox.open({ src: "#message" });
					if(result?.redirect?.length) window.open(result.redirect, "_blank").focus();
				});
			}*/
			submitHandler: function(form)
			{
				$(".wrapper").addClass("lock"); $(form).find("button").attr("disabled", "disabled");
				$.ajax({ type: "POST", dataType: "json", data: $(form).serialize() }).done(function(result)
				{
					$(".wrapper").removeClass("lock");
					$(form).find("button").removeAttr("disabled");
					if(result.status == "success")
					{
						if(result?.redirect?.length)
						window.open(result.redirect, "_blank").focus();
						resetForm(); $.fancybox.close();
						
						gtag("event", "conversion", 
						{
							"transaction_id": result?.code,
							"send_to": "AW-10780719998/3bIbCLfXzIQDEP720pQo"
						});
					}
					$.fancybox.open({ src: "#message" });
					$("#message .tinymce").html(result.text);
					$("#message .section-header-title span").html(result.title);
					if(!result.button) $("#message .btn").parent().hide();
					else
					{
						$("#message .btn").parent().show();
						$("#message .btn span").html(result.button[1]);
						$("#message .btn").attr("href", result.button[0]);
					}
				});
			}
		});
		
		function checkCoupon(code, form = "#orderForm")
		{
			if(!code.length) $(form).find("button[type='submit'] span small b")
			.html($(form).find("button[type='submit'] span small b").data("init"));
			else
			{
				$(".wrapper").addClass("lock"); $(form).find("button").attr("disabled", "disabled");
				$.ajax({ type: "POST", url: "<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/task/coupon", dataType: "json", 
				data: { "code" : code, "event" : <?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
 } }).done(function(result)
				{
					var init = $(form).find("button[type='submit'] span small b").data("init");
					$(".wrapper").removeClass("lock"); $(form).find("button").removeAttr("disabled");
					if(result.price) $(form).find("button[type='submit'] span small b").html(result.price);
					else
					{
						//$(form).find("input[name='coupon']").val("");
						//$(form).find("button[type='submit'] span small b").html(init);
					}
					$("#message .section-header-title span").html(result.title);
					$("#message .tinymce").html(result.text);
					$("#message .btn").parent().hide();
					$.fancybox.open({ src: "#message" });
				});
			}
		}
		
		function resetForm(form = "#orderForm")
		{
			$(form).find("input:not([type='hidden'])").val("");
			$(form).find("select.selectric").prop("selectedIndex", 0).selectric("refresh");
			$(form).find("input[type='radio'], input[type='checkbox']").prop("checked", false);
			$(form).find("button[type='submit'] span small b").html($(form).find("button[type='submit'] span small b").data("init"));
		}
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "footer"} */
}
