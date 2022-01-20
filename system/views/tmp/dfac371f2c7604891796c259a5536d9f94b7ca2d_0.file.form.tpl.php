<?php
/* Smarty version 3.1.40, created on 2022-01-17 12:16:20
  from 'D:\wamp\www\Sztorm\system\views\back\pages\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61e55e149abed2_93265448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfac371f2c7604891796c259a5536d9f94b7ca2d' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\pages\\form.tpl',
      1 => 1641914965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/topbar.tpl' => 1,
    'file:../addons/languages.tpl' => 1,
    'file:../addons/sections.tpl' => 2,
    'file:../addons/tinymce.tpl' => 1,
  ),
),false)) {
function content_61e55e149abed2_93265448 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85808685361e55e1475e087_57070934', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125037615761e55e147abfb7_85703458', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149350865761e55e149aab97_32746020', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "header"} */
class Block_85808685361e55e1475e087_57070934 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_85808685361e55e1475e087_57070934',
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
class Block_125037615761e55e147abfb7_85703458 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_125037615761e55e147abfb7_85703458',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender("file:../addons/topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('topbar'=>array('title'=>array('icon'=>'desktop','content'=>$_smarty_tpl->tpl_vars['t']->value['PAGES'],'text'=>$_smarty_tpl->tpl_vars['page']->value ? $_smarty_tpl->tpl_vars['t']->value['EDIT'] : $_smarty_tpl->tpl_vars['t']->value['CREATE']))), 0, false);
?>
	<div class="<?php echo $_smarty_tpl->tpl_vars['grow']->value;?>
 mt-2">
		<ul class="nav nav-tabs">
			<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-basic"><?php echo $_smarty_tpl->tpl_vars['t']->value['BASIC'];?>
</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-text"><?php echo $_smarty_tpl->tpl_vars['t']->value['CONTENT'];?>
</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-meta"><?php echo $_smarty_tpl->tpl_vars['t']->value['META'];?>
</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-image"><?php echo $_smarty_tpl->tpl_vars['t']->value['IMAGE'];?>
</a></li>
			<?php $_smarty_tpl->_subTemplateRender("file:../addons/languages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</ul>
		<form method="POST" class="<?php echo $_smarty_tpl->tpl_vars['grow']->value;?>
 validate" enctype="multipart/form-data">
			<div class="tab-content rounded-bottom border border-top-0 mb-3">
				<div class="tab-pane fade show active px-3" id="tab-basic">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['base']->value->languages), 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
						<div data-language="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
							<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
								<label for="title[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['TITLE'];?>
</label>
								<div class="col-sm-9">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<img src="/<?php echo PATH_IMAGES;?>
/template/icons/flags/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.png">
											</div>
										</div>
										<input type="text" name="title[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['title'][$_smarty_tpl->tpl_vars['language']->value];?>
"
										id="title[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['TITLE'];?>
" class="form-control" required>
									</div>
								</div>
							</div>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['base']->value->languages), 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
						<div data-language="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
							<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
								<label for="alias[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['ALIAS'];?>
</label>
								<div class="col-sm-9">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<img src="/<?php echo PATH_IMAGES;?>
/template/icons/flags/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.png">
											</div>
										</div>
										<input type="text" name="alias[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['alias'][$_smarty_tpl->tpl_vars['language']->value];?>
"
										id="alias[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['ALIAS'];?>
" class="form-control" required>
									</div>
								</div>
							</div>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="place" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['PLACEMENT'];?>
</label>
						<div class="col-sm-9">
							<select name="place" id="place" class="form-control custom-select select2">
								<option value="" <?php if (!$_smarty_tpl->tpl_vars['page']->value['place']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['NONE'];?>
</option>
								<option value="header" <?php if ($_smarty_tpl->tpl_vars['page']->value['place'] == 'header') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['HEADER'];?>
</option>
								<option value="home" <?php if ($_smarty_tpl->tpl_vars['page']->value['place'] == 'home') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['HOME'];?>
</option>
								<option value="footer" <?php if ($_smarty_tpl->tpl_vars['page']->value['place'] == 'footer') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['FOOTER'];?>
</option>
							</select>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="place" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['PARENT'];?>
</label>
						<div class="col-sm-9">
							<select name="parent" id="parent" class="form-control custom-select select2">
								<option value="" <?php if (!$_smarty_tpl->tpl_vars['page']->value['parent']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['NONE'];?>
</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parents']->value, 'parent');
$_smarty_tpl->tpl_vars['parent']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['parent']->value) {
$_smarty_tpl->tpl_vars['parent']->do_else = false;
?>
									<?php if ($_smarty_tpl->tpl_vars['parent']->value['id'] != $_smarty_tpl->tpl_vars['category']->value['id']) {?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['parent']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['page']->value['parent'] == $_smarty_tpl->tpl_vars['parent']->value['id']) {?>selected<?php }?>>
											<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count(parents(TABLE_PAGES,$_smarty_tpl->tpl_vars['parent']->value['id']))+1 - (1) : 1-(count(parents(TABLE_PAGES,$_smarty_tpl->tpl_vars['parent']->value['id'])))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>──<?php }
}
?> 
											<?php echo $_smarty_tpl->tpl_vars['parent']->value['title'];?>

										</option>
									<?php }?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="sort" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['SORT'];?>
</label>
						<div class="col-sm-9">
							<input type="number" name="sort" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['sort'];?>
"
							id="sort" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['SORT'];?>
" class="form-control">
						</div>
					</div>
					<div class="form-group row align-items-center bg-light mb-0 py-3">
						<label for="active" class="col col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['ACTIVE'];?>
</label>
						<div class="col-auto col-sm-9 pt-1">
							<div class="custom-control custom-switch custom-switch-success">
								<input type="hidden" name="active" value="0">
								<input type="checkbox" id="active" name="active" value="1"
								<?php if ($_smarty_tpl->tpl_vars['page']->value['active'] || !$_smarty_tpl->tpl_vars['page']->value) {?>checked<?php }?> class="custom-control-input">
								<label class="custom-control-label" for="active"></label>
							</div>
						</div>
					</div>
				</div>
				<!---------------------------------------------------------------------------------------------------->
				<div class="tab-pane fade p-3" id="tab-text">
					<div id="sections">
						<?php if ($_smarty_tpl->tpl_vars['page']->value['sections']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value['sections'], 'section', false, 'index');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
						<?php $_smarty_tpl->_subTemplateRender('file:../addons/sections.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('index'=>$_smarty_tpl->tpl_vars['index']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
						<button type="button" class="btn rounded btn-block btn-success" 
						onclick="addSection(this)"><i class="fa fa-plus"></i></button>
					</div>
				</div>
				<!---------------------------------------------------------------------------------------------------->
				<div class="tab-pane fade px-3" id="tab-meta">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['base']->value->languages), 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
						<div data-language="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
							<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
								<label for="meta[title][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['META_TITLE'];?>
</label>
								<div class="col-sm-9">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<img src="/<?php echo PATH_IMAGES;?>
/template/icons/flags/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.png">
											</div>
										</div>
										<input type="text" name="meta[title][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['meta']['title'][$_smarty_tpl->tpl_vars['language']->value];?>
"
										id="meta[title][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['META_TITLE'];?>
" class="form-control">
									</div>
								</div>
							</div>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['base']->value->languages), 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
						<div data-language="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
							<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
								<label for="meta[desc][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['META_DESC'];?>
</label>
								<div class="col-sm-9">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<img src="/<?php echo PATH_IMAGES;?>
/template/icons/flags/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.png">
											</div>
										</div>
										<input type="text" name="meta[desc][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['meta']['desc'][$_smarty_tpl->tpl_vars['language']->value];?>
"
										id="meta[desc][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['META_DESC'];?>
" class="form-control">
									</div>
								</div>
							</div>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['base']->value->languages), 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
						<div data-language="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
							<div class="form-group row align-items-center bg-light mb-0 py-3">
								<label for="meta[keys][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['META_KEYS'];?>
</label>
								<div class="col-sm-9">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<img src="/<?php echo PATH_IMAGES;?>
/template/icons/flags/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.png">
											</div>
										</div>
										<input type="text" name="meta[keys][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['meta']['keys'][$_smarty_tpl->tpl_vars['language']->value];?>
"
										id="meta[keys][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['META_KEYS'];?>
" class="form-control">
									</div>
								</div>
							</div>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
				<!---------------------------------------------------------------------------------------------------->
				<div class="tab-pane fade p-3" id="tab-image">
					<div class="form-group mb-0">
						<input type="file" name="images[]" class="form-control upload">
					</div>
					<?php if ($_smarty_tpl->tpl_vars['page']->value['file']) {?>
						<div class="row">
							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-2" data-file>
								<div class="card mt-3">
									<img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['image'];?>
" class="card-img">
									<div class="card-img-overlay d-flex align-items-start justify-content-end p-1">
										<button type="button" class="btn btn-danger badge-dot badge-float badge-sm" 
										data-remove-file="<?php echo path(TABLE_PAGES,$_smarty_tpl->tpl_vars['page']->value['id']);?>
">
											<i class="fa fa-times"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					<?php }?>
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
class Block_149350865761e55e149aab97_32746020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_149350865761e55e149aab97_32746020',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/select2/select2.min.js"><?php echo '</script'; ?>
>
	<?php $_smarty_tpl->_subTemplateRender("file:../addons/sections.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('index'=>''), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:../addons/tinymce.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer"} */
}
