<?php
/* Smarty version 3.1.40, created on 2022-01-10 09:25:47
  from 'D:\wamp\www\Sztorm\system\views\back\events\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61dbfb9bcc8ba4_40206508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f1ad4ea543646add0c08accc017de34338cdc1e' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\events\\form.tpl',
      1 => 1640770791,
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
function content_61dbfb9bcc8ba4_40206508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99362721161dbfb9babe480_71409144', "header");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154129222761dbfb9baf8274_85929144', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10936654261dbfb9bcc6662_90244908', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "header"} */
class Block_99362721161dbfb9babe480_71409144 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_99362721161dbfb9babe480_71409144',
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
class Block_154129222761dbfb9baf8274_85929144 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_154129222761dbfb9baf8274_85929144',
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
								<label for="subtitle[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['SUBTITLE'];?>
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
										<input type="text" name="subtitle[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['subtitle'][$_smarty_tpl->tpl_vars['language']->value];?>
"
										id="subtitle[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['SUBTITLE'];?>
" class="form-control typeahead"
										data-hints='[<?php ob_start();
echo $_smarty_tpl->tpl_vars['language']->value;
$_prefixVariable2 = ob_get_clean();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hints']->value["subtitle"][$_prefixVariable2], 'hint');
$_smarty_tpl->tpl_vars['hint']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->do_else = false;
?>"<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
", <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>""]'
										autocomplete="off" minlength="2" maxlength="128" style="border-radius: 0 .25rem .25rem 0;">
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
$_prefixVariable3 = ob_get_clean();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hints']->value["location"][$_prefixVariable3], 'hint');
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
								<label for="group[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['GROUP'];?>
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
										<input type="text" name="group[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['group'][$_smarty_tpl->tpl_vars['language']->value];?>
"
										id="group[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['GROUP'];?>
" class="form-control typeahead"
										data-hints='[<?php ob_start();
echo $_smarty_tpl->tpl_vars['language']->value;
$_prefixVariable4 = ob_get_clean();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hints']->value["group"][$_prefixVariable4], 'hint');
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
										<input type="text" name="tags[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo implode(',',$_smarty_tpl->tpl_vars['event']->value['tags'][$_smarty_tpl->tpl_vars['language']->value]);?>
"
										id="tags[<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
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
						<label for="date[day]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['DATE'];?>
</label>
						<div class="col-sm-9">
							<div class="row align-items-center">
								<div class="col-12 col-lg mb-1 mb-lg-0">
									<input type="date" name="date[day]" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['date']['day'] ? $_smarty_tpl->tpl_vars['event']->value['date']['day'] : '';?>
"
									id="date[day]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['DATE'];?>
" class="form-control flatpickr bg-white" required>
								</div>
								<div class="col-12 col-lg mb-1 mb-lg-0">
									<input type="time" name="date[start]" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['date']['start'] ? $_smarty_tpl->tpl_vars['event']->value['date']['start'] : '';?>
"
									id="date[start]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['START'];?>
" class="form-control flatpickr bg-white" required>
								</div>
								<div class="col-12 col-lg">
									<input type="time" name="date[end]" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['date']['end'] ? $_smarty_tpl->tpl_vars['event']->value['date']['end'] : '';?>
"
									id="date[end]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['END'];?>
" class="form-control flatpickr bg-white" required>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="others[price][basic]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['PRICE'];?>
</label>
						<div class="col-sm-9">
							<div class="row">
								<div class="col-12 col-lg mb-1 mb-lg-0">
									<input type="text" name="others[price][basic]" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['others']['price']['basic'];?>
" data-mask="000.00"
									minlength="1" maxlength="6" id="others[price][basic]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['BASIC_PRICE'];?>
" class="form-control">
								</div>
								<div class="col-12 col-lg">
									<input type="text" name="others[price][promotion]" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['others']['price']['promotion'];?>
" data-mask="000.00"
									minlength="1" maxlength="6" id="others[price][promotion]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['PROMOTION_PRICE'];?>
" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row align-items-center border-bottom bg-light mb-0 py-3">
						<label for="others[limit][women]" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['LIMIT'];?>
</label>
						<div class="col-sm-9">
							<div class="row">
								<div class="col-12 col-lg mb-1 mb-lg-0">
									<input type="text" name="others[limit][women]" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['others']['limit']['women'];?>
" data-mask="000" required
									minlength="1" maxlength="3" id="others[limit][women]" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['WOMEN'];?>
" class="form-control">
								</div>
								<div class="col-12 col-lg mb-1 mb-lg-0">
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
class Block_10936654261dbfb9bcc6662_90244908 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_10936654261dbfb9bcc6662_90244908',
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
		$(".flatpickr").each(function()
		{
			var config = { 
				altInput: true,
				time_24hr: true,
				enableTime: true,
				disableMobile: true,
				dateFormat: "Y-m-d",
				locale: "<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
",
				altFormat: "j F Y"
			};
			
			if($(this).attr("type") == "time") { config.altFormat = "H:i"; 
			config.noCalendar = true; config.dateFormat = "H:i"; }
			flatpickr($(this), config);
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "footer"} */
}
