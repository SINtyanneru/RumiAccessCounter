<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

//画像を作る
$IMG = imagecreatetruecolor(100,60);
imagefilledrectangle($IMG, 0, 0, 599, 399, 0x00000);

//画像として出力
header("Content-Type: image/png;");
imagejpeg($IMG, NULL, 100);
imagedestroy($IMG);
?>