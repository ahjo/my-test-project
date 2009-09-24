<?php if(!isset($_SESSION['admin'])){echo 'Hacking attempted'; return ;} ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>WEBinsta Import email addresses </title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $lang_charset ?>">
<LINK title=style-sheet href="admin/css/admin.css" type=text/css rel=stylesheet>
</head>

<body background="admin/images/interface/backgd.gif" >
<div id="dhtmltooltip"></div>
<script language="javascript" src="admin/js/tooltip.js"></script>
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
          <td width="10%"><div align="center"><img src="admin/images/import_icon.gif" width="16" height="16"></div></td>
          <td width="90%"><span class="h3"><?php echo $lang_import_adress; ?></span><br>
            <span class="f8"><?php echo $lang_import_adressex; ?></span></td>
        </tr>
        <tr>
          <td colspan="2" valign="top"><table width="85%" border="0" align="center" cellpadding="0" cellspacing="0" background="admin/images/interface/spacer_horizontal.gif">
              <tr>
                <td ><img src="admin/images/spacer.gif" width="1" height="1"></td>
              </tr>
            </table>

            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><?php
                                if(!isset($_FILES['filename']['tmp_name']))$_FILES['filename']['tmp_name']='';
                                if(strlen($_FILES['filename']['tmp_name'])==0) { ?><form name="form" method="post" action="admin.php?action=import"   enctype="multipart/form-data" >
                    <input name="MAX_FILE_SIZE" type="hidden" id="MAX_FILE_SIZE2" value="200000">
                    <br>
                    <table border="0" align="center" cellpadding="5" cellspacing="0">
                      <tr>
                        <td width="16"><DIV onMouseover="ddrivetip('<?php echo $lang_import_group_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0>
                          </div></td>
                        <td width="123"><?php echo $lang_import_group;         ?></td>
                        <td width="185"><?php
                                                $recordset=$conn->Execute("SELECT * FROM wiml_mailgroup WHERE id=".$view_group);
                                                $row=$recordset->GetArray();
                                                echo $row[0]['name'];
                                                ?></td>
                      </tr>
                      <tr>
                        <td><DIV onMouseover="ddrivetip('<?php echo $lang_import_import_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0>
                          </div></td>
                        <td><?php echo $lang_import_import; ?></td>
                        <td><input name="filename" type="file" class="textbox" size="20"></td>
                      </tr>
                      <tr>
                        <td colspan="3"><input name="view_group" type="hidden" id="view_group" value="<?php echo $view_group; ?>">
                          <input name="import" type="hidden" id="import_submit" value="true">
                        </td>

                      </tr>
                      <tr>
                        <td colspan="3"><div align="center">
                            <table border="0" cellpadding="0" cellspacing="0"  onClick="javascript:document.form.submit()" style="cursor:hand">
                              <tr>
                                <td><img src="admin/images/button_l.gif" width="9" height="24"></td>
                                <td width="70" background="admin/images/button_m.gif">
                                  <div align="center"><strong><font color="#FFFFFF"><?php echo $lang_import_next; ?></font></strong></div></td>
                                <td><img src="admin/images/button_r.gif" width="8" height="24"></td>
                              </tr>
                            </table>
                          </div></td>
                      </tr>
                    </table>
                  </form>
                  <? } else { ?>
                  <script language="JavaScript" type="text/JavaScript">
function close_win()
{
window.opener.location="admin.php?action=edit";
window.close();
}

                                  </script>
                  <table border="0" align="center" cellpadding="5" cellspacing="0">
                    <tr>
                      <td width="115%"><div align="center">
                          <p>&nbsp;</p>
                        </div></td>
                    </tr>
                    <tr>
                      <td width="115%"><div align="center">
                          <?php
                                          $filename = $_FILES['filename']['tmp_name'];
                                        $filename_name = $_FILES['filename']['name'];
                                          if(is_file($filename))
{
$email_file="temp/".$filename_name;
if(copy($filename,$email_file))
{

$fp=fopen($email_file,"r");
$m_ctr=0;
while($data=fgetcsv($fp,1024,","))
{
$insert_email=$data[0];
if(isset($data[1]))$insert_name=$data[1];
else $insert_name='';
$conn->Execute("INSERT INTO wiml_maillist ( email_name , email_address , email_ip , email_date , group_id) VALUES ( '".$insert_name."', '".$insert_email."','".$_SERVER['HTTP_HOST']."', '".time()."', ".$view_group.")");
$m_ctr++;
}
fclose($fp);
echo '<br>The file <b>'.$filename_name.'</b> was successfully imported and <b>'.$m_ctr.'</b> addresses were imported from it .';
}
else echo '<br>There was an error importing the file <b>'.$filename_name.'</b>.';
}
                                          ?>
                        </div></td>
                    </tr>
                    <tr>
                      <td><p align="center">&nbsp;</p>
                        </td>
                    </tr>
                    <tr>

                      <td>
                      <div align="center">
                            <table border="0" cellpadding="0" cellspacing="0"  onClick="javascript:window.close()" style="cursor:hand">
                              <tr>
                                <td><img src="admin/images/button_l.gif" width="9" height="24"></td>
                                <td width="70" background="admin/images/button_m.gif">
                                  <div align="center"><strong><font color="#FFFFFF"><?php echo $lang_import_close; ?></font></strong></div></td>
                                <td><img src="admin/images/button_r.gif" width="8" height="24"></td>
                              </tr>
                            </table>
                          </div>
                      </td>
                    </tr>
                  </table>
                  <?php } ?> </td>
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