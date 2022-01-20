<?php
/* Smarty version 3.1.39, created on 2021-10-28 12:12:08
  from '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/front/page/custom4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617a77789ca209_94886287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fcd06ec67de29b5d790f5be5da35002ef66ba23' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/front/page/custom4.tpl',
      1 => 1633442304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617a77789ca209_94886287 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_496243358617a777899e569_39024998', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1553297300617a777899fcd6_53519592', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1012774979617a77789c9a07_30332815', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "header"} */
class Block_496243358617a777899e569_39024998 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_496243358617a777899e569_39024998',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<style>
		@media (max-width: 767px)
		{
			section.tiles[style]
			{
				margin-top: initial !important;
			}
		}
	</style>
<?php
}
}
/* {/block "header"} */
/* {block "content"} */
class Block_1553297300617a777899fcd6_53519592 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1553297300617a777899fcd6_53519592',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section class="page mb-auto">
		<?php if ($_smarty_tpl->tpl_vars['page']->value['file']) {?>
			<section class="tiles">
				<div class="tiles-tile">
					<div class="tiles-tile-picture" data-parallax="scroll" data-image-src="<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['image'];?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['page']->value['file'];?>
" class="d-none">
						<img src="<?php echo PATH_IMAGES;?>
/template/17x4.png" alt="sizer" class="tiles-tile-picture-sizer">
						<!--div class="tiles-tile-picture-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['image'];?>
');"></div-->
					</div>
				</div>
			</section>
		<?php }?>
		<section class="padding">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 col-lg-8">
						<?php if ($_smarty_tpl->tpl_vars['page']->value['title'] && !$_smarty_tpl->tpl_vars['page']->value['file']) {?>
							<div class="section-header">
								<h1 class="section-header-title">
									<span><?php $_smarty_tpl->_assignInScope('title', explode(' ',clear($_smarty_tpl->tpl_vars['page']->value['title'])));?>
									<?php $_smarty_tpl->_assignInScope('first', array_shift($_smarty_tpl->tpl_vars['title']->value));?><b><?php echo $_smarty_tpl->tpl_vars['first']->value;?>
</b>
									<?php echo implode(' ',$_smarty_tpl->tpl_vars['title']->value);?>
</span>
								</h1>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['page']->value['text']) {?>
							<div class="row justify-content-center">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['page']->value['text']), 'section', false, 'index');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
									<?php if ($_smarty_tpl->tpl_vars['section']->value['file'] || $_smarty_tpl->tpl_vars['section']->value['title'] || $_smarty_tpl->tpl_vars['section']->value['content']) {?>
										<div class="col-12 <?php echo $_smarty_tpl->tpl_vars['section']->value['width'];?>
 d-flex flex-column <?php if ($_smarty_tpl->tpl_vars['index']->value) {?>mt-5<?php }?>">
											<?php if ($_smarty_tpl->tpl_vars['section']->value['file']) {?>
												<section class="tiles" <?php if ($_smarty_tpl->tpl_vars['index']->value == 2) {?>style="margin-top: 10rem;"<?php }?>>
													<div data-mouse-parallax>
														<div class="tiles-tile heart" data-depth="0.2">
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
												</section>
											<?php }?>
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
				</div>
			</div>
		</section>
	</section>
<?php
}
}
/* {/block "content"} */
/* {block "footer"} */
class Block_1012774979617a77789c9a07_30332815 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1012774979617a77789c9a07_30332815',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "footer"} */
}
