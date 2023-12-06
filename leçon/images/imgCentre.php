+<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>gestion des images</h1>
<?php
/*
PHP permet non seulement de créer des pages contenant du texte affiché dynamiquement, mais également des images dynamiques en fonction des besoins.

Il est question ici de voir comment créer des images aux formats gif, jpeg, png, et même webp à destination des terminaux mobiles.

PHP est livré avec l'extension GD (Graphic Device).
La version actuelle livrée vous permet de créer des images aux formats cités plus haut.
*/

//echo phpinfo();

/* Principe généraux

Sur le serveur local installé  par wampserver ou MAMP OU Xampserver, l'extension est installé pa défaut elle ne serait pas disponible,vous decommenter la ligne suivante ne suprimant le point-virgule au début de la ligne :
extension=php_gd2.dll
cette ligne se trouve dans le fichier php.ini
 
Les scripts de  création d'image doivent suivre lesetapes suivantes :
1. envoie d'un entete precisant le type d'image qui sera envoyé du serveur vers le navigateur.
On trouve aussi la fonction header() sous la form esuivante pour une image de type PNG:
    header("Content-type:image/png);

2.
Création du cadre de l'image dans lequel vont etre traces les elements de l'image en/* Principes généraux

Sur le serveur local installé par WampServer, MAMP ou XAMPP, l'extension est installée par défaut. Si elle n'est pas disponible, vous devez décommenter la ligne suivante en supprimant le point-virgule au début de la ligne :
extension=php_gd2.dll
Cette ligne se trouve dans le fichier php.ini.

Les scripts de création d'image doivent suivre les étapes suivantes :
1. Envoi d'une entête précisant le type d'image qui sera envoyé du serveur vers le navigateur. On trouve aussi la fonction header() sous la forme suivante pour une image de type PNG :
    header("Content-type: image/png");

2. Création du cadre de l'image dans lequel vont être tracés les éléments de l'image en appelant la fonction imagecreate(), qui définit les dimensions de l'image en pixels et réserve l'espace mémoire nécessaire pour le serveur.

3. Création des couleurs qui vont être utilisées pour effectuer les tracés en utilisant les codes décimaux des couleurs RGB (Red, Green, Blue) à l'aide de la fonction imagecolorallocate().

4. Tracé des formes géométriques dans le cadre. Les formes disponibles sont variées.

5. Écriture de texte dans l'image à l'aide des polices incorporées ou de police TrueType ou FreeType.

6. Envoi de l'image créée vers le navigateur ou dans un fichier image enregistré sur le serveur et utilisable dans n'importe quelle page ou image au moyen de l'élément HTML <img>.

7. Libération facultative de l'espace mémoire occupé par l'image sur le serveur à l'aide de la fonction imagedestroy.
*/




// Création du cadre 800*400 pixels
$id_img = imagecreate(800, 400);

// Création des couleurs
$fond = imagecolorallocate($id_img, 255, 255, 51);




// Enregistrement de l'image dans un fichier
imagepng($id_img, "imagedwwm.png");



// Libération de l'espace mémoire occupé par l'image
imagedestroy($id_img);


?>
  <img src="imagedwwm.png" alt="">
</body>
</html>