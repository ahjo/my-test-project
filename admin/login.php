<?php
if(isset($login))
{
include("globals.php");
if($password==$pass && $username == $user )
        {
        $_SESSION['adminname']=$username;
        $_SESSION['relative_dir']="";
        $_SESSION['admin']="yes";
        }
$ret="Location:admin.php";
//if(isset($QUERY_STRING))$ret=sprintf("%sindex.php?%s",$ret,$QUERY_STRING);
header($ret);
}
?>
<link href="admin/css/admin.css" rel="stylesheet" type="text/css">
<body background="admin/images/interface/backgd.gif">
<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="450" border="0" align="center" cellpadding="0" cellspacing="0" class="codeboxes">
      <tr>
        <td><table width="450" height="62" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td background="admin/images/bgmain.png"><img src="admin/images/logo.png" width="250" height="62"></td>
            </tr>
          </table>
            <br>
            <table width="300" border="0" align="center" cellpadding="5" cellspacing="5" bgcolor="#FFFFFF">
              <tr>
                <td width="25">
                  <div align="center"><a name="website" id="website"></a><img src="admin/images/login.jpg" width="25" height="25"></div></td>
                <td>
                  <p class="h3"><font size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>Login</strong></font><br>
                </p></td>
              </tr>
            </table>
            <form name="form1" method="post" action="admin.php">
              <table width="100%" border="0" cellspacing="0" cellpadding="5">
                <tr>
                  <td valign="middle"><input name="login" type="hidden" id="login" value="true">
                      <input name="action" type="hidden" id="action2" value="login">
                      <table border="0" align="center" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF">
                        <tr>
                          <td ><div align="right"><?php echo $lang_login_username; ?></div></td>
                          <td >&nbsp;</td>
                          <td><input name="username" type="text" class="textbox" id="username4"></td>
                        </tr>
                        <tr>
                          <td><div align="right"><?php echo $lang_login_passwords; ?></div></td>
                          <td>&nbsp;</td>
                          <td><input name="password" type="password" class="textbox" id="password"></td>
                        </tr>
                        <tr>
                          <td height="40">&nbsp;</td>
                          <td height="40">&nbsp;</td>
                          <td height="40"><div align="right">
                              <input name="Submit2" type="submit" class="graybutton" value="Submit">
                          </div></td>
                        </tr>
                        <tr>
                          <td colspan="3">
                            <div align="right" class="orange"><strong> </strong></div></td>
                        </tr>
                      </table>
                      <p></p></td>
                </tr>
              </table>
              <div align="right" class="style1">
                <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                  <tr>
                    <td><div align="right" style="color: #CCCCCC"><strong>WEB</strong>insta Mailing Manager V1.3</div></td>
                  </tr>
                </table>
              </div>
              <div align="right"></div>
          </form></td>
      </tr>
    </table></td>
  </tr>
</table>