<?php
session_start();

$_SESSION['captcha'] = mt_rand(1000,9999);
$img = imagecreate(100,30);
$font = 'fonts/Pacifico.ttf';

$bg = imagecolorallocate($img,255,255,255);
$textcolor = imagecolorallocate($img,0,0,0);

imagettftext($img, 30, 5, 20, 27, $textcolor, $font, $_SESSION['captcha']);

header('content-type:image/jpeg');
imagejpeg($img);
imagedestroy($img);

?>