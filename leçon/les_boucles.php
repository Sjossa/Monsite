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
    // Inclusion du fichier d'en-tête (header2.php)
    include_once('header2.php');
    ?>
    
    <section>
        <h1>Les Boucles en PHP</h1>
        <p>Les boucles permettent d'exécuter plusieurs fois des blocs de code en fonction de la valeur d'une variable. On distingue les boucles while, for, et foreach.</p>
    </section>

    <section>
        <h2>Boucle While</h2>
        <?php
        // Utilisation de la boucle While
        $a = 1;
        echo "Tant que la variable est inférieure à 10 : <br>";
        while ($a <= 10) {
            echo "La valeur est : $a<br>";
            $a++;
        }
        ?>
    </section>

    <section>
        <h2>Boucle Do...While</h2>
        <?php
        // Utilisation de la boucle Do...While
        echo "Boucle do...while : <br>";
        setlocale(LC_TIME, ['fr', 'fra', 'french']);
        $nombre = 0;
        do {
            $d1 = date("d/m/Y", strtotime('+' . $nombre . 'days'));
            echo "<p>" . $d1 . "</p>";
            $nombre++;
        } while ($nombre <= 15);
        ?>
    </section>

    <section>
        <h2>Notion d'Incrémentation et Décrémentation</h2>
        <?php
        // Incrémentation et décrémentation de variables
        $x = 20;
        $y = 12;
        $x++;
        $y--;
        echo 'La variable incrémentée $x = ' . $x . ' et décrémentée $y = ' . $y . '.';
        ?>
    </section>

    <section>
        <h2>Boucle For</h2>
        <?php
        // Utilisation de la boucle For
        echo "Boucle for : <br>";
        for ($p = 0; $p <= 5; $p++) {
            echo "Je dis bonjour avec la boucle for : " . $p;
        }
        ?>
    </section>

    <section>
        <h2>Table de Multiplication (Boucle For)</h2>
        <?php
        // Affichage d'une table de multiplication avec une boucle For
        echo "<h2>Révisez votre table de multiplication</h2>";
        echo "<table border='2' style='background-color: yellow'>";
        echo "<tr><th>&nbsp; X &nbsp;</th>";

        for ($i = 1; $i <= 10; $i++) {
            echo "<th>&nbsp; $i &nbsp;</th>";
        }
        echo "</tr>";

        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<th>&nbsp; $i &nbsp;</th>";

            for ($j = 1; $j <= 10; $j++) {
                echo "<td style='background-color: red; color: white;'>&nbsp;&nbsp;<b>" . ($i * $j) . "&nbsp;&nbsp;</b></td>";
            }
            echo "</tr>";
        }

        echo "</table>";
        ?>
    </section>

    <?php
    // Inclusion du pied de page (footer.php)
    include_once('../footer.php');
    ?>
</body>
</html>

