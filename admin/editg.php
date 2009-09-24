<?php if(!isset($_SESSION['admin'])){echo 'Hacking attempted'; return ;} ?>
<?php
if( isset($del))
{
$sql = "DELETE FROM wiml_mailgroup WHERE id = ".$num;
$conn->Execute($sql);
$sql = "DELETE FROM wiml_maillist WHERE group_id = ".$num;
$conn->Execute($sql);
//echo str_replace("{group}",$group,$lang_editg_deleted);
}

if( isset($add))
{
        $sql = "SELECT * FROM wiml_mailgroup WHERE name = '".$new_group."'";
    $recordset=&$conn->Execute($sql);
        if($recordset->RecordCount()==0)
        {
    $sql = "INSERT INTO wiml_mailgroup (fid, name) ";
    $sql .= "VALUES ('0', '".$new_group."');";

    if ($conn->Execute($sql) === false) {
    print 'error inserting: '.$conn->ErrorMsg().'<BR>';
 echo str_replace("{group}",$new_group,$lang_editg_added_error);
 }
 }//else  echo str_replace("{group}",$new_group,$lang_editg_added);
}
if( isset($edit))
{
   $sql = "UPDATE wiml_mailgroup SET name = '".$new_group."' WHERE id =".$num;
   $conn->Execute($sql);
}
?>

  <table width="770" border="0" align="center" cellpadding="0" cellspacing="0" background="admin/images/interface/bgmaintable.gif">
    <tr>
      <td width="20">&nbsp;</td>
      <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td class="h3">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="25" class="h3"><?php echo $lang_editg_list; ?></td>
                <td height="25" valign="bottom"><div align="right" class="f8"><?php echo $lang_editg_listex; ?></div></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr bgcolor="#0066CC">
          <td colspan="2"><img src="images/interface/spacer.gif" width="1" height="1"></td>
        </tr>
      </table>
        <br>
        <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="10"><strong>
              <script language="JavaScript" type="text/JavaScript">
         function add_group()
                 {
                  var a= prompt("<?php echo $lang_editg_new_name; ?>","");
                 if( a!="" && a!=null  )
                 {
                 window.location="admin.php?action=editg&new_group="+a+"&add=true";
                 }
                 }
         function search_group()
                 {
                 var a= prompt("<?php echo $lang_editg_expression; ?>","");

                 if( a!="" && a!=null )
                 {
                 window.location="admin.php?action=editg&filter="+a+"&search=true";
                 }
                 }

         function edit_group(name,group_id)
                 {
                 var a= prompt("<?php echo $lang_editg_correct_name; ?>",name);
                 if( a!="" && a!=null )
                 {
                 window.location="admin.php?action=editg&new_group="+a+"&edit=true&num="+group_id;
                 }
                 }
                function delete_group(name,group_id)
                {
                if( confirm ("<?php echo $lang_editg_delete; ?> "+ name +" ( "+ group_id+" )"))
                 {
                 window.location="admin.php?action=editg&num="+group_id+"&del=true";
                 }
                }

                function edit_popup()
                 {
          var edit_win='admin.php?action=editwin';
                  var win=window.open(edit_win,"Editor_window",'scrollbars=no,width=400,height=250');
                  win.focus();
                 }

                function refresh()
                {
                 window.location="admin.php?action=editg";
                }
                 </script>
              <script language="JavaScript" type="text/JavaScript">
<!--

function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
        </script>
            </strong> <strong> </strong></td>
            <td width="90%">
              <div align="right">
                <table border="0">
                  <tr>
                    <td><strong><img src="admin/images/add_icon.gif" width="16" height="16"></strong></td>
                    <td><a href="javascript:add_group();" class="menulink2"><?php echo $lang_editg_add; ?></a> </td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td><strong><img src="admin/images/refresh_icon.gif" width="16" height="16"></strong></td>
                    <td><a href="javascript:refresh();" class="menulink2"><?php echo $lang_editg_refresh; ?></a> </td>
                  </tr>
                </table>
            </div></td>
          </tr>
        </table>
        <br>
        <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
           <tr>

            <td bgcolor="#FFFFFF"><table width="100%" border="0" bgcolor="#FFFFFF">
                <tr>
                  <td width="87%"><span class="h3"><?php echo $lang_editg_editdata; ?></span><br>
                      <span class="f8"><?php echo $lang_editg_editdataex; ?></span></td>
                </tr>
              </table><br>
                <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" background="admin/images/interface/spacer_horizontal.gif">
                  <tr>
                    <td width="612"><img src="admin/images/interface/spacer_horizontal.gif" width="1" height="1"></td>
                  </tr>
                </table>
                <br>
                <table width="90%" border="0" align="center" cellpadding="0" cellspacing="1">
                  <tr>
                    <td><br>
                        <table width="100%" border="0" cellspacing="1" cellpadding="0">
                          <tr>
                            <td bgcolor="#CCCCCC">
                              <table width="100%" border="0" cellspacing="1" cellpadding="4">
                                <tr bgcolor="#FFFFFF">
                                  <td width="60%" >
                                    <div align="center"><strong><?php echo $lang_editg_name; ?></strong></div></td>
                                  <td width="20%">
                                    <div align="center"><strong><?php echo $lang_editg_subscribers; ?></strong></div></td>
                                  <td width="10%">
                                    <div align="center"><strong><?php echo $lang_editg_ipedit; ?></strong></div></td>
                                  <td width="10%">
                                    <div align="center"><strong><?php echo $lang_editg_ipdelete; ?></strong></div></td>
                                  <td width="10%">
                                    <div align="center"><strong><?php echo $lang_sendmail_sendbutton; ?></strong></div></td>
                                  <td width="10%">
                                    <div align="center"><strong><?php echo $lang_see_group; ?></strong></div></td>

                                </tr>
                                <?php
                                //foreach($_POST as $postvar => $postval){ ${$postvar} = $postval;
                                //for($i=$totalg_entries-1;$i>=0;$i--)
                                $color="#f9f9f9";
                                $recordset=$conn->Execute('SELECT  *  FROM  wiml_mailgroup');
                                $rs=$recordset->GetArray();
                                if(is_array($rs))
                                {
                                foreach($rs as $row)
                                {
                                if($color=="#ffffff"){$color="#f9f9f9";}
                                   else { $color="#ffffff";}
                                   include('barg.php');
                                }
                                }

                                          ?>
                            </table></td>
                          </tr>
                      </table></td>
                  </tr>
                </table>
                <br>
            </td>

          </tr>

        </table></td>
      <td width="20">&nbsp;</td>
    </tr>
  </table>