<?php
/* Smarty version 3.1.39, created on 2021-09-13 09:26:12
  from 'D:\wamp\www\HelloStranger\system\views\back\addons\tinymce.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613f1934300868_41986575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebeba11f57036a659b75a823ed39ad5925daa656' => 
    array (
      0 => 'D:\\wamp\\www\\HelloStranger\\system\\views\\back\\addons\\tinymce.tpl',
      1 => 1631525158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613f1934300868_41986575 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	function TinyMCE()
	{
		tinymce.init({
			menubar: false,
			contextmenu: false,
			relative_urls: false,
			remove_script_host: true,
			mode: "textareas",
			editor_selector: "",
			entity_encoding: "raw",
			body_class: "tinymce admin",
			language: "<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
",
			//extended_valid_elements: "span",
			toolbar1: "styleselect bold italic underline | forecolor | alignleft aligncenter alignright alignjustify | bullist numlist | link unlink | image media table | code",
			plugins: ["lists link image media table searchreplace code autoresize"],
			color_map: [
				"9033C1", "Accent",
				"EEE2D8", "Second",
			],
			content_css: [
				"/<?php echo PATH_STYLES;?>
/css/normalize.min.css",
				"/<?php echo PATH_STYLES;?>
/css/front.min.css"
			],
			//external_filemanager_path: "/<?php echo PATH_PUBLIC;?>
/vendor/tinymce/filemanager/",
			//filemanager_title: "Responsive Filemanager",
			//filemanager_access_key: "22c307126276d523c8a7c42831a9d2c8",
			//external_plugins: { "filemanager" : "/<?php echo PATH_PUBLIC;?>
/vendor/tinymce/filemanager/plugin.min.js" }
		});
	}
	TinyMCE();
<?php echo '</script'; ?>
><?php }
}
