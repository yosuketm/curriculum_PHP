<?php
$i = 1;
 
while( $i <= 40 ) { 
    $rand = rand(1, 6); //ここでサイコロの出目を決める。
    echo $i.'回目＝'.$rand.'<br />';
    $randsum += $rand; //n回目の出目数に今回の出目数を足す
   
 if( $randsum >= 40 ) { // 40を超えたらループを抜ける。
        echo '合計'.$i."でゴールしました。";
        break;
    }
    $i++; // サイコロに回数
}

