<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    /*
    Insere les données dans Mysql

    Pour insere de nouveau enrengistrement dans une table , on se sert de la commande SQL insert into
    les chaines sont placées entre apostrophe, execpté pour les valeurs numérique ou la valeur NULL, s'il (nt a pas de donnné a insérer.)
    Il y autant de valeurs que de champs
    */

    $con = mysqli_connect("localhost","root", "casse2");
    if (mysqli_connect_errno()){
        echo " erreur". mysqli_connect_errno();
        exit()
    }
// si cela marche on crée la requete sql

$sql  "insert into personne (NumAch, Nom, Age, Ville, Sexe) values('','alain','32','manchester','M')";
echo " insertion réelaiser";
$result = mysqli_query($con,$sql) or die ( " echec");
// fermer la connexion
mysqli_close($con);
</body>
</html>