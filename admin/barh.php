<?php if(!isset($_SESSION['admin'])){echo 'Hacking attempted'; return ;} ?>
 <tr bgcolor="<?php echo $color; ?>">
     <td><?php print($row['subject']); ?> </td>
                               <td> <div align="center"><?php
                                                   if($row['group_id']==-2) echo $row['email_address'];
                                                   else if($row['group_id']==-1) echo "All";
                                                   else if($row['group_id']>0){
                                                   $recordset=$conn->Execute("SELECT * FROM wiml_mailgroup WHERE id = ".$row['group_id']);
                                                   if($recordset)
                                                   {
                                                   $drow=$recordset->GetArray();
                                                   echo $drow[0]['name'];
                                                   }
                                                   }   ?></div></td>
                                   </td>
                               <td> <div align="center"><?php echo date("D j M Y",$row['date']);
                                   ?></div></td>
<td><center><a href="admin.php?action=sendmail&history=true&task_id=<?php print($row["id"]); ?>"><img src="admin/images/edit.gif" border="0"></a> </center></td>
     <td><center><a href="javascript:delete_history('<?php print($row['subject']); ?>','<?php print($row["id"]); ?>');"><img src="admin/images/delete.gif" border="0"></a> </center></td>
</tr>