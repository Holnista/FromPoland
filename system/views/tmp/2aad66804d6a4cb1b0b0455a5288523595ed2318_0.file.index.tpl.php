<?php
/* Smarty version 3.1.39, created on 2021-10-27 15:34:24
  from '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/front/home/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61795560ef6688_97616410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2aad66804d6a4cb1b0b0455a5288523595ed2318' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/front/home/index.tpl',
      1 => 1634120980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/event.tpl' => 1,
  ),
),false)) {
function content_61795560ef6688_97616410 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64568216061795560eaae83_01085576', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43238191361795560ef5008_36999532', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "content"} */
class Block_64568216061795560eaae83_01085576 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_64568216061795560eaae83_01085576',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section class="slider" data-type="main" id="top">
		<ul class="lightslider" data-index="<?php echo microtime(1);?>
">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['slides']->value), 'slide', false, 'index');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
				<?php $_smarty_tpl->_assignInScope('extension', strtolower(end(explode('.',$_smarty_tpl->tpl_vars['slide']->value['file']))));?>	
				<li class="slider-slide" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['slide']->value['data']['image'];?>
');">
					<?php if (!in_array($_smarty_tpl->tpl_vars['extension']->value,array('mp4','mov','webm'))) {?><img src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['data']['image'];?>
" class="d-none" alt="<?php echo $_smarty_tpl->tpl_vars['slide']->value['file'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['slide']->value['file'];?>
">
					<?php } else { ?><video autoplay muted loop><source src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['data']['image'];?>
" type="video/<?php echo $_smarty_tpl->tpl_vars['extension']->value;?>
"></video><?php }?>
					<div class="slider-slide-cover">
						<div class="container">
							<div class="row justify-content-center align-items-center">
								<div class="col-12 col-md-8">
									<?php if ($_smarty_tpl->tpl_vars['slide']->value['text']) {?>
										<div class="tinymce" data-aos="fade-up">
											<?php echo $_smarty_tpl->tpl_vars['slide']->value['text'];?>

										</div>
									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('page', $_smarty_tpl->tpl_vars['pages']->value['header'][4]);?>
										<div class="row justify-content-center align-items-center">
											<div class="col-12 col-md-6 my-2" data-aos="fade-up" data-aos-delay="250">
												<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/event" class="slider-slide-cover-button">
													<span><?php echo $_smarty_tpl->tpl_vars['t']->value['EVENTS'];?>
</span>
												</a>
											</div>
											<?php if ($_smarty_tpl->tpl_vars['page']->value) {?>
												<div class="col-12 col-md-6 my-2" data-aos="fade-up" data-aos-delay="500">
													<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/page/<?php echo $_smarty_tpl->tpl_vars['page']->value['alias'];?>
" class="slider-slide-cover-button">
														<span><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</span>
													</a>
												</div>
											<?php }?>
										</div>
									<?php }?>
								</div>
							</div>
						</div>
					</div>
				</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
		<?php if (count($_smarty_tpl->tpl_vars['slides']->value) > 1) {?>
			<div class="slider-controls">
				<div class="slider-controls-arrows">
					<div class="slider-controls-arrows-arrow left">
						<i data-icon="expand">
							<img src="public/images/template/icons/expand.svg" width="16">
						</i>
					</div>
					<div class="slider-controls-arrows-arrow right">
						<i data-icon="expand">
							<img src="public/images/template/icons/expand.svg" width="16">
						</i>
					</div>
				</div>
				<div class="slider-controls-pager">
					<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['slides']->value), 'slide', false, 'index');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
							<li <?php if (!$_smarty_tpl->tpl_vars['index']->value) {?>class="active"<?php }?>><a><?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
</a></li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			</div>
		<?php }?>
	</section>
	<?php if ($_smarty_tpl->tpl_vars['pages']->value['home']) {?>
		<?php $_smarty_tpl->_assignInScope('page', array_shift($_smarty_tpl->tpl_vars['pages']->value['home']));?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['page']->value['text']), 'section', false, 'index');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
			<?php if ($_smarty_tpl->tpl_vars['section']->value['file'] || $_smarty_tpl->tpl_vars['section']->value['title'] || $_smarty_tpl->tpl_vars['section']->value['content']) {?>
				<section class="<?php echo $_smarty_tpl->tpl_vars['section']->value['background'] ? $_smarty_tpl->tpl_vars['section']->value['background'] : 'light';?>
 padding">
					<div class="container">
						<div class="row justify-content-center align-items-center">
							<div class="col-12 col-sm <?php echo $_smarty_tpl->tpl_vars['section']->value['width'];?>
">
								<?php if ($_smarty_tpl->tpl_vars['section']->value['title']) {?>
									<div class="section-header <?php if ($_smarty_tpl->tpl_vars['section']->value['content']) {?>mb-5<?php }?>">
										<h1 class="section-header-title" data-aos="fade-up">
											<span><?php echo $_smarty_tpl->tpl_vars['section']->value['title'];?>
</span>
										</h1>
									</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['section']->value['content']) {?>
									<div class="tinymce" data-aos="fade-up">
										<?php echo $_smarty_tpl->tpl_vars['section']->value['content'];?>

									</div>
								<?php }?>
							</div>
						</div>
					</div>
				</section>
			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['pages']->value['home']) {?>
		<?php $_smarty_tpl->_assignInScope('page', array_shift($_smarty_tpl->tpl_vars['pages']->value['home']));?>
		<section class="light padding">
			<div class="container">
				<section class="tiles margin">
					<div class="row justify-content-center align-items-center">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['page']->value['text']), 'section', false, 'index');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
							<div class="col-12 <?php echo $_smarty_tpl->tpl_vars['section']->value['width'];?>
" data-aos="fade-up" data-aos-delay="<?php echo ($_smarty_tpl->tpl_vars['index']->value%3)*250;?>
">
								<div class="tiles-tile <?php echo $_smarty_tpl->tpl_vars['section']->value['background'];?>
">
									<div class="tiles-tile-picture">
										<img src="<?php echo PATH_IMAGES;?>
/template/1x1.png" alt="sizer" class="tiles-tile-picture-sizer d-none d-md-block">
										<img src="<?php echo PATH_IMAGES;?>
/template/7x5.png" alt="sizer" class="tiles-tile-picture-sizer d-block d-md-none">
										<div class="tiles-tile-picture-cover">
											<?php if ($_smarty_tpl->tpl_vars['section']->value['file']) {?>
												<img src="<?php echo $_smarty_tpl->tpl_vars['section']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['section']->value['file'];?>
" width="82" class="d-none d-md-none d-lg-block">
												<img src="<?php echo $_smarty_tpl->tpl_vars['section']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['section']->value['file'];?>
" width="41" class="d-block d-md-block d-lg-none">
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['section']->value['title'] || $_smarty_tpl->tpl_vars['section']->value['content']) {?>
												<div class="tinymce px-3 px-md-0 <?php if ($_smarty_tpl->tpl_vars['section']->value['file']) {?>my-2 my-lg-3<?php }?>">
													<?php if ($_smarty_tpl->tpl_vars['section']->value['title']) {?>
														<h6>
															<b><?php echo $_smarty_tpl->tpl_vars['section']->value['title'];?>
</b>
														</h6>
													<?php }?>
													<?php if ($_smarty_tpl->tpl_vars['section']->value['content']) {?>
														<p>&nbsp;</p>
														<?php echo $_smarty_tpl->tpl_vars['section']->value['content'];?>

													<?php }?>
												</div>
											<?php }?>
										</div>
									</div>
								</div>
							</div>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</section>
			</div>
		</section>
	<?php }?>
	<section class="light padding" style="background: transparent;">
		<div class="container">
			<section class="tiles shadow">
				<div class="tiles-tile">
					<div class="tiles-tile-picture" data-parallax="scroll" data-position-x="right" data-image-src="<?php echo PATH_IMAGES;?>
/template/parallax.jpg">
						<div class="tiles-tile-picture-cover py-3 py-md-5 my-md-4" style="position: initial;">
							<div class="container">
								<div class="row">
									<div class="col-12 col-md-7 col-lg-4 ml-auto">
										<div class="tinymce" style="text-align: left; line-height: 1.25;" data-aos="fade-left">
											<center class="d-block d-md-none"><h4><?php echo $_smarty_tpl->tpl_vars['t']->value['HOME_SLOGAN'];?>
</h4></center>
											<h2 class="d-none d-md-block"><?php echo $_smarty_tpl->tpl_vars['t']->value['HOME_SLOGAN'];?>
</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</section>
	<?php if ($_smarty_tpl->tpl_vars['pages']->value['home']) {?>
		<?php $_smarty_tpl->_assignInScope('page', array_shift($_smarty_tpl->tpl_vars['pages']->value['home']));?>
		<section class="light padding">
			<div class="container">
				<div class="section-header margin">
					<div class="section-header-title" data-aos="fade-up">
						<span><?php $_smarty_tpl->_assignInScope('title', explode(' ',clear($_smarty_tpl->tpl_vars['page']->value['title'])));?>
						<?php $_smarty_tpl->_assignInScope('last', array_pop($_smarty_tpl->tpl_vars['title']->value));
echo implode(' ',$_smarty_tpl->tpl_vars['title']->value);?>

						<b><?php echo $_smarty_tpl->tpl_vars['last']->value;?>
</b></span>
					</div>
				</div>
				<section class="tiles">
					<div class="row justify-content-center align-items-start">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['page']->value['text']), 'section', false, 'index');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
							<div class="col-12 <?php echo $_smarty_tpl->tpl_vars['section']->value['width'];?>
 <?php if ($_smarty_tpl->tpl_vars['index']->value) {?>mt-5 mt-md-0<?php }?>" data-aos="fade-up" data-aos-delay="<?php echo ($_smarty_tpl->tpl_vars['index']->value%3)*250;?>
">
								<?php if ($_smarty_tpl->tpl_vars['section']->value['file']) {?>
									<div class="row justify-content-center">
										<div class="col-8 col-md-12">
											<div data-mouse-parallax>
												<div class="tiles-tile heart <?php if ($_smarty_tpl->tpl_vars['section']->value['background']) {?>p-3 p-md-5 <?php echo $_smarty_tpl->tpl_vars['section']->value['background'];
}?>" data-depth="0.2">
													<div class="tiles-tile-picture">
														<img src="<?php echo PATH_IMAGES;?>
/template/1x1.png" alt="sizer" class="tiles-tile-picture-sizer">
														<div class="tiles-tile-picture-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['section']->value['file'];?>
');"></div>
													</div>
												</div>
												<div class="tiles-tile-picture-cover" data-depth="0.4">
													<i data-icon="sygnet" style="animation-duration: <?php echo rand(3,7);?>
s">
														<img src="<?php echo PATH_IMAGES;?>
/template/sygnet.svg" alt="sygnet">
													</i>
												</div>
											</div>
										</div>
									</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['section']->value['title'] || $_smarty_tpl->tpl_vars['section']->value['content']) {?>
									<center class="tinymce <?php if ($_smarty_tpl->tpl_vars['section']->value['file']) {?>mt-3<?php }?>">
										<?php if ($_smarty_tpl->tpl_vars['section']->value['title']) {?>
											<h6 class="dark">
												<b><?php echo $_smarty_tpl->tpl_vars['section']->value['title'];?>
</b>
											</h6>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['section']->value['content']) {?>
											<p>&nbsp;</p>
											<?php echo $_smarty_tpl->tpl_vars['section']->value['content'];?>

										<?php }?>
									</center>
								<?php }?>
							</div>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</section>
			</div>
		</section>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['events']->value) {?>
		<section class="light padding pb-5">
			<div class="container">
				<div class="section-header margin">
					<div class="section-header-title" data-aos="fade-up">
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
				<div class="row justify-content-center mt-5">
					<div class="col-12 col-md-4" data-aos="fade-up">
						<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/event" class="btn accent ghost">
							<span><?php echo $_smarty_tpl->tpl_vars['t']->value['SEE_MORE'];?>
</span>
						</a>
					</div>
				</div>
			</div>
		</section>
	<?php }?>
	<section class="shade py-5">
		<div class="container">
			<div class="section-header mb-4">
				<div class="section-header-title" data-aos="fade-up" data-aos-delay="100">
					<span><?php echo $_smarty_tpl->tpl_vars['t']->value['NEWSLETTER'];?>
</span>
				</div>
				<div class="section-header-subtitle" data-aos="fade-up" data-aos-delay="200">
					<span><?php echo $_smarty_tpl->tpl_vars['t']->value['NEWSLETTER_TEXT'];?>
</span>
				</div>
			</div>
			<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/newsletter" class="form" id="newsletterForm">
				<div class="row justify-content-center align-items-center no-gutters">
					<div class="col-8 col-sm-5 pr-3" data-aos="fade-up" data-aos-delay="300">
						<div class="form-field animated">
							<input autocomplete="false" name="hidden" type="text" style="display: none;">
							<input type="email" name="email" minlength="6" maxlength="64" class="form-input dark" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['NEWSLETTER_EMAIL'];?>
" required>
							<label class="form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['NEWSLETTER_EMAIL'];?>
</label>
						</div>
					</div>
					<div class="col-4 col-sm-3 pl-0 pl-md-3" data-aos="fade-up" data-aos-delay="400">
						<button type="submit" class="btn accent ghost">
							<span><?php echo $_smarty_tpl->tpl_vars['t']->value['NEWSLETTER_JOIN'];?>
</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</section>
<?php
}
}
/* {/block "content"} */
/* {block "footer"} */
class Block_43238191361795560ef5008_36999532 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_43238191361795560ef5008_36999532',
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
 src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		//----- Parallax
		var sceneElements = document.querySelectorAll("[data-mouse-parallax]"), parallaxScenes = [];
		for(var i = 0; i < sceneElements.length; i++) { parallaxScenes.push(new Parallax(sceneElements[i])) }
		
		//----- Validate form
		$("#newsletterForm").validate(
		{
			errorPlacement: function(error, element)
			{
				error.insertBefore(element);
			}
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "footer"} */
}
