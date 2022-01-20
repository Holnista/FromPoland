<?php
/* Smarty version 3.1.39, created on 2021-11-19 10:51:41
  from '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/back/clients/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619773ad8b4a97_12188697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b983daccc19be71ccc724b780ca5d8986e590ea1' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/back/clients/form.tpl',
      1 => 1633442299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/topbar.tpl' => 1,
  ),
),false)) {
function content_619773ad8b4a97_12188697 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2086143857619773ad872ca1_39260870', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_670356079619773ad877ac0_23976087', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1236548884619773ad8b3032_36197885', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "header"} */
class Block_2086143857619773ad872ca1_39260870 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_2086143857619773ad872ca1_39260870',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<link href="/<?php echo PATH_PUBLIC;?>
/vendor/select2/select2.min.css" rel="stylesheet">
	<link href="/<?php echo PATH_PUBLIC;?>
/vendor/select2/select2-bootstrap4.min.css" rel="stylesheet">
<?php
}
}
/* {/block "header"} */
/* {block "content"} */
class Block_670356079619773ad877ac0_23976087 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_670356079619773ad877ac0_23976087',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender("file:../addons/topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('topbar'=>array('title'=>array('icon'=>'users','content'=>$_smarty_tpl->tpl_vars['t']->value['CLIENTS'],'text'=>$_smarty_tpl->tpl_vars['client']->value ? $_smarty_tpl->tpl_vars['t']->value['EDIT'] : $_smarty_tpl->tpl_vars['t']->value['CREATE']))), 0, false);
?>
	<div class="<?php echo $_smarty_tpl->tpl_vars['grow']->value;?>
 mt-2">
		<ul class="nav nav-tabs">
			<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-basic"><?php echo $_smarty_tpl->tpl_vars['t']->value['BASIC'];?>
</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-payment"><?php echo $_smarty_tpl->tpl_vars['t']->value['PAYMENT'];?>
</a></li>
		</ul>
		<form method="POST" class="<?php echo $_smarty_tpl->tpl_vars['grow']->value;?>
 validate" enctype="multipart/form-data">
			<div class="tab-content rounded-bottom border border-top-0 mb-3">
				<div class="tab-pane fade show active px-3" id="tab-basic">
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="event" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['EVENT'];?>
</label>
						<div class="col-sm-9">
							<select name="event" id="event" class="form-control select2">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['events']->value), 'event');
$_smarty_tpl->tpl_vars['event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['client']->value['event'] == $_smarty_tpl->tpl_vars['event']->value['id']) {?>selected<?php }?> 
									data-image="<?php echo $_smarty_tpl->tpl_vars['event']->value['data']['thumb'];?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['client']->value['code']) {?>
						<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
							<label for="code" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['CODE'];?>
</label>
							<div class="col-sm-9">
								<input type="text" name="code" value="<?php echo str_replace('#','',$_smarty_tpl->tpl_vars['client']->value['code']);?>
"
								id="code" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['CODE'];?>
 (#00000000)" class="form-control" 
								data-mask="AAAAAAAA" minlength="8" maxlength="8" disabled readonly>
							</div>
						</div>
					<?php }?>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="personal[name]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['NAME'];?>
</label>
						<div class="col-sm-9">
							<input type="text" name="personal[name]" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['personal']['name'];?>
" minlength="2"
							maxlength="64" id="personal[name]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['NAME'];?>
" class="form-control" required>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="personal[surname]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['SURNAME'];?>
</label>
						<div class="col-sm-9">
							<input type="text" name="personal[surname]" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['personal']['surname'];?>
" minlength="2"
							maxlength="64" id="personal[surname]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['SURNAME'];?>
" class="form-control" required>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="personal[year]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['BIRTH_YEAR'];?>
</label>
						<div class="col-sm-9">
							<input type="number" name="personal[year]" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['personal']['year'];?>
" minlength="4" 
							maxlength="4" min="1920" max="<?php echo date('Y')-19;?>
" id="personal[surname]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['BIRTH_YEAR'];?>
"
							class="form-control" required>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="personal[sex]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['SEX'];?>
</label>
						<div class="col-sm-9">
							<select name="personal[sex]" id="personal[sex]" class="form-control select2">
								<option value="FEMALE" <?php if ($_smarty_tpl->tpl_vars['client']->value['personal']['sex'] == 'FEMALE') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['FEMALE'];?>
</option>
								<option value="MALE" <?php if ($_smarty_tpl->tpl_vars['client']->value['personal']['sex'] == 'MALE') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['MALE'];?>
</option>
							</select>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="personal[city]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['CITY'];?>
</label>
						<div class="col-sm-9">
							<input type="text" name="personal[city]" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['personal']['city'];?>
" minlength="2"
							maxlength="64" id="personal[city]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['CITY'];?>
" class="form-control typeahead" 
							data-hints='[<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hints']->value["city"], 'hint');
$_smarty_tpl->tpl_vars['hint']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->do_else = false;
?>"<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
", <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>""]'required>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="personal[phone]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['PHONE'];?>
</label>
						<div class="col-sm-9">
							<input type="text" name="personal[phone]" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['personal']['phone'];?>
" minlength="9"
							maxlength="16" id="personal[phone]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['PHONE'];?>
" class="form-control">
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="personal[email]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['EMAIL'];?>
</label>
						<div class="col-sm-9">
							<input type="email" name="personal[email]" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['personal']['email'];?>
" minlength="2"
							maxlength="64" id="personal[email]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['EMAIL'];?>
" class="form-control" required>
						</div>
					</div>
					<div class="form-group row align-items-center bg-light mb-0 py-3">
						<label for="active" class="col col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['NOTIFICATION'];?>
</label>
						<div class="col-auto col-sm-9 pt-1">
							<div class="custom-control custom-switch">
								<input type="checkbox" id="notify" name="notify"
								value="1" class="custom-control-input" <?php if (!$_smarty_tpl->tpl_vars['client']->value) {?>checked<?php }?>>
								<label class="custom-control-label" for="notify"></label>
							</div>
						</div>
					</div>
				</div>
				<!---------------------------------------------------------------------------------------------------->
				<div class="tab-pane fade px-3" id="tab-payment">
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="payment[paid]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['TRANSACTION'];?>
</label>
						<div class="col-sm-9">
							<input type="text" name="payment[paid]" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['payment']['paid'];?>
" minlength="1"
							maxlength="64" id="payment[paid]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['TRANSACTION'];?>
" class="form-control">
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="payment[coupon]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['COUPON'];?>
</label>
						<div class="col-sm-9">
							<input type="text" name="payment[coupon]" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['payment']['coupon'];?>
" minlength="1"
							maxlength="16" id="payment[coupon]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['COUPON'];?>
" class="form-control">
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="payment[method]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['PAYMENT_METHOD'];?>
</label>
						<div class="col-sm-9">
							<select name="payment[method]" id="payment[method]" class="form-control select2">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array('card','online','blik'), 'method', false, 'index');
$_smarty_tpl->tpl_vars['method']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['method']->value) {
$_smarty_tpl->tpl_vars['method']->do_else = false;
?>
									<?php $_smarty_tpl->_assignInScope('method', sprintf('PAYMENT_%s',strtoupper($_smarty_tpl->tpl_vars['method']->value)));?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['client']->value['payment']['method'] == $_smarty_tpl->tpl_vars['method']->value) {?>
									selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value[$_smarty_tpl->tpl_vars['method']->value];?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
					</div>
					<div class="form-group row align-items-center bg-light mb-0 py-3">
						<label for="payment[price][basic]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['PRICE'];?>
</label>
						<div class="col-sm-9">
							<div class="row">
								<div class="col-12 col-lg mb-1 mb-lg-0">
									<input type="text" name="payment[price][basic]" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['payment']['price']['basic'];?>
" data-mask="000.00" 
									minlength="1" maxlength="6" id="payment[price][basic]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['BASIC_PRICE'];?>
" class="form-control">
								</div>
								<div class="col-12 col-lg mb-1 mb-lg-0">
									<input type="text" name="payment[price][promotion]" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['payment']['price']['promotion'];?>
" data-mask="000.00"
									minlength="1" maxlength="6" id="payment[price][promotion]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['PROMOTION_PRICE'];?>
" class="form-control">
								</div>
								<div class="col-12 col-lg">
									<input type="text" name="payment[price][topay]" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['payment']['price']['topay'];?>
" data-mask="000.00"
									minlength="1" maxlength="6" id="payment[price][topay]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['TO_PAY'];?>
" class="form-control">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-between align-items-center flex-column-reverse flex-sm-row mt-auto">
				<div class="col-12 col-sm-auto mt-2 mt-sm-0">
					<a href="javascript:history.back()" class="btn rounded btn-block btn-outline-dark">
						<span><?php echo $_smarty_tpl->tpl_vars['t']->value['GO_BACK'];?>
</span>
					</a>
				</div>
				<div class="col-12 col-sm-auto">
					<input type="hidden" name="token" value="<?php echo md5($_SESSION['csrf']);?>
">
					<button type="submit" class="btn rounded btn-block btn-primary">
						<span><?php echo $_smarty_tpl->tpl_vars['t']->value['SAVE'];?>
</span>
					</button>
				</div>
			</div>
		</form>
	</div>
<?php
}
}
/* {/block "content"} */
/* {block "footer"} */
class Block_1236548884619773ad8b3032_36197885 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1236548884619773ad8b3032_36197885',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/select2/select2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		//----- Setup select2
		$(".select2").select2({
			theme: "bootstrap4",
			minimumResultsForSearch: -1,
			language: "<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
",
			placeholder: "<?php echo $_smarty_tpl->tpl_vars['t']->value['SELECT'];?>
...",
			templateResult: function(option)
			{
				if(!option?.element?.dataset?.image) return option.text;
				return $("<span><img src='"+option.element.dataset.image+
				"' width='32' class='img-thumbnail p-0 mr-2'>"+option.text+"</span>");
			}
		});
		
		//----- Random password
		$("[data-random-code]").click(function()
		{
			var result = '', characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', charactersLength = characters.length;
			for(var i = 0; i < 8; i++) result += characters.charAt(Math.floor(Math.random() * charactersLength));
			$("input[name='code']").val(result).trigger("keyup");
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "footer"} */
}
