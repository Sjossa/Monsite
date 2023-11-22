<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleGrid.css">
    <title>Les Structures de Contrôle en PHP</title>
</head>
<body>
    <?php
    // Inclusion du fichier d'en-tête (header2.php)
    include_once('header2.php');
    ?>

    <!-- LES STRUCTURES DE CONTRÔLE EN PHP -->
    <!-- Elles permettent d'exécuter des blocs en fonction d'une condition qui doit
    être vérifiée. On distingue les structures conditionnelles (ou tests) et les
    structures de boucles.
    Les structures conditionnelles : if, if...else et elseif ou switch et les ternaires -->

    <section>
        <h1>Les Structures de Contrôle en PHP</h1>
    </section>

    <section>
        <h2>Structure Conditionnelle "if"</h2>
        <?php
        // Test if
        $a = 7;
        if ($a > 1) {
            echo "La variable $a est plus grande que 1.";
        }
        ?>
    </section>

    <section>
        <h2>Structure Conditionnelle "if...else"</h2>
        <?php
        // Test if...else
        $b = 5;
        $c = 17;
        if ($b > $c) {
            echo "La variable $b est plus grande que $c.<br>";
        } else {
            echo "La variable $b est plus petite ou égale à $c. <br>";
        }
        ?>
    </section>

    <section>
        <h2>Structure Conditionnelle "elseif"</h2>
        <?php
        // Test elseif
        $d = 6;
        $e = 6;
        if ($d < $e) {
            echo "La variable $d est plus petite que $e ";
        } elseif ($d > $e) {
            echo "La variable $d est plus grande que $e";
        } else {
            echo "La variable $d est égale à $e <br> <br>";
        }
        ?>
    </section>

    <?php
    // Inclusion du pied de page (footer.php)
    include_once('../footer.php');
    ?>
</body>
</html>
