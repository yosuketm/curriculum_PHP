<?php
//ceil切上
$a = 6.9;
Echo "ceil切上";
Echo '<br>';
Echo ceil($a);
Echo '<br>';

//floor切捨
$b = 6.9;
Echo "floor切捨";
Echo '<br>';
Echo floor($b);
Echo '<br>';

//round四捨五入
$c = 4.5;
$d = 4.3;

Echo "round四捨五入";
Echo '<br>';
Echo round($c);
Echo '<br>';
Echo round($d);
Echo '<br>';

//pi円周率
Echo "pi円周率";
Echo '<br>';
Echo pi();
Function circleArea($e){
	$circle_area = $e * $e * pi();
Echo $circle_area;
}
circleArea(3);
Echo '<br>';

//mt_rand乱数
Echo "mt_rand乱数";
Echo '<br>';
Echo mt_rand(1,500);
Echo '<br>';

//strlen文字列の長さ
$f = "houseroom";
Echo "strlen文字列の長さ";
Echo '<br>';
Echo strlen($f);
Echo '<br>';

//strpos検索
Echo "strpos検索";
Echo '<br>';
Echo strpos($f,"s");
Echo '<br>';

//substr文字の切取
Echo "substr文字の切取";
Echo '<br>';
Echo substr($f,4,4);
Echo '<br>';

//str_replace置換
Echo "replace置換";
Echo '<br>';
Echo str_replace("house","HOUSE",$f);
Echo '<br>';

//マルチバイト文字列
$g = "さいたまけん";
Echo strlen($g);
Echo '<br>';
Echo mb_strlen($g);
Echo '<br>';

//printfフォーマット化した文字列を出力
$h = "エレキギター";
$i = 4;
$j = "ベース";
$k = 2;

Echo "printfフォーマット化した文字列を出力";
Echo '<br>';
Echo "私が持っている".$h."は".$i."本です。";
Echo '<br>';
printf("私が持っている%sは%d本です。",$h,$i);
Echo '<br>';
printf("私が持っている%sは%d本です。尚%sは%d本持っています。",$h,$i,$j,$k);
Echo '<br>';
printf("私が持っている%sは%02d本です。尚%sは%02d本持っています。",$h,$i,$j,$k);
Echo '<br>';

//sprintf変数に代入できるprintf
Echo "sprintf変数に代入できるprintf";
Echo '<br>';
$l = sprintf("私が持っている%sは%02d本です。尚%sは%02d本持っています。",$h,$i,$j,$k);
Echo $l;






