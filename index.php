
<!DOCTYPE html>
<html>
<head>
	<title>Image resize with two image merge </title>
</head>
<body style="text-align: center;">
<?php
// File and new size
$filename = 'IMG_1355.jpg';
// Content type
//header('Content-Type: image/jpeg');

// Get new sizes
list($width, $height) = getimagesize($filename);
$newwidth = 865;
$newheight = 210;

// Load
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($filename);

// Resize
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

// Output
imagejpeg($thumb,"resize.jpeg");

/*Resize*/

/*Image Merge*/
 $dest = imagecreatefromjpeg('Spectacular.jpg');//Frame
 $src = imagecreatefromjpeg('resize.jpeg'); // instart image

 imagealphablending($dest, false);
 imagesavealpha($dest, true);
 imagecopymerge($dest, $src, 604, 460, 0, 0, 865, 210, 100); //have to play with these numbers for it to work for you, etc.

// //header('Content-Type: image/png');
  $img = imagepng($dest,'new.png');

 imagedestroy($dest);
 imagedestroy($src);
?>
<img style="max-width: 1170px;height: auto;" src="new.png">
</body>
</html>