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
        <h1>Exemples de Conditions en PHP</h1>
    </section>

    <section>
        <h2>Calcul du Prix Net</h2>
        <?php
        // Données initiales
        $tarif = 800;
        $remise = 0.5;

        // Calcul du prix net
        $prix_net = $tarif * (1 - $remise);
        echo "Le prix net est : $prix_net";

        // Conditions basées sur le prix net
        if ($prix_net > 1500)
            echo "<br> Super cher";
        elseif ($prix_net >= 1000)
            echo "<br> Acceptable";
        else
            echo "<br> On signe ou ?";
        ?>
    </section>

    <section>
        <h2>Code Postal - Utilisation de "if" et "elseif"</h2>
        <?php
        // Début du traitement du code postal
        echo "<br> Début de mon code postal";
        echo "<br> //--------------------------------------------------//";

        // Code postal à analyser
        $code_postale = "45000";

        // Conditions basées sur le code postal
        if (substr($code_postale, 0, 2) == "45")
            echo " Orleans";
        elseif (substr($code_postale, 0, 2) == "75")
            echo " Paris";
        elseif (substr($code_postale, 0, 2) == "69")
            echo " Lyon";
        elseif (substr($code_postale, 0, 2) == "29")
            echo " Quimper";
        elseif (substr($code_postale, 0, 2) == "94")
            echo " Saint-Maurice";
        else {
            echo " Province";
        }
        ?>
    </section>

    <section>
        <h2>Code Postal - Utilisation de "switch"</h2>
        <?php
        // Séparation de la section
        echo "<br> //--------------------------------------------------//";
        echo "<br>";

        // Code postal pour la structure "switch"
        $codepost = "31000";

        // Utilisation de la structure "switch" pour le code postal
        switch (substr($codepost, 0, 2)) {
            case "69":
                echo "Lyon";
                break;

            case "33":
                echo "Bordeaux";
                break;

            case "31":
                echo "Toulouse";
                break;

            case "45":
                echo "Orléans";
                break;

            case "18":
                echo "Bourges";
                break;

            case "13":
                echo "Marseille";
                break;

            default:
                echo "Ailleurs";
        }
        ?>
    </section>

    <section>
        <h2>Conditions Ternaires</h2>
        <?php
        // Code postal pour la condition ternaire
        echo "<br>";
        $c_postal = "75008";

        // Utilisation d'une condition ternaire pour afficher "Paris" ou "Province"
        $result = (substr($c_postal, 0, 2) == "75") ? "Paris" : "Province";
        echo $result;
        ?>
    </section>

    <?php
    // Inclusion du pied de page (footer.php)
    include_once('../footer.php');
    ?>
</body>
</html>
