<?php
// File and new size
$filename = 'IMG_1355.jpg';
// Content type
//header('Content-Type: image/jpeg');

// Get new sizes
list($width, $height) = getimagesize($filename);
$newwidth = 180;
$newheight = 180;

// Load
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($filename);

// Resize
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

// Output
imagejpeg($thumb,"resize.jpeg");

/*Resize*/

/*Image Merge*/
 $dest = imagecreatefrompng('hMOdx.png');//Frame
 $src = imagecreatefromjpeg('resize.jpeg'); // instart image

 imagealphablending($dest, false);
 imagesavealpha($dest, true);
 $thumb = imagecreatetruecolor(180, 180);
 imagecopymerge($dest, $src, 10, 9, 0, 0, 181, 180, 100); //have to play with these numbers for it to work for you, etc.

// //header('Content-Type: image/png');
  $img = imagepng($dest,'new.png');

 imagedestroy($dest);
 imagedestroy($src);
?>
<img src="new.png">