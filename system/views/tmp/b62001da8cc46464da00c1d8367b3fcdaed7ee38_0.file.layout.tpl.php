<?php
/* Smarty version 3.1.40, created on 2022-01-19 13:18:19
  from 'D:\wamp\www\Sztorm\system\views\back\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61e80f9b39d6c5_79989996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b62001da8cc46464da00c1d8367b3fcdaed7ee38' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\layout.tpl',
      1 => 1642598298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e80f9b39d6c5_79989996 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
">
	<head>
		<base href="/admin/">
		<meta charset="<?php echo $_smarty_tpl->tpl_vars['base']->value->ENCODING;?>
">
		<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['base']->value->NAME;?>
">
		<meta name="theme-color" content="<?php echo $_smarty_tpl->tpl_vars['base']->value->COLOR;?>
">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="icon" type="image/x-icon" href="/<?php echo PATH_IMAGES;?>
/template/favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>CMS - <?php echo $_smarty_tpl->tpl_vars['base']->value->NAME;
if (strlen($_smarty_tpl->tpl_vars['base']->value->meta['title'])) {?> - <?php echo $_smarty_tpl->tpl_vars['base']->value->meta['title'];
}?></title>
		
		<link href="/<?php echo PATH_PUBLIC;?>
/vendor/toastr/toastr.min.css" rel="stylesheet">
		<link href="/<?php echo PATH_PUBLIC;?>
/vendor/fancybox/fancybox.min.css" rel="stylesheet">
		<link href="/<?php echo PATH_PUBLIC;?>
/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="/<?php echo PATH_PUBLIC;?>
/vendor/typeahead/typeahead.min.css" rel="stylesheet">
		<link href="/<?php echo PATH_PUBLIC;?>
/vendor/fontawesome/fontawesome.min.css" rel="stylesheet">
		<link href="/<?php echo PATH_PUBLIC;?>
/vendor/aos/aos.min.css" rel="stylesheet">
		<link href="/<?php echo PATH_STYLES;?>
/css/back.min.css" rel="stylesheet">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150780479961e80f9b37b798_03205066', "header");
?>

	</head>
	<body>
		<div id="loader">
			<div class="spinner-border text-white">
				<span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['t']->value['LOADING'];?>
...</span>
			</div>
		</div>
		<?php $_smarty_tpl->_assignInScope('grow', "d-flex flex-column flex-grow-1");?>
		<div class="wrapper <?php if (!$_smarty_tpl->tpl_vars['blank']->value) {?>py-3 py-md-5<?php }?>">
			<?php if (!$_smarty_tpl->tpl_vars['blank']->value) {?>
				<?php $_smarty_tpl->_assignInScope('url', explode('/',trim($_smarty_tpl->tpl_vars['base']->value->PATH,'/')));?>
				<?php $_smarty_tpl->_assignInScope('first', array_shift($_smarty_tpl->tpl_vars['url']->value));?>
				<header class="mb-3" <?php if (!$_smarty_tpl->tpl_vars['url']->value) {?>data-aos="fade-down"<?php }?>>
					<div class="container-fluid px-xl-5">
						<nav class="navbar navbar-dark p-0 d-block d-md-flex">
							<div class="d-flex justify-content-between align-items-center">
								<a href="" class="navbar-brand d-flex align-items-center">
									<span class="badge badge-danger p-2 mr-3">CMS</span>
									<?php echo $_smarty_tpl->tpl_vars['base']->value->NAME;?>

								</a>
								<button class="navbar-toggler rounded d-block d-md-none" 
								type="button" data-toggle="collapse" data-target="#sidebar">
									<span class="navbar-toggler-icon"></span>
								</button>
							</div>
							<div class="ml-md-auto mt-3 mt-md-0 d-flex justify-content-end align-items-center">
								<div class="navbar-text mx-3 p-0 text-right" style="line-height: 1;">
									<strong class="text-light"><?php echo $_smarty_tpl->tpl_vars['me']->value['personal']['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['me']->value['personal']['surname'];?>
</strong><br>
									<small><?php echo $_smarty_tpl->tpl_vars['me']->value['email'];?>
</small>
								</div>
								<a href="logout" class="btn rounded btn-outline-light mr-2">
									<span><?php echo $_smarty_tpl->tpl_vars['t']->value['SIGNOUT'];?>
</span>
								</a>
								<a href="/" target="_blank" class="btn rounded btn-danger">
									<i class="fa fa-desktop"></i>
								</a>
							</div>
						</nav>
					</div>
				</header>
				<main>
					<div class="container-fluid px-xl-5">
						<div class="row no-gutters flex-md-nowrap">
							<div class="col-xs-12 col-md-4 col-lg-3 pr-0 pr-md-2 mb-3 mb-md-0 collapse d-md-block" id="sidebar">
								<div class="card overflow-hidden" <?php if (!$_smarty_tpl->tpl_vars['url']->value) {?>data-aos="fade-right" data-aos-delay="250"<?php }?>>	
									<div class="list-group-flush sidebar">	
										<a href="" class="list-group-item list-group-item-action <?php if (!$_smarty_tpl->tpl_vars['url']->value) {?>active<?php }?>">
											<div class="list-group-item-icon mr-3">
												<i class="fa fa-tachometer"></i>
											</div>
											<span><?php echo $_smarty_tpl->tpl_vars['t']->value['DASHBOARD'];?>
</span>
										</a>
										<a href="admins" class="list-group-item list-group-item-action <?php if (!in_array('admins',$_smarty_tpl->tpl_vars['me']->value['permissions'])) {?>disabled<?php }?> <?php if (in_array(current($_smarty_tpl->tpl_vars['url']->value),array('admins'))) {?>active<?php }?>">
											<div class="list-group-item-icon mr-3">
												<i class="fa fa-user-circle-o"></i>
											</div>
											<span><?php echo $_smarty_tpl->tpl_vars['t']->value['ADMINS'];?>
</span>
										</a>
										<a href="employees" class="list-group-item list-group-item-action <?php if (!in_array('employees',$_smarty_tpl->tpl_vars['me']->value['permissions'])) {?>disabled<?php }?> <?php if (in_array(current($_smarty_tpl->tpl_vars['url']->value),array('employees'))) {?>active<?php }?>">
											<div class="list-group-item-icon mr-3">
												<i class="fa fa-users"></i>
											</div>
											<span><?php echo $_smarty_tpl->tpl_vars['t']->value['EMPLOYEES'];?>
</span>
										</a>
										<a href="slides" class="list-group-item list-group-item-action <?php if (!in_array('slides',$_smarty_tpl->tpl_vars['me']->value['permissions'])) {?>disabled<?php }?> <?php if (in_array(current($_smarty_tpl->tpl_vars['url']->value),array('slides'))) {?>active<?php }?>">
											<div class="list-group-item-icon mr-3">
												<i class="fa fa-picture-o"></i>
											</div>
											<span><?php echo $_smarty_tpl->tpl_vars['t']->value['SLIDES'];?>
</span>
										</a>
										<a href="galleries" class="list-group-item list-group-item-action <?php if (!in_array('galleries',$_smarty_tpl->tpl_vars['me']->value['permissions'])) {?>disabled<?php }?> <?php if (in_array(current($_smarty_tpl->tpl_vars['url']->value),array('galleries'))) {?>active<?php }?>">
											<div class="list-group-item-icon mr-3">
												<i class="fa fa-camera"></i>
											</div>
											<span><?php echo $_smarty_tpl->tpl_vars['t']->value['GALLERIES'];?>
</span>
										</a>
										<a href="pages" class="list-group-item list-group-item-action <?php if (!in_array('pages',$_smarty_tpl->tpl_vars['me']->value['permissions'])) {?>disabled<?php }?> <?php if (in_array(current($_smarty_tpl->tpl_vars['url']->value),array('pages'))) {?>active<?php }?>">
											<div class="list-group-item-icon mr-3">
												<i class="fa fa-file-o"></i>
											</div>
											<span><?php echo $_smarty_tpl->tpl_vars['t']->value['PAGES'];?>
</span>
										</a>
										<a href="categories" class="list-group-item list-group-item-action <?php if (!in_array('categories',$_smarty_tpl->tpl_vars['me']->value['permissions'])) {?>disabled<?php }?> <?php if (in_array(current($_smarty_tpl->tpl_vars['url']->value),array('categories'))) {?>active<?php }?>">
											<div class="list-group-item-icon mr-3">
												<i class="fa fa-list"></i>
											</div>
											<span><?php echo $_smarty_tpl->tpl_vars['t']->value['CATEGORIES'];?>
</span>
										</a>
										<a href="emails" class="list-group-item list-group-item-action <?php if (!in_array('emails',$_smarty_tpl->tpl_vars['me']->value['permissions'])) {?>disabled<?php }?> <?php if (in_array(current($_smarty_tpl->tpl_vars['url']->value),array('emails'))) {?>active<?php }?>">
											<div class="list-group-item-icon mr-3">
												<i class="fa fa-envelope-o"></i>
											</div>
											<span><?php echo $_smarty_tpl->tpl_vars['t']->value['EMAILS'];?>
</span>
										</a>
										<a href="logs" class="list-group-item list-group-item-action <?php if (!in_array('logs',$_smarty_tpl->tpl_vars['me']->value['permissions'])) {?>disabled<?php }?> <?php if (in_array(current($_smarty_tpl->tpl_vars['url']->value),array('logs'))) {?>active<?php }?>">
											<div class="list-group-item-icon mr-3">
												<i class="fa fa-history"></i>
											</div>
											<span><?php echo $_smarty_tpl->tpl_vars['t']->value['LOGS'];?>
</span>
										</a>
										<a href="translates" class="list-group-item list-group-item-action <?php if (!in_array('translates',$_smarty_tpl->tpl_vars['me']->value['permissions'])) {?>disabled<?php }?> <?php if (in_array(current($_smarty_tpl->tpl_vars['url']->value),array('translates'))) {?>active<?php }?>">
											<div class="list-group-item-icon mr-3">
												<i class="fa fa-language"></i>
											</div>
											<span><?php echo $_smarty_tpl->tpl_vars['t']->value['TRANSLATES'];?>
</span>
										</a>
									</div>
								</div>
							</div>
							<div class="<?php echo $_smarty_tpl->tpl_vars['grow']->value;?>
 col-12 col-md pl-0 pl-md-2">
								<div class="<?php echo $_smarty_tpl->tpl_vars['grow']->value;?>
 card" data-aos="fade" <?php if (!$_smarty_tpl->tpl_vars['url']->value) {?>data-aos-delay="500"<?php }?>>
									<div class="<?php echo $_smarty_tpl->tpl_vars['grow']->value;?>
 bg-white p-3">
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141068749361e80f9b391c53_00448711', "content");
?>

									</div>
								</div>
							</div>
						</div>
					</div>
				</main>
				<footer class="mt-3">
					<div class="container-fluid px-xl-5">
						<div class="row justify-content-between align-items-center no-gutters">
							<div class="col-auto offset-0 offset-md-4 offset-lg-3 pl-2">
								<small class="text-right text-uppercase text-muted">
									<small>Powered by KODIGO</small>
								</small>
							</div>
							<div class="col-auto">
								<small class="text-right text-uppercase text-muted">
									<small>v. <?php echo $_smarty_tpl->tpl_vars['base']->value->VERSION;?>
</small>
								</small>
							</div>
						</div>
					</div>
				</footer>
			<?php } else { ?>
				<main class="<?php echo $_smarty_tpl->tpl_vars['grow']->value;?>
">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70491219261e80f9b392c43_09936525', "content");
?>

				</main>
			<?php }?>
		</div>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120265724861e80f9b393405_10848795', "modal");
?>

		<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/aos/aos.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/toastr/toastr.min.js"><?php echo '</script'; ?>
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
/vendor/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/typeahead/typeahead.min.js"><?php echo '</script'; ?>
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
/back.js?v=<?php echo $_smarty_tpl->tpl_vars['base']->value->VERSION;?>
"><?php echo '</script'; ?>
>
		<?php if ($_smarty_tpl->tpl_vars['notifies']->value) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['notifies']->value), 'notify');
$_smarty_tpl->tpl_vars['notify']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notify']->value) {
$_smarty_tpl->tpl_vars['notify']->do_else = false;
?>
				<?php echo '<script'; ?>
>$(document).ready(function() {
				<?php if (count($_smarty_tpl->tpl_vars['notify']->value) < 3) {?>toastr.<?php echo $_smarty_tpl->tpl_vars['notify']->value[0];?>
("<?php echo $_smarty_tpl->tpl_vars['notify']->value[1];?>
");
				<?php } else { ?>toastr.<?php echo $_smarty_tpl->tpl_vars['notify']->value[0];?>
("<?php echo $_smarty_tpl->tpl_vars['notify']->value[2];?>
", "<?php echo $_smarty_tpl->tpl_vars['notify']->value[1];?>
");<?php }?> });
				<?php echo '</script'; ?>
>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163404192061e80f9b39bc94_99464335', "footer");
?>

	</body>
</html><?php }
/* {block "header"} */
class Block_150780479961e80f9b37b798_03205066 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_150780479961e80f9b37b798_03205066',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "header"} */
/* {block "content"} */
class Block_141068749361e80f9b391c53_00448711 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_141068749361e80f9b391c53_00448711',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "content"} */
class Block_70491219261e80f9b392c43_09936525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_70491219261e80f9b392c43_09936525',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "modal"} */
class Block_120265724861e80f9b393405_10848795 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal' => 
  array (
    0 => 'Block_120265724861e80f9b393405_10848795',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "modal"} */
/* {block "footer"} */
class Block_163404192061e80f9b39bc94_99464335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_163404192061e80f9b39bc94_99464335',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "footer"} */
}
