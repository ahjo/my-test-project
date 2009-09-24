<?php if(!isset($_SESSION['admin'])){echo 'Hacking attempted'; return ;} ?>
<style type="text/css">
<!--
.style1 {color: #CCCCCC}
-->
</style>


 <table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
   <tr>
     <td background="admin/images/interface/bgmaintable.gif"><table width="730" border="0" align="center" cellpadding="5" cellspacing="0">
       <tr>
         <td width="59%"><?php echo $lang_tail_total; ?>
             <?php
                if($database=="custom")$sql = "SELECT * FROM $dbtable";
                 else $sql = "SELECT * FROM wiml_maillist";

    if($recordset=$conn->Execute($sql))
        {
        echo $recordset->RecordCount();
        } else { echo 0;}
        ?></td>
         <td width="41%"><div align="right">&nbsp;<img  class="menulink2" src="admin/images/vote_icon.gif" alt="<?php echo $lang_main_vote; ?>" width="20" height="20" border="0" style="cursor: pointer; cursor: hand;" onClick="javascript:{var win= window.open('admin.php?action=vote','vote','scrollbars=no,width=400,height=300');}">&nbsp;<a href="admin.php?action=logout"><img src="admin/images/logout.gif" alt="Logout" width="20" height="20" border="0"></a></div></td>
       </tr>
     </table>     </td>
   </tr>
 </table>
 <div align="center">
   <table width="770" height="49" border="0" cellpadding="0" cellspacing="0" background="admin/images/interface/bottom.gif">
     <tr>
       <td><div align="right"><span class="small" style="color:#BAB9B9"><strong>WEB</strong>insta mailing manager V1.3<br>
  Copyright 2004 <strong>WEB</strong>insta</span> </div></td>
       <td width="40"><div align="right"></div></td>
     </tr>
   </table>
   </tr>
 </div>
<tr>
  <td width="10" height="10" background="admin/images/interface/bottom_left_corner.png"></td>
  <td background="admin/images/interface/bottom_line.png"></td>
  <td width="10" height="10" background="admin/images/interface/bottom_right_corner.png"></td>
</tr>
 <div align="center">
  </table>
  </td>
 </div>
<td background="admin/images/interface/right_line.png"></td>
 <div align="center">
   </tr>
 </div>
<tr>
  <td width="10" height="10" background="admin/images/interface/bottom_left_corner.png"></td>
  <td background="admin/images/interface/bottom_line.png"></td>
  <td width="10" height="10" background="admin/images/interface/bottom_right_corner.png"></td>
</tr>
 <div align="center">
</div>
 </div>
</BODY></HTML>