<?php
// Inclusion du fichier d'en-tête (header2.php)
include_once('header2.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ma Page</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>

<section>
    <h1>Exemples de Tableaux en PHP</h1>

    <h2>Tableau Indexé</h2>
    <?php
    $tb = ['paris', 'londres', 'rome', 'berlin'];
    echo $tb[1]; // Affiche le deuxième élément du tableau ($tb[1] est "londres").
    for ($i = 0; $i < 3; $i++) {
        echo "sans count ";
        echo $tb[$i] . "<br>"; // Affiche les trois premiers éléments du tableau avec un saut de ligne.
    }
    echo "<br>";
    echo "avec count <br>";
    for ($i = 0; $i < count($tb); $i++) {
        echo $tb[$i] . "<br>"; // Affiche tous les éléments du tableau en utilisant la fonction count pour déterminer la longueur.
    }
    ?>
</section>

<section>
    <h2>Tableau Associatif</h2>
    <?php
    $tab = [
        'paris' => 'france',
        'rome' => 'italie',
        'berlin' => 'allemagne',
        'berne' => 'suisse'
    ];
    echo "<br>";
    echo $tab['berlin']; // Affiche la valeur associée à la clé 'berlin' dans le tableau $tab.
    echo "<br>";

    // Boucle pour afficher la ville et son pays
    foreach ($tab as $ville => $pays) {
        echo $ville . " -> " . $pays . "<br>"; // Affiche les paires ville-pays du tableau $tab.
    }
    ?>
</section>

<section>
    <h2>Tableau de Puissances de 2</h2>
    <?php
    // Création dynamique d'un tableau de puissances de 2
    $tab2 = [];
    for ($i = 0; $i <= 8; $i++) {
        $tab2[$i] = pow(2, $i); // Remplit le tableau avec les puissances de 2.
    }
    echo "Les puissances de 2 sont : <br>";

    // Lecture des valeurs du tableau
    foreach ($tab2 as $val) {
        echo $val . " : "; // Affiche les puissances de 2.
    }
    ?>
</section>

<section>
    <h2>Tableau Associatif Aléatoire</h2>
    <?php
    // Créer un tableau associatif dont les clés sont les identifiants et associer à chacun un code aléatoire compris entre 100 et 1000, puis afficher les clés et les valeurs du tableau
    $tob = [];
    for ($i = 0; $i <= 8; $i++) {
        $tob["client" . $i] = rand(100, 1000); // Remplit le tableau avec des clés "client0" à "client8" et des valeurs aléatoires.
    }

    // Lecture des clés et des valeurs
    foreach ($tob as $cle => $val) {
        echo "Le client de login <b>$cle</b> a le code <b>$val</b><br />"; // Affiche les clés et les valeurs du tableau associatif $tob.
    }
    ?>
</section>

<section>
    <h2>Tableau HTML</h2>
    <?php
    $Teb = [
        ["<b>LIBRAIRIE</b>", "<b>TITRES</b>", "<b>REMISE</b>"],
        ["FNAC", "GOOGLE SHEETS", "40%"],
        ["FNAC", "EXCEL", "40%"],
        ["EXPRESS", "GOOGLE DOCS", "38%"],
        ["EXPRESS", "GOOGLE SLIDES", "40%"]
    ];
    echo "<table border='1' width='50%'>"; // Ajoutez l'attribut border et un style pour la largeur

    // Lecture de chaque ligne
    foreach ($Teb as $row) {
        echo "<tr>";
        foreach ($row as $data) {
            echo "<td>" . $data . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>
</section>

<section>
    <h2>Liste Ordonnée</h2>
    <?php
    $tablo[1] = "pomme";
    $tablo[2] = "poire";
    $tablo[3] = "orange";
    $tablo[4] = "cerise";
    $tablo[5] = "mangue";

    // Affichage en utilisant une liste ordonnée (ol)
    echo "<ol>";
    for ($i = 1; $i <= 5; $i++) {
        echo "<li>" . $tablo[$i] . "</li>";
    }
    echo "</ol>";
    ?>
</section>

<section>
    <h2>Tableau Indexé</h2>
    <?php
    $tablo1 = ["Stylo", "crayon", "gomme", "régle", "cahier"];

    // Affichage en utilisant une boucle for avec un tableau indexé
    for ($i = 0; $i < count($tablo1); $i++) {
        echo $tablo1[$i] . "<br>";
    }
    ?>
</section>

<section>
    <h2>Affichage avec print_r</h2>
    <?php
    $tablo2 = ["voiture", "vélo", "moto", "camion", "bateau"];
    echo "<br>";

    // Affichage du tableau à l'aide de print_r
    print_r($tablo2);
    ?>
</section>

</body>
</html>

<?php
// Inclusion du pied de page (footer.php)
include_once('../footer.php');
?>




