<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

h1 {
    color: #333;
}

p {
    font-size: 16px;
}
</style>
</head>
<body>
    <h1>exercise 1</h1>
    <?php 
    echo "bonjour, monde !";
    ?>
    <h1> exercise 2 et 3 </h1>
    <?php
    $a = 12;
    $b = 15;
    $resultat = $a + $b;
    $resultat1 = $a - $b;
    $resultat2 = $a * $b;
    $resultat3 = $a / $b;
    echo "$a + $b =" .$resultat.  "<br>" ;
    echo "$a - $b =" .$resultat1.  "<br>" ;
    echo "$a * $b =" .$resultat2.  "<br>" ;
    echo "$a / $b =" .$resultat3.  "<br>" ;

    if ($resultat % 2 == 0 && $resultat1 % 2 == 0 && $resultat2 % 2 == 0 && $resultat3 % 2 == 0) {
        echo  $resultat."Toutes les variables sont paires.";
    } else {
        echo "Au moins l'une des variables est impaire.";
    }
    ?>
    <h1>exercise 4</h1>
    <?php
        for ($p = 1; $p <= 10; $p++) {
            echo  $p."&nbsp";
        }
        ?>

        <h1>exercise 5 </h1>
        <?php


function fact($n){ 
  $f = 1; 
  for ($i = 1; $i <= $n; $i++){ 
    $f = $f * $i; 
  } 
  return $f; 
} 
  
$n = 5; 
$f = fact($n); 
echo "La factorielle de $n est $f"; 
?>

<h1>exercise 6</h1>
<?php
$noms = ["Alice", "Bob", "Charlie", "David", "Eve"];
$nom2 = 0;

while ($nom2 < count($noms)) {
    echo $noms[$nom2] . "\n";
    $nom2++;
}
?>





   
   

</body>
</html>