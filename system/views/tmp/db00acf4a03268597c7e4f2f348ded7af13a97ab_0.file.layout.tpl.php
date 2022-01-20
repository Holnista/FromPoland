<?php
/* Smarty version 3.1.39, created on 2021-11-21 09:14:17
  from '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/front/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6199ffd97b7aa0_89471024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db00acf4a03268597c7e4f2f348ded7af13a97ab' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/front/layout.tpl',
      1 => 1637482417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6199ffd97b7aa0_89471024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
">
	<head>
		<base href="/">
		<meta charset="<?php echo $_smarty_tpl->tpl_vars['base']->value->ENCODING;?>
">
		<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['base']->value->NAME;?>
">
		<meta name="theme-color" content="<?php echo $_smarty_tpl->tpl_vars['base']->value->COLOR;?>
">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="<?php echo truncate(clear($_smarty_tpl->tpl_vars['base']->value->meta['keys']));?>
">
		<meta name="description" content="<?php echo truncate(clear($_smarty_tpl->tpl_vars['base']->value->meta['desc']));?>
">
		<link rel="icon" type="image/x-icon" href="/<?php echo PATH_IMAGES;?>
/template/favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $_smarty_tpl->tpl_vars['base']->value->NAME;
if (strlen($_smarty_tpl->tpl_vars['base']->value->meta['title'])) {?> - <?php echo $_smarty_tpl->tpl_vars['base']->value->meta['title'];
}?></title>
		
		<meta property="og:url" content="<?php echo truncate(clear($_smarty_tpl->tpl_vars['base']->value->share['url']));?>
">
		<meta property="og:type" content="<?php echo truncate(clear($_smarty_tpl->tpl_vars['base']->value->share['type']));?>
">
		<meta property="og:title" content="<?php echo truncate(clear($_smarty_tpl->tpl_vars['base']->value->share['title']));?>
">
		<meta property="og:image" content="<?php echo truncate(clear($_smarty_tpl->tpl_vars['base']->value->share['image']),256);?>
">
		<meta property="og:description" content="<?php echo truncate(clear($_smarty_tpl->tpl_vars['base']->value->share['desc']));?>
">
		
		<link href="/<?php echo PATH_PUBLIC;?>
/vendor/aos/aos.min.css" rel="stylesheet">
		<link href="/<?php echo PATH_PUBLIC;?>
/vendor/selectric/selectric.css" rel="stylesheet">
		<link href="/<?php echo PATH_PUBLIC;?>
/vendor/fancybox/fancybox.min.css" rel="stylesheet">
		<link href="/<?php echo PATH_PUBLIC;?>
/vendor/lightslider/lightslider.min.css" rel="stylesheet">
		<link href="/<?php echo PATH_STYLES;?>
/css/front.min.css?v=<?php echo $_smarty_tpl->tpl_vars['base']->value->VERSION;?>
" rel="stylesheet">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13460043686199ffd9788df7_26305316', "header");
?>

		
		<!-- Messenger Wtyczka czatu Code -->
		<div id="fb-root"></div>

		<!-- Your Wtyczka czatu code -->
		<div id="fb-customer-chat" class="fb-customerchat"></div>

		
			<?php echo '<script'; ?>
>
				var chatbox = document.getElementById('fb-customer-chat');
				chatbox.setAttribute("page_id", "110706908038420");
				chatbox.setAttribute("attribution", "biz_inbox");
				window.fbAsyncInit = function() { FB.init({
				xfbml: true, version : 'v12.0' }); };

				(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return; js = d.createElement(s); js.id = id;
				js.src = 'https://connect.facebook.net/pl_PL/sdk/xfbml.customerchat.js';
				fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));
			<?php echo '</script'; ?>
>
			
			<!-- Global site tag (gtag.js) - Google Analytics -->
			<?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=G-9WH1XR2N5X"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());

				gtag('config', 'G-9WH1XR2N5X');
				gtag('config', 'AW-10780719998');
			<?php echo '</script'; ?>
>
		
	</head>
	<body>
		<?php if (!$_smarty_tpl->tpl_vars['blank']->value) {?>
			<div id="loader">
				<img src="<?php echo PATH_IMAGES;?>
/template/logo-vertical.svg" alt="<?php echo $_smarty_tpl->tpl_vars['config']->value->NAME;?>
" width="219">
			</div>
		<?php }?>
		<div class="wrapper">
			<?php if (!$_smarty_tpl->tpl_vars['blank']->value) {?>
				<?php $_smarty_tpl->_assignInScope('URL', explode('/',trim($_smarty_tpl->tpl_vars['base']->value->PATH,'/')));?>
				<header class="header">
					<div class="header-holder">
						<div class="container">
							<div class="row justify-content-between align-items-center flex-nowrap">
								<div class="col-auto">
									<div class="header-logo">
										<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
" class="header-logo-link">
											<img src="<?php echo PATH_IMAGES;?>
/template/logo.svg" alt="<?php echo $_smarty_tpl->tpl_vars['base']->value->NAME;?>
" title="<?php echo $_smarty_tpl->tpl_vars['base']->value->NAME;?>
" width="347.7">
										</a>
									</div>
								</div>
								<div class="col-auto col-xl d-flex justify-content-center">
									<nav class="header-menu">
										<div class="header-menu-element">
											<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
" class="header-menu-element-link <?php if (!$_smarty_tpl->tpl_vars['URL']->value[1]) {?>active<?php }?>">
												<span><?php echo $_smarty_tpl->tpl_vars['t']->value['HOME'];?>
</span>
											</a>
										</div>
										<div class="header-menu-element">
											<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/event" class="header-menu-element-link <?php if ($_smarty_tpl->tpl_vars['URL']->value[1] == 'event') {?>active<?php }?>">
												<span><?php echo $_smarty_tpl->tpl_vars['t']->value['EVENTS'];?>
</span>
											</a>
										</div>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['pages']->value['header']), 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
											<div class="header-menu-element">
												<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/page/<?php echo $_smarty_tpl->tpl_vars['page']->value['alias'];?>
" class="header-menu-element-link 
												<?php if ($_smarty_tpl->tpl_vars['URL']->value[1] == 'page' && $_smarty_tpl->tpl_vars['URL']->value[2] == $_smarty_tpl->tpl_vars['page']->value['alias']) {?>active<?php }?>">
													<span><?php echo clear($_smarty_tpl->tpl_vars['page']->value['title']);?>
</span>
												</a>
											</div>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<!--div class="header-menu-element">
											<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/event" class="header-menu-element-link <?php if ($_smarty_tpl->tpl_vars['URL']->value[1] == 'blog') {?>active<?php }?>">
												<span><?php echo $_smarty_tpl->tpl_vars['t']->value['BLOG'];?>
</span>
												<sup>BETA</sup>
											</a>
										</div-->
									</nav>
									<div class="header-burger d-block d-md-none">
										<span></span>
										<span></span>
										<span></span>
										<span></span>
									</div>
								</div>
								<div class="col-auto d-none d-md-block">
									<nav class="header-widget">
										<div class="header-widget-element">
											<a href="https://www.facebook.com/Hello-Stranger-110706908038420" target="_blank" rel="noopener nofollow" class="header-widget-element-link">
												<i data-icon="facebook">
													<img src="<?php echo PATH_IMAGES;?>
/template/icons/facebook.svg" alt="facebook" width="16">
												</i>
											</a>
										</div>
										<div class="header-widget-element">
											<a href="https://www.instagram.com/hellostranger.io/" target="_blank" rel="noopener nofollow" class="header-widget-element-link">
												<i data-icon="instagram">
													<img src="<?php echo PATH_IMAGES;?>
/template/icons/instagram.svg" alt="instagram" width="16">
												</i>
											</a>
										</div>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</header>
				<main>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2334294876199ffd97a4b78_12117987', "content");
?>

				</main>
				<footer class="footer">
					<div class="footer-holder">
						<div class="container">
							<div class="row justify-content-center align-items-end align-items-md-center">
								<div class="col-12 col-md-2 mb-3 mb-md-0" style="z-index: 1;" data-aos="fade-right" data-aos-delay="100">
									<div class="form">
										<div class="form-select">
											<select name="subject" class="form-input selectric dark" onchange="window.location.href=$(this).val()" required>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['base']->value->languages), 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/<?php echo implode('/',array_slice($_smarty_tpl->tpl_vars['URL']->value,1));?>
" <?php if ($_smarty_tpl->tpl_vars['base']->value->language == $_smarty_tpl->tpl_vars['language']->value) {?>selected<?php }?>>
														<?php if ($_smarty_tpl->tpl_vars['language']->value == 'pl') {
if ($_smarty_tpl->tpl_vars['base']->value->language == 'pl') {?>Polski<?php } else { ?>Polish<?php }
}?>
														<?php if ($_smarty_tpl->tpl_vars['language']->value == 'en') {
if ($_smarty_tpl->tpl_vars['base']->value->language == 'pl') {?>Angielski<?php } else { ?>English<?php }
}?>
													</option>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-6 col-md-5" data-aos="fade-right" data-aos-delay="200">
									<nav class="footer-menu">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['pages']->value['footer']), 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
											<div class="footer-menu-element">
												<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/page/<?php echo $_smarty_tpl->tpl_vars['page']->value['alias'];?>
" class="footer-menu-element-link
												<?php if ($_smarty_tpl->tpl_vars['URL']->value[1] == 'page' && $_smarty_tpl->tpl_vars['URL']->value[2] == $_smarty_tpl->tpl_vars['page']->value['alias']) {?>active<?php }?>">
													<span><?php echo clear($_smarty_tpl->tpl_vars['page']->value['title']);?>
</span>
												</a>
											</div>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<div class="footer-menu-element">
											<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/contact" class="footer-menu-element-link <?php if ($_smarty_tpl->tpl_vars['URL']->value[1] == 'contact') {?>active<?php }?>">
												<span><?php echo $_smarty_tpl->tpl_vars['t']->value['CONTACT'];?>
</span>
											</a>
										</div>
										<div class="footer-menu-element">
											<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/faq" class="footer-menu-element-link <?php if ($_smarty_tpl->tpl_vars['URL']->value[1] == 'faq') {?>active<?php }?>">
												<span><?php echo $_smarty_tpl->tpl_vars['t']->value['FAQ'];?>
</span>
											</a>
										</div>
									</nav>
								</div>
								<div class="col-6 col-md-auto ml-auto" data-aos="fade-right" data-aos-delay="300">
									<div class="tinymce">
										<span>© <?php echo date('Y');?>
 <b><?php echo $_smarty_tpl->tpl_vars['base']->value->NAME;?>
.</b> <?php echo $_smarty_tpl->tpl_vars['t']->value['COPYRIGHT'];?>
</span><br>
										<a href="https://kodigo.pl" class="footer-kodigo-link" title="Crafted by KODIGO" target="_blank">
											<img src="https://kodigo.pl/images/footers/kodigo-black-full.png" alt="Crafted by KODIGO" width="106">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</footer>
			<?php } else { ?>
				<main>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8797083126199ffd97b1ce6_32871119', "content");
?>

				</main>
			<?php }?>
		</div>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16749407966199ffd97b2910_63096964', "modal");
?>

		<?php echo '<script'; ?>
>paceOptions = { ajax: false, document: false, 
		restartOnRequestAfter: false, restartOnPushState: false }
		var CookiesInfo = { background: "<?php echo $_smarty_tpl->tpl_vars['base']->value->COLOR;?>
" };<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/aos/aos.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/pace/pace.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/mask/jquery.mask.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/fancybox/fancybox.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/selectric/selectric.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/lightslider/lightslider.min.js"><?php echo '</script'; ?>
>
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
 src="/<?php echo PATH_SCRIPTS;?>
/front.js?v=<?php echo $_smarty_tpl->tpl_vars['base']->value->VERSION;?>
"><?php echo '</script'; ?>
>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16310146696199ffd97b55e2_76295691', "footer");
?>

	</body>	
</html><?php }
/* {block "header"} */
class Block_13460043686199ffd9788df7_26305316 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_13460043686199ffd9788df7_26305316',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "header"} */
/* {block "content"} */
class Block_2334294876199ffd97a4b78_12117987 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2334294876199ffd97a4b78_12117987',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "content"} */
class Block_8797083126199ffd97b1ce6_32871119 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8797083126199ffd97b1ce6_32871119',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "modal"} */
class Block_16749407966199ffd97b2910_63096964 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal' => 
  array (
    0 => 'Block_16749407966199ffd97b2910_63096964',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "modal"} */
/* {block "footer"} */
class Block_16310146696199ffd97b55e2_76295691 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_16310146696199ffd97b55e2_76295691',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "footer"} */
}
