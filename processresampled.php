<?php
$selection = $_POST['type'];
$quality = $_POST['quality'];
$size = $_POST['sz'];
$filesx = $_POST['imagetype'];
echo "	$selection $quality $size $filesx<br>";


include "resize.php";
if ($selection == 'image') { 

$start = $filesx;
$en = $filesx;
$quality = $quality;
$width = $size;
$height = $size;
resize($start, $en, $quality, $width, $height);
$fadx = 'res' . $filesx;
echo "<img src='$fadx' /></br>";
echo "<img src='$filesx' /><br>";
} else { 
if (is_dir($filesx)) {
    if ($dh = opendir($filesx)) {
        while (($file = readdir($dh)) !== false) { 
        
        if (substr($file, -4) == ".jpg" || substr($file, -4) == ".png") { 
        $filearray[] = $file;
        
            echo " " . $file . "</br>";
        } } 
        closedir($dh);
    }
} 

foreach($filearray as $fa) { 
$start = $filesx . $fa;
$en = $filesx . $fa;
$quality = $quality;
$width = $size;
$height = $size;
resize($start, $en, $quality, $width, $height);
$cx = substr($fa, 0, -4);
$dx = substr($fa, -4);
$fadx = $cx . 'res' . $dx;
echo "$fadx<br />";

echo "<img src='$fadx' /></br>";
echo "<img src='$fa' /><br>";
} } 
?>


