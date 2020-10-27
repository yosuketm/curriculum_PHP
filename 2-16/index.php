<?php
//書込み用
    $testfile = "test.txt";
    $cont = "これは書込み用の文章です。";
    $conte = "本日もいい天気です";
    
    if (is_writable($testfile)) {
       
        $fp = fopen($testfile, "w");
	$FP = fopen($testfile, "w");
        fwrite($fp, $cont);
	fwrite($fp, $conte);
        fclose($fp);
	fclose($FP);        
echo "書込みが終わりました!!".'<br>';
    } else {
        echo "書込みができません!";
        exit;
    }
//読み込み用
    $TestFile = "test2.txt";
    
    if (is_readable($TestFile)) {
        $ym = fopen($TestFile, "r");
        while ($yomikomi = fgets($ym)) {
            
echo $yomikomi.'<br>';
}        
        fclose($ym);
    } else {
        echo "not readable!";
        exit;
    }

