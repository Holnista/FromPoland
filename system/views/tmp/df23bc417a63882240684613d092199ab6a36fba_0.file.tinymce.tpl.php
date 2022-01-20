<?php
/* Smarty version 3.1.40, created on 2021-12-23 14:14:48
  from 'D:\wamp\www\Sztorm\system\views\back\addons\tinymce.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61c48458cbc064_41080210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df23bc417a63882240684613d092199ab6a36fba' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\addons\\tinymce.tpl',
      1 => 1640268887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c48458cbc064_41080210 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="/<?php echo PATH_PUBLIC;?>
/vendor/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	function TinyMCE()
	{
		tinymce.remove();
		tinymce.init({
			menubar: false,
			contextmenu: false,
			relative_urls: false,
			remove_script_host: true,
			mode: "textareas",
			entity_encoding: "raw",
			editor_deselector : "raw",
			body_class: "tinymce admin",
			language: "<?php echo $_smarty_tpl->tpl_vars['base']->value->language;?>
",
			//extended_valid_elements: "span",
			toolbar1: "styleselect bold italic underline | forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link unlink | image media table | code",
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
			filemanager_title: "Responsive Filemanager",
			filemanager_access_key: "5d2e69f5f8be6695acbebfa1b2553d1e",
			external_filemanager_path: "/<?php echo PATH_PUBLIC;?>
/vendor/tinymce/plugins/filemanager/",
			external_plugins: { "filemanager" : "/<?php echo PATH_PUBLIC;?>
/vendor/tinymce/plugins/filemanager/plugin.min.js" }
		});
	}
	TinyMCE();
<?php echo '</script'; ?>
><?php }
}
