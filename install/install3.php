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
    <td bgcolor="#FFFFFF"><table width="600" height="62" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td background="admin/images/bgmain.png"><img src="admin/images/logo.png" width="250" height="62"></td>
      </tr>
    </table>

      <br> <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><br>
            <?php
// Rem this if your server admin has register_globals turned on.
// It just converts global variables into local variables
foreach($HTTP_POST_VARS as $postvar => $postval){ ${$postvar} = $postval; }
foreach($HTTP_GET_VARS as $getvar => $getval){ ${$getvar} = $getval; }

//---------Uses ADODB to perform Database connectivity

$connection=false;
if($database=="none")
{
include($cabsolute_path.'inc/adodbt/db.inc');
$conn = &ADONewConnection();
$connection=true;
$conn->PConnect("","","",$cabsolute_path."data/");
}else
{
include($cabsolute_path.'inc/adodb/adodb.inc.php');
if($database=="mysql")
{
$conn = &ADONewConnection('mysql');
$connection=$conn->Connect($cdbhostname,$cdbusername,$cdbpassword,$cdbname);
}else if($database=="postgres7")
{
$conn = &ADONewConnection('postgres7');
$connection=$conn->Connect($cdbhostname,$cdbusername,$cdbpassword,$cdbname);
}
else if($database=="mssql")
{
$conn = &ADONewConnection('odbc_mssql');
$dsn = "Driver={SQL Server};Server=$cdbhostname;Database=$cdbname;";
$connection=$db->Connect($dsn,$cdbusername,$cdbpassword);
}else
{
$conn = &ADONewConnection('mysql');
$connection=$conn->Connect($cdbhostname,$cdbusername,$cdbpassword,$cdbname);
}
}
if($connection==false)
{
                die ( "Couldn't connect to database : ".$conn->ErrorMsg() .". Please go back and check settings ");
}
// Do not insert in case of scustom database //
//if(!strstr($database,"custom"))
$wtable=false;
{
$query = "CREATE TABLE wiml_maillist  (id int(10)  primary key auto_increment NOT NULL,lastupd char(20),email_name char(50) ,email_address char(50),email_ip char(16),email_date char(64),group_id int(4), unique(email_address,group_id))";
$recordSet = &$conn->Execute($query);
    if (!$recordSet)
        {
                if(strstr($conn->ErrorMsg(),'already exists'))$wtable=true;
//                 die ("Couldn't create maillist table  ".$conn->ErrorMsg() .". Please go back and check settings ");
                }
$query = "CREATE TABLE wiml_mailgroup  (id int(10)  primary key auto_increment NOT NULL,lastupd char(20),fid int(3),name char(30) )";
$recordSet = &$conn->Execute($query);
    if (!$recordSet)
        {
                if(strstr($conn->ErrorMsg(),'already exists'))$wtable=true;
//                 die ("Couldn't create mailgroup table  ".$conn->ErrorMsg() .". Please go back and check settings ");
                }
$query = "CREATE TABLE wiml_verify  (id int(10)  primary key auto_increment NOT NULL,lastupd char(20),email_name char(50),email_address char(50),group_id int(3),rand_str char(50))";
$recordSet = &$conn->Execute($query);
    if (!$recordSet)
        {
                if(strstr($conn->ErrorMsg(),'already exists'))$wtable=true;
//                 die ("Couldn't create Verify table  ".$conn->ErrorMsg() .". Please go back and check settings ");
                }
//modify to add priority and more by moises www.hgmnetwork.com to add charset iso
$query = "CREATE TABLE wiml_history  (id int(10)  primary key auto_increment NOT NULL,lastupd char(20),group_id int(3) , email_address char(50) , date char(20) ,subject char(255),text_message longtext ,html_message longtext ,template char(20),emailfrom char(255),charsetiso char(20),priority char(1),total_emails int not null,total_sends int not null  )";
$recordSet = &$conn->Execute($query);

    if (!$recordSet)
        {
                if(strstr($conn->ErrorMsg(),'already exists'))$wtable=true;
//                 die ("Couldn't create History table  ".$conn->ErrorMsg() .". Please go back and check settings ");
                }
$query = "INSERT INTO wiml_mailgroup (fid,name) VALUES ('', 'Default')";
if(!$wtable)$recordSet = &$conn->Execute($query);
}

        $fp=fopen("globals.php","w");
        if($fp==null)
        {
        echo "error opening globals.php";
        return;
        }

                                $out=sprintf("<?php \r\n\$main_dir = \"%s\";\r\n",$cpath);
                                fwrite($fp,$out,strlen($out));
                                $out=sprintf("\$website = \"%s\";\r\n",$cwebsite);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$relative_string=\"%s\";\r\n",$cstring);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$absolute_path=\"%s\";\r\n",$cabsolute_path);
                                fwrite($fp,$out,strlen($out));
                                $out=sprintf("\$lang=\"%s\";\r\n","lang_english.php");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$email_name=\"%s\";\r\n","Yourname");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$email_email=\"%s\";\r\n",$cemail);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$email_thank_title=\"%s\";\r\n","Thank you for registration");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$email_thank_message=\"%s\";\r\n","Thank you for registration at YOURNAME for the NEWSletter for updates and announcements.");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$email_unsubscribe_message=\"%s\";\r\n","<br><br>To unsubscribe click on this {ulink}link{/ulink} !");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$email_verify_message=\"%s\";\r\n","<br><br>Please click on this link to verify your email {slink}subscription{/slink} !");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$email_unsubscribe=\"%s\";\r\n","yes");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$email_thank=\"%s\";\r\n","no");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$email_verify=\"%s\";\r\n","no");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$email_images=\"%s\";\r\n","yes");
                                fwrite($fp,$out,strlen($out));

                $out=sprintf("\$user=\"%s\";\r\n",$cusername);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$pass=\"%s\";\r\n",$cpassword);
                                fwrite($fp,$out,strlen($out));
                                if(strstr($database,"custom"))
                                {
                                $database="custom";
                                }
                $out=sprintf("\$database=\"%s\";\r\n",$database);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$dbhostname=\"%s\";\r\n",$cdbhostname);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$dbusername=\"%s\";\r\n",$cdbusername);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$dbpassword=\"%s\";\r\n",$cdbpassword);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$dbname=\"%s\";\r\n",$cdbname);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$dbtable=\"%s\";\r\n",$tablename);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$userfield=\"%s\";\r\n",$userfield);
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$emailfield=\"%s\";\r\n",$emailfield);
                                fwrite($fp,$out,strlen($out));

                                /*output the server selection */
                $out=sprintf("\$mserver=\"%s\";\r\n","php");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$sendmail_string=\"%s\";\r\n","");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$smtp_string=\"%s\";\r\n","");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$smtp_auth=\"%s\";\r\n","no");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$smtp_username=\"%s\";\r\n","");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$smtp_password=\"%s\";\r\n","");
                                fwrite($fp,$out,strlen($out));
//add by moises www.hgmnetwork.com to add charset iso
                $out=sprintf("\$charsettype=\"%s\";\r\n","iso8859-1");
                                fwrite($fp,$out,strlen($out));
                $out=sprintf("\$priorityemail=\"%s\";\r\n","3");
                                fwrite($fp,$out,strlen($out));

                $out=sprintf("?>"); fwrite($fp,$out,strlen($out)); fclose($fp); ?>
            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="center"><?php if($wtable)echo 'Using already present tables'; ?> </div></td>
              </tr>
            </table>
            <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
              <tr>
                <td width="58%" class="menuheader"><font color="#FF9900">globals.php</font>
                </td>
                <td width="42%">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"><div align="left" class="f8"><font color="#CCCCCC"><font color="#999999">This
                    is the main config file in case you need to edit something
                    you can also edit the settings directoly using this file .</font></font></div></td>
              </tr>
              <tr>
                <td>Writing configuration file </td>
                <td>
<b><font color="green">Successful</font></b></td>
              </tr>
            </table>
            <br> <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
              <tr>
                <td width="58%" class="menuheader"><font color="#FF9900">Support
                  and bugs </font> </td>
                <td width="42%">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"><div align="left" class="f8"><font color="#CCCCCC"><font color="#999999">Please
                    visit us if you have any questions or queries also if you
                    find any bugs report them to us and we will take appropiate
                    action . If you have any great ideas or suggestions please
                    let us know .</font></font></div></td>
              </tr>
              <tr>
                <td>Main website </td>
                <td><a href="http://www.webinsta.com" target="_blank" class="slink">http://www.webinsta.com</a></td>
              </tr>
              <tr>
                <td>Support forums</td>
                <td><a href="http://www.webinsta.com/forum.html" target="_blank" class="slink">http://www.webinsta.com/forum.html</a></td>
              </tr>
            </table>
            <br> <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
              <tr>
                <td width="58%" class="menuheader"><font color="#FF9900">Please
                  delete install folder</font></td>
                <td width="42%">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"><div align="left" class="f8"><font color="#CCCCCC"><font color="#999999">Please
                    delete the install folder afer you have completed your installation
                    because this might lead to security risks and malaciuos activities
                    . </font></font></div></td>
              </tr>
            </table>
            <br> <br> <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="right"><span class="menulink"><a href="admin.php" class="menulink"><font face="Arial, Helvetica, sans-serif"><strong>Goto
                    admin page </strong></font></a></span>&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
              </tr>
            </table>
            <br> <br> </td>
        </tr>
      </table>
      <br>
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><br> </td>
        </tr>
      </table> </td>

  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>