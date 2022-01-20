<?php
/* Smarty version 3.1.39, created on 2021-09-13 09:48:58
  from 'D:\wamp\www\HelloStranger\system\views\back\events\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613f1e8abd0c10_44269607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3bf3b50452097b657ffe8b3167d54686da7f085' => 
    array (
      0 => 'D:\\wamp\\www\\HelloStranger\\system\\views\\back\\events\\form.tpl',
      1 => 1631526502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/topbar.tpl' => 1,
    'file:../addons/languages.tpl' => 1,
    'file:../addons/sections.tpl' => 3,
    'file:../addons/tinymce.tpl' => 1,
  ),
),false)) {
function content_613f1e8abd0c10_44269607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_993617015613f1e8ab22b70_96769114', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_908774655613f1e8ab28191_30113115', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1451330049613f1e8abc4931_02167404', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "header"} */
class Block_993617015613f1e8ab22b70_96769114 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_993617015613f1e8ab22b70_96769114',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<link href="/<?php echo PATH_PUBLIC;?>
/vendor/select2/select2.min.css" rel="stylesheet">
	<link href="/<?php echo PATH_PUBLIC;?>
/vendor/flatpickr/flatpickr.min.css" rel="stylesheet">
	<link href="/<?php echo PATH_PUBLIC;?>
/vendor/tagsinput/tagsinput.min.css" rel="stylesheet">
	<link href="/<?php echo PATH_PUBLIC;?>
/vendor/select2/select2-bootstrap4.min.css" rel="stylesheet">
<?php
}
}
/* {/block "header"} */
/* {block "content"} */
class Block_908774655613f1e8ab28191_30113115 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_908774655613f1e8ab28191_30113115',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender("file:../addons/topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('topbar'=>array('title'=>array('icon'=>'calendar-o','content'=>$_smarty_tpl->tpl_vars['t']->value['EVENTS'],'text'=>$_smarty_tpl->tpl_vars['event']->value ? $_smarty_tpl->tpl_vars['t']->value['EDIT'] : $_smarty_tpl->tpl_vars['t']->value['CREATE']))), 0, false);
?>
	<div class="<?php echo $_smarty_tpl->tpl_vars['grow']->value;?>
 mt-2">
		<ul class="nav nav-tabs">
			<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-basic"><?php echo $_smarty_tpl->tpl_vars['t']->value['BASIC'];?>
</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-text"><?php echo $_smarty_tpl->tpl_vars['t']->value['CONTENT'];?>
</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-image"><?php echo $_smarty_tpl->tpl_vars['t']->value['IMAGE'];?>
</a></li>
			<?php $_smarty_tpl->_subTemplateRender("file:../addons/languages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</ul>
		<form method="POST" class="<?php echo $_smarty_tpl->tpl_vars['grow']->value;?>
 validate" enctype="multipart/form-data" autocomplete="off">
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
									<div class="input-group flex-nowrap">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<img src="/<?php echo PATH_IMAGES;?>
/template/icons/flags/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.png">
											</div>
										</div>
										<input type="text" name="title[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['title'][$_smarty_tpl->tpl_vars['language']->value];?>
"
										id="title[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['TITLE'];?>
" class="form-control typeahead"
										data-hints='[<?php ob_start();
echo $_smarty_tpl->tpl_vars['language']->value;
$_prefixVariable1 = ob_get_clean();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hints']->value["title"][$_prefixVariable1], 'hint');
$_smarty_tpl->tpl_vars['hint']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->do_else = false;
?>"<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
", <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>""]'
										autocomplete="off" minlength="2" maxlength="128" style="border-radius: 0 .25rem .25rem 0;" required>
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
]" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['alias'][$_smarty_tpl->tpl_vars['language']->value];?>
" minlength="2"
										maxlength="128" id="alias[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['ALIAS'];?>
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
								<label for="location[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['LOCATION'];?>
</label>
								<div class="col-sm-9">
									<div class="input-group flex-nowrap">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<img src="/<?php echo PATH_IMAGES;?>
/template/icons/flags/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.png">
											</div>
										</div>
										<input type="text" name="location[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['location'][$_smarty_tpl->tpl_vars['language']->value];?>
"
										id="location[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['LOCATION'];?>
" class="form-control typeahead"
										data-hints='[<?php ob_start();
echo $_smarty_tpl->tpl_vars['language']->value;
$_prefixVariable2 = ob_get_clean();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hints']->value["location"][$_prefixVariable2], 'hint');
$_smarty_tpl->tpl_vars['hint']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->do_else = false;
?>"<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
", <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>""]'
										autocomplete="off" minlength="2" maxlength="128" style="border-radius: 0 .25rem .25rem 0;" required>
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
								<label for="tags[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['TAGS'];?>
</label>
								<div class="col-sm-9">
									<div class="input-group flex-nowrap">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<img src="/<?php echo PATH_IMAGES;?>
/template/icons/flags/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.png">
											</div>
										</div>
										<input type="text" name="tags[0][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo implode(',',$_smarty_tpl->tpl_vars['event']->value['tags'][0][$_smarty_tpl->tpl_vars['language']->value]);?>
"
										id="tags[0][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['TAGS'];?>
" class="form-control d-none"
										data-role="tagsinput" autocomplete="off">
									</div>
								</div>
							</div>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="created" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['DATE'];?>
</label>
						<div class="col-sm-9">
							<input type="text" name="date" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['date'] ? $_smarty_tpl->tpl_vars['event']->value['date'] : '';?>
"
							id="created" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['DATE'];?>
" class="form-control flatpickr bg-white" required>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="others[price][basic]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['PRICE'];?>
</label>
						<div class="col-sm-9">
							<div class="row">
								<div class="col-12 col-sm">
									<input type="text" name="others[price][basic]" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['others']['price']['basic'];?>
" data-mask="000.00" required
									minlength="1" maxlength="3" id="others[price][basic]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['BASIC_PRICE'];?>
" class="form-control">
								</div>
								<div class="col-12 col-sm">
									<input type="text" name="others[price][promotion]" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['others']['price']['promotion'];?>
" data-mask="000.00"
									minlength="1" maxlength="3" id="others[price][promotion]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['PROMOTION_PRICE'];?>
" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="limit[women]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['LIMIT'];?>
</label>
						<div class="col-sm-9">
							<div class="row">
								<div class="col-12 col-sm">
									<input type="text" name="others[limit][women]" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['others']['limit']['women'];?>
" data-mask="000" required
									minlength="1" maxlength="3" id="limit[women]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['WOMEN'];?>
" class="form-control">
								</div>
								<div class="col-12 col-sm">
									<input type="text" name="others[limit][men]" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['others']['limit']['men'];?>
" data-mask="000" required
									minlength="1" maxlength="3" id="others[limit][men]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['MEN'];?>
" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row align-items-center bg-light mb-0 py-3">
						<label for="active" class="col col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['ACTIVE'];?>
</label>
						<div class="col-auto col-sm-9 pt-1">
							<div class="custom-control custom-switch custom-switch-success">
								<input type="hidden" name="active" value="0">
								<input type="checkbox" id="active" name="active" value="1"
								<?php if ($_smarty_tpl->tpl_vars['event']->value['active'] || !$_smarty_tpl->tpl_vars['event']->value) {?>checked<?php }?> class="custom-control-input">
								<label class="custom-control-label" for="active"></label>
							</div>
						</div>
					</div>
				</div>
				<!---------------------------------------------------------------------------------------------------->
				<div class="tab-pane fade p-3" id="tab-text">
					<div id="sections">
						<?php if ($_smarty_tpl->tpl_vars['event']->value['text']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['event']->value['text']), 'section', false, 'index');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
						<?php $_smarty_tpl->_subTemplateRender("file:../addons/sections.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->tpl_vars['section']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
						<?php $_smarty_tpl->_subTemplateRender("file:../addons/sections.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('index'=>"0"), 0, true);
}?>
						<button type="button" class="btn rounded btn-block btn-success" 
						onclick="addSection(this)"><i class="fa fa-plus"></i></button>
					</div>
				</div>
				<!---------------------------------------------------------------------------------------------------->
				<div class="tab-pane fade p-3" id="tab-image">
					<div class="form-group mb-0">
						<input type="file" name="images[]" class="form-control upload">
					</div>
					<?php if ($_smarty_tpl->tpl_vars['event']->value['file']) {?>
						<div class="row">
							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-2" data-file>
								<div class="card mt-3">
									<img src="<?php echo $_smarty_tpl->tpl_vars['event']->value['data']['image'];?>
" class="card-img">
									<div class="card-img-overlay d-flex align-items-start justify-content-end p-1">
										<button type="button" class="btn btn-danger badge-dot badge-float badge-sm" 
										data-remove-file="<?php echo path(TABLE_EVENTS,$_smarty_tpl->tpl_vars['event']->value['id']);?>
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
class Block_1451330049613f1e8abc4931_02167404 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1451330049613f1e8abc4931_02167404',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/select2/select2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/flatpickr/flatpickr.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/tagsinput/tagsinput.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/flatpickr/langs/<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
.min.js"><?php echo '</script'; ?>
>
	<?php $_smarty_tpl->_subTemplateRender("file:../addons/sections.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('index'=>''), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:../addons/tinymce.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php echo '<script'; ?>
>
		//----- Setup tagsinput
		$("[data-role='tagsinput']").tagsinput({
			tagClass: "badge badge-primary mr-1",
			trimValue: true,
		});

		//----- Setup flatpickr
		flatpickr(".flatpickr",
		{
			altInput: true,
			time_24hr: true,
			enableTime: true,
			disableMobile: true,
			dateFormat: "Y-m-d H:i",
			locale: "<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
",
			altFormat: "j F Y H:i"
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "footer"} */
}
