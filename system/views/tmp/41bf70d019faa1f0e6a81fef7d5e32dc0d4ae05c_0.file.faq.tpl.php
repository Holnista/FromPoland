<?php
/* Smarty version 3.1.39, created on 2021-10-08 10:37:38
  from '/home/klient.dhosting.pl/kodigo/hellostranger.kodigo.pl/public_html/system/views/front/home/faq.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61600352627c71_20979048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41bf70d019faa1f0e6a81fef7d5e32dc0d4ae05c' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.kodigo.pl/public_html/system/views/front/home/faq.tpl',
      1 => 1633607118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61600352627c71_20979048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_735317506160035260c9a0_35062754', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12787629946160035260e572_62469215', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139766173561600352626047_18008599', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "header"} */
class Block_735317506160035260c9a0_35062754 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_735317506160035260c9a0_35062754',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<style>
		.tinymce a:not(.btn)[href] h5
		{
			font-weight: 400;
		}
		.tinymce a:not(.btn)[href] h5.accent
		{
			padding-left: 1rem;
		}
		.tinymce a:not(.btn)[href]:after
		{
			display: none;
		}
	</style>
<?php
}
}
/* {/block "header"} */
/* {block "content"} */
class Block_12787629946160035260e572_62469215 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12787629946160035260e572_62469215',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section class="faq mb-auto">
		<section class="padding">
			<div class="container">
				<div class="section-header mb-5">
					<h1 class="section-header-title">
						<span><?php $_smarty_tpl->_assignInScope('title', explode(' ',clear($_smarty_tpl->tpl_vars['t']->value['FAQ_TITLE'])));?>
						<?php $_smarty_tpl->_assignInScope('last', array_pop($_smarty_tpl->tpl_vars['title']->value));
echo implode(' ',$_smarty_tpl->tpl_vars['title']->value);?>

						<b><?php echo $_smarty_tpl->tpl_vars['last']->value;?>
</b></span>
					</h1>
				</div>
				<div class="row justify-content-center">
					<?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
						<div class="col-12 col-md-3">
							<nav class="tinymce mt-5">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['tags']->value), 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
									<div class="mb-3">
										<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/faq#<?php echo alias($_smarty_tpl->tpl_vars['tag']->value);?>
">
											<h5 class="dark"><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</h5>
										</a>
									</div>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</nav>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['questions']->value) {?>
						<?php $_smarty_tpl->_assignInScope('length', 400);?>
						<div class="col-12 col-md">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['questions']->value), 'question');
$_smarty_tpl->tpl_vars['question']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->do_else = false;
?>
								<div data-question="<?php echo alias(implode('-',$_smarty_tpl->tpl_vars['question']->value['tags']));?>
" class="mt-5">
									<section class="light shadow p-5">
										<div class="tinymce">
											<?php if ($_smarty_tpl->tpl_vars['question']->value['title']) {?>
												<h6 class="dark <?php if ($_smarty_tpl->tpl_vars['question']->value['text']) {?>mb-3<?php }?>">
													<b><?php echo clear($_smarty_tpl->tpl_vars['question']->value['title']);?>
</b>
												</h6>
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['question']->value['text']) {?>
												<?php if (strlen(clear($_smarty_tpl->tpl_vars['question']->value['text'])) > $_smarty_tpl->tpl_vars['length']->value) {?>
													<div data-short><?php echo truncate(clear($_smarty_tpl->tpl_vars['question']->value['text']),$_smarty_tpl->tpl_vars['length']->value);?>
</div>
													<div data-long style="display: none;"><?php echo $_smarty_tpl->tpl_vars['question']->value['text'];?>
</div>
												<?php } else {
echo $_smarty_tpl->tpl_vars['question']->value['text'];
}?>
											<?php }?>
										</div>
										<div class="row justify-content-between align-items-end mt-3">
											<?php if ($_smarty_tpl->tpl_vars['question']->value['tags']) {?>
												<div class="col mb-3 mb-sm-0">
													<div class="tinymce">
														<small><?php echo implode(', ',$_smarty_tpl->tpl_vars['question']->value['tags']);?>
</small>
													</div>
												</div>
											<?php }?>
											<?php if (strlen(clear($_smarty_tpl->tpl_vars['question']->value['text'])) > $_smarty_tpl->tpl_vars['length']->value) {?>
												<div class="col-auto ml-auto">
													<button type="button" class="btn accent ghost inline"
													onclick="toggleQuestion(this);"><span><?php echo $_smarty_tpl->tpl_vars['t']->value['SEE_MORE'];?>
</span>
													</button>
												</div>
											<?php }?>
										</div>
									</section>
								</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					<?php }?>
				</div>
			</div>
		</section>
	</section>
<?php
}
}
/* {/block "content"} */
/* {block "footer"} */
class Block_139766173561600352626047_18008599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_139766173561600352626047_18008599',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
>
		$("a[href^='<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/faq#']").click(function()
		{
			var word = $(this).prop("hash").replace("#", "");
			$("a[href^='<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/faq#'] h5").removeClass("accent").addClass("dark");
			$(this).find("h5").removeClass("dark").addClass("accent");
			
			$("[data-question]").each(function()
			{
				var search = $(this).data("question");
				if(search.toLowerCase().indexOf(word.toLowerCase()) >= 0) 
				$(this).stop().fadeIn(); else $(this).stop().fadeOut();
			});
		});
		
		$(document).ready(function()
		{
			var hash = window.location.hash;
			if(hash.length) $(".faq-menu-element-link[href='<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/faq"+hash+"']").trigger("click");
		});
		
		function toggleQuestion(button)
		{
			$(button).closest("[data-question]").find("[data-short]").slideUp();
			$(button).closest("[data-question]").find("[data-long]").slideDown();
			$(button).remove();
		}
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "footer"} */
}
