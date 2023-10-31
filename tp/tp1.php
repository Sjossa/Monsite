<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div ><a><h1> exercise 1</h1></a>
    
    <?php
$jj = " <em>johnny</em> ";
$age = "<em>22</em> ";
echo "<br>";
$ville = "<em>triguère</em> ";
$affich = "je m'apelle" .$jj. "j'ai " .$age. "ans j'habite à " .$ville;
echo $affich;
echo "<br>"
?>
</div><br>
<div> <a><h1> exercise 2</h1></a><br><br>
    <?php

$a = 10;
$b = 20;
$addition = " le calcul de 10 + 20 = "  .$a + $b;
echo $addition;
echo "<br>";
echo "<br>";
$soustrations = " la soustration de 10 - 20 = " .$a - $b;
echo $soustrations;
echo "<br>";
echo "<br>";

$multiplication = " la multiplication de 10 * 20 = " .$a * $b;
echo $multiplication;
echo "<br>";
echo "<br>";

$division= " la division de 10 / 20 = " .$a / $b;
echo $division;
  ?>
</div><br>
<div><a><h1> exercise 3</h1><a><br><br>
<?php 
$prenom = "johnny";
$nomcomplet = $prenom. ' sassiat' ;
echo $nomcomplet ;

?>

    
</body>
</html>