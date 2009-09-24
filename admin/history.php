<?php if(!isset($_SESSION['admin'])){echo 'Hacking attempted'; return ;} ?>
<?php
$sql = "DELETE FROM wiml_history WHERE group_id = 0";
$rs = $conn->Execute($sql);

if( isset($del))
{
$sql = "DELETE FROM wiml_history WHERE id = ".$num;
 $rs = $conn->Execute($sql);
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
                <td height="25" class="h3"><?php echo $lang_edith_title; ?></td>
                <td height="25" valign="bottom"><div align="right" class="f8"><?php echo $lang_edith_titlex; ?></div></td>
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
                function delete_history(name,id)
                {
                if( confirm ("<?php echo $lang_edith_delete_history; ?> "+ name +" ( "+ id+" )"))
                 {
                 window.location="admin.php?action=history&num="+id+"&del=true";
                 }
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
              <div align="right"></div></td>
          </tr>
        </table>
        <br>
        <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
                     <td bgcolor="#FFFFFF"><table width="100%" border="0" bgcolor="#FFFFFF">
                <tr>
                  <td width="87%"><span class="h3"><?php echo $lang_edith_editdata; ?></span><br>
                      <span class="f8"><?php echo $lang_edith_editdataex; ?></span></td>
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
                                  <td width="40%" >
                                    <div align="center"><strong><?php echo $lang_edith_subject; ?></strong></div></td>
                                  <td width="20%">
                                    <div align="center"><strong><?php echo $lang_edith_to; ?></strong></div></td>
                                  <td width="20%">
                                    <div align="center"><strong><?php echo $lang_edith_date; ?></strong></div></td>
                                  <td width="10%">
                                    <div align="center"><strong><?php echo $lang_edith_edit; ?></strong></div></td>
                                  <td width="10%">
                                    <div align="center"><strong><?php echo $lang_edith_delete; ?></strong></div></td>
                                </tr>
                                <?php
//foreach($_POST as $postvar => $postval){ ${$postvar} = $postval;
//for($i=$totalg_entries-1;$i>=0;$i--)
$color="#f9f9f9";
$recordset=$conn->Execute('SELECT  *  FROM  wiml_history ORDER BY date DESC');
$rs=$recordset->GetArray();
if(is_array($rs))
{
foreach($rs as $row)
{
if($color=="#ffffff"){$color="#f9f9f9";}
   else { $color="#ffffff";}
   include('barh.php');
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