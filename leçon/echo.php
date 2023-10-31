<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleGrid.css">
    <title>Manipulation de Variables en PHP</title>
</head>
<body>
    <?php
    // Inclusion du fichier d'en-tête (header2.php)
    include_once('header2.php');
    ?>
    
    <section>
        <h1>Manipulation de Variables en PHP</h1>
    </section>

    <section>
        <h2>Commentaires en PHP</h2>
        <?php
        // Commentaires en PHP
        echo "Paul"; // J'affiche le prénom
        echo "<br>"; // Je saute une ligne
        echo "Ochon"; // J'affiche le nom
        # Ceci est aussi un commentaire
        echo "<br> Paul Ochon";
        /* Les commentaires vous aideront lorsque vous reviendrez dans 6 mois et que vous aurez oublié */
        echo "<br> Super";
        echo "<br>";
        /* Si vous souhaitez voir les caractères qui sont utilisés pour entourer les mots */
        echo 'J\'écris à l\'encre de Chine';
        /* Le caractère anti-slash précède le 2ème apostrophe qui échappe ainsi à sa fonction naturelle qui est d'entourer des chaînes de caractères. 
        Dans le code ici, on met des guillemets au début et à la fin du texte et il n'est donc pas nécessaire d'échapper à l'apostrophe. Par contre, il faut échapper le guillemet du prénom */
        echo "<br> J'envoie des lettres à \"ma dulcinée\"";
        ?>
    </section>

    <section>
        <h2>Les Variables en PHP</h2>
        <?php
        /* Les variables
        Une variable est un conteneur d'une donnée unique, c'est-à-dire une boîte à chaussure qui ne contient qu'une seule chaussure.
        Une variable contient une information temporaire qui peut être numérique, de type alphabétique (chaîne de caractère), de type date, de type objet, ou autre.
        Le nom d'une variable doit commencer par le caractère $ suivi d'une lettre ou un signe _ (barre de huit) et ne doit jamais commencer par un chiffre.
        Le signe = sert donc à affecter une valeur à la variable. Les noms des variables sont sensibles à la casse (majuscule/minuscule).
        */
        $largeur = 5;
        echo $largeur;
        /* Le signe = sert donc à affecter une valeur à la variable, il s'agit d'un opérateur d'affectation et non le signe égal que l'on utilise dans
        une opération de calcul */
        $prenom = "Théo";
        $nom = "Durant";
        $prenom_nom = $prenom . " " . $nom;
        echo "<br>" . $prenom_nom;
        ?>
    </section>

    <section>
        <h2>Fonctions pour Manipuler les Variables</h2>
        <?php
        $nom2 = "MARIE ROSE";
        echo strlen($nom2); // affiche 10 à cause des espaces
        echo "<br>";
        var_dump($nom2); // affiche string (10) "Marie rose"
        echo "<br>";
        echo trim($nom2);
        echo "<br>";
        echo substr($nom, 3, 5);
        echo "<br>";
        $prix = 2050900.7854;
        echo $prix;
        echo "<br>";
        echo number_format($prix, 2, ",", ","); // affiche en plaçant 2 décimales après une virgule et un espace comme séparateur de milliers.
        echo "<br>";
        echo number_format($prix, 2, ".", ",");
        echo "<br>";
        echo round($prix, 1); // arrondit à une décimale
        ?>
    </section>

    <section>
        <h2>Affectation de Variables par Valeur et par Alias</h2>
        <?php
        echo "<br>";
        $v1 = 'Jacque Chirac<br>';
        $alias = $v1;
        $alias = "Mon nom est $alias";
        echo $alias;

        $prenom2 = "Alain";
        echo "Salut les gars, mon nom est : " . $prenom2 . " Sébastien";
        ?>
    </section>

    <?php
    // Inclusion du pied de page (footer.php)
    include_once('../footer.php');
    ?>
</body>
</html>

