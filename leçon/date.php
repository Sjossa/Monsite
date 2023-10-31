<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleGrid.css">
    <title>Manipulation des Dates en PHP</title>
</head>
<body>
    <?php
    // Inclusion du fichier d'en-tête (header2.php)
    include_once('header2.php');
    ?>
    
    <section>
        <h1>Manipulation des Dates en PHP</h1>
    </section>

    <section>
        <h2>Affichage de la Date et de l'Heure</h2>
        <?php
        // Obtention du fuseau horaire local
        $fuseau = date_default_timezone_get();
        echo "Fuseau horaire local : $fuseau<br>";

        // Affichage de la date et de l'heure dans différents formats
        echo "Date au format j m y : " . date("j m y") . "<br>";
        echo "Date au format j m Y : " . date("j m Y") . "<br>";
        echo "Date au format j M Y : " . date("j M Y") . "<br>";

        // Configuration du format de date en français
        setlocale(LC_TIME, "fr_FR");
        echo "Jour de la semaine en français : " . strftime("%A") . "<br>";

        echo "Date au format D F y : " . date("D F y") . "<br>";
        echo "Date au format d M Y : " . date("d M Y") . "<br>";

        echo "Date au format complet : " . strftime("%A %d %B %Y") . "<br>";
        ?>
    </section>

    <section>
        <h2>Comparaison de Deux Dates</h2>
        <?php
        // Dates à comparer
        $Date1 = "04-09-2023";
        $Date2 = "17-10-2023";

        // Conversion des dates en timestamp
        $t1 = strtotime($Date1);
        $t2 = strtotime($Date2);

        echo "Le 04/09/2023 est équivalent à " . $t1 . " secondes <br>";
        echo "Le 17/10/2023 est équivalent à " . $t2 . " secondes <br>";

        // Comparaison des dates
        if ($t1 < $t2) {
            echo "La première date est antérieure à la deuxième date <br>";
        } else {
            echo "La deuxième date est antérieure à la première <br>";
        }
        ?>
    </section>

    <section>
        <h2>Validation de Dates avec checkdate()</h2>
        <?php
        // Validation de dates avec checkdate()
        echo "Validation de la date 12/25/2022 : " . checkdate(12, 25, 2022) . "<br>";

        if (checkdate(11, 25, 2021) == false) {
            echo "Mauvaise date<br>";
        } else {
            echo "Bonne date<br>";
        }
        ?>
    </section>

    <section>
        <h2>Date et Heure Actuelles</h2>
        <?php
        // Obtention de la date et de l'heure actuelles
        $dateTemps = date("Y-m-d H:i:s");
        echo "Date et heure actuelles : $dateTemps";
        ?>
    </section>

    <?php
    // Inclusion du pied de page (footer.php)
    include_once('../footer.php');
    ?>
</body>
</html>

