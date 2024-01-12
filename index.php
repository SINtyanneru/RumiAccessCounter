<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

$FONT_NAME = "LATIN";
$INT_IMG_FONT = array(
	"0" => imagecreatefrompng(__DIR__."/FONT/".$FONT_NAME."/0.png"),
	"1" => imagecreatefrompng(__DIR__."/FONT/".$FONT_NAME."/1.png"),
	"2" => imagecreatefrompng(__DIR__."/FONT/".$FONT_NAME."/2.png"),
	"3" => imagecreatefrompng(__DIR__."/FONT/".$FONT_NAME."/3.png"),
	"4" => imagecreatefrompng(__DIR__."/FONT/".$FONT_NAME."/4.png"),
	"5" => imagecreatefrompng(__DIR__."/FONT/".$FONT_NAME."/5.png"),
	"6" => imagecreatefrompng(__DIR__."/FONT/".$FONT_NAME."/6.png"),
	"7" => imagecreatefrompng(__DIR__."/FONT/".$FONT_NAME."/7.png"),
	"8" => imagecreatefrompng(__DIR__."/FONT/".$FONT_NAME."/8.png"),
	"9" => imagecreatefrompng(__DIR__."/FONT/".$FONT_NAME."/9.png"),
);

$AC_DATA = array(2,5,6,5,1,2);

//画像を作る
$IMG = imagecreatetruecolor(100,30);
imagefilledrectangle($IMG, 0, 0, 599, 399, 0x00000);

$X = 0;//X軸
foreach($AC_DATA as $COUNT){
	//画像を貼っつける
	imagecopy($IMG, $INT_IMG_FONT[$COUNT], ($X * 1.5), 0, 0, 0, 15, 25);

	$X = $X + 15;//X軸に15足す
}


//ヘッダーにMEMEタイプを書く
header("Content-Type: image/png;");

//画像として出力
imagejpeg($IMG, NULL, 100);

//画像を破棄
imagedestroy($IMG);
?>