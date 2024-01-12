<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

//画像を作る
$IMG = imagecreatetruecolor(1000,60);
imagefilledrectangle($IMG, 0, 0, 599, 399, 0x00000);
?>