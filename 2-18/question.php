<?php
$my_name = $_POST['my_name'];
$net = array(80,20,22,21); 
$Web = array('PHP','Python','JAVA','HTML');
$Mysql = array('join','select','insert','update');
$answer1 = $net[0];
$answer2 = $Web[3]; 
$answer3 = $Mysql[1]; 
?>

<link rel="stylesheet" href="design.css">

<p>お疲れ様です<?php echo $my_name; ?>さん
<form method="POST" action="answer.php">
<input type="hidden" name="my_name" value="<?php echo $my_name ?>"</p> 

<h2>①ネットワークのポート番号は何番？</h2>
<h3><form method="POST" action="answer.php">
   <?php foreach($net as $value){ ?>
   <input type="radio" name="net" value="<?php echo $value; ?>" /> <?php echo $value; ?>
   <?php } ?>
  <input type="hidden" name="answer1" value="<?php echo $answer1 ?>"></h3>
<h2>②Webページを作成するための言語は？</h2>
<h3><form method="POST" action="answer.php">
   <?php foreach($Web as $value){ ?>
   <input type="radio" name="Web" value="<?php echo $value; ?>" /> <?php echo $value; ?>
   <?php } ?>
<input type="hidden" name="answer2" value="<?php echo $answer2 ?>"></h3>
   <h2>③MySQLで情報を取得するためのコマンドは？</h2>
<h3><form method="POST" action="answer.php">
   <?php foreach($Mysql as $value){ ?>
   <input type="radio" name="Mysql" value="<?php echo $value; ?>" /> <?php echo $value; ?>
   <?php } ?>
   <input type="hidden" name="answer3" value="<?php echo $answer3 ?>"></h3><br>
   <input type="submit" value="回答する">