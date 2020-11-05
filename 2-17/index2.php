<?php
$timenow =date("Y/m/d H:i");
$Morningtime = date("Y/m/d 07:00");
$daytime = date("Y/m/d 12:00");
$nighttime = date("Y/m/d 19:00");

if($timenow >$Morningtime && $timenow < $daytime){
Echo "今".$timenow."です。"."おはようございます";
}elseif($timenow > $daytime && $timenow < $nighttime){
Echo "今".$timenow."です。"."こんにちは";
}else{
Echo "今".$timenow."です。"."こんばんは";
}

?>


