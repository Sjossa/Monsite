<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleGrid.css">
    <title>Document</title>
</head>
<body>
<?php
include_once('header2.php');
?>

<?php 
// Initialisation d'une variable avec une valeur de 15230
$hab = 15230;
// Affichage de la valeur de la variable $hab
echo $hab;
// Ajout d'une nouvelle ligne pour la mise en forme de l'affichage
echo "<br>";

// Réaffectation de la valeur 102 à la variable $hab
$hab = 102;
// Affichage de la nouvelle valeur de la variable $hab
echo $hab;
echo "<br>";

// Déclaration de trois variables contenant des informations sur une ville et un département
$ville = "orléans";
$dep = "centre";
// Concaténation des valeurs des deux variables pour former un titre
$titre = $ville." ".$dep;
// Affichage du titre formé
echo $titre;
echo "<br>";

// Déclaration de trois variables pour former une salutation
$nn = "Salut";
$mm = "Bob";
$pp = "copain";
// Concaténation des valeurs pour former une phrase complète
$affich = $nn.' '.$mm.', tu veux être mon '.$pp.' ? ';
// Affichage de la salutation formée
echo $affich;
echo "<br>";

// Déclaration et initialisation de deux variables numériques
$a = 1;
$b = 3;
// Incrémentation de la valeur de la variable $a de 2
$a = $a +2;
// Affichage de la nouvelle valeur de la variable $a
echo  " premier : " .$a;
echo "<br>";

// Multiplication de $a par la valeur de $b
 $a = $a * $b;
// Décrémentation de la valeur de $a de 1
echo " deuxieme : " .$a;
$a = $a -1;
echo "<br>";
// Affichage de la nouvelle valeur de $a
echo " troisieme :" .$a;
echo "<br>";
// Division de la valeur de $a par 4
$a = $a / 4;
echo " quatrieme : " , $a;
echo "<br>";
print("cinquième " .$a);

?>


<?php
include_once('../footer.php');
?>
</body>
</html>