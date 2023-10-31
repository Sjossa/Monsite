<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        h1 {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            margin: 0;
        }
        .container {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        p {
            margin: 0 0 15px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Exercice 1</h1>
    <p>Parmi les variables suivantes, lesquelles ont un nom valide : mavar, $mavar, $var5, $_mavar, $_5var, $__élément1, $hotel4* ?</p>
    <p>Les variables valides en PHP sont : $mavar, $var5, $_mavar, $_5var, $__élément1.</p>

    <!-- Exercice 2 -->
    <h1>Exercice 2</h1>
    <p>Donnez les valeurs de $x, $y, $z à la fin du script suivant :</p>
    <?php
    $x = "PostgreSQL";
    $y = "MySQL";
    $z = &$x;
    $x = "PHP 8";
    $y = &$x;
    echo "<p>\$x = \"$x\"</p>";
    echo "<p>\$y = \"$y\"</p>";
    echo "<p>\$z = \"$z\"</p>";
    ?>

    <!-- Exercice 3 -->
    <h1>Exercice 3</h1>
    <p>Lisez les valeurs des variables du script de l’exercice 2 à l’aide du tableau $GLOBALS :</p>
    <?php
    echo "<p>\$x = \"" . (isset($GLOBALS['x']) ? $GLOBALS['x'] : "") . "\"</p>";
    echo "<p>\$y = \"" . (isset($GLOBALS['y']) ? $GLOBALS['y'] : "") . "\"</p>";
    echo "<p>\$z = \"" . (isset($GLOBALS['z']) ? $GLOBALS['z'] : "") . "\"</p>";
    ?>

    <!-- Exercice 4 -->
    <h1>Exercice 4</h1>
    <p>Déterminez le numéro de version de PHP, le nom du système d’exploitation de votre serveur ainsi que la langue du navigateur du poste client :</p>
    <?php
    $phpVersion = phpversion();
    $osName = php_uname('s');
    $browserLanguage = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : "Non disponible";
    echo "<p>Numéro de version de PHP : " . $phpVersion . "</p>";
    echo "<p>Nom du système d'exploitation du serveur : " . $osName . "</p>";
    echo "<p>Langue du navigateur du poste client : " . $browserLanguage . "</p>";
    ?>

    <!-- Exercice 5 -->
    <h1>Exercice 5</h1>
    <p>Donnez la valeur de chacune des variables pendant et à la fin du script suivant, et vérifiez l’évolution du type de ces variables :</p>
    <?php
    $x = "PHP7";
    $a[] = &$x;
    $y = " 8e version de PHP";
    $z = (int) $y * 10;
    $x .= $y;
    $y *= $z;
    $a[0] = "MySQL";
    echo "<p>\$x = \"$x\"</p>";
    echo "<p>\$a[0] = \"" . $a[0] . "\"</p>";
    echo "<p>\$y = \"$y\"</p>";
    echo "<p>\$z = $z</p>";
    ?>

    <!-- Exercice 6 -->
    <h1>Exercice 6</h1>
    <p>Donnez la valeur des variables $x, $y, $z à la fin du script :</p>
    <?php
    $x = "7 personnes";
    $y = (int) $x;
    $x = "9E3";
    $z = (double) $x;
    echo "<p>\$x = \"$x\"</p>";
    echo "<p>\$y = $y</p>";
    echo "<p>\$z = $z</p>";
    ?>

    <!-- Exercice 7 -->
    <h1>Exercice 7</h1>
    <p>Donnez la valeur booléenne des variables $a, $b, $c, $d, $e et $f :</p>
    <?php
    $a = "0";
    $b = "TRUE";
    $c = FALSE;
    $d = ($a OR $b);
    $e = ($a AND $c);
    $f = ($a XOR $b);
    echo "<p>\$a = " . (bool)$a . "</p>";
    echo "<p>\$b = " . (bool)$b . "</p>";
    echo "<p>\$c = " . (bool)$c . "</p>";
    echo "<p>\$d = " . (bool)$d . "</p>";
    echo "<p>\$e = " . (bool)$e . "</p>";
    echo "<p>\$f = " . (bool)$f . "</p>";
    ?>
</div>
</body>
</html>

