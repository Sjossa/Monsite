<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CONNEXION à la base de données</h1>

    <?php
    /* Se connecter à une base de données MySQL

    Pour travailler avec des informations stockées dans une base de données MySQL sur Internet, vous devez d'abord vous connecter au serveur stockant la base, sélectionner la base de données et enfin écrire des requêtes SQL qui interrogeront puis renverront ce que vous souhaitez à l'intérieur de la page web du client (du navigateur).

    Deux différentes APIs
    Les instructions MySQL qui permettent d'accéder aux tables d'une base de données sont regroupées dans deux API (Application Programming Interface), qui sont des groupes de fonctions.

    Le GROUPE MySQLi. LES FONCTIONS ISSUES DE CE GROUPE SONT réservées aux bases de données MySQL.
    Le groupe PDO. Les fonctions issues de ce groupe accèdent à plusieurs SGBDR différentes.

    Pour pouvoir se connecter à une base de données, il faut fournir au moins le nom du serveur, un nom d'utilisateur et un mot de passe, par exemple : localhost, root, ''.
    Mais dans le cas d'un vrai serveur (serveur de production), c'est votre fournisseur (ex : OVH, 1&1, etc.) qui indiquera ces paramètres.

    On peut écrire des scripts PHP soit de manière procédurale avec l'API MySQLi, soit avec le modèle orienté objet et l'API PDO.
    Mais dans ce cas, il faut gérer les exceptions (les erreurs) qui peuvent se produire parce que le moteur PHP laisse une trace accessible de ce qui s'est passé au niveau de la connexion, comme le nom de l'utilisateur et le mot de passe. La gestion des erreurs s'effectue avec le try...catch.*/

    // Connexion vers le serveur MySQLi
    $svr_name = "127.0.0.1";//meme chose que localhost
    $user = "root";
    $pwd = "";

    // Je crée la connexion vers le serveur
    $con = mysqli_connect($svr_name, $user, $pwd);

    // Je teste si la connexion a réussi
    if (!$con) {
        // J'arrête la connexion
        die("Échec de la connexion : " . mysqli_connect_error());
    }
    echo "Connexion réussie";

    //interroger une basse de donnée a l'aide de l'API Mysqli
    /*
    on interroge les informations d'une table (bdd) par l'intermediaire d'une requete SQL qui renvoie un je ude resultat qu'on affichje par la suite dans le navigateur (ouclient).
    */




    ?>
</body>
</html>
