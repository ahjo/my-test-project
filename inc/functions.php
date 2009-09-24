<?php
$fd="yes";
$date = time();
function rnline( $text )
{
$text=str_replace("\n","<br>",$text);
return $text ;
}
function pnline( $text )
{
$text=str_replace("<br>","\n",$text);
return $text ;
}

function html ( $text )
{
$text=str_replace(">",";&gt",$text);
$text=str_replace("<",";&gt",$text);
$text=str_replace("\n","<br>",$text);
return $text ;
}
function isAddressValid($EmailAddress)
 {
        if(ereg("^[^@ ]+@([a-zA-Z0-9\-]+\.)+([a-zA-Z0-9\-]{2}|net|com|gov|mil|org|edu|int)\$",$EmailAddress)) return true;
        else return false;
 }
?>