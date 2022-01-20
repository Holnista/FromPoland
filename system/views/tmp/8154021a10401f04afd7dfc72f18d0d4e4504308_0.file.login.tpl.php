<?php
/* Smarty version 3.1.39, created on 2021-10-27 15:37:22
  from '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/back/home/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617956122beca3_45232512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8154021a10401f04afd7dfc72f18d0d4e4504308' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/back/home/login.tpl',
      1 => 1631891997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617956122beca3_45232512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('blank', 'true');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97808724617956122acbf8_56030799', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "content"} */
class Block_97808724617956122acbf8_56030799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_97808724617956122acbf8_56030799',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section class="<?php echo $_smarty_tpl->tpl_vars['grow']->value;?>
 justify-content-center align-items-center">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-12 col-md-6 col-lg-5 col-xl-4">
					<div class="row justify-content-between align-items-center flex-nowrap mb-3">
						<div class="col-auto">
							<h5 class="text-white">
								<b><?php echo $_smarty_tpl->tpl_vars['base']->value->NAME;?>
</b>
							</h5>
						</div>
						<div class="col-auto">
							<h5>
								<span class="badge badge-primary p-2">CMS</span>
							</h5>
						</div>
					</div>
					<?php if ($_SESSION['attempt'] >= 3) {?>
						<div class="alert alert-danger text-center py-5">
							<h4 class="alert-heading">
							<i class="fa fa-ban"></i> <?php echo $_smarty_tpl->tpl_vars['t']->value['SIGNIN_BLOCKED_TITLE'];?>
</h4>
							<p class="m-0"><?php echo $_smarty_tpl->tpl_vars['t']->value['SIGNIN_BLOCKED_TEXT'];?>
</p>
						</div>
					<?php } else { ?>
						<div class="bg-white p-3 mb-1 rounded">
							<form method="POST" action="/admin" class="validate">
								<div class="form-group">
									<input name="email" type="email" class="form-control <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" required
									id="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['EMAIL'];?>
" minlength="3" maxlength="32">
								</div>
								<div class="form-group">
									<input name="password" type="password" class="form-control <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" required
									id="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['PASSWORD'];?>
" minlength="8" maxlength="32">
								</div>
								<div class="row justify-content-between align-items-center flex-column-reverse flex-sm-row">
									<div class="col-12 col-sm-auto mt-2 mt-sm-0">
										<a href="password" class="d-block m-auto text-center"><?php echo $_smarty_tpl->tpl_vars['t']->value['RESET_PASSWORD'];?>
</a>
									</div>
									<div class="col-12 col-sm-auto">
										<input type="hidden" name="token" value="<?php echo md5($_smarty_tpl->tpl_vars['base']->value->get('SESSION.csrf'));?>
">
										<button type="submit" class="btn rounded btn-block btn-primary">
											<span><?php echo $_smarty_tpl->tpl_vars['t']->value['SIGNIN'];?>
</span>
										</button>
									</div>
								</div>
							</form>
						</div>
						<div class="row justify-content-between align-items-center">
							<div class="col-auto">
								<small class="text-right text-uppercase text-muted">
									<small>Powered by <a href="https://kodigo.pl" target="_blank" rel="noopener, nofollow" class="text-muted">KODIGO</a></small>
								</small>
							</div>
							<div class="col-auto">
								<small class="text-right text-uppercase text-muted">
									<small>v. <?php echo $_smarty_tpl->tpl_vars['base']->value->VERSION;?>
</small>
								</small>
							</div>
						</div>
					<?php }?>
				</div>
			</div>
		</div>
	</section>
<?php
}
}
/* {/block "content"} */
}
