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
    <td bgcolor="#FFFFFF"> <table width="600" height="62" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td background="admin/images/bgmain.png"><img src="admin/images/logo.png" width="250" height="62"></td>
      </tr>
    </table>

      <br>
      <form name="form1" method="post" action="admin.php?stage=2">
        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td><br>
              <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
                <tr>
                  <td width="58%" class="menuheader"><font color="#FF9900">Main
                    configuration setup</font> </td>
                  <td width="42%">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2"><div align="left" class="f8"><font color="#CCCCCC"><font color="#999999">These
                      are the main configurations which are required to get the
                      mailinglist up and running. Advanced settings can be accessed
                      from the admin panel.</font></font></div></td>
                </tr>
                <tr>
                  <td>Website URL ( including the root path )</td>
                  <td><input name="cwebsite" type="text" class="textboxgray" id="cwebsite" value="<?php
				        	$url = $_SERVER['SERVER_NAME'];
      	$root = $url.$_SERVER['PHP_SELF'];
      	$root = str_replace("install/","",$root);
		$root = str_replace("maillist","",$root);
      	$root = str_replace("/admin.php","",$root);
      	echo "http://$root";
				  ?>" size="50"></td>
                </tr>
                <tr>
                  <td>Path where mailist is stored </td>
                  <td><input name="cpath" type="text" class="textboxgray" id="cpath" value="maillist/" size="50"></td>
                </tr>
                <tr>
                  <td>Relative string ( see index.php on how to set it )</td>
                  <td><input name="cstring" type="text" class="textboxgray" id="cstring" value="index.php?page=mail&amp;" size="50"></td>
                </tr>
                <tr>
                  <td>Absolute Path ( The absolute path where its stored )</td>
                  <td><input name="cabsolute_path" type="text" class="textboxgray" id="cpath2" value="<?php $cwd = getcwd()."/";
				  $cwd = str_replace("\\","/",$cwd);
				  $cwd = str_replace("//","/",$cwd);
				  echo $cwd;

				  ?>" size="50"></td>
                </tr>
              </table>
              <br> <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
                <tr>
                  <td width="58%" class="menuheader"><font color="#FF9900">Administration
                    setup </font></td>
                  <td width="42%">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2"><div align="left" class="f8"><font color="#CCCCCC"><font color="#999999">Set the username and password which can be used
                      to change the various settings and properties of the mailing
                      list .</font></font></div></td>
                </tr>
                <tr>
                  <td>Username</td>
                  <td><input name="cusername" type="text" class="textboxgray" id="cusername" value="admin" size="50"></td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td><input name="cpassword" type="text" class="textboxgray" id="cpassword" value="<?php
/* taken from the mambo open source cms */
	$makepass="";
	$salt = "abchefghjkmnpqrstuvwxyz0123456789";
	srand((double)microtime()*1000000);
	$i = 0;
	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($salt, $num, 1);
		$makepass = $makepass . $tmp;
		$i++;
		}
		echo $makepass;
				  ?>" size="50"></td>
                </tr>
                <tr>
                  <td>Administrator email </td>
                  <td><input name="cemail" type="text" class="textboxgray" id="cemail" onClick="this.value='';" value="admin@mysite.com" size="50"></td>
                </tr>
              </table>
              <br> <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div align="right"><span class="menulink"><a href="javascript:document.form1.submit();" class="menulink"><font face="Arial, Helvetica, sans-serif"><strong>NEXT
                      STAGE </strong></font></a></span>&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
                </tr>
              </table>
              <br> </td>
          </tr>
        </table>
      </form>

      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><br> </td>
        </tr>
      </table>
    <br> </td>
  </tr>
</table>
</body>
</html>