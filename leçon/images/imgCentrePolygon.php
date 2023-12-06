<?php
$myImg = imagecreate(800, 400);
$fond = imagecolorallocate($myImg, 255, 255, 51); // Corrected variable name
$noir = imagecolorallocate($myImg, 0, 0, 0); // Corrected color allocation
$blanc = imagecolorallocate($myImg, 255, 255, 255);

imagesetthickness($myImg, 3);

$tab= array(100, 50, 500, 100, 750, 300, 50, 350);
imagepolygon($myImg, $tab, 4, $noir);

imagefilledpolygon($myImg, array(150, 80, 150, 250, 310, 250), 3, $blanc);


imagejpeg($myImg, "polygon.jpeg"); // Added quotes around the image filename
imagedestroy($myImg);
?>

<img src="polygon.jpeg" alt="">
