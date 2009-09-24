<?php if(!isset($_SESSION['admin'])){echo 'Hacking attempted'; return ;} ?>
<?php

$recordset=$conn->Execute('SELECT  *  FROM  wiml_maillist WHERE group_id= '.$group_id);
$rs=$recordset->GetArray();
$fp=fopen($absolute_path."/temp/data.csv","w");
foreach($rs as $row)
{
fwrite($fp,"\"".$row['email_address']."\",\"".$row['email_name']."\"\r\n",strlen("\"".$row['email_address']."\",\"".$row['email_name']."\"\r\n"));
}
fclose($fp);
header("Location:temp/data.csv");
?>