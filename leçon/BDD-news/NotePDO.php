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
?>