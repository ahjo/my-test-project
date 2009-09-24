<?php
session_destroy();
$ret="Location:admin.php";
header($ret);
?>
<META HTTP-EQUIV="Refresh" CONTENT="1;URL=admin.php">