<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleGrid.css">
    <title>Les fonctions en PHP</title>
</head>
<body>
<?php
    // Inclusion du fichier d'en-tête (header2.php)
    include_once('header2.php');
?>
<h1>Les fonctions</h1>
<!-- Les fonctions en PHP -->
<!-- Une fonction correspond à une série d'instructions qui effectuent une tâche spécifique. Pour exécuter une fonction, il faut l'appeler par son nom en plaçant ou non des paramètres. On parle souvent de fonctions personnalisées lorsque l'on écrit soi-même les instructions, mais on parle aussi de fonctions PHP ou prédéfinies lorsque l'on utilise une commande qui effectue une tâche, comme par exemple "strval", "strtotime", ou d'autres encore. -->

<?php
// Fonction simple sans paramètre
function bonjour(){
    print("Salut Jean");
}

bonjour(); // Appel de la fonction
echo "<br>";

// Fonction avec un paramètre
function bonjour1($prenom){
    print("Salut " . $prenom);
}

bonjour1("Anissa"); // Appel de la fonction avec un argument

// Fonction avec des opérations numériques
function addition($nbre1, $nbre2){
    $resultat = $nbre1 + $nbre2;
    echo $resultat;
}

echo "<br>";
addition(1, 2); // Appel de la fonction addition

// Fonction avec retour de valeur
function calcultva(){
    return 100 * 1.2;
}

// Appel de la fonction et affichage du résultat
echo "<br>Function calcul tva 1 : " . calcultva() . '<br>';

echo "<br>";

// Fonction avec paramètre et retour de valeur
function calcultva2($nombre){
    return $nombre * 1.2;
}

// Appel de la fonction avec différents arguments
echo "TVA de 500 : " . calcultva2(500) . '<br>';
echo "TVA de 2500 : " . calcultva2(2500) . '<br>';

echo "<br>";

// Fonction avec plusieurs paramètres
function calcultva3($montant, $taux){
    return $montant * $taux;
}

// Appel de la fonction avec différents arguments
echo "500 avec un taux de 5.5% font : " . calcultva3(500, 1.055) . '<br>';
echo "4000 avec un taux de 200% font : " . calcultva3(4000, 1.2) . '<br>';

echo '<br>';

// Fonction pour afficher une date
function afficherdate($jr, $mois, $annee){
    echo $jr . ' ' . $mois . ' ' . $annee;
}

// Appel de la fonction pour afficher une date
afficherdate(25, 'Octobre', 2023);

echo "<br><br>";

$a = 10;
$b = 5;
$c = 30;

// Fonction pour calculer le volume
function volume($largeur, $longueur, $hauteur){
    echo "Le volume est : " . $largeur * $longueur * $hauteur;
}

// Appel de la fonction pour calculer le volume
volume($a, $b, $c);

echo "<br>";

// Fonction pour afficher un nom
function test($nom){
    echo $nom;
}

// Notion de portée de variable
/*
La portée des variables indique l'emplacement où elles sont accessibles.
Une variable peut être locale ou globale.
Toute variable définie en dehors d'une fonction a une portée globale.
Toute variable définie à l'intérieur d'une fonction a une portée locale à la fonction. Cela signifie que la variable n'est accessible qu'au sein de la fonction et est détruite à la fin de l'exécution de la fonction.
Toute variable définie dans une fonction avec le mot-clé global est considérée comme globale et peut changer de valeur dans différents scripts.
*/

function calcul_remise($h1){
    global $taux_remise;
    $taux_remise = 0.3;
    return $h1 * $taux_remise;
}

// Je définis une fonction qui calcule la TVA
function calcTVA($h2){
    global $taux_tva;
    $taux_tva = 0.2;
    return $h2 * $taux_tva;
}

$ht = 100;

$remise = calcul_remise($ht);
echo "La remise est : " . $remise . "<br>";

$tva = calcTVA($ht);
echo "La TVA est : " . $tva . "<br>";

$ttc = $ht - $remise + $tva;
echo "Le TTC est : " . $ttc . "<br><br>";

// Ou

function cal_remise($h1){
    $taux_remise = 0.3;
    global $remise;
    $remise = $h1 * $taux_remise;
}

function calcul_tva($h2){
    $taux_tva = 0.2;
    global $tva5;
    $tva5 = $h2 * $taux_tva;
}

$ht5 = 100;

cal_remise($ht5);
calcul_tva($ht5);

$ttc5 = $ht5 + $tva5 - $remise;

echo "La TVA est $tva5, la remise $remise et le TTC est $ttc5";
?>

<?php
 function carre($c){
    echo "l'aire du  est : " .$c*$c;
 }
 carre(2);
 
</h1>
<?php
    // Inclusion du pied de page (footer.php)
    include_once('../footer.php');
?>
</body>
</html>

