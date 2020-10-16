<form action="result.php" method="POST">
  名前：<input type="text" name="my_name" />
  <br>
　 景品選択：
<input type="radio" name="kein" value="A賞">A賞
<input type="radio" name="kein" value="B賞">B賞
<input type="radio" name="kein" value="C賞">C賞
  <br>
個数：
    <select name="number">
      <?php for($i=1;$i<11;$i++){ ?>
	<option value="<?php echo $i;?>">
	<?php echo $i; ?>
	</option>
	<?php } ?>
 </select>
  <br>
       <input type="submit" value="申し込み" />
</form>