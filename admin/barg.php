<?php if(!isset($_SESSION['admin'])){echo 'Hacking attempted'; return ;} ?>
 <tr bgcolor="<?php echo $color; ?>">
     <td><?php print($row['name']); ?> ( <?php print($row["id"]); ?> ) </td>
                               <td> <div align="center"><strong><?php
        $sql = "SELECT * FROM wiml_maillist WHERE group_id = ".$row["id"];
    $recordset=$conn->Execute($sql);
        echo $recordset->RecordCount();
                                   ?></strong></div></td>
     <td><center><a href="javascript:edit_group('<?php print($row['name']); ?>','<?php print($row["id"]); ?>');"><img src="admin/images/edit.gif" border="0"></a> </center></td>
     <td><center><a href="javascript:delete_group('<?php print($row['name']); ?>','<?php print($row["id"]); ?>');"><img src="admin/images/delete.gif" border="0"></a> </center></td>
<td align="center"><a href="admin.php?action=sendmail&send_to=group&group_id=<?php print($row["id"]); ?>"><img src="admin/images/email_icon.gif" alt="" width="14" height="14" border="0"></a></td>
<td align="center"><a href="admin.php?action=edit&view_group=<?php print($row["id"]); ?>"><img src="admin/images/search_icon.gif" alt="" width="16" height="16" border="0"></a></td>
</tr>