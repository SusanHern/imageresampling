<?php
function resize($originfile, $destfile, $quality, $width, $height) { 
$filename = $originfile;

// height and width
$width = $width;
$height = $height;

list($width_begin, $height_begin) = getimagesize($filename);

$ratio = $width_begin/$height_begin;

if ($width/$height > $ratio) {
   $width = $height*$ratio;
} else {
   $height = $width/$ratio;
}

$image_p = imagecreatetruecolor($width, $height);
if(substr($filename, -4) == '.jpg') { 
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_begin, $height_begin);
$destfile = 'res' . $filename;
imagejpeg($image_p, $destfile, $quality); } elseif (substr($filename, -4) == '.png') {

$image = imagecreatefrompng($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_begin, $height_begin);
$destfile = 'res' . $filename;
imagepng($image_p, $destfile, $quality);


 }
echo "<img src='$destfile' />"; } 
?>