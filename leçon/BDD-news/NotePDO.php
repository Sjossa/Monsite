<?php
/*
La classe PDO

Le rôle de la classe PDO est de servir d'interface d'accès à une base de données pour votre site internet.

Objectif:
    - Découvrir les fonctionnalités de cette classe PDO.
    - Sélectionner, insérer, modifier et supprimer des données.

Qu'est-ce que PDO ?

PDO signifie PHP DATA OBJECTS.

PDO est une extension PHP orientée objet incluse depuis la version 5.1 de PHP, dont le rôle est de servir d'interface d'accès à une base de données.

L'objet PDO permet de communiquer avec une base de données, et ce, peu importe le type de SGBD (MySQL, Oracle, etc.).

CONNEXION À UNE BASE DE DONNÉES
Auparavant, pour nous connecter à une base de données, nous utilisions la fonction mysqli_connect(). Cette connexion est devenue totalement obsolète avec l'arrivée de PHP 7.

Elle a été remplacée par deux nouvelles extensions : PDO et mysqli.

PDO pour se connecter à une base de données

    Définition des variables de connexion

Nous allons commencer par définir nos variables de connexion :
*/

$dns = "mysql:localhost;dbname=maBase";
$user = "root";
$password = "";

/* Explication :

$dsn: contient le type de la BDD, l'adresse du serveur (ici localhost), ainsi que le nom de la BDD (ici maBase).

$user: contient le login de la connexion à la BDD.

$password: contient le mot de passe de connexion à la BDD (ici R).

Initialisation de l'objet PDO

Une fois nos variables de connexion définies, nous devons ensuite initialiser l'objet PDO, comme ici :*/
$cnx = new PDO($dsn, $user, $password);

    /* Explication : nous initialisons l'objet PDO et nous le stockons dans une variable nommée $cnx. $cnx contient tous les paramètres de connexion à notre base de données.

Conclusion : nous venons de créer un objet PDO pour nous connecter à notre base de données MySQL.*/

/* Gestion d'une éventuelle erreur de connexion 

Si, pour une raison quelconque, une erreur de connexion à la base de données survenait, nous allons gérer cette erreur.

En effet, en cas d'erreur, MySQL renvoie un message d'erreur, et ce message peut contenir des données sensibles.

Exemple :
Nous allons reprendre nos variables de connexion à notre base de données et nous allons modifier le login de la variable $user et ajouter un mot de passe à notre variable $password, afin de générer une erreur de connexion. 
Ensuite, nous initialisons l'objet PDO.*/

$dsn = "mysql:localhost;dbname=maBase";
$user = "root";
$password = "";
$cnx = new PDO($dsn, $user, $password);

/* Ensuite, nous lançons la page dans le navigateur. Nous nous attendons à une erreur, puisque le couple user/password n'est pas correct. Nous pouvons observer une faille de sécurité indéniable. 
Le couple user/password apparaît clairement. 
Pour remédier à cela, nous allons utiliser les blocs TRY/CATCH. 

Le couple TRY/CATCH va nous permettre de gérer une erreur de connexion à la base de données et d'en personnaliser le message.

Principe de fonctionnement :
TRY va tenter de se connecter à la base de données et s'il y a une erreur, CATCH fera en sorte de renvoyer un message d'erreur que nous allons personnaliser. Cette erreur prend la forme d'une exception.*/

try {
    $cnx = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Une erreur est survenue !';
}

/* Nous relançons la page dans notre navigateur et cette fois, le message d'erreur qui va s'afficher sera le suivant : "Une erreur est survenue !" 

Conclusion :
Vous venez d'apprendre à vous connecter à une base de données en utilisant l'objet PDO de PHP.

NB :
En cas de problème, tout ce qui se trouve à l'intérieur du TRY sera stoppé au profit de ce qui se trouve à l'intérieur du CATCH. Et si tout se passe bien, alors seulement ce qui se trouve à l'intérieur du TRY sera exécuté.

 */
/* AFFICHER DES DONNÉES AVEC PDO

Écriture de la requête

$sql =select * from client
execution de la requête

Pour exécuter cette requête nous récupérons l'objet PDO et nous effectuons une requête query . 
nous stockons  cette requete dans une variable nommér $rs_req.*/

$rs_req = $cnx->query($sql);
/*
Nous allons maintenant récupére les donnée de notre requete. Pour cela nous uilisons une boucle while ainsi que la methode fetch().

on affecte a la variable $donnée, chaque enrengistrement de la table clients.*/

$rs_req = $cnx->query($sql);
while ($donnes=$rs_req->fetch() ) {
    echo '<>';
    print_r($donnes);
    echo '</ pre>'; }

/* On obtient chaque ligne de notre table clients, rangée dans un tableau (array), et chaque tableau (array) contient :
   - Un tableau associatif
   - Un tableau numérique

Conclure :
Par défaut, le comportement de PDO est d'envoyer la méthode fetch avec en retour un tableau associatif et un numérique.

L'association PDO :: fetch_assoc
Nous pouvons modifier ce comportement en précisant le type d'association à utiliser.
Pour cela, nous allons ajouter a la méthode fetch(), le type d'association que nous souhaitons boir apparaitre.
Pour faire apparaitre uniquement le résultat sous la forme d'un tableau associatif, nous ecrirons: PDO::FETCH_ASSOC,a la methode fetch(). */

<?PHP

?>






?>