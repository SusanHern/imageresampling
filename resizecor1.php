<?php
function resize($originfile) { 
$filename = $originfile;

// height and width

list($width_begin, $height_begin) = getimagesize($filename);

if($width_begin > 600) { 
$ratio = 600 / $width_begin;
$newwidth = 600;
$newheight = $height_begin * $ratio; } elseif($width_begin < 600) { 
$newwidth = $width_begin - 2;
$newheight = $height_begin -2; } 



if(substr($filename, -4) == '.jpg' && exif_imagetype($filename) == IMAGETYPE_JPEG) { 
$image_p = imagecreatetruecolor(($newwidth), ($newheight));
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, ($newwidth), ($newheight), $width_begin, $height_begin);
$cx = substr($filename, 0, -4);
$dx = substr($filename, -4);
$fadx = $cx . 'res' . $dx;
$destfile = $fadx;
imagejpeg($image_p, $destfile, 25); } elseif (substr($filename, -4) == '.png'  && exif_imagetype($filename) == IMAGETYPE_PNG) {

$image = imagecreatefrompng($filename);
$image_p = imagecreatetruecolor(($newwidth), ($newheight));
imagealphablending($image_p, false);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, ($newwidth), ($newheight), $width_begin, $height_begin);
$cx = substr($filename, 0, -4);
$dx = substr($filename, -4);
$fadx = $cx . 'res' . $dx;
$destfile = $fadx;
imagesavealpha($image_p, true);

imagepng($image_p, $destfile, 9);
echo "<img src='$destfile' />";

 } else { 
echo "$filename could not be optimized"; } 
 } 
?>