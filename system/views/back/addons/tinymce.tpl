<script src="/{PATH_PUBLIC}/vendor/tinymce/tinymce.min.js"></script>
<script>
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
			language: "{$base->language}",
			//extended_valid_elements: "span",
			toolbar1: "styleselect bold italic underline | forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link unlink | image media table | code",
			plugins: ["lists link image media table searchreplace code autoresize"],
			color_map: [
				"9033C1", "Accent",
				"EEE2D8", "Second",
			],
			content_css: [
				"/{PATH_STYLES}/css/normalize.min.css",
				"/{PATH_STYLES}/css/front.min.css"
			],
			filemanager_title: "Responsive Filemanager",
			filemanager_access_key: "5d2e69f5f8be6695acbebfa1b2553d1e",
			external_filemanager_path: "/{PATH_PUBLIC}/vendor/tinymce/plugins/filemanager/",
			external_plugins: { "filemanager" : "/{PATH_PUBLIC}/vendor/tinymce/plugins/filemanager/plugin.min.js" }
		});
	}
	TinyMCE();
</script>