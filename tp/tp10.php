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
        background-color: #3498db;
        color: #fff;
        padding: 10px;
        margin: 0;
    }

    .exercise {
        background-color: #fff;
        padding: 20px;
        margin: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .exercise h1 {
        font-size: 24px;
        margin: 0 0 15px;
    }

    .exercise p {
        font-size: 16px;
        line-height: 1.5;
    }

    .exercise code {
        font-family: 'Courier New', monospace;
        background-color: #f7f7f7;
        padding: 2px 4px;
        border: 1px solid #ccc;
    }
</style>
</head>
<body>
<h1> exercise 1 </h1>
<div class="exercise">
<?php
$nombre = 15 ; 

if ($nombre % 3 == 0 and $nombre % 5 == 0){ 
    print("  Le nombre ".$nombre." est un multiple de 3 et de 5.");}

else{ 
    print("Le nombre ".$nombre." n'est pas un multiple de 3 et de 5.");}
?>
</div>
<h1> exercise 2 </h1>
<div class="exercise">
<?php
$age = 32;
$sexe = "femme";

if ( $sexe == "femme" and $age  >= 21 && $age <= 40 ){
    print (  "bienvenue dans notre agence");
}
else{
    echo "vous n'avez pas les qualification neccesaire ";
}
?>
</div>
<h1> exercise 3 </h1>
<div class="exercise">
<?php
$sequenceTrouvee = false;
$nombrePair = 0;
$nombresImpairs = array();

while (!$sequenceTrouvee) {
    $nombreAleatoire = rand(1, 100); // Génère un nombre aléatoire entre 1 et 100

    if ($nombreAleatoire % 2 == 0) {
        // Le nombre est pair
        if ($nombrePair == 0) {
            $nombrePair = $nombreAleatoire;
        }
    } else {
        // Le nombre est impair
        if ($nombrePair != 0) {
            $nombresImpairs[] = $nombreAleatoire;
            if (count($nombresImpairs) == 2) {
                // Nous avons trouvé les deux nombres impairs suivant le nombre pair
                $sequenceTrouvee = true;
            }
        }
    }
}

echo "Le nombre pair est : $nombrePair\n";
echo "Les deux nombres impairs suivants sont : " . implode(', ', $nombresImpairs);
?></div>
<h1> exercise 4 </h1>
<div class="exercise">
<?php
$plaque = array();
$numeros = array();

for ($numero = 100; $numero <= 200; $numero++) {
    $immatriculation = "PHP 75 " . $numero;
    $premierGroupe = intval($numero / 100); // Obtient le premier groupe de chiffres

    $plaque[] = $immatriculation;

    if ($premierGroupe % 100 == 0) {
        $numeros[] = $immatriculation;
    }
}

echo "Numéros d'immatriculation pour Paris (de 100 à 200) :<br>";
foreach ($plaque as $numero) {
    echo $numero . "<br>";
}

echo "<br>Numéros réservés (premier groupe multiple de 200) :<br>";
foreach ($numeros as $numero) {
    echo $numero . "<br>";
}
?>
</div>
<h1> exercise 5 </h1>
<div class="exercise">


<?php

// Choisissez un nombre de trois chiffres entre 100 et 999
$nombre_initial = rand(100, 999);

// Initialisez le compteur de coups
$coups = 0;

while (true) {
    $coups++;
    $tirage = rand(100, 999);
    if ($tirage == $nombre_initial) {
        break;
    }
}

echo "Nombre initial : " . $nombre_initial . "\n";
echo "Nombre de coups nécessaires : " . $coups . "\n";
?>
</div>
<H1> exercise 5/2</h1>
<div class="exercise">

<?php

// Choisissez un nombre de trois chiffres entre 100 et 999
$nombre_initial = rand(100, 999);

// Initialisez le compteur de coups
$coups = 0;

for ($coups = 1; $coups < 1000000; $coups++) {  // Utilisez une limite de boucle arbitrairement grande
    $tirage = rand(100, 999);
    if ($tirage == $nombre_initial) {
        break;
    }
}

echo "Nombre initial : " . $nombre_initial . "\n";
echo "Nombre de coups nécessaires : " . $coups . "\n";

?>
</div>
<h1> exercise 6 </h1>
<div class="exercise">
<?php
$tableau = [];


for ($i = 11; $i <= 36; $i++) {
    $tableau[$i] = chr(64 + $i); // Utilisation de chr pour obtenir la lettre correspondante
}


echo "Lecture avec une boucle for:\n";
for ($i = 11; $i <= 36; $i++) {
    echo "Indice : $i, Valeur : " . $tableau[$i] . "\n";
}

echo "\nLecture avec une boucle foreach:\n";
foreach ($tableau as $indice => $valeur) {
    echo "Indice : $indice, Valeur : $valeur\n";
}
?>
</div>
<h1> exercise 7 </h1>
<div class="exercise">
<?php
$nombre_donne = 8; 
$trouve = false;

while (!$trouve) {
    $entier_aleatoire = rand(1, 100); 
    if ($entier_aleatoire % $nombre_donne == 0) {
        $trouve = true;
    }
}

echo "Le premier entier multiple de $nombre_donne est : $entier_aleatoire\n";
?>
</div>
<h1> exercise 7/2 </h1>
<div class="exercise">

<?php
$nombre_donne = 6; 
$trouve = false;

do {
    $entier_aleatoire = rand(1, 100); 
    if ($entier_aleatoire % $nombre_donne == 0) {
        $trouve = true;
    }
} while (!$trouve);

echo "Le premier entier multiple de $nombre_donne est : $entier_aleatoire\n";
?>
</div>
<h1> exercise 8 </h1>
<div class="exercise">
<?php
function pgcd($a, $b) {
    try {
        $a = (int)$a;
        $b = (int)$b;
        if ($a <= 0 || $b <= 0) {
            throw new Exception("Les nombres doivent être positifs.");
        }
        while ($b) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

// Test avec des valeurs
$nombre1 = 48;
$nombre2 = 18;
$resultat = pgcd($nombre1, $nombre2);
echo "Le PGCD de $nombre1 et $nombre2 est : $resultat\n";
?>
</div>
















</body>
</html>