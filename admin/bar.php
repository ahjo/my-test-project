<?php if(!isset($_SESSION['admin'])){echo 'Hacking attempted'; return ;} ?>
 <tr bgcolor="<?php echo $color; ?>">
     <td><a href="admin.php?action=sendmail&email_id=<?php print($row['email_address']); ?>"><img src="admin/images/email_icon.gif" alt="<?php echo $lang_send_email; ?>" width="14" height="14" border="0"></a> <?php print($row['email_address']); ?> ( <?php print($row['email_name']); ?> ) </td>
     <td><center><?php echo date("D j M Y",$row['email_date']);?></center></td>
         <td><center><?php print($row['email_ip']); ?></center></td>
     <td><center><a href="javascript:edit_entry('<?php print($row['email_name']); ?>','<?php print($row['email_address']); ?>','<?php echo $row['id']; ?>');"><img src="admin/images/edit.gif" border="0"></a> </center></td>
     <td><center><a href="javascript:delete_entry('<?php print($row['email_address']); ?>','<?php echo $row['id']; ?>');"><img src="admin/images/delete.gif" border="0"></a> </center></td>
</tr>