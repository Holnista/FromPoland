<?php
/* Smarty version 3.1.39, created on 2021-09-17 14:20:30
  from 'D:\wamp\www\HelloStranger\system\views\front\page\read.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6144a42e263ff6_70607425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e35b83079e86a7636c3323d5afd09700165819c' => 
    array (
      0 => 'D:\\wamp\\www\\HelloStranger\\system\\views\\front\\page\\read.tpl',
      1 => 1631883623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6144a42e263ff6_70607425 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9299460956144a42e21c229_76074550', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3857423346144a42e262907_86516923', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "content"} */
class Block_9299460956144a42e21c229_76074550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9299460956144a42e21c229_76074550',
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
					<div class="col-12 col-md-8">
						<?php if ($_smarty_tpl->tpl_vars['page']->value['title'] && !$_smarty_tpl->tpl_vars['page']->value['file']) {?>
							<div class="section-header">
								<div class="section-header-title">
									<?php $_smarty_tpl->_assignInScope('title', explode(' ',clear($_smarty_tpl->tpl_vars['page']->value['title'])));?>
									<?php $_smarty_tpl->_assignInScope('first', array_shift($_smarty_tpl->tpl_vars['title']->value));?><b><?php echo $_smarty_tpl->tpl_vars['first']->value;?>
</b>
									<?php echo implode(' ',$_smarty_tpl->tpl_vars['title']->value);?>

								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['page']->value['text']) {?>
							<div class="row justify-content-center">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['page']->value['text']), 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
									<div class="col-12 col-sm <?php echo $_smarty_tpl->tpl_vars['section']->value['width'];?>
 d-flex flex-column">
										<?php if ($_smarty_tpl->tpl_vars['section']->value['file']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['section']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['section']->value['file'];?>
" class="w-100"><?php }?>
										<section class="<?php if ($_smarty_tpl->tpl_vars['section']->value['background']) {?>p-5 <?php echo $_smarty_tpl->tpl_vars['section']->value['background'];
} elseif ($_smarty_tpl->tpl_vars['section']->value['file']) {?>mt-5<?php }?> h-100">
											<?php if ($_smarty_tpl->tpl_vars['section']->value['title']) {?>
												<div class="section-header <?php if ($_smarty_tpl->tpl_vars['section']->value['content']) {?>mb-5<?php }?>">
													<div class="section-header-title">
														<?php echo $_smarty_tpl->tpl_vars['section']->value['title'];?>

													</div>
												</div>
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['section']->value['content']) {?>
												<div class="tinymce">
													<?php echo $_smarty_tpl->tpl_vars['section']->value['content'];?>

												</div>
											<?php }?>
										</section>
									</div>
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
class Block_3857423346144a42e262907_86516923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_3857423346144a42e262907_86516923',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/parallax.js/1.5.0/parallax.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "footer"} */
}
