<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleGrid.css">
    <title>Opérateurs de Comparaison et Logiques en PHP</title>
</head>
<body>
    <?php
    // Inclusion du fichier d'en-tête (header2.php)
    include_once('header2.php');
    ?>
    
    <section>
        <h1>Opérateurs de Comparaison et Logiques en PHP</h1>
    </section>

    <section>
        <h2>Opérateurs de Comparaison</h2>
        <?php
        // Opérateurs de comparaison
        /*
        == égale à
        > strictement supérieur à
        < strictement inférieur à
        >= supérieur ou égale à
        <= inférieur ou égale à
        */
        // On utilise la fonction var_dump() pour observer le comportement de nos tests. Elle renvoie une valeur booléenne (true ou false).
        $nbre = 5;
        $nbre2 = 10;
        echo "La condition 1 est : ", var_dump($nbre == $nbre2);
        echo " <br>";
        echo "La condition 2 est : ", var_dump($nbre != $nbre2);
        echo " <br>";
        echo "La condition 3 est : ", var_dump($nbre > $nbre2);
        echo " <br>";
        echo "La condition 4 est : ", var_dump($nbre < $nbre2);
        echo " <br>";
        echo "La condition 5 est : ", var_dump($nbre >= $nbre2);
        echo " <br>";
        echo "La condition 6 est : ", var_dump($nbre <= $nbre2);
        ?>
    </section>

    <section>
        <h2>Opérateurs Logiques</h2>
        <?php
        /* Permettent de combiner des tests et des conditions. */
        $nb = 15;
        $nb1 = 8;
        $nb2 = 1;

        if ($nb && $nb1 && $nb2) {
            echo "Les variables $nb, $nb1, $nb2 contiennent des valeurs différentes <br>";
        } else {
            echo "Une des variables contient false comme valeur <br>";
        }

        if ($nb >= 10 || $nb1 >= 10 || $nb2 >= 10) {
            echo "La variable $nb2 a une valeur équivalente à false";
        }
        if (!$nb2) {
            echo "La variable $nb2 a une valeur équivalente à false";
        } else {
            echo "La variable $nb2 a une valeur équivalente à true";
        }
        ?>
    </section>

    <?php
    // Inclusion du pied de page (footer.php)
    include_once('../footer.php');
    ?>
</body>
</html>
