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
if($net == $answer1){
	echo $result = "正解！";
}else{
	echo $result = "不正解･･･";
}
?></h3>
<p>②の答え</p>
<h3><?php
if($Web == $answer2){
	echo $result = "正解！";
}else{
	echo $result = "不正解･･･";
}
?></h3>
<p>③の答え</p>
<h3><?php
if($Mysql == $answer3){
	echo $result = "正解！";
}else{
	echo $result = "不正解･･･";
}
?></h3>