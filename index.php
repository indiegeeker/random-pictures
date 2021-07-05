<?php 
$images_list = glob('./images/*.{jpg,png,gif,bmp,webp}',GLOB_BRACE);
$content = $images_list[mt_rand(0,count($images_list)-1)];
$ext = end(explode('.',$content));
header("Content-type: image/{$ext}");
header("Cache-Control: no-cache");
header("Progrma: no-cache");
echo file_get_contents($content);
?>