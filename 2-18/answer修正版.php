<?php 
$my_name = $_POST['my_name'];
$net =  $_POST['net'];
$Web = $_POST['Web'];
$Mysql = $_POST['Mysql'];
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2']; 
$answer3 = $_POST['answer3'];
?>

<link rel="stylesheet" href="design.css">
<p><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<h3><?php
Function reslutnet(){
if($net == $answer1){
	echo $reslutnet = "正解！";
}else{
	echo $reslutnet = "不正解･･･";
}
}
reslutnet(answer1);
?>
</h3>
<p>②の答え</p>
<h3><?php
Function resultWeb(){
if($Web == $answer2){
	echo $resultWeb = "正解！";
}else{
	echo $resultWeb = "不正解･･･";
}
}
resultWeb();
?>
</h3>
<p>③の答え</p>
<h3><?php
Function resultsql(){
if($Mysql == $answer3){
	echo $resultsql = "正解！";
}else{
	echo $resultsql = "不正解･･･";
}
}
resultsql();
?></h3>