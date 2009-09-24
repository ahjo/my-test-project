<?php if(!isset($_SESSION['admin'])){echo 'Hacking attempted'; return ;} ?>
<html>
<head>
<title>Webinsta Mailing List / Newsletter Manager : Administration panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $lang_charset ?>">
<link href="admin/css/admin.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="dhtmltooltip"></div>
<div align="center">
  <table width="770" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><img src="admin/images/interface/kop.jpg" width="770" height="63" border="0"></td>
    </tr>
  </table>
  <SCRIPT src="admin/js/tooltip.js" type=text/javascript></SCRIPT>
  <table width="770" border="0" cellpadding="0" cellspacing="0" background="admin/images/interface/bgmaintable.gif">
    <tr>
      <td width="20">&nbsp;      </td>
      <td><table width="725" height="23" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#445E58">
        <tr>
          <td><div align="center"><img src="admin/images/interface/menu.gif" width="69" height="17"></div></td>
          <td width="88" background="admin/images/interface/button.gif"><div align="center"><a href="admin.php?action=main" class="menulink"><?php echo $lang_head_settings; ?></a></div></td>
          <td width="88" background="admin/images/interface/button.gif"><div align="center"><a href="admin.php?action=sendmail" class="menulink"><?php echo $lang_send_out_mail; ?></a></div></td>
          <td width="88" background="admin/images/interface/button.gif"><div align="center"><a href="admin.php?action=editg" class="menulink"><?php echo $lang_edit_mailing_groups; ?></a></div></td>
          <td width="88" background="admin/images/interface/button.gif"><div align="center"><a href="admin.php?action=edit" class="menulink"><?php echo $lang_edit_mailing_list; ?></a></div></td>
          <td width="88" background="admin/images/interface/button.gif"><div align="center"><a href="admin.php?action=history" class="menulink"><?php echo $lang_history; ?></a></div></td>
          <td width="88" background="admin/images/interface/button.gif"><div align="center"><a href="admin.php?action=about" class="menulink"><?php echo $lang_about; ?></a></div></td>
          <td width="88" background="admin/images/interface/button.gif"><div align="center"><span class="menulink"><a href="help/index.htm" class="menulink" target="_blank"><?php echo $lang_help; ?></a></span></div></td>
                  <td width="10">&nbsp;</td>
        </tr>
      </table>
      <br></td>
      <td width="20">&nbsp;</td>
    </tr>
  </table>
</div>
<tr><td bgcolor="#FFFFFF" valign="top"><tr>
  <td bgcolor="#FFFFFF">