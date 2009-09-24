<?/*
nuevo fichero creado para realizar busquedas en las listas
Moises Hdez.
www.hgmnetwork.com
ultima revision : 17/11/2004
*/?>
<?php if(!isset($_SESSION['admin'])){echo 'Hacking attempted'; return ;} ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>WEBinsta Search email addresses </title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $lang_charset ?>">
<LINK title=style-sheet href="admin/css/admin.css" type=text/css rel=stylesheet>
</head>

<body background="admin/images/interface/backgd.gif" leftmargin="2" topmargin="2" rightmargin="2" bottommargin="2" marginwidth="2" marginheight="2">
<br><br>
<div id="dhtmltooltip"></div>
<script language="javascript" src="admin/js/tooltip.js"></script>

<script>
<!--
 function search(text) {
//funcion para realiza busqueda en el formulario padre
//por Moises Hdez. HGM Network
//www.hgmnetwork.com
/* Usamos el caracter * como comodin por el % del like de mysql*/
// alert('comienza');
        window.opener.document.location="admin.php?action=edit&filter=" + document.form_search.filter.value.replace('*','%') + "&search=true&view_group=<?php echo $view_group; ?>";
        window.opener.focus();
        window.close();
      }
 -->
</script>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="10" height="10"></td>
    <td background="admin/images/interface/top_line.png"></td>
    <td width="10" height="10"></td>
  </tr>
  <tr>
    <td background="admin/images/interface/left_line.png"></td>
    <td bgcolor="#FFFFFF">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <td width="10%"><div align="center"><img src="admin/images/search_icon.gif" width="16" height="16"></div></td>
          <td width="90%"><span class="h3"><?php echo $lang_search_email; ?></span><br>
            <span class="f8"><?php echo $lang_search_emailex; ?></span></td>
        </tr>
        <tr>
          <td colspan="2" valign="top"><table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" background="admin/images/interface/spacer_horizontal.gif">
              <tr>
                <td ><img src="admin/images/spacer.gif" width="1" height="1"></td>
              </tr>
            </table>

            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>
<form name="form_search" id="form_search" onsubmit='javascript:search();'>
                    <br>
                    <table border="0" align="center" cellpadding="5" cellspacing="0">
                      <tr>
                        <td width="16"><DIV onMouseover="ddrivetip('<?php echo $lang_search_group_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0>
                          </div></td>
                        <td width="123"><?php echo $lang_search_group;         ?></td>
                        <td width="185"><?php
if (isset($view_group) & ($view_group >0)){
$recordset=$conn->Execute("SELECT * FROM wiml_mailgroup WHERE id=".$view_group);
$row=$recordset->GetArray();
echo $row[0]['name'];
} else {
echo $lang_search_allgroups;
};?></td>
                      </tr>
                      <tr>
                        <td><DIV onMouseover="ddrivetip('<?php echo $lang_search_text_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0>
                          </div></td>
                        <td><?php echo $lang_search_text; ?></td>
                        <td><input type="text" name="filter" id="filter" size="20" class="textbox"></td>
                      </tr>
                      <tr>
                        <td colspan="3"><div align="center">
                            <table border="0" cellpadding="0" cellspacing="0"  onClick="javascript:search();" style="cursor:hand">
                              <tr>
                                <td><img src="admin/images/button_l.gif" width="9" height="24"></td>
                                <td width="70" background="admin/images/button_m.gif">
                                  <div align="center"><strong><font color="#FFFFFF"><?php echo $lang_search; ?></font></strong></div></td>
                                <td><img src="admin/images/button_r.gif" width="8" height="24"></td>
                              </tr>
                            </table>
                          </div></td>
                      </tr>
                    </table>
                  </form>
        </td>
              </tr>
            </table>


          </td>
        </tr>
      </table>

    </td>
    <td background="admin/images/interface/right_line.png"></td>
  </tr>
  <tr>
    <td width="10" height="10" background="admin/images/interface/bottom_left_corner.png"></td>
    <td background="admin/images/interface/bottom_line.png"></td>
    <td width="10" height="10" background="admin/images/interface/bottom_right_corner.png"></td>
  </tr>
</table>
</body>
</html>