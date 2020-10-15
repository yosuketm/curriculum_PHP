<?php

function getskArea($Ver,$width,$height) {
	$area = $Ver * $width * $height;
	print "直方体の体積は".$area."です。";
}

getskArea(5,10,8);