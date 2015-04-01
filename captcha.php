<?php

session_start();
$a=rand(1000,9999);
$_SESSION["phrase"]=$a;

$im=imagecreatetruecolor(300,100);

$red=imagecolorallocate($im, 0xFF, 0x00, 0x00);
$black=imagecolorallocate($im, 0x00, 0x00, 0x00);

imagefilledrectangle($im, 0, 0, 299, 99, $red);

$font_file = "arial.ttf";

imagefttext($im, 20, 5, 105, 55, $black, $font_file, $a);

header("Content-Type: image/png");

imagepng($im);

imagedestroy($im);
