<?php
/* Smarty version 3.1.39, created on 2021-11-29 11:00:27
  from '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/front/event/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a4a4bb3e8f31_44259487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1356a3b1ca8039324f0ba357bf8719e6181d712f' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/front/event/search.tpl',
      1 => 1638180026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/event.tpl' => 1,
    'file:../addons/pager.tpl' => 1,
  ),
),false)) {
function content_61a4a4bb3e8f31_44259487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10440372161a4a4bb3aecc8_87431520', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1574467761a4a4bb3e53e4_01774228', "modal");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28577446461a4a4bb3e6cf1_40279008', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "content"} */
class Block_10440372161a4a4bb3aecc8_87431520 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10440372161a4a4bb3aecc8_87431520',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section class="padding mb-auto">
		<div class="container">
			<div class="section-header <?php if ($_smarty_tpl->tpl_vars['tags']->value || $_smarty_tpl->tpl_vars['locations']->value || $_smarty_tpl->tpl_vars['groups']->value) {?>mb-4<?php } else { ?>mb-0<?php }?>">
				<h1 class="section-header-title">
					<span><?php $_smarty_tpl->_assignInScope('title', explode(' ',clear($_smarty_tpl->tpl_vars['t']->value['EVENTS_TITLE'])));?>
					<?php $_smarty_tpl->_assignInScope('first', array_shift($_smarty_tpl->tpl_vars['title']->value));
$_smarty_tpl->_assignInScope('last', array_pop($_smarty_tpl->tpl_vars['title']->value));?>
					<b><?php echo $_smarty_tpl->tpl_vars['first']->value;?>
</b> <?php echo implode(' ',$_smarty_tpl->tpl_vars['title']->value);?>
 <b><?php echo $_smarty_tpl->tpl_vars['last']->value;?>
</b></span>
				</h1>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['tags']->value || $_smarty_tpl->tpl_vars['locations']->value || $_smarty_tpl->tpl_vars['groups']->value) {?>
				<form method="GET" class="form fix">
					<div class="form-field" data-aos="fade-up" data-aos-delay="300">
						<div class="row justify-content-center align-items-center">
							<?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
								<div class="col-12 col-md">
									<div class="form-field mt-3">
										<div class="form-select">
											<select name="tag" class="form-input selectric accent" onchange="filterEvents()">
												<option value="" selected><?php echo $_smarty_tpl->tpl_vars['t']->value['FILTER_BY_TAGS'];?>
</option>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['tags']->value), 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
													<option value="<?php echo alias($_smarty_tpl->tpl_vars['tag']->value);?>
" 
													<?php if ($_GET['tag'] == alias($_smarty_tpl->tpl_vars['tag']->value)) {?>
													selected<?php }?>><?php echo clear($_smarty_tpl->tpl_vars['tag']->value);?>
</option>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</select>
										</div>
									</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['locations']->value) {?>
								<div class="col-12 col-md">
									<div class="form-field mt-3">
										<div class="form-select">
											<select name="location" class="form-input selectric accent" onchange="filterEvents()">
												<option value="" selected><?php echo $_smarty_tpl->tpl_vars['t']->value['FILTER_BY_LOCATION'];?>
</option>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['locations']->value), 'location');
$_smarty_tpl->tpl_vars['location']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->do_else = false;
?>
													<option value="<?php echo alias($_smarty_tpl->tpl_vars['location']->value);?>
"
													<?php if ($_GET['location'] == alias($_smarty_tpl->tpl_vars['location']->value)) {?>
													selected<?php }?>><?php echo clear($_smarty_tpl->tpl_vars['location']->value);?>
</option>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</select>
										</div>
									</div>
								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['groups']->value) {?>
								<div class="col-12 col-md">
									<div class="form-field mt-3">
										<div class="form-select">
											<select name="group" class="form-input selectric accent" onchange="filterEvents()">
												<option value="" selected><?php echo $_smarty_tpl->tpl_vars['t']->value['FILTER_BY_GROUP'];?>
</option>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['groups']->value), 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
													<option value="<?php echo alias($_smarty_tpl->tpl_vars['group']->value);?>
"
													<?php if ($_GET['group'] == alias($_smarty_tpl->tpl_vars['group']->value)) {?>
													selected<?php }?>><?php echo clear($_smarty_tpl->tpl_vars['group']->value);?>
</option>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</select>
										</div>
									</div>
								</div>
							<?php }?>
						</div>
					</div>
				</form>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['events']->value) {?>
				<section class="padding">
					<section class="tiles margin">
						<div class="row">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['events']->value), 'event', false, 'index');
$_smarty_tpl->tpl_vars['event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->do_else = false;
?>
								<div class="col-12 col-md-6 col-lg-4" data-event="<?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
"
									data-event-group="<?php echo alias($_smarty_tpl->tpl_vars['event']->value['group']);?>
"
									data-event-location="<?php echo alias($_smarty_tpl->tpl_vars['event']->value['location']);?>
"
									data-event-tags="<?php echo alias(implode('-',$_smarty_tpl->tpl_vars['event']->value['tags']));?>
"
									data-aos="fade-up" data-aos-delay="<?php echo ($_smarty_tpl->tpl_vars['index']->value%3)*100;?>
">
									<?php $_smarty_tpl->_subTemplateRender("file:../addons/event.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
								</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</section>
					<?php if ($_smarty_tpl->tpl_vars['pager']->value['pages'] > 1) {?>
						<div class="mt-5">
							<?php $_smarty_tpl->_subTemplateRender("file:../addons/pager.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
						</div>
					<?php }?>
					<section class="shade p-5" style="display: none;" id="empty">
						<center>
							<div class="section-header mb-3">
								<div class="section-header-title">
									<span><?php echo $_smarty_tpl->tpl_vars['t']->value['SEARCH_EMPTY_TITLE'];?>
</span>
								</div>
								<div class="section-header-subtitle">
									<span><?php echo $_smarty_tpl->tpl_vars['t']->value['SEARCH_EMPTY_FILTER'];?>
</span>
								</div>
							</div>
						</center>
					</section>
				</section>
			<?php } else { ?>
				<section class="shade p-5 my-5">
					<center>
						<div class="section-header mb-3">
							<div class="section-header-title">
								<span><?php echo $_smarty_tpl->tpl_vars['t']->value['SEARCH_EMPTY_TITLE'];?>
</span>
							</div>
							<div class="section-header-subtitle">
								<span><?php echo $_smarty_tpl->tpl_vars['t']->value['SEARCH_EMPTY_FILTER'];?>
</span>
							</div>
						</div>
					</center>
				</section>
			<?php }?>
			<section>
				<div class="container">
					<section class="tiles shadow">
						<div class="tiles-tile">
							<div class="tiles-tile-picture" data-parallax="scroll" data-image-src="<?php echo PATH_IMAGES;?>
/template/parallax.jpg">
								<div class="tiles-tile-picture-cover my-4" style="position: initial;">
									<div class="container px-3 px-md-5">
										<div class="row justify-content-between align-items-center">
											<div class="col-12 col-md-4">
												<div class="tinymce" style="text-align: left; line-height: 1.25;">
													<center class="d-block d-md-none"><h4><?php echo $_smarty_tpl->tpl_vars['t']->value['EVENT_IDEA_TITLE'];?>
</h4></center>
													<h2 class="d-none d-md-block"><?php echo $_smarty_tpl->tpl_vars['t']->value['EVENT_IDEA_TITLE'];?>
</h2>
												</div>
											</div>
											<div class="col-12 col-md-3 mt-3 mt-md-0">
												<button type="button" class="btn light ghost" style="height: 5rem; font-size: 1.125rem;"
													onclick="$('#contact').slideToggle(500, function() { $(window).trigger('resize').
													trigger('scroll'); }); return false;"><span><?php echo $_smarty_tpl->tpl_vars['t']->value['CONTACT_US'];?>
</span>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<div class="row justify-content-center">
						<div class="col-12 col-md-10">
							<div id="contact" style="display: none;">
								<section class="light shadow p-3 p-md-5">
									<form method="POST" id="contactForm" class="form">
										<div class="form-field required animated mb-4">
											<textarea name="text" class="form-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['EVENT_IDEA_TITLE'];?>
..." style="height: 8rem;" required></textarea>
											<label class="form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['EVENT_IDEA_TEXT'];?>
...</label>
										</div>
										<div class="row justify-content-between">
											<div class="col-12 col-md-2">
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
											<div class="col-12 col-md-5 mt-1 mt-md-0">
												<input type="hidden" name="key" value="<?php echo md5($_smarty_tpl->tpl_vars['captcha']->value[0]+$_smarty_tpl->tpl_vars['captcha']->value[1]);?>
">
												<button type="submit" class="btn accent ghost">
													<span><?php echo $_smarty_tpl->tpl_vars['t']->value['SEND_MESSAGE'];?>
</span>
												</button>
											</div>
										</div>
									</form>
								</section>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</section>
<?php
}
}
/* {/block "content"} */
/* {block "modal"} */
class Block_1574467761a4a4bb3e53e4_01774228 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal' => 
  array (
    0 => 'Block_1574467761a4a4bb3e53e4_01774228',
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
class Block_28577446461a4a4bb3e6cf1_40279008 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_28577446461a4a4bb3e6cf1_40279008',
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
 src="https://cdnjs.cloudflare.com/ajax/libs/parallax.js/1.5.0/parallax.min.js"><?php echo '</script'; ?>
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
		
		$(document).ready(function()
		{
			filterEvents();
		});
		
		function filterEvents()
		{
			//----- Get params
			var tag = $("select[name='tag']").val(), 
			group = $("select[name='group']").val(),
			location = $("select[name='location']").val(),
			count = $("[data-event]").length;
			
			//----- Filter events
			$("[data-event]").each(function()
			{
				var title = $(this).data("event"), hide = false, 
				event = { tags: $(this).data("event-tags"), 
				location: $(this).data("event-location"), 
				group: $(this).data("event-group") };
				$("#empty").hide().prev().show();
				
				if((tag && event.tags && event.tags.toLowerCase().indexOf(tag.toLowerCase()) < 0)
				||(location && event.location && event.location.toLowerCase().indexOf(location.toLowerCase()) < 0)
				||(group && event.group && event.group.toLowerCase().indexOf(group.toLowerCase()) < 0)) hide = true;
				if(!hide) $(this).stop().fadeIn(); else $(this).stop().fadeOut(500, function()
				{
					if($("[data-event]:visible").length)
					$("#empty").hide().prev().show();
					else $("#empty").show().prev().hide();
				});
			});

			//----- Create new URL
			var href = new URL(window.location.href);
			if(tag && tag.length) href.searchParams.set('tag', tag);
			if(group && group.length) href.searchParams.set('group', group);
			if(location && location.length) href.searchParams.set('location', location);
			window.history.pushState("", "", href.toString());
		}
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "footer"} */
}
