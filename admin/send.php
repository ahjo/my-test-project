<?php if(!isset($_SESSION['admin'])){echo 'Hacking attempted'; return ;} ?>
<?php
// the settings are stored here //
require("admin/class/phpmailer/class.phpmailer.php");
$recordset=$conn->Execute("SELECT * FROM wiml_history WHERE id = $task_id");
$row=$recordset->GetArray();

$subject=stripslashes($row[0]['subject']);
$text_message=stripslashes($row[0]['text_message']);
$html_message=stripslashes($row[0]['html_message']);
$template=$row[0]['template'];
$group_id=$row[0]['group_id'];
$charsettype=$row[0]['charsetiso'];
$priorityemail=$row[0]['priority'];
$emailfrom=$row[0]['emailfrom'];

$send_cont=25;

if(!isset($email_from))$email_from=0;
if(!isset($last_address))$last_address='';
if(!isset($last_index))$last_index=0;
$extra_info=true;

/*
MODIFIED BY MOISES TO CHANGE ULINK UNSUBSCRIBE LINK
//modify by Moises Hdez.
//last update 2004/11/18
//www.hgmnetwork.com
*/
//if($group_id==-2 || $group_id==-3)$extra_info=false;
//echo "el grupo es $group_id";
//if($group_id==-1 || $group_id==-3)$extra_info=false;
/*intialize PHP mailer class */
//echo "Emailfrom es : ".$emailfrom." Nombre: ".strip_tags($emailfrom) ." email : ".substr(stristr($emailfrom,"<"),1,-1);
$mail = new phpmailer();
$mail->Subject  = $subject;
$mail->From     = trim(substr(stristr($emailfrom,"<"),1,-1));
$mail->Sender    = trim(substr(stristr($emailfrom,"<"),1,-1));; // reply to
//echo " el mensaje se enviara desde $emailfrom";
$mail->FromName = trim(strip_tags($emailfrom));
$mail->ContentType = "text/plain";
$mail->CharSet  = $charsettype;
$mail->Priority   = $priorityemail;
switch($mserver)
{
case "smtp" :
         $mail->Host=$smtp_string;
         if($smtp_auth=="yes")
         {
         $mail->SMTPAuth=true;
         $mail->Username=$smtp_username;
         $mail->Password=$smtp_password;
         }
         $mail->Mailer="smtp";
             break;
case "sendmail"  :
         $mail->Sendmail=$sendmail_string;
         $mail->Mailer="sendmail";
            break;
case "php":
default :
         $mail->Mailer="mail";
         break;
}
/* unsubscribe part */
$unsub_html="";
$unsub_text="";
//echo "esto es para probar email_ussubscribe es $email_unsubscribe y group_ip es $group_id";
if($email_unsubscribe=="yes")
   {
   $unsub_html=str_replace("{ulink}",'<a href="'.$website.$main_dir.'unsubscribe.php?mail={email}&id={id}">',$email_unsubscribe_message);
   $unsub_html=str_replace("{/ulink}","</a>",$unsub_html);
   $unsub_text="\n\n Please Paste following link to Un-subscribe :  ".$website.$main_dir."unsubscribe.php?mail={email}&id={id}";
   }

/////////////////////////////////////////////////////////////////////
//                   Fill in the content
/////////////////////////////////////////////////////////////////////

if(strlen($text_message)>0)
{
if(strlen($html_message) == 0 ) {$mail->Body = $text_message;
if($extra_info)$mail->Body.=$unsub_text;}
           else {$mail->AltBody = $text_message;
               if($extra_info)$mail->AltBody.=$unsub_text;}
}

// load the template //
if((strlen($template)>0) && (strlen($html_message)>0) )
{
$mail->IsHTML(true);
$fp=fopen("admin/templates/".$template."/email.htm","r");
$html=fread($fp,filesize("admin/templates/".$template."/email.htm"));
fclose($fp);
$html=str_replace("{content}",$html_message,$html);
if(!($dir=opendir("admin/templates/".$template."/images/")))
        {
        echo "Error : Unable to access the templates directory !!!</body></html>";
        return;
        }

     while ( $name = readdir($dir))
         {
         if( $name=="." || $name==".." )continue;

              if( is_file( "admin/templates/".$template."/images/".$name ) )
         {
          $ext=array();
          $ext=explode(".",$name,strlen($name));
          $extn=$ext[count($ext)-1];

          if(strtolower($extn)=="gif")
             {
            if($email_images=="yes"){$html=str_replace("images/".$name,"cid:".md5($name),$html);
            $mail->AddEmbeddedImage("admin/templates/".$template."/images/".$name,md5($name),'','base64',"image/gif");
            }else
            {
            $html=str_replace("images/".$name,$website.$main_dir."admin/templates/".$template."/images/".$name,$html);
            }
            }
          if(strtolower($extn)=="jpg")
             {
            if($email_images=="yes"){$html=str_replace("images/".$name,"cid:".md5($name),$html);
            $mail->AddEmbeddedImage("admin/templates/".$template."/images/".$name,md5($name),'','base64',"image/jpeg");
            }else
            {
            $html=str_replace("images/".$name,$website.$main_dir."admin/templates/".$template."/images/".$name,$html);
            }
            }
          if(strtolower($extn)=="png")
             {
            if($email_images=="yes"){$html=str_replace("images/".$name,"cid:".md5($name),$html);
            $mail->AddEmbeddedImage("admin/templates/".$template."/images/".$name,md5($name),'','base64',"image/png");
            }else
            {
            $html=str_replace("images/".$name,$website.$main_dir."admin/templates/".$template."/images/".$name,$html);
            }
            }
         }
         }

//change by moises Hdez.
//last update 2004/11/18
//www.hgmnetwork.com

$mail->Body=$html;

if($extra_info)$mail->Body=str_replace("{ulink}",'<a href="'.$website.$main_dir.'unsubscribe.php?mail={email}&id={id}" >',$mail->Body);
if($extra_info)$mail->Body=str_replace("{/ulink}","</a>",$mail->Body);
$mail->Body;
}
else if (strlen($html_message)>0)
{
$mail->IsHTML(true);
$mail->Body=$html_message;
if($extra_info)$mail->Body.=$unsub_html;
$mail->Body;
}

/*$myDomain = parse_url($website);
$mail->Host     = $myDomain["host"];
*/
$mail_type="";
$tmail = new phpmailer();
//Actual loop which sends mail to every one

/* send to a single user */

//modify by moises Hdez.
//last update 2004/11/27
//www.hgmnetwork.com
$total_emails_deleted=0;

if($group_id== -2 )
{
$tmail=clone $mail;
$tmail->AddAddress($row[0]['email_address']);
if (isset($row[0]["email_name"])){
$tmail->Body=str_replace("{name}",$row[0]["email_name"],$tmail->Body);
} else {
$tmail->Body=str_replace("{name}","",$tmail->Body);
};
$tmail->Body=str_replace("{email}",$row[0]["email_address"],$tmail->Body);
$tmail->Body=str_replace("{id}",$row[0]["group_id"],$tmail->Body);

if (isset($row[0]["email_name"])){
$tmail->AltBody=str_replace("{name}",$row[0]["email_name"],$tmail->AltBody);
} else {
$tmail->AltBody=str_replace("{name}","",$tmail->AltBody);
};

$tmail->AltBody=str_replace("{email}",$row[0]["email_address"],$tmail->AltBody);
$tmail->AltBody=str_replace("{id}",$row[0]["group_id"],$tmail->AltBody);

if (isset($row[0]["email_name"])){
$tmail->Subject=str_replace("{name}",$row[0]["email_name"],$mail->Subject);
} else {
$tmail->Subject=str_replace("{name}","",$mail->Subject);
};
$tmail->Subject=str_replace("{email}",$row[0]["email_address"],$mail->Subject);

if(!isAddressValid($row[0]["email_address"]))
   {
   $conn->Execute("DELETE FROM wiml_maillist WHERE id = ".$row[0]["id"]);

//variable para saber el numero de Emails Eliminados por mala direccion
  $total_emails_deleted= $total_emails_deleted + 1 ;

   continue;
   }
if(!$tmail->Send())echo "Error Enviando a : ".$row[0]['email_address'];
$send_all="true";

}


/* send to nuke a group */
if($group_id > 0 )
{
$start_index=$last_index;
$end_index=$send_cont;
$recordset=$conn->Execute("SELECT * FROM wiml_maillist WHERE group_id = $group_id");
$total=$recordset->RecordCount();
if( ( $start_index+$end_index ) > $total ) $end_index = $total - $start_index;

$ers=$conn->SelectLimit("SELECT * FROM wiml_maillist WHERE group_id = $group_id",$end_index,$start_index);


if($ers)
{
$erows=$ers->GetArray();
foreach($erows as $erow)
{
$tmail=clone $mail;
//echo $erow["email_name"]."(".$erow["email_address"].")<br>";
$tmail->Body=str_replace("{name}",$erow["email_name"],$tmail->Body);
$tmail->Body=str_replace("{email}",$erow["email_address"],$tmail->Body);
$tmail->Body=str_replace("{id}",$erow["group_id"],$tmail->Body);

$tmail->AltBody=str_replace("{name}",$erow["email_name"],$tmail->AltBody);
$tmail->AltBody=str_replace("{email}",$erow["email_address"],$tmail->AltBody);
$tmail->AltBody=str_replace("{id}",$erow["group_id"],$tmail->AltBody);

$tmail->Subject=str_replace("{name}",$erow["email_name"],$mail->Subject);
$tmail->Subject=str_replace("{email}",$erow["email_address"],$mail->Subject);

if(!isAddressValid($erow["email_address"]))
   {
   $conn->Execute("DELETE FROM wiml_maillist WHERE id = ".$erow["id"]);
//variable para saber el numero de Emails Eliminados por mala direccion
  $total_emails_deleted= $total_emails_deleted + 1 ;
   continue;
   }
$tmail->AddAddress($erow["email_address"]);
if(!$tmail->Send())echo "Error sending to : ".$erow["email_address"]."<br>";
$tmail->ClearAddresses();
if( ( $start_index+$end_index )>=$total)$send_all="true";
}
}else $send_all="true";
}
/*send email to all */
if($group_id == -1 )
{
$start_index=$last_index;
$end_index=$send_cont;
$recordset=$conn->Execute("SELECT * FROM wiml_maillist ");
$total=$recordset->RecordCount();
if( ( $start_index+$end_index ) > $total ) $end_index = $total - $start_index;
$ers=$conn->SelectLimit("SELECT * FROM wiml_maillist ORDER BY email_address ASC",$end_index,$start_index);
if($ers)
{
$erows=$ers->GetArray();
foreach($erows as $erow)
{
if($erow["email_address"]==$last_address)continue;
else $last_address=$erow["email_address"];

$tmail=clone $mail;
$tmail->Body=str_replace("{name}",$erow["email_name"],$tmail->Body);
$tmail->Body=str_replace("{email}",$erow["email_address"],$tmail->Body);
$tmail->Body=str_replace("{id}",$erow["group_id"],$tmail->Body);

$tmail->AltBody=str_replace("{name}",$erow["email_name"],$tmail->AltBody);
$tmail->AltBody=str_replace("{email}",$erow["email_address"],$tmail->AltBody);
$tmail->AltBody=str_replace("{id}",$erow["group_id"],$tmail->AltBody);

$tmail->Subject=str_replace("{name}",$erow["email_name"],$mail->Subject);
$tmail->Subject=str_replace("{email}",$erow["email_address"],$mail->Subject);

if(!isAddressValid($erow["email_address"]))
   {
   $conn->Execute("DELETE FROM wiml_maillist WHERE id = ".$erow["id"]);
//variable para saber el numero de Emails Eliminados por mala direccion
  $total_emails_deleted= $total_emails_deleted  + 1 ;
   continue;
   }

$tmail->AddAddress($erow["email_address"]);
if(!$tmail->Send())echo "Error sending to : ".$erow["email_address"]."<br>";
$tmail->ClearAddresses();
if( ( $start_index+$end_index )>=$total)$send_all="true";
}
}else $send_all="true";
}
/* send to nuke users and stuff */
if($group_id == -3 )
{
$start_index=$last_index;
$end_index=$send_cont;
$recordset=$conn->Execute("SELECT * FROM $dbtable");
$total=$recordset->RecordCount();
if( ( $start_index+$end_index ) > $total ) $end_index = $total - $start_index;
$ers=$conn->SelectLimit("SELECT * FROM $dbtable ",$end_index,$start_index);
if($ers)
{
$erows=$ers->GetArray();
foreach($erows as $erow)
{
$tmail=clone $mail;
$tmail->Body=str_replace("{email}",$erow[$emailfield],$tmail->Body);
$tmail->AltBody=str_replace("{email}",$erow[$emailfield],$tmail->AltBody);
$tmail->Body=str_replace("{name}",$erow[$userfield],$tmail->Body);
$tmail->AltBody=str_replace("{name}",$erow[$userfield],$tmail->AltBody);
$tmail->Subject=str_replace("{name}",$erow[$userfield],$mail->Subject);
$tmail->Subject=str_replace("{email}",$erow[$emailfield],$mail->Subject);
$tmail->AddAddress($erow[$emailfield]);
if(!$tmail->Send())echo "Error sending to : ".$erow[$emailfield]."<br>";
$tmail->ClearAddresses();
if( ( $start_index+$end_index )>=$total)$send_all="true";
}
}else $send_all="true";
}


$last_index+=$send_cont;

?>
<html>
<head>
<title>Sending Email </title>
<meta http-equiv="Content-Type" content="text/html; charset=<?echo $charsettype?>">
<link href="admin/css/admin.css" rel="stylesheet" type="text/css">
</head>

<body onLoad="<?php if(!isset($send_all)) echo 'javascript:sendnext();'; ?>">
<script language="JavaScript" type="text/JavaScript">
      function sendnext()
      {
       window.location="admin.php?action=send&task_id=<?php echo $task_id; ?>&last_address=<?php echo $last_address; ?>&last_index=<?php echo $last_index; ?>";
      }
</script>
<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td bgcolor="#FFFFFF">
      <table width="375" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#FFFFFF"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
            <tr>
              <td width="10%"></td>
              <td width="90%"> <font color="#999999"><?php echo $lang_send_mailing; ?></font></td>
            </tr>
            <tr>
              <td colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                  <tr>
                    <td><div align="center">
                          <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                            <td bgcolor="#FFFFFF"><table width="<?php
                 if(!isset($send_all)){$tlstr=sprintf("%d",($last_index/$total)*100);$sendp=$tlstr;}
                 else $sendp = 100;
                 echo $sendp.'%';
                 ?>" border="0" cellpadding="0" cellspacing="0">
                                  <tr>
                                  <td width="10"><img src="admin/images/barleft.gif" width="10" height="20"></td>
                                  <td><img src="admin/images/barmid.gif" width="100%" height="20"></td>
                                  <td width="10"><img src="admin/images/barright.gif" width="10" height="20"></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table>

                          <?php echo $sendp.'%'; ?><br>
                          <?php
              if(!isset($send_all))
              {
              echo $lang_send_wait;
              }
              if(isset($send_all))
              {
              echo $lang_send_done;
              }

              ?></div>
                      </td>
                  </tr>
              </table></td>
            </tr>
        </table></td>
      </tr>
    </table>
    </td>
  </tr>
</table>
</body>
</html>