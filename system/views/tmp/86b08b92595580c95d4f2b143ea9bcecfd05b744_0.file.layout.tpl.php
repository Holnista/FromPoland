<?php
/* Smarty version 3.1.39, created on 2021-09-14 15:41:58
  from 'D:\wamp\www\HelloStranger\system\views\front\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6140c2c63b3ab5_59574696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86b08b92595580c95d4f2b143ea9bcecfd05b744' => 
    array (
      0 => 'D:\\wamp\\www\\HelloStranger\\system\\views\\front\\layout.tpl',
      1 => 1631634116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6140c2c63b3ab5_59574696 (Smarty_Internal_Template $_smarty_tpl) {
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
		<meta name="theme-color" content="<?php echo $_smarty_tpl->tpl_vars['base']->value->COLOR;?>
">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['base']->value->meta['keys'];?>
">
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['base']->value->meta['desc'];?>
">
		<link rel="icon" type="image/x-icon" href="/<?php echo PATH_IMAGES;?>
/template/favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['base']->value->meta['author'] ? $_smarty_tpl->tpl_vars['base']->value->meta['author'] : $_smarty_tpl->tpl_vars['base']->value->SUBNAME;?>
">
		<title><?php echo $_smarty_tpl->tpl_vars['base']->value->NAME;
if (strlen($_smarty_tpl->tpl_vars['base']->value->meta['title'])) {?> - <?php echo $_smarty_tpl->tpl_vars['base']->value->meta['title'];
}?></title>
		
		<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['base']->value->share['url'];?>
">
		<meta property="og:type" content="<?php echo $_smarty_tpl->tpl_vars['base']->value->share['type'];?>
">
		<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['base']->value->share['title'];?>
">
		<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['base']->value->share['image'];?>
">
		<meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['base']->value->share['desc'];?>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6198329116140c2c6349ef0_85338865', "header");
?>

	</head>
	<body>
		<div id="loader"></div>
		<div class="wrapper">
			<?php if (!$_smarty_tpl->tpl_vars['blank']->value) {?>
				<header class="header">
					<div class="header-holder">
						<div class="container">
							<div class="row justify-content-between align-items-center">
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
								<div class="col d-flex justify-content-center">
									<nav class="header-menu">
										<div class="header-menu-element">
											<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
" class="header-menu-element-link">
												<span><?php echo $_smarty_tpl->tpl_vars['t']->value['HOME'];?>
</span>
											</a>
										</div>
										<div class="header-menu-element">
											<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/event" class="header-menu-element-link">
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
" class="header-menu-element-link">
													<span><?php echo clear($_smarty_tpl->tpl_vars['page']->value['title']);?>
</span>
												</a>
											</div>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<div class="header-menu-element">
											<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/event" class="header-menu-element-link">
												<span><?php echo $_smarty_tpl->tpl_vars['t']->value['BLOG'];?>
</span>
												<sup>BETA</sup>
											</a>
										</div>
									</nav>
								</div>
								<div class="col-auto">
									<nav class="header-widget">
										<div class="header-widget-element">
											<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
" class="header-widget-element-link">
												<i data-icon="facebook">
													<img src="<?php echo PATH_IMAGES;?>
/template/icons/facebook.svg" alt="facebook" width="16">
												</i>
											</a>
										</div>
										<div class="header-widget-element">
											<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
" class="header-widget-element-link">
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10306030736140c2c636d834_42364646', "content");
?>

				</main>
				<footer class="footer">
					<div class="footer-holder">
						<div class="container">
							<div class="row justify-content-center align-items-center">
								<div class="col-12 col-md-2">
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
/<?php echo path(array_slice($_smarty_tpl->tpl_vars['URL']->value,1));?>
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
								<div class="col-12 col-md-5">
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
" class="footer-menu-element-link">
													<span><?php echo clear($_smarty_tpl->tpl_vars['page']->value['title']);?>
</span>
												</a>
											</div>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<div class="footer-menu-element">
											<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/contact" class="footer-menu-element-link">
												<span><?php echo $_smarty_tpl->tpl_vars['t']->value['CONTACT'];?>
</span>
											</a>
										</div>
										<div class="footer-menu-element">
											<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/faq" class="footer-menu-element-link">
												<span><?php echo $_smarty_tpl->tpl_vars['t']->value['FAQ'];?>
</span>
											</a>
										</div>
									</nav>
								</div>
								<div class="col-12 col-md-auto ml-auto">
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1642595136140c2c639d535_50116095', "content");
?>

				</main>
			<?php }?>
		</div>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18496812956140c2c63a0267_16255485', "modal");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14745956216140c2c63adf97_87282111', "footer");
?>

	</body>	
</html><?php }
/* {block "header"} */
class Block_6198329116140c2c6349ef0_85338865 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_6198329116140c2c6349ef0_85338865',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "header"} */
/* {block "content"} */
class Block_10306030736140c2c636d834_42364646 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10306030736140c2c636d834_42364646',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "content"} */
class Block_1642595136140c2c639d535_50116095 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1642595136140c2c639d535_50116095',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "modal"} */
class Block_18496812956140c2c63a0267_16255485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal' => 
  array (
    0 => 'Block_18496812956140c2c63a0267_16255485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "modal"} */
/* {block "footer"} */
class Block_14745956216140c2c63adf97_87282111 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_14745956216140c2c63adf97_87282111',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "footer"} */
}
