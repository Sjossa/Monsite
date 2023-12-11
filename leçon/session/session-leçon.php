<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Session en PHP</h1>
    <?php 
    /* Introduction
    Les sessions PHP sont une notion introduite dans la version 4 de PHP. Ces sessions sont très utiles dans la mesure où elles sont les seules à permettre de suivre un visiteur sur un site.
    Les sessions permettent d'enregistrer des variables propres à un utilisateur.

    Une session est caractérisée par :
    - Un identifiant de session
    - Des variables associées à la session

    Identificateur de session
    Une session est créée par l'appel : session_start();
    NB : Comme pour les cookies, la session est initialisée avec l'envoi d'en-tête (header) d'une page. La fonction session_start() essaie de trouver un identificateur de session existant, sinon une nouvelle est créée et un identificateur unique est assigné par PHP.
    Toutes les pages utilisant les sessions doivent appeler cette fonction pour indiquer au moteur PHP de récupérer les informations relatives à la session.

    La session, proprement parlé, est stockée côté serveur : seul l'identificateur de la session se trouve côté client.

    Les variables de session
    Une variable de session est une variable globale qui, une fois enregistrée, garde sa valeur sur toutes les pages qui utilisent la session.

    Concrètement, une fois qu'une variable de session est créée, il vous suffit de rouvrir la session pour y avoir un accès direct, sans même avoir besoin de la déclarer ou de l'importer.
    Les variables de session sont enregistrées sur le serveur.

    Cependant, on doit avoir un identificateur de session pour retrouver les variables de l'utilisateur associé à la session.

    Client/Serveur
    En résumé :
    Côté client, nous avons les COOKIES ou une variable contenant un numéro ou identifiant : c'est un identificateur de session.

    Côté serveur :
    Un stockage contient les informations sur les variables de session. Par défaut, le nom correspond à la valeur de l'identificateur de session assigné.
    En fait, PHP utilise des fichiers pour enregistrer les variables de session, mais il est possible d'utiliser une base de données ou une mémoire partagée pour le même résultat.

    Principe 
    Les principales étapes d'utilisation d'une session sont les suivantes :
    * Ouverture
    * Enregistrement des variables de session
    * Utilisation de variables de session
    * Suppression de variables de session

    Ouverture de session : Il existe trois possibilités.
    La plus simple et recommandée consiste à appeler au début de chaque script la fonction session_start():
    */
    
    // On démarre une nouvelle session
    session_start();
    ?>
</body>
</html>
