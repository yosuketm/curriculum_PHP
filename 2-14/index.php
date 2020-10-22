<?php

//count

$fruits =["apple","orange","banana","grape","strawberry"];
Echo "count";
Echo '<br>';
Echo count($fruits);
Echo '<br>';

//sort
$numbers = [10,17,13,18,20];
Echo "sort";
Echo '<br>';
sort($fruits);
var_dump($fruits);
Echo '<br>';
sort($numbers);
var_dump($numbers);

Echo '<br>';

//in_array

Echo "in_array";
Echo '<br>';
var_dump(in_array("orange",$fruits));
Echo '<br>';
if(in_array("grape",$fruits)){
Echo "グレープがあります";
}else{
Echo "グレープはありません";
}
Echo '<br>';
 
//implode

Echo "implode";
Echo '<br>';
$im_fruits = implode("!",$fruits);
var_dump($im_fruits);
Echo '<br>';

//explode

Echo "explode";
Echo '<br>';
$ex_fruits = explode("!",$im_fruits);
var_dump($ex_fruits);


