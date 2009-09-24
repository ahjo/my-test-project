<?php if(!isset($_SESSION['admin'])){echo 'Hacking attempted'; return ;} ?>
<?php
$fp=fopen("admin/templates/".$template."/email.htm","r");
$html=fread($fp,filesize("admin/templates/".$template."/email.htm"));
fclose($fp);
$html=str_replace("{content}",$content,$html);
$html=str_replace("{ulink}","<a href=\"".$website.$main_dir."unsubscribe ID\">",$html);
$html=str_replace("{/ulink}","</a>",$html);
$html=str_replace("images/",$website.$main_dir."admin/templates/".$template."/images/",$html);
echo $html;
?>