<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
$mypicture = imagecreate(800, 400);
$fond = imagecolorallocate($mypicture, 255, 255, 51);
$rouge = imagecolorallocate($mypicture, 255, 0, 0); // Corrected color allocation

// Definition de l'epaisseur
imagesetthickness($mypicture, 3);

// Drawing concentric rectangles
for ($i = 3; $i < 100; $i++) {
    imagerectangle($mypicture, $i, $i, 800 - $i, 400 - $i, $rouge);
}

// Tracé d'un rectangle plein
imagefilledrectangle($mypicture, 100, 100, 700, 300, $rouge); // Corrected coordinates

// Save the image as a PNG file named "rectangle.png"
imagepng($mypicture, "rectangle.gif");
imagedestroy($mypicture);
?>
<img src="rectangle.gif" alt="">
</body>
</html>