<?php
/* Smarty version 3.1.39, created on 2021-11-22 17:48:33
  from '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/back/translates/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619bc9e18063d1_17284083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8291b7b1c4f04994ef5f3f3763519326c8b38ee' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.io/public_html/system/views/back/translates/form.tpl',
      1 => 1631891999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/topbar.tpl' => 1,
  ),
),false)) {
function content_619bc9e18063d1_17284083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1266547691619bc9e17e4f56_14671959', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "content"} */
class Block_1266547691619bc9e17e4f56_14671959 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1266547691619bc9e17e4f56_14671959',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender("file:../addons/topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('topbar'=>array('title'=>array('icon'=>'language','content'=>$_smarty_tpl->tpl_vars['t']->value['TRANSLATES'],'text'=>$_smarty_tpl->tpl_vars['translate']->value ? $_smarty_tpl->tpl_vars['t']->value['EDIT'] : $_smarty_tpl->tpl_vars['t']->value['CREATE']))), 0, false);
?>
	<div class="<?php echo $_smarty_tpl->tpl_vars['grow']->value;?>
 mt-2">
		<ul class="nav nav-tabs">
			<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-basic"><?php echo $_smarty_tpl->tpl_vars['t']->value['BASIC'];?>
</a></li>
		</ul>
		<form method="POST" class="<?php echo $_smarty_tpl->tpl_vars['grow']->value;?>
 validate" enctype="multipart/form-data">
			<div class="tab-content rounded-bottom border border-top-0 mb-3">
				<div class="tab-pane fade show active px-3" id="tab-basic">
					<div class="form-group row align-items-center bg-light mb-0 py-3">
						<label for="key" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['KEY'];?>
</label>
						<div class="col-sm-9">
							<input type="text" name="key" value="<?php echo $_smarty_tpl->tpl_vars['translate']->value['key'];?>
" id="key"
							placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['KEY'];?>
" class="form-control" required <?php if ($_smarty_tpl->tpl_vars['translate']->value && $_smarty_tpl->tpl_vars['me']->value['id'] > 1) {?>disabled<?php }?>>
						</div>
					</div>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['base']->value->languages), 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
						<div class="form-group row align-items-center border-top bg-light mb-0 py-3">
							<label for="translation[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['TRANSLATION'];?>
 (<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['language']->value);?>
)</label>
							<div class="col-sm-9">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<img src="/<?php echo PATH_IMAGES;?>
/template/icons/flags/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.png">
										</div>
									</div>
									<input type="text" name="translation[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo quotes($_smarty_tpl->tpl_vars['translate']->value['translation'][$_smarty_tpl->tpl_vars['language']->value]);?>
"
									id="translation[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['TRANSLATION'];?>
 (<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['language']->value);?>
)" class="form-control">
								</div>
							</div>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
}
