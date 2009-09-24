<?php
if(isset($_GET['absolute_path']))
 {
echo "no access from here !!";
exit;
}
$connection=false;
if($database=="none")
{
include($absolute_path.'inc/adodbt/db.inc');
$conn = &ADONewConnection();
$connection=true;
$conn->PConnect("","","",$absolute_path."data/");
}else
{
include($absolute_path.'inc/adodb/adodb.inc.php');
if($database=="mysql")
{
$conn = &ADONewConnection('mysql');
$connection=$conn->Connect($dbhostname,$dbusername,$dbpassword,$dbname);
}else if($database=="postgres7")
{
$conn = &ADONewConnection('postgres7');
$connection=$conn->Connect($dbhostname,$dbusername,$dbpassword,$dbname);
}
else if($database=="mssql")
{
$conn = &ADONewConnection('odbc_mssql');
$dsn = "Driver={SQL Server};Server=$dbhostname;Database=$dbname;";
$connection=$db->Connect($dsn,$dbusername,$dbpassword);
}else
{
$conn = &ADONewConnection('mysql');
$connection=$conn->Connect($dbhostname,$dbusername,$dbpassword,$dbname);
}
}
if($connection==false)
{
                die ( "Couldn't open connect : ".$conn->ErrorMsg()  .". Please go back and check settings ");
}

?>