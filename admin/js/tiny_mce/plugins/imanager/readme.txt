Image manager plugin for Tiny MCE 
-----------------------------------

Installation instructions:
  * Copy the preview directory to the plugins directory of TinyMCE (/jscripts/tiny_mce/plugins).
  * Add plugin to TinyMCE plugin option list example: plugins : "imanager".
  * Add the preview button name to button list, example: theme_advanced_buttons3_add : "imanager".

<script type="text/javascript">
	tinyMCE.init({
		theme : "advanced",
		language : "en",
		mode : "specific_textareas",
		plugins : "imanager",
        theme_advanced_buttons3_add : "imanager",
		debug : false
	});
</script>

Script@GPL by Vikas Patial
http://www.ngcoders.com