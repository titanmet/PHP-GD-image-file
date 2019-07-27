<?php
// 1. Информация о графическом файле
header("Content-type: image/jpeg");
$filename = "./Pics/water-lily.jpg";
$pic = imageCreateFromJpeg($filename);

ImageSaveAlpha($pic, TRUE);



ImagePNG($pic);
ImageDestroy($pic);
?>