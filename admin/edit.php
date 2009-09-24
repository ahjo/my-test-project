<?php if(!isset($_SESSION['admin'])){echo 'Hacking attempted'; return ;} ?>
<?php
if(!isset($view_group))$view_group=-1;
if(!isset($view_start))$view_start=0;
if( isset($del))
{
$sql = "DELETE FROM wiml_maillist WHERE id = ".$num;
 $rs = $conn->Execute($sql);
}
if( isset($add))
{
        $sql = "SELECT * FROM wiml_maillist WHERE email_address = '".$new_email."' AND group_id =".$view_group;
    $recordset=$conn->Execute($sql);
        if($recordset->RecordCount()==0)
        {
    $sql = "INSERT INTO wiml_maillist (email_name,email_address,email_ip,email_date,group_id)";
           $sql .= "VALUES ('".$new_name."', '".$new_email."', '".$_SERVER['REMOTE_ADDR']."', '".time()."', $view_group)";
    if ($conn->Execute($sql) == false) {
    print 'error inserting: '.$conn->ErrorMsg().'<BR>';
 echo str_replace("{group}",$new_group,$lang_edit_added_error);
 }
 }//else  echo str_replace("{group}",$new_group,$lang_editg_added);
}

 if(isset($edit))
 {
   $sql = "SELECT * FROM wiml_maillist WHERE id =".$num;
     $recordset=$conn->Execute($sql);
   $row=$recordset->GetArray();
   $sql = "UPDATE wiml_maillist SET email_name = '".$new_name."', email_address = '".$new_email."', email_ip = '".$row[0]['email_ip']."', email_date = '".$row[0]['email_date']."', group_id = '".$row[0]['group_id']."' WHERE id = ".$num;
   if(!$conn->Execute($sql))
   {
   echo "There was an error updating :".$conn->ErrorMsg();
   }
 }

/*
Modify by Moises Hdez. www.hgmnetwork.com
Modify to count if a filter

*/
switch ($view_group){
case -1:
case -2:
//search in all group
if (isset($filter)){
$recordset=$conn->Execute("SELECT  *  FROM  wiml_maillist WHERE email_address like '%filter%';");
} else {
$recordset=$conn->Execute("SELECT  *  FROM  wiml_maillist;");
};
break;
default:
//select a group
if ((isset($filter)) & ($view_group !=-1)){
//searhc in one group and a filter
$recordset=$conn->Execute("SELECT  *  FROM  wiml_maillist WHERE group_id= ".$view_group." and email_address like '%$filter%';");
} else {
//searhc in one group and Not a filter
$recordset=$conn->Execute("SELECT  *  FROM  wiml_maillist WHERE group_id= ".$view_group);

};
};// end of switch

$total_group_entries=$recordset->RecordCount();
?>

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0" background="admin/images/interface/bgmaintable.gif">
  <tr>
    <td width="20">&nbsp;</td>
    <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td class="h3">
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="25" class="h3"><?php echo $lang_edit_list; ?></td>
              <td height="25" valign="bottom"><div align="right" class="f8"><?php echo $lang_edit_listex; ?></div></td>
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
         function add_entry(group)
                 {
                 if(group=="-1"){ alert ("<?php echo $lang_edit_nomailgroup; ?>"); return; }
                 var b= prompt("<?php echo $lang_edit_new_name; ?>","");
                 var a= prompt("<?php echo $lang_edit_new; ?>","");

                 if( a!="" && a!=null )
                 {
                 window.location="admin.php?action=edit&new_email="+a+"&new_name="+b+"&add=true&view_group="+group;
                 }
                 }
         function search_entry(group)
                 {
                 if(group=="-1"){ alert ("<?php echo $lang_edit_nomailgroup; ?>"); return; }
                 var a= prompt("<?php echo $lang_edit_expression; ?>","");

                 if( a!="" && a!=null )
                 {
                 window.location="admin.php?action=edit&filter="+a+"&search=true&view_group="+group;
                 }
                 }
 function search_entry2(group)
                 {

                 if(group=="-1"){ alert ("<?php echo $lang_edit_nomailgroup; ?>"); return; }
         var search_win="admin.php?action=search&view_group="+group;
         var win=window.open(search_win,"search_win",'scrollbars=no,width=400,height=200');
         win.focus();
                 }
         function edit_entry(name,email,pos)
                 {
                 var b= prompt("<?php echo $lang_edit_correct_name; ?>",name);
                 var a= prompt("<?php echo $lang_edit_correct; ?>",email);

                 if( a!="" && a!=null )
                 {
                 window.location="admin.php?action=edit&new_email="+a+"&new_name="+b+"&edit=true&num="+pos+"&view_group="+<?php echo $view_group; ?>;
                 }
                 }
                function delete_entry(email,pos)
                {
                if( confirm ("<?php echo $lang_edit_delete; ?>"+ email))
                 {
                 window.location="admin.php?action=edit&num="+pos+"&del=true&email="+email+"&view_group="+<?php echo $view_group; ?>;
                 }
                }
                function refresh(group)
                {
                 window.location="admin.php?action=edit&view_group="+group;
                }
         function export_entry(group)
                 {
                 if(group=="-1"){ alert ("<?php echo $lang_edit_nomailgroup; ?>"); return; }
          var export_win='admin.php?action=export&group_id=<?php echo $view_group; ?>';
                  var win=window.open(export_win,"Export");
                  win.focus();

                 }
         function import_entry(group)
                 {
                 if(group=="-1"){ alert ("<?php echo $lang_edit_nomailgroup; ?>"); return; }
         var import_win="admin.php?action=import&view_group="+group;
         var win=window.open(import_win,"Import",'scrollbars=no,width=400,height=250');
                 win.focus();
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
            </strong>
              <table width="200" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td>&nbsp; </td>
                  <td>
                    <form name="form1">
              <div align="center">
                <select name="select" class="textbox" onChange="MM_jumpMenu('parent',this,0)">
                  <option value="admin.php?action=edit" <?php if(!isset($view_group)) echo 'selected';?>><?php echo $lang_edit_jump_group; ?></option>
                  <?php
                                  $recordset=$conn->Execute('SELECT  *  FROM  wiml_mailgroup');
                                  $rs=$recordset->GetArray();
                                  if(is_array($rs))
                                  {
                                  foreach($rs as $row)
                                  {
                                         $selected="";
                                        if(!isset($view_group))$view_group="-1";
                                        if($row['id']==$view_group)$selected="selected";
                                    echo '<option value="admin.php?action=edit&view_group='.$row['id'].'" '.$selected.' >'.$row['name'].'</option>';
                                  }
                                  }
                                  if(!isset($view_group))$group_string="";
                                  else $group_string="&view_group=$view_group";

                                   ?>
<option value="admin.php?action=edit&view_group=-2" <?php if(isset($view_group) & ($view_group == -2)) echo 'selected';?>><?php echo $lang_show_all_group; ?></option>

                </select>
              </div>
            </form></td>
                  <td>&nbsp; </td>
                </tr>
              </table>
              <strong> </strong> <strong> </strong></td>
          <td width="90%">
            <div align="right">
              <table border="0">
                <tr>
                  <td><strong><img src="admin/images/export_icon.gif" width="16" height="16"></strong></td>
                  <td><a href="javascript:export_entry('<?php echo $view_group; ?>');" class="menulink2" ><?php echo $lang_edit_export; ?></a> </td>
                  <td>&nbsp;&nbsp;</td>
                  <td><strong><img src="admin/images/import_icon.gif" width="16" height="16"></strong></td>
                  <td><a href="javascript:import_entry('<?php echo $view_group; ?>');" class="menulink2"><?php echo $lang_edit_import; ?></a> </td>
                  <td>&nbsp;&nbsp;</td>
                  <td><strong><img src="admin/images/add_icon.gif" width="16" height="16"></strong></td>
                  <td><a href="javascript:add_entry('<?php echo $view_group; ?>');" class="menulink2"><?php echo $lang_edit_add; ?></a> </td>
                  <td>&nbsp;&nbsp;</td>
                  <td><strong><img src="admin/images/search_icon.gif" width="16" height="16"></strong></td>
                  <td><a href="javascript:search_entry2('<?php echo $view_group; ?>');" class="menulink2"><?php echo $lang_edit_search; ?></a> </td>
                  <td>&nbsp;&nbsp;</td>
                  <td><strong><img src="admin/images/refresh_icon.gif" width="16" height="16"></strong></td>
                  <td><a href="javascript:refresh('<?php echo $view_group; ?>');" class="menulink2"><?php echo $lang_edit_refresh; ?></a> </td>
                </tr>
              </table>
          </div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><br>
              <?php
        if($view_group!=-1)
        {
//this is for the filter and add search=true
if (!isset($str_page)){$str_page="";}
if (isset($filter)){ $str_page="&filter=$filter"."&search=true";};

        ?>
              <table width="200" border="0" align="right" cellpadding="0" cellspacing="0">
                <tr>
                  <td>
                    <?php
                                if($view_start>=25)
                                echo'<a href="admin.php?action=edit&view_start='.($view_start-25).'&view_group='.$view_group.$str_page.'"><img src="admin/images/previous_icon.gif" width="16" height="16" border="0"></a>';
                                ?>
                  </td>
                  <td>
                   <form name="form1">
              <div align="center">
                <select name="menu1" class="textbox" onChange="MM_jumpMenu('parent',this,0)">
                  <option><?php echo $lang_edit_jump; ?></option>
                  <?php for($j=0;$j<$total_group_entries;$j=$j+25)
                                            {
$selected_page=($j == $view_start) ? " selected":"";
                                            echo "<option value='admin.php?action=edit&view_start=$j&view_group=".$view_group.$str_page."'$selected_page>$j a ".($j+25)."</option>";
                                                }
                                   ?>
                </select>
              </div>
            </form></td>
                  <td>
                    <?php
                                if(25<=$total_group_entries-$view_start)
                                echo'<a href="admin.php?action=edit&view_start='.($view_start+25).'&view_group='.$view_group.$str_page.'"><img src="admin/images/next_icon.gif" width="16" height="16" border="0"></a>';
                                ?>
                  </td>
                </tr>
              </table>
              <?php
          }
          ?>
              <div align="right"></div></td>
        </tr>
      </table>
      <br>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td bgcolor="#FFFFFF"><table width="100%" border="0" bgcolor="#FFFFFF">
              <tr>
                <td width="87%"><span class="h3"><?php echo $lang_edit_editdata; ?></span> <br>
                    <span class="f8"><?php echo $lang_edit_editdataex; ?></span>
<br>
<?php

if ($total_group_entries>0){ echo $lang_total_group_entries ." <strong>". $total_group_entries."</strong>";};?>
                    </td>
              </tr>
            </table><br>
              <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" background="admin/images/interface/spacer_horizontal.gif">
                <tr>
                  <td width="612"><img src="admin/images/interface/spacer_horizontal.gif" width="1" height="1"></td>
                </tr>
              </table>
              <br>
              <?php
          if($view_group!=-1)
          {
          ?>
              <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
                <tr>
                  <td><br>
                      <table width="100%" border="0" cellspacing="1" cellpadding="0">
                        <tr>
                          <td bgcolor="#CCCCCC">
                            <table width="100%" border="0" cellspacing="1" cellpadding="4">
                              <tr bgcolor="#FFFFFF">
                                <td width="30%" >
                                  <div align="center"><strong><?php echo $lang_email_name; ?></strong></div></td>
                                <td width="20%" bgcolor="#FFFFFF"><div align="center"><strong><?php echo $lang_edit_submitted; ?></strong></div></td>
                                <td width="20%" bgcolor="#FFFFFF"><div align="center"><strong><?php echo $lang_edit_ip; ?></strong></div></td>
                                <td width="10%">
                                  <div align="center"><strong><?php echo $lang_edit_ipedit; ?></strong></div></td>
                                <td width="10%">
                                  <div align="center"><strong><?php echo $lang_edit_ipdelete; ?></strong></div></td>
                              </tr>
                              <?php

//$end_index=25; // there will be 25 views per page
//if($end_index>$total_group_entries)$end_index=$total_group_entries;

//$temp_index=$total_group_entries;
$start_index=$view_start;
$end_index=25;
if(($start_index+$end_index)>$total_group_entries){$end_index=$total_group_entries-$start_index;}
if(isset($search))$search_str="AND email_address LIKE '%$filter%'";
else $search_str='';



//modify By Moises Hdez. www.hgmnetwork.com to search in all groups
if (!isset($filter)){$filter="";};
if ($view_group>0){
//search on any group
$recordset=$conn->SelectLimit('SELECT  *  FROM  wiml_maillist WHERE group_id= '.$view_group.' '.$search_str.' ORDER BY email_date DESC',$end_index,$start_index);
} else {
//search on all group
$recordset=$conn->SelectLimit("SELECT  *  FROM  wiml_maillist WHERE email_address LIKE '%$filter%' ORDER BY email_date DESC",$end_index,$start_index);

};//end of if ($view_group>0){


echo $conn->ErrorMsg();
$rs=$recordset->GetArray();
$color="#f9f9f9";

if(is_array($rs))
{
//modify By Moises Hdez. www.hgmnetwork.com to search in all groups
if ((isset($filter) & (isset($search)))){
$total_result_entries=$recordset->RecordCount();
echo "<b>".$lang_search_text_filter. $total_result_entries." Emails </b>";
};
foreach($rs as $row)
{
if($color=="#ffffff"){$color="#f9f9f9";}
   else { $color="#ffffff";}
        include('bar.php');
}
}


                                          ?>
                          </table></td>
                        </tr>
                    </table></td>
                </tr>
              </table>
              <?php
          }else
          {
          echo $lang_edit_select;
          }
          ?>
              <br>
          </td>
        </tr>
      </table></td>
    <td width="20">&nbsp;</td>
  </tr>
</table>