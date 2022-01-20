<?php
/* Smarty version 3.1.39, created on 2021-10-29 14:54:22
  from '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/front/contact/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617beefe5022c6_83268909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c47c4c71a8741a513225e35e8a9fa37b73d1d04' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/front/contact/index.tpl',
      1 => 1633389566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617beefe5022c6_83268909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_736113630617beefe4ec5e1_42186658', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1898111975617beefe4fed37_33137635', "modal");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143391506617beefe500370_02129363', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "content"} */
class Block_736113630617beefe4ec5e1_42186658 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_736113630617beefe4ec5e1_42186658',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section class="padding">
		<div class="container mb-4">
			<div class="section-header">
				<h1 class="section-header-title">
					<span><?php $_smarty_tpl->_assignInScope('title', explode(' ',clear($_smarty_tpl->tpl_vars['t']->value['CONTACT_FORM'])));?>
					<?php $_smarty_tpl->_assignInScope('first', array_shift($_smarty_tpl->tpl_vars['title']->value));?><b><?php echo $_smarty_tpl->tpl_vars['first']->value;?>
</b>
					<?php echo implode(' ',$_smarty_tpl->tpl_vars['title']->value);?>
</span>
				</h1>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 col-md-8 col-lg-6">
					<form method="POST" class="form" autocomplete="off" id="contactForm">
						<div class="form-field required animated mb-4">
							<input type="text" name="name" minlength="2" maxlength="64" class="form-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['NAME'];?>
 <?php echo $_smarty_tpl->tpl_vars['t']->value['AND'];?>
 <?php echo $_smarty_tpl->tpl_vars['t']->value['SURNAME'];?>
" required>
							<label class="form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['NAME'];?>
 <?php echo $_smarty_tpl->tpl_vars['t']->value['AND'];?>
 <?php echo $_smarty_tpl->tpl_vars['t']->value['SURNAME'];?>
</label>
						</div>
						<div class="form-field required animated mb-4">
							<input type="email" name="email" minlength="6" maxlength="64" class="form-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['EMAIL'];?>
" required>
							<label class="form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['EMAIL'];?>
</label>
						</div>
						<div class="form-field required animated mb-4">
							<input type="text" name="phone" minlength="6" maxlength="64" class="form-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['PHONE'];?>
" required>
							<label class="form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['PHONE'];?>
</label>
						</div>
						<div class="form-field required mb-4">
							<div class="form-select">
								<select name="subject" class="form-input selectric" required>
									<option value="" selected disabled><?php echo $_smarty_tpl->tpl_vars['t']->value['SUBJECT'];?>
</option>
									<option><?php echo $_smarty_tpl->tpl_vars['t']->value['CONTACT_FORM_SUBJECT1'];?>
</option>
									<option><?php echo $_smarty_tpl->tpl_vars['t']->value['CONTACT_FORM_SUBJECT2'];?>
</option>
									<option><?php echo $_smarty_tpl->tpl_vars['t']->value['CONTACT_FORM_SUBJECT3'];?>
</option>
								</select>
							</div>
						</div>
						<div class="form-field required animated mb-4">
							<textarea name="text" class="form-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['MESSAGE'];?>
" style="height: 15rem;" required></textarea>
							<label class="form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['MESSAGE'];?>
</label>
						</div>
						<div class="row justify-content-between">
							<div class="col-4 col-md-4">
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
							<div class="col-8 col-md">
								<input type="hidden" name="key" value="<?php echo md5($_smarty_tpl->tpl_vars['captcha']->value[0]+$_smarty_tpl->tpl_vars['captcha']->value[1]);?>
">
								<button type="submit" class="btn accent ghost">
									<span><?php echo $_smarty_tpl->tpl_vars['t']->value['SEND_QUOTE'];?>
</span>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
<?php
}
}
/* {/block "content"} */
/* {block "modal"} */
class Block_1898111975617beefe4fed37_33137635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal' => 
  array (
    0 => 'Block_1898111975617beefe4fed37_33137635',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
	</section>
<?php
}
}
/* {/block "modal"} */
/* {block "footer"} */
class Block_143391506617beefe500370_02129363 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_143391506617beefe500370_02129363',
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
>
		//----- Validate form
		$("#contactForm").validate(
		{
			errorPlacement: function(error, element)
			{
				error.insertBefore(element);
			},
			submitHandler: function(form)
			{
				$(".wrapper").addClass("lock"); $(form).find("button").attr("disabled", "disabled");
				$.ajax({ type: "POST", url: "<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
/contact", dataType: "json", 
				data: $(form).serialize() }).done(function(result)
				{
					$(".wrapper").removeClass("lock");
					$(form).find("button").removeAttr("disabled");
					$(form).find("input:not([type='hidden']):not([type='radio']):not([type='checkbox']), textarea").val("");
					$("#message .section-header-title span").html(result.title); $("#message .tinymce").html(result.text);
					$.fancybox.open({ src: "#message" });
				});
			}
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "footer"} */
}
