<?php
session_start();
$code=rand(1000,9999);

$img=imagecreatetruecolor(50, 20);
$bg=imagecolorallocate($img, 246, 251, 182);
$txt=imagecolorallocate($img, 199, 22, 39);
imagefill($img, 0, 0, $bg);
imagestring($img, 5, 5, 5, $code, $txt);
header("Cache-Control:no-cache,must-revalidate");
header('Content-type: upload_img/png');

imagepng($img);
imagedestroy($img);
$_SESSION["code"]=$code;
?>