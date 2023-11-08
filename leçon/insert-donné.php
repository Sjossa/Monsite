<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Connexion à la base de données MySQL
    $con = mysqli_connect("localhost", "root", "", "casse2");
    if (mysqli_connect_errno()) {
        echo "Erreur : " . mysqli_connect_error();
        exit(); // Quitte le script en cas d'erreur de connexion
    }

    // Crée une requête SQL pour insérer des données dans la table 'personne'
    $sql = "INSERT INTO personne (NumAch, Nom, Age, Ville, Sexe) VALUES ('', 'alain', '32', 'manchester', 'M')";

    // Exécute la requête SQL
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Insertion réussie"; 
    } else {
        echo "Échec de l'insertion : " . mysqli_error($con); 
    }
    echo "<br>";
    echo $sql; // Ajout d'un point-virgule et de la balise de fermeture PHP

    // Ferme la connexion à la base de données
    mysqli_close($con);
    ?>
</body>
</html>

