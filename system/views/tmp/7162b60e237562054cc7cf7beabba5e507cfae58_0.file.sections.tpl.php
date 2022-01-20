<?php
/* Smarty version 3.1.40, created on 2022-01-17 12:19:52
  from 'D:\wamp\www\Sztorm\system\views\back\addons\sections.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61e55ee8cdb684_36490889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7162b60e237562054cc7cf7beabba5e507cfae58' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\addons\\sections.tpl',
      1 => 1642421845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../addons/blocks/column.tpl' => 2,
  ),
),false)) {
function content_61e55ee8cdb684_36490889 (Smarty_Internal_Template $_smarty_tpl) {
if (strlen($_smarty_tpl->tpl_vars['index']->value)) {?>
	<fieldset class="bg-light border mb-3 p-3" data-section="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
		<div class="row justify-content-between align-items-center no-gutters">
			<div class="col-auto">
				<div class="btn-group">
					<button type="button" 
					class="btn rounded-left btn-light border" onclick="moveSection(this, 'up')">
					<i class="fa fa-arrow-up"></i></button>
					<button type="button" 
					class="btn rounded-right btn-light border" onclick="moveSection(this, 'down')">
					<i class="fa fa-arrow-down"></i></button>
				</div>
			</div>
			<div class="col">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['base']->value->languages), 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
					<div data-language="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
						<div class="input-group flex-nowrap">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<img src="/<?php echo PATH_IMAGES;?>
/template/icons/flags/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.png">
								</div>
							</div>
							<input type="text" name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][header][title][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo quotes($_smarty_tpl->tpl_vars['section']->value['header']['title'][$_smarty_tpl->tpl_vars['language']->value]);?>
" 
							placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['TITLE'];?>
" class="form-control typeahead" minlength="2" maxlength="128" style="border-radius: 0 .25rem .25rem 0;">
						</div>
					</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<div class="col">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['base']->value->languages), 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
					<div data-language="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
						<div class="input-group flex-nowrap">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<img src="/<?php echo PATH_IMAGES;?>
/template/icons/flags/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.png">
								</div>
							</div>
							<input type="text" name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][header][subtitle][<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
]" value="<?php echo quotes($_smarty_tpl->tpl_vars['section']->value['header']['subtitle'][$_smarty_tpl->tpl_vars['language']->value]);?>
" 
							placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['SUBTITLE'];?>
" class="form-control typeahead" minlength="2" maxlength="128" style="border-radius: 0 .25rem .25rem 0;">
						</div>
					</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<div class="col-auto">
				<a href="#" class="btn rounded btn-danger" 
				data-toggle="modal" data-target="#remove" 
				onclick="removeSectionButton = this;">
					<i class="fa fa-times"></i>
				</a>
			</div>
			<div class="col-auto">
				<a href="#" class="btn rounded btn-primary" 
				data-target="#sections_settings_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"
				data-toggle="collapse">
					<i class="fa fa-cog"></i>
				</a>
			</div>
		</div>
		<div class="accordion">
			<div id="sections_settings_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="accordion-collapse collapse">
				<div class="accordion-body mt-3">
					<div class="card">
						<div class="card-body p-0 px-3">
							<div class="form-group row align-items-center border-bottom mb-0 py-3">
								<label for="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][header][align]" class="col-sm-3 col-form-label">Rodzaj nagłówka</label>
								<div class="col-sm-9">
									<select name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][header][align]" 
									id="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][header][align]"
									class="form-control select2">
										<option value="" <?php if (!$_smarty_tpl->tpl_vars['section']->value['settings']['header']['align']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['DEFAULT'];?>
</option>
										<option value="left" <?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['header']['align'] == 'left') {?>selected<?php }?>>Do lewej</option>
										<option value="center" <?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['header']['align'] == 'center') {?>selected<?php }?>>Wyśrodkowany</option>
										<option value="right" <?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['header']['align'] == 'right') {?>selected<?php }?>>Do prawej</option>
									</select>
								</div>
							</div>
							<div class="form-group row align-items-center border-bottom mb-0 py-3">
								<label for="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][background][type]" class="col-sm-3 col-form-label">Rodzaj tła</label>
								<div class="col-sm-9">
									<select name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][background][type]" 
									id="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][background][type]" 
									onchange="settingsSwitchBackground(this)"
									class="form-control select2">
										<option value="" <?php if (!$_smarty_tpl->tpl_vars['section']->value['settings']['background']['type']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['DEFAULT'];?>
</option>
										<option value="class" <?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['background']['type'] == 'class') {?>selected<?php }?>>Klasa CSS</option>
										<option value="image" <?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['background']['type'] == 'image') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['IMAGE'];?>
</option>
										<option value="color" <?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['background']['type'] == 'color') {?>selected<?php }?>>Kolor</option>
									</select>
								</div>
							</div>
							<div data-section-settings-background="class" <?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['background']['type'] != 'class') {?>style="display: none;"<?php }?>>
								<div class="form-group row align-items-center border-bottom mb-0 py-3">
									<label for="sections_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
_settings_background_class" class="col-sm-3 col-form-label">Klasa CSS</label>
									<div class="col-sm-9">
										<input type="text" name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][background][value]" value="<?php echo $_smarty_tpl->tpl_vars['section']->value['settings']['background']['value'];?>
"
										id="sections_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
_settings_background_class" placeholder="Klasa CSS" class="form-control" required 
										<?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['background']['type'] != 'class') {?>disabled<?php }?>>
									</div>
								</div>
							</div>
							<div data-section-settings-background="image" <?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['background']['type'] != 'image') {?>style="display: none;"<?php }?>>
								<div class="form-group row align-items-center border-bottom mb-0 py-3">
									<label for="sections_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
_settings_background_image" class="col-sm-3 col-form-label"><?php echo $_smarty_tpl->tpl_vars['t']->value['IMAGE'];?>
</label>
									<div class="col-sm-9">
										<div class="input-group">
											<input type="text" name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][background][value]" value="<?php echo $_smarty_tpl->tpl_vars['section']->value['settings']['background']['value'];?>
"
											id="sections_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
_settings_background_image" placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['IMAGE'];?>
" class="form-control" required 
											<?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['background']['type'] != 'image') {?>disabled<?php }?>>
											<div class="input-group-append">
												<button type="button" data-src="/<?php echo PATH_PUBLIC;?>
/vendor/tinymce/plugins/filemanager/dialog.php
												?akey=5d2e69f5f8be6695acbebfa1b2553d1e&type=1&popup=1&relative_url=1&field_id=sections_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
_settings_background_image"
												class="btn rounded-right btn-primary" data-fancybox data-type="iframe"><?php echo $_smarty_tpl->tpl_vars['t']->value['SELECT'];?>
</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div data-section-settings-background="color" <?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['background']['type'] != 'color') {?>style="display: none;"<?php }?>>
								<div class="form-group row align-items-center border-bottom mb-0 py-3">
									<label for="sections_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
_settings_background_color" class="col-sm-3 col-form-label">Kolor</label>
									<div class="col-sm-9">
										<input type="text" name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][background][value]" value="<?php echo $_smarty_tpl->tpl_vars['section']->value['settings']['background']['value'];?>
"
										id="sections_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
_settings_background_color" placeholder="Kolor" class="form-control" required
										<?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['background']['type'] != 'color') {?>disabled<?php }?>>
									</div>
								</div>
							</div>
							<div class="form-group row align-items-center border-bottom mb-0 py-3">
								<label for="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][size][width]" class="col-sm-3 col-form-label">Rozmiar</label>
								<div class="col-sm-9">
									<div class="form-row">
										<div class="col-sm">
											<select name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][size][width]" 
											id="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][size][width]" 
											class="form-control select2">
												<option value="container" <?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['size']['width'] == 'container') {?>selected<?php }?>>Domyślna szerokość</option>
												<option value="fullwidth" <?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['size']['width'] == 'fullwidth') {?>selected<?php }?>>Pełna szerokość</option>
											</select>
										</div>
										<div class="col-sm">
											<select name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][size][height]" 
											id="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][size][height]" 
											class="form-control select2">
												<option value="auto" <?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['size']['height'] == 'auto') {?>selected<?php }?>>Domyślna wysokość</option>
												<option value="fullheight" <?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['size']['height'] == 'fullheight') {?>selected<?php }?>>Pełna wysokość</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group row align-items-center border-bottom mb-0 py-3">
								<label for="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][columns][gutters]" class="col-sm-3 col-form-label">Układ kolumn</label>
								<div class="col-sm-9">
									<div class="form-row">
										<div class="col-sm">
											<select name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][columns][gutters]" 
											id="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][columns][gutters]" 
											class="form-control select2">
												<option value="" <?php if (!strlen($_smarty_tpl->tpl_vars['section']->value['settings']['columns']['gutters'])) {?>selected<?php }?>>Domyślne odstępy</option>
												<option value="0" <?php if (strlen($_smarty_tpl->tpl_vars['section']->value['settings']['columns']['gutters'])) {?>selected<?php }?>>Bez odstępów</option>
											</select>
										</div>
										<div class="col-sm">
											<select name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][columns][justify]" 
											id="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][columns][justify]" 
											class="form-control select2">
												<option value="" <?php if (!$_smarty_tpl->tpl_vars['section']->value['settings']['columns']['justify']) {?>selected<?php }?>>Domyślne wyśrodkowanie</option>
												<option value="center" <?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['columns']['justify'] == 'center') {?>selected<?php }?>>Do środka</option>
												<option value="flex-end" <?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['columns']['justify'] == 'flex-end') {?>selected<?php }?>>Do prawej</option>
												<option value="flex-start" <?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['columns']['justify'] == 'flex-start') {?>selected<?php }?>>Do lewej</option>
												<option value="space-between" <?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['columns']['justify'] == 'space-between') {?>selected<?php }?>>Rozepchnij</option>
											</select>
										</div>
										<div class="col-sm">
											<select name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][columns][align]" 
											id="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][columns][align]" 
											class="form-control select2">
												<option value="" <?php if (!$_smarty_tpl->tpl_vars['section']->value['settings']['columns']['align']) {?>selected<?php }?>>Domyślne wyrównanie</option>
												<option value="center" <?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['columns']['align'] == 'center') {?>selected<?php }?>>Do środka</option>
												<option value="flex-end" <?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['columns']['align'] == 'flex-end') {?>selected<?php }?>>Do dołu</option>
												<option value="flex-start" <?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['columns']['align'] == 'flex-start') {?>selected<?php }?>>Do góry</option>
												<option value="stretch" <?php if ($_smarty_tpl->tpl_vars['section']->value['settings']['columns']['align'] == 'stretch') {?>selected<?php }?>>Rozciągnij</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group row align-items-center border-bottom mb-0 py-3">
								<label for="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][others][margin][top]" class="col-sm-3 col-form-label">Marginesy</label>
								<div class="col-sm-9">
									<div class="form-row">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array('top'=>'Góra','right'=>'Prawo','bottom'=>'Dół','left'=>'Lewo'), 'title', false, 'key');
$_smarty_tpl->tpl_vars['title']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->do_else = false;
?>
											<div class="col-sm">
												<input type="text" name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][others][margin][<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" 
												value="<?php echo $_smarty_tpl->tpl_vars['section']->value['settings']['others']['margin'][$_smarty_tpl->tpl_vars['key']->value];?>
"
												id="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][others][margin][<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" 
												placeholder="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" class="form-control">
											</div>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</div>
								</div>
							</div>
							<div class="form-group row align-items-center border-bottom mb-0 py-3">
								<label for="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][others][padding][top]" class="col-sm-3 col-form-label">Wcięcie</label>
								<div class="col-sm-9">
									<div class="form-row">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array('top'=>'Góra','right'=>'Prawo','bottom'=>'Dół','left'=>'Lewo'), 'title', false, 'key');
$_smarty_tpl->tpl_vars['title']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->do_else = false;
?>
											<div class="col-sm">
												<input type="text" name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][others][padding][<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" 
												value="<?php echo $_smarty_tpl->tpl_vars['section']->value['settings']['others']['padding'][$_smarty_tpl->tpl_vars['key']->value];?>
"
												id="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][others][padding][<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" 
												placeholder="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" class="form-control">
											</div>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</div>
								</div>
							</div>
							<div class="form-group row align-items-center mb-0 py-3">
								<label for="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][others][css]" class="col-sm-3 col-form-label">Dodatkowy styl CSS</label>
								<div class="col-sm-9">
									<div class="form-row">
										<div class="col-sm">
											<input type="text" name="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][others][css]" 
											value="<?php echo $_smarty_tpl->tpl_vars['section']->value['settings']['others']['css'];?>
"
											id="sections[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][others][css]" 
											placeholder="<?php echo $_smarty_tpl->tpl_vars['t']->value['NONE'];?>
" class="form-control">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row no-gutters" data-columns>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['section']->value['columns']), 'column', false, 'c');
$_smarty_tpl->tpl_vars['column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->do_else = false;
?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "blocks", null, null);?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['column']->value['blocks']), 'block', false, 'b');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['b']->value => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
						<!--{include file=sprintf("../addons/blocks/%s.tpl", $block['type']) index 
						= ['section' => $index, 'column' => $c, 'block' => $b] block = $block}-->
						<?php echo $_smarty_tpl->tpl_vars['base']->value->mock('POST /admin/sections/block [ajax]',array('index'=>array('section'=>$_smarty_tpl->tpl_vars['index']->value,'column'=>$_smarty_tpl->tpl_vars['c']->value,'block'=>$_smarty_tpl->tpl_vars['b']->value),'type'=>$_smarty_tpl->tpl_vars['block']->value['type'],'block'=>$_smarty_tpl->tpl_vars['block']->value));?>

					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php $_smarty_tpl->_subTemplateRender("file:../addons/blocks/column.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('index'=>array('section'=>$_smarty_tpl->tpl_vars['index']->value,'column'=>$_smarty_tpl->tpl_vars['c']->value)), 0, true);
?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php if (!$_smarty_tpl->tpl_vars['section']->value['columns']) {?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "blocks", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php $_smarty_tpl->_subTemplateRender("file:../addons/blocks/column.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('index'=>array('section'=>$_smarty_tpl->tpl_vars['index']->value,'column'=>0)), 0, true);
?>
			<?php }?>
			<div class="col-auto ml-auto mt-3">
				<button type="button" class="btn rounded btn-block btn-outline-success h-100" 
				onclick="addColumn(this)"><i class="fa fa-plus"></i></button>
			</div>
		</div>
	</fieldset>
<?php } else { ?>
	<div class="modal fade" id="blocks">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['t']->value['SELECT'];?>
</h5>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center p-5">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array('text'=>'Kod HTML','icon'=>'Prosta ikona','button'=>'Prosty przycisk','tinymce'=>'Edytor tekstowy','member'=>'Członek zespołu','article'=>'Artykuł bloga','counter'=>'Licznik cyfrowy','image'=>'Prosty obraz','map'=>'Mapa Google','counter'=>'Cyfrowy licznik','collapse'=>'Rozwijany tekst','youtube'=>'Film YouTube','slider'=>'Karuzela zdjęć','gallery'=>'Galeria zdjęć'), 'title', false, 'key');
$_smarty_tpl->tpl_vars['title']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->do_else = false;
$_smarty_tpl->_assignInScope('path', path($_smarty_tpl->tpl_vars['base']->value->get('UI'),'back','addons','blocks',sprintf('%s.tpl',$_smarty_tpl->tpl_vars['key']->value)));?>
						<?php if (file_exists($_smarty_tpl->tpl_vars['path']->value)) {?>
							<div class="row my-1">
								<div class="col">
									<button type="button" class="btn rounded btn-block btn-dark"
									onclick="addBlock('<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
')" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</button>
								</div>
							</div>
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="remove">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['t']->value['WARNING'];?>
</h5>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center py-5">
					<p class="m-0"><?php echo sprintf($_smarty_tpl->tpl_vars['t']->value['RECORDS_REMOVE_TITLE'],'tą sekcję');?>
</p>
					<p class="m-0 text-danger"><?php echo $_smarty_tpl->tpl_vars['t']->value['RECORDS_REMOVE_TEXT'];?>
</p>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn rounded btn-outline-dark" data-dismiss="modal">
						<span><?php echo $_smarty_tpl->tpl_vars['t']->value['CANCEL'];?>
</span>
					</button>
					<button type="button" class="btn rounded btn-danger" data-dismiss="modal"
					onclick="removeSection(this)"><span><?php echo $_smarty_tpl->tpl_vars['t']->value['REMOVE'];?>
</span></button>
				</div>
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
>
		//------ Default variables
		var addBlockButton = null, removeSectionButton = null;
		
		//====================================================================================================
		function addSection(button)
		{
			var index = $("[data-section]").length;
			$.ajax({ type: "POST", url: "/admin/sections",
			data: { "index": index }, dataType: "html" })
			.done(function(result)
			{
				$(result).insertBefore(button);
				refreshSections();
			});
		}
		
		//====================================================================================================
		function moveSection(button, direction)
		{
			var section = $(button).closest("[data-section]");
			if(direction == "up" && section.prev("[data-section]").length) section.insertBefore(section.prev("[data-section]"));
			if(direction == "down" && section.next("[data-section]").length) section.insertAfter(section.next("[data-section]"));
			refreshSections();
		}
		
		//====================================================================================================
		function removeSection(button)
		{
			var section = $(removeSectionButton).closest("[data-section]");
			section.find("button").attr("disabled", "disabled");
			$(button).attr("disabled", "disabled");
			section.fadeOut(function()
			{
				section.remove(); refreshSections();
				$(button).closest(".modal").modal("toggle");
				$(button).removeAttr("disabled");
			});
		}
		
		//====================================================================================================
		function addColumn(button)
		{
			var columns = $(button).closest("[data-section]").find("[data-columns]");
			$.ajax({ type: "POST", url: "/admin/sections/column", dataType: "html",
			data: { "index": columns.find("> .col").length } })
			.done(function(result)
			{
				$(result).insertBefore(button.closest(".col-auto"));
				refreshSections();
			});
		}
		
		//====================================================================================================
		function moveColumn(button, direction)
		{
			var column = $(button).closest(".col");
			if(direction == "left" && column.prev(".col").length) column.insertBefore(column.prev(".col"));
			if(direction == "right" && column.next(".col").length) column.insertAfter(column.next(".col"));
			refreshSections();
		}
		
		//====================================================================================================
		function removeColumn(button)
		{
			var columns = $(button).closest("[data-section]").find("[data-columns]");
			if(columns.find(".col").length > 1) $(button).closest(".col").remove();
			refreshSections();
		}
		
		//====================================================================================================
		function addBlock(type)
		{
			var index = { 
				"section": $(addBlockButton).closest("[data-section]").data("section"),
				"column": $(addBlockButton).closest(".card").closest(".col").index(),
				"block": $(addBlockButton).closest(".card").find(".card").length
			};
			
			$.ajax({ type: "POST", url: "/admin/sections/block", dataType: "html",
			data: { "index": index, "type": type } }).done(function(result) 
			{
				$(result).insertBefore(addBlockButton);
				refreshSections();
			});
		}
		
		//====================================================================================================
		function moveBlock(button, direction)
		{
			var block = $(button).closest("[data-block]");
			if(direction == "up" && block.prev("[data-block]").length) block.insertBefore(block.prev("[data-block]"));
			if(direction == "down" && block.next("[data-block]").length) block.insertAfter(block.next("[data-block]"));
			refreshSections();
		}
		
		//====================================================================================================
		function removeBlock(button)
		{
			$(button).closest("[data-block]").remove();
			refreshSections();
		}
		
		//====================================================================================================
		function refreshSections()
		{
			//----- Reindex sections
			$("[data-section]").each(function()
			{
				var section = $(this);
				section.find("[data-columns] > .col").each(function()
				{
					var column = $(this);
					column.find("[name^='sections']").each(function()
					{
						var name = $(this).attr("name");
						name = name.replace(/(sections\[)\d(\])/, "sections["+section.index()+"]");
						name = name.replace(/(\[columns\]\[)\d(\])/, "[columns]["+column.index()+"]");
						//$(this).attr("id", name.replace(/\[/g, "_").replace(/\]/g, ""));
						$(this).attr("name", name);
					});
					column.find(".card > [data-block]").each(function()
					{
						var block = $(this);
						block.find("[name^='sections']").each(function()
						{
							//Replace input names
							var name = $(this).attr("name");
							name = name.replace(/(sections\[)\d(\])/, "sections["+section.index()+"]");
							name = name.replace(/(\[columns\]\[)\d(\])/, "[columns]["+column.index()+"]");
							name = name.replace(/(\[blocks\]\[)\d(\])/, "[blocks]["+block.index()+"]");
							//$(this).attr("id", name.replace(/\[/g, "_").replace(/\]/g, ""));
							$(this).attr("name", name);
							
							//Replace filemanager URL parameter
							/*if($(this).attr("id")?.indexOf("_value") >= 0)
							{
								var button = $(this).parent().find("button"), url = new URLSearchParams(button.attr("data-src"));
								url.set("field_id", $(this).attr("id")); button.attr("data-src", decodeURIComponent(url.toString()));
							}*/
						});
					});
				});
			});
			
			//----- Setup select2
			$(".select2").each(function()
			{
				if($(this).data("select2"))
				$(this).select2("destroy");
				$(this).select2({
					theme: "bootstrap4",
					minimumResultsForSearch: -1,
					language: "<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
"
				});
			});
			
			//----- Setup TinyMCE
			TinyMCE();
			
			//----- Move modals
			$(".modal").appendTo("body");
		}
		
		//====================================================================================================
		function settingsSwitchBackground(select)
		{
			var panel = $(select).closest("[id^='sections_settings']");
			panel.find("[data-section-settings-background]").hide().find("input, button").attr("disabled", "disabled");
			panel.find("[data-section-settings-background='"+$(select).val()+"']").show().find("input, button").removeAttr("disabled");
		}
		
		//====================================================================================================
		function settingsChangeColumnWidth(select)
		{
			var column = $(select).closest("[data-column]");
			column.removeClass(function(index, className)
			{
				return (className.match (/(^|\s)col-md-\S+/g) || []).join(' ');
			});
			column.addClass($(select).val());
		}
		
		//====================================================================================================
		function responsive_filemanager_callback(id)
		{
			var field = $("#"+id), value = field.val(),
			block = field.closest("[data-block]").data("block"),
			url = "/public/uploads/tinymce/source/", array = [];
			if(isJson(value)) $.each(JSON.parse(value), 
			function(k, v) { array[k] = url+v; });
			else array = [url+value]; 
	
			if(block == "slider") field.val(JSON.stringify(array));
			else field.val(array[0]); field.prev().attr("src", 
			array[0]).removeClass("d-none");
			$.fancybox.close();
		}
		
		//====================================================================================================
		function isJson(string)
		{
			try { JSON.parse(string); }
			catch(e) { return false;
			} return true;
		}
		
		//====================================================================================================
		$("[data-toggle='tab']").on("click", function()
		{
			if($(this).attr("href") == "#tab-text") $("#sidebar").addClass("hidden");
			else $("#sidebar").removeClass("hidden");
		});
		
		//====================================================================================================
		$(document).ready(function()
		{
			//----- Init sections
			refreshSections();
		});
	<?php echo '</script'; ?>
>
<?php }
}
}
