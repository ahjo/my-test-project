<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Vote for webinsta </title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $lang_charset ?>">
<LINK title=style-sheet href="admin/css/admin.css" type=text/css rel=stylesheet>
<script language="JavaScript" type="text/JavaScript">
function write_text()
{
tinyMCE.execInstanceCommand('mce_editor_0', 'mceInsertContent', false, window.opener.document.forms.form.messagehtml.value);
}
</script>
<!-- tinyMCE -->
<script language="javascript" type="text/javascript" src="admin/js/tiny_mce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
        tinyMCE.init({
                theme : "advanced",
                language : "en",
                mode : "exact",
                setupcontent_callback : "write_text",
                elements : "texthtml",
                theme_advanced_toolbar_location : "top",
                theme_advanced_toolbar_align : "left",
                theme_advanced_path_location : "bottom",
                //content_css : "example_advanced.css",
                extended_valid_elements : "a[name|href|target|title|onclick],img[class|src|border=0|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name],hr[class|width|size|noshade],font[face|size|color|style],span[class|align|style]",
                plugins : "table,insertdatetime,preview,searchreplace,print,contextmenu,imanager,ibrowser",
                auto_cleanup_word : "true",
                convert_newlines_to_brs : "true",
                verify_html : "true",
                document_base_url : "$website",
                relative_urls : "false",
                remove_script_host : "false",
                theme_advanced_buttons1_add : "fontselect,fontsizeselect",
                theme_advanced_buttons2_add : "separator,insertdate,separator,forecolor,backcolor",
                theme_advanced_buttons2_add_before: "cut,copy,paste,separator,replace,separator",
                theme_advanced_buttons3_add_before : "tablecontrols,separator",
                theme_advanced_buttons3_add : "imanager,print",
                //invalid_elements : "a",
                theme_advanced_styles : "Header 1=header1;Header 2=header2;Header 3=header3;Table Row=tableRow1", // Theme specific setting CSS classes
                debug : false
        });

</script>
<!-- /tinyMCE -->
<script language="Javascript">
function submitForm() {
tinyMCE.triggerSave();
window.opener.document.form.messagehtml.value=document.form1.texthtml.value;
window.close();
}
</script>

</head>

<body background="admin/images/interface/backgd.gif">
<script language="JavaScript" type="text/JavaScript">
function save()
{
window.opener.document.form.messagehtml.value=document.form1.texthtml.value;
window.close();
}
</script>

<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td width="10%"><div align="center"><img src="admin/images/vote_icon.gif" width="16" height="16"></div></td>
    <td width="90%"><span class="h3"><?php echo $lang_editwin_edit; ?></span><br>
      <?php echo $lang_editwin_help; ?></td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><form name="form1" method="post" action="">
        <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" background="admin/images/interface/spacer_horizontal.gif">
          <tr>
            <td width="612"><img src="admin/images/interface/spacer_horizontal.gif" width="1" height="1"></td>
          </tr>
        </table>
        <div align="center"> <br>
            <textarea name="texthtml" id="texthtml" cols="70" rows="22"></textarea>

            <br>
            <table border="0" align="center" cellpadding="5" cellspacing="5">
              <tr>
                <td>
                  <table border="0" cellpadding="0" cellspacing="0"  onClick="javascript:submitForm()" style="cursor: pointer; cursor: hand;">
                    <tr>
                      <td><img src="admin/images/button_l.gif" width="9" height="24"></td>
                      <td width="70" background="admin/images/button_m.gif">
                        <div align="center"><strong><font color="#FFFFFF"><?php echo $lang_htmledit_save; ?></font></strong></div></td>
                      <td><img src="admin/images/button_r.gif" width="8" height="24"></td>
                    </tr>
                </table></td>
                <td>&nbsp;</td>
                <td><table border="0" cellpadding="0" cellspacing="0"  onClick="javascript:document.form1.reset();" style="cursor: pointer; cursor: hand;">
                    <tr>
                      <td><img src="admin/images/button_l.gif" width="9" height="24"></td>
                      <td width="70" background="admin/images/button_m.gif">
                        <div align="center"><strong><font color="#FFFFFF"><?php echo $lang_htmledit_reset; ?></font></strong></div></td>
                      <td><img src="admin/images/button_r.gif" width="8" height="24"></td>
                    </tr>
                </table></td>
                <td>&nbsp;</td>
                <td><table border="0" cellpadding="0" cellspacing="0"  onClick="javascript:window.close()" style="cursor: pointer; cursor: hand;">
                    <tr>
                      <td><img src="admin/images/button_l.gif" width="9" height="24"></td>
                      <td width="70" background="admin/images/button_m.gif">
                        <div align="center"><strong><font color="#FFFFFF"><?php echo $lang_htmledit_cancel; ?></font></strong></div></td>
                      <td><img src="admin/images/button_r.gif" width="8" height="24"></td>
                    </tr>
                </table></td>
              </tr>
            </table>
        </div>
    </form></td>
  </tr>
</table>
</body>
</html>