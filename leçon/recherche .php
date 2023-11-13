<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Rechercher ici</h1>
    <br><br>
    <form action="" method="post">
Rechercher un nom : <input type="text" name="recherche">
<input type="submit" value="recherche "><br><br><br>
    </form>

    <?php
    $db_server = 'localhost';  
    $db_user = 'root';
    $db_user_pass = '';  
    $db_name = 'casse2'; 

    // J'ouvre une connexion au serveur MySQL
    $con = mysqli_connect($db_server, $db_user, $db_user_pass, $db_name); 

    // Je récupère la recherche
    $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

    // J'écris la requête SQL
    $q = $con->query(
        "SELECT nom, age, ville FROM personne
        WHERE nom LIKE '%$recherche%'
        OR ville LIKE '%$recherche%'
        LIMIT 10"
    );

    // Affichage du résultat
    while ($r = mysqli_fetch_array($q)) {
        echo "Résultat de la recherche " . $r['nom'] . ', ' . $r['age'] . ', ' . $r['ville'] . '<br />';
    }
    ?>
</body>
</html>
