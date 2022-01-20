<?php
/* Smarty version 3.1.39, created on 2021-10-08 10:51:08
  from '/home/klient.dhosting.pl/kodigo/hellostranger.kodigo.pl/public_html/system/views/back/addons/tinymce.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6160067cd64232_25188296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b8b25ec4b562f1df3ca7d09eddba8b3c8c9c28b' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.kodigo.pl/public_html/system/views/back/addons/tinymce.tpl',
      1 => 1633442299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6160067cd64232_25188296 (Smarty_Internal_Template $_smarty_tpl) {
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
			filemanager_access_key: "46b44921281ad52ff187e961be47e02f",
			external_filemanager_path: "/<?php echo PATH_PUBLIC;?>
/vendor/tinymce/filemanager/",
			external_plugins: { "filemanager" : "/<?php echo PATH_PUBLIC;?>
/vendor/tinymce/filemanager/plugin.min.js" }
		});
	}
	TinyMCE();
<?php echo '</script'; ?>
><?php }
}
