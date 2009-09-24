<?php
if(isset($_GET['stage']))
{
$stage=$_GET['stage'];
include("install$stage.php");
return;
}
?>
<html>
<head>
<title>Webinsta Mailing list Installer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/install.css" rel="stylesheet" type="text/css">
<link href="install/css/install.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="codeboxes">
  <tr>
    <td bgcolor="#FFFFFF">
      <table width="600" height="62" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td background="admin/images/bgmain.png"><img src="admin/images/logo.png" width="250" height="62"></td>
        </tr>
      </table>

      <br>
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><br>
            <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
              <tr>
                <td width="66%" class="menuheader"><font color="#FF9900">File
                  permissions check</font></td>
                <td width="34%">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"><div align="left" class="f8"><font color="#CCCCCC">T<font color="#999999">he
                    following files should all be writable for WEBinsta mailist to
                    function properly . If something is not writable please make
                    them writable . </font></font></div></td>
              </tr>
              <tr>
                <td>globals.php</td>
                <td>
                  <?php
                                  //chmod('globals.php',755);
                                  if(is_writable( 'globals.php' ))
                                {echo '<b><font color="green">Writeable</font></b>'; }
                                else {echo  '<b><font color="red">Unwriteable</font></b>';
                                $error="true";
                                }

                                ?>
                </td>
              </tr>
            </table>
            <br>
            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="right">
                                <?php if(isset( $error ))
                                {echo '<b><font color="red">There was some error !!!</font></b>'; }
                                else {
                                echo  '<span class="menulink"><a href="admin.php?stage=1" class="menulink"><font face="Arial, Helvetica, sans-serif"><strong>NEXT
                    STAGE </strong></font></a></span>';

                                }
                                ?>&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
              </tr>
            </table>
            <br>
          </td>
        </tr>
      </table>
      <br>

      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><br>
          </td>
        </tr>
      </table>
    <br>    </td>
  </tr>
</table>
</body>
</html>