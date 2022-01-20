<?php
/* Smarty version 3.1.39, created on 2021-09-17 14:21:59
  from 'D:\wamp\www\HelloStranger\system\views\front\home\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6144a4878dbf01_38140596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a6211f5aa98569323ef3aaa8ae70792be580e8b' => 
    array (
      0 => 'D:\\wamp\\www\\HelloStranger\\system\\views\\front\\home\\index.tpl',
      1 => 1631888514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6144a4878dbf01_38140596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5989218716144a48785fcb9_81090341', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7819761056144a4878d5e20_64852808', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "content"} */
class Block_5989218716144a48785fcb9_81090341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5989218716144a48785fcb9_81090341',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section class="slider" data-type="main" id="top">
		<ul class="lightslider" data-index="<?php echo microtime(1);?>
">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['slides']->value), 'slide');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
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
									<?php if ($_smarty_tpl->tpl_vars['slide']->value['text'] && $_smarty_tpl->tpl_vars['a']->value) {?>
										<div class="tinymce">
											<?php echo $_smarty_tpl->tpl_vars['slide']->value['text'];?>

										</div>
									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('page', $_smarty_tpl->tpl_vars['pages']->value['header'][1]);?>
										<div class="row justify-content-center align-items-center">
											<div class="col-12 col-md-6">
												<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/event" class="slider-slide-cover-button">
													<span><?php echo $_smarty_tpl->tpl_vars['t']->value['EVENTS'];?>
</span>
												</a>
											</div>
											<?php if ($_smarty_tpl->tpl_vars['page']->value) {?>
												<div class="col-12 col-md-6">
													<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/page/<?php echo $_smarty_tpl->tpl_vars['page']->value['alias'];?>
" class="slider-slide-cover-button">
														<span><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</span>
													</a>
												</a>
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
	<div id="content"></div>
	<section class="light padding">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-12 col-md-8">
					<div class="section-header mb-5">
						<h1 class="section-header-title">
							<span>W <b>Hello Stranger</b><br>
							<i>jesteś więcej niż tylko profilem.</i></span>
						</h1>
					</div>
					<div class="tinymce">
						<p style="text-align: center;">Podczas naszych eventów masz do opowiedzenia swoją historię i do poznania wielu interesujących ludzi. 
						To prawdziwe interakcje, które mogą zapoczątkować coś absolutnie wyjątkowego. 
						Zostań dostrzeżony za to kim jesteś, a nie jak wyglądasz.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="light padding">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-12 col-md-8">
					<div class="section-header mb-5">
						<div class="section-header-title">
							<span>Dlaczego <b>warto</b> spróbować?</span>
						</div>
					</div>
					<div class="tinymce">
						<p style="text-align: center;">Niezapomniane doświadczenia, intrygujące rozmowy, inspirujące spotkania.
						Po co godzinami czekać na odpowiedź w tradycyjnych aplikacjach i platformach randkowych, 
						gdy można spotkać tyle fantastycznych osób w zaciszu swojego domu?</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="light padding">
		<div class="container">
			<section class="tiles margin">
				<div class="row justify-content-center align-items-center">
					<div class="col-12 col-md-4">
						<div class="tiles-tile second">
							<div class="tiles-tile-picture">
								<img src="<?php echo PATH_IMAGES;?>
/template/1x1.png" alt="sizer" class="tiles-tile-picture-sizer">
								<div class="tiles-tile-picture-cover">
									<img src="<?php echo PATH_IMAGES;?>
/template/heart.svg" alt="heart" width="82">
									<div class="tinymce my-3">
										<h6><b>Prawdziwe<br>interakcje</b></h6>
										<p>&nbsp;</p>
										<p>Z realnymi ludźmi o podobnych zainteresowaniach i celach.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="tiles-tile second">
							<div class="tiles-tile-picture">
								<img src="<?php echo PATH_IMAGES;?>
/template/1x1.png" alt="sizer" class="tiles-tile-picture-sizer">
								<div class="tiles-tile-picture-cover">
									<img src="<?php echo PATH_IMAGES;?>
/template/lock.svg" alt="lock" width="82">
									<div class="tinymce my-3">
										<h6><b>Wygodna<br> i bezpieczeństwo</b></h6>
										<p>&nbsp;</p>
										<p>Z wygodnej kanapy, z Twojego urządzenia. Zweryfikowani użytkownicy.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="tiles-tile second">
							<div class="tiles-tile-picture">
								<img src="<?php echo PATH_IMAGES;?>
/template/1x1.png" alt="sizer" class="tiles-tile-picture-sizer">
								<div class="tiles-tile-picture-cover">
									<img src="<?php echo PATH_IMAGES;?>
/template/clock.svg" alt="clock" width="82">
									<div class="tinymce my-3">
										<h6><b>Efektywność<br> czasowa</b></h6>
										<p>&nbsp;</p>
										<p>Wiele interakcji w krótkim czasie. Natychmiastowa decyzja.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</section>
	<section class="">
		<div class="container">
			<section class="tiles">
				<div class="tiles-tile">
					<div class="tiles-tile-picture" data-parallax="scroll" data-image-src="<?php echo PATH_IMAGES;?>
/template/parallax.jpg">
						<div class="tiles-tile-picture-cover py-5 my-4" style="position: initial;">
							<div class="row">
								<div class="col-12 col-md-4 ml-auto">
									<div class="tinymce" style="text-align: left; line-height: 1.25;">
										<h2><b>Ponad 85%</b><br> singli otrzymuje<br> co najmniej jedno 
										dopasowanie dzięki wysokiej skalowalności naszego modelu!</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</section>
	<section class="light padding">
		<div class="container">
			<div class="section-header margin">
				<div class="section-header-title">
					<span>Jak to <b>działa?</b></span>
				</div>
			</div>
			<section class="tiles">
				<div class="row justify-content-center align-items-start">
					<div class="col-12 col-md-4">
						<div data-mouse-parallax>
							<div class="tiles-tile heart" data-depth="0.2">
								<div class="tiles-tile-picture">
									<img src="<?php echo PATH_IMAGES;?>
/template/1x1.png" alt="sizer" class="tiles-tile-picture-sizer">
									<div class="tiles-tile-picture-image" style="background-image: url('<?php echo PATH_IMAGES;?>
/template/admin.jpg');"></div>
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
						<center class="tinymce mt-3">
							<h6 style="color: black;">
								<b>Zarejestruj się<br> na 
								<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/event">
								event online.</a></b>
							</h6>
						</center>
					</div>
					<div class="col-12 col-md-4">
						<div data-mouse-parallax>
							<div class="tiles-tile heart" data-depth="0.2">
								<div class="tiles-tile-picture">
									<img src="<?php echo PATH_IMAGES;?>
/template/1x1.png" alt="sizer" class="tiles-tile-picture-sizer">
									<div class="tiles-tile-picture-image" style="background-image: url('<?php echo PATH_IMAGES;?>
/template/admin.jpg');"></div>
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
						<center class="tinymce mt-3">
							<h6 style="color: black;">
								<b>Rozmawiaj, randkuj, poznawaj!</a></b>
							</h6>
						</center>
					</div>
					<div class="col-12 col-md-4">
						<div data-mouse-parallax>
							<div class="tiles-tile heart" data-depth="0.2">
								<div class="tiles-tile-picture">
									<img src="<?php echo PATH_IMAGES;?>
/template/1x1.png" alt="sizer" class="tiles-tile-picture-sizer">
									<div class="tiles-tile-picture-image" style="background-image: url('<?php echo PATH_IMAGES;?>
/template/admin.jpg');"></div>
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
						<center class="tinymce mt-3">
							<h6 style="color: black;">
								<b>Otrzymaj raport dopasowania<br> z danymi kontaktowymi.</b>
							</h6>
						</center>
					</div>
				</div>
			</section>
		</div>
	</section>
	<section class="light padding pb-5">
		<div class="container">
			<div class="section-header margin">
				<div class="section-header-title">
					<span>Najbliższe <b>eventy</b></span>
				</div>
			</div>
			<section class="tiles">
				<section class="slider" data-type="events">
					<ul class="lightslider" data-index="<?php echo microtime(1);?>
">
						<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 8+1 - (0) : 0-(8)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
							<li class="slider-slide">
								<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/event" class="tiles-tile">
									<div class="tiles-tile-picture">
										<img src="<?php echo PATH_IMAGES;?>
/template/7x5.png" alt="sizer" class="tiles-tile-picture-sizer">
										<div class="tiles-tile-picture-image" style="background-image: url('<?php echo PATH_IMAGES;?>
/template/admin.jpg');"></div>
									</div>
									<div class="tiles-tile-inner">
										<div class="row justify-content-center align-items-center no-gutters">
											<div class="col-12 col-md-auto pr-4">
												<div class="date">
													<b>17</b>
													<p>Sierpnia 2021</p>
													<p>12:00</p>
												</div>
											</div>
											<div class="col-12 col-md">
												<div class="tinymce mb-3">
													<b>Speed Dating Online</b><br>
													Cała Polska
												</div>
												<div class="d-flex align-items-center">
													<div class="d-flex align-items-center mr-3">
														<img src="<?php echo PATH_IMAGES;?>
/template/icons/female.svg" alt="female" width="12" class="mr-1">
														<span>12/27</spam>
													</div>
													<div class="d-flex align-items-center">
														<img src="<?php echo PATH_IMAGES;?>
/template/icons/male.svg" alt="male" width="12" class="mr-1">
														<span>12/27</spam>
													</div>
												</div>
											</div>
										</div>
										<div class="row justify-content-center mt-4">
											<div class="col-12 col-md-10">
												<button type="button" class="btn accent ghost">
													<span><?php echo $_smarty_tpl->tpl_vars['t']->value['KNOW_MORE'];?>
</span>
												</button>
											</div>
										</div>
									</div>
								</a>
							</li>
						<?php }
}
?>
					</ul>
					<div class="slider-controls">
						<div class="slider-controls-pager mt-5">
							<ul>
								<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 8+1 - (0) : 0-(8)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
									<?php if ($_smarty_tpl->tpl_vars['i']->value%3 == 0) {?>
										<li <?php if (!$_smarty_tpl->tpl_vars['i']->value) {?>class="active"<?php }?>><a><?php echo $_smarty_tpl->tpl_vars['i']->value/3;?>
</a></li>
									<?php }?>
								<?php }
}
?>
							</ul>
						</div>
					</div>
				</section>
			</section>
			<div class="row justify-content-center mt-5">
				<div class="col-12 col-md-4">
					<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/event" class="btn accent ghost">
						<span><?php echo $_smarty_tpl->tpl_vars['t']->value['SEE_MORE'];?>
</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="shade py-5">
		<div class="container">
			<div class="section-header mb-4">
				<div class="section-header-title">
					<span><?php echo $_smarty_tpl->tpl_vars['t']->value['NEWSLETTER'];?>
</span>
				</div>
				<div class="section-header-subtitle">
					<span><?php echo $_smarty_tpl->tpl_vars['t']->value['NEWSLETTER_TEXT'];?>
</span>
				</div>
			</div>
			<form method="POST" class="form" autocomplete="off" id="newsletterForm">
				<div class="row justify-content-center align-items-center">
					<div class="col-12 col-md-5">
						<div class="form-field animated">
							<input autocomplete="false" name="hidden" type="text" style="display: none;">
							<input type="email" name="email" minlength="6" maxlength="64" class="form-input dark" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['NEWSLETTER_EMAIL'];?>
" required>
							<label class="form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['NEWSLETTER_EMAIL'];?>
</label>
						</div>
					</div>
					<div class="col-12 col-md-3">
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
class Block_7819761056144a4878d5e20_64852808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_7819761056144a4878d5e20_64852808',
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
