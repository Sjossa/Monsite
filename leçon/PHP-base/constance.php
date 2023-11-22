<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Site de Conversion de Variables</h1>
    
    <?php
    $var = "3.5 kilomètres";
    $var2 = (double) $var;
    echo "\$var2 = ", $var2, "<br/>"; // Affiche 3.5

    $var3 = (integer) $var2;
    echo "\$var3 = ", $var3, "<br/>"; // Affiche 3

    $var4 = (boolean) $var3;
    echo "\$var4 = ", $var4, "<br/>"; // Affiche 1

    /**
     * Vous avez la possibilité de modifier le type de la variable elle-même au moyen de la fonction settype()
     */
    echo settype($var, "float");
    echo "<br><br>";
    echo "Utilisation de settype()";
    echo "<br>";

    $vall = "35 ans";
    settype($vall, "double");
    echo "\$vall = ", $vall, "<br>";
    echo "<br>";

    $vall = "35 ans";
    settype($vall, "integer");
    echo "\$vall = ", $vall, "<br>";
    echo "<br>";

    $vall = "35 ans";
    settype($vall, "boolean");
    echo "\$vall = ", $vall, "<br>";
    echo "<br>";

    // Contrôler l'état d'une variable
    /**
     * Lors de l'envoi de données d'un formulaire vers le serveur, le script qui reçoit les informations doit pouvoir
     * détecter l'existence d'une réponse dans les champs du formulaire. Les fonctions isset() et empty() permettent ce type de contrôle;
     * 
     * La fonction isset() retourne une valeur false ou 0 si la valeur existe mais n'est pas initialisée ou si elle a la
     * valeur NULL, et retourne TRUE ou 1 si elle a une valeur quelconque. Il peut y avoir plusieurs paramètres dans cette
     * fonction, mais ils doivent tous répondre à cette même condition pour que la fonction retourne la valeur TRUE.
     * 
     * La fonction empty() retourne TRUE si l'expression passée en mémoire n'est pas initialisée, a l'une des valeurs
     * suivantes : NULL, FALSE, la chaîne "0", ou est un tableau vide, et retourne FALSE si elle a une quelconque autre valeur.
     */
    $a = null;
    if (isset($a)) {
        echo "\$a existe déjà <br/>";
    } else {
        echo  "\$a n'existe pas <br />";
    }

    if (empty($a)) {
        echo "\$a est vide <br />";
    } else {
        echo "\$a a la valeur $a <br />";
    }

    $b = 0;

    if (isset($b)) {
        echo "\$b existe déjà <br/>";
    } else {
        echo "\$b n'existe pas <br />";
    }

    if (empty($b)) {
        echo "\$b est vide <br />";
    } else {
        echo "\$b a la valeur $b <br />";
    }

    $c = 1;

    if (isset($c)) {
        echo "\$c existe déjà <br/>";
    } else {
        echo "\$c n'existe pas <br />";
    }

    if (empty($c)) {
        echo "\$c est vide <br />";
    } else {
        echo "\$c a la valeur $c <br />";
    }

    /**
     * Pour la variable $a qui a la valeur NULL, isset() retourne également FALSE et empty() TRUE.
     * Pour $b qui a la valeur 0, isset() permet de détecter l'existence de cette variable bien que empty() la déclare vide.
     * Il en irait de même si $b était une chaîne vide.
     * 
     * Pour une valeur numérique affectée à la variable $c, les deux fonctions retournent TRUE. Ces fonctions, et en particulier
     * isset(), vous permettront de vérifier si un utilisateur a bien rempli tous les champs d'un formulaire.
     */

    // Définition insensible à la casse
    define("PI", 3.1415926535);
    // Utilisation
    echo "La constante PI vaut ", PI, "<br />";

    $val = 10;
    $somme = $val + PI;
    echo $somme;

    $somme2 = round($somme, 2);
    echo "<br/>";
    echo $somme2;
    
    echo "<br/>";
    $pi = round(PI, 2);
    echo "PI : 2 chiffres après la virgule -> " . $pi;
    echo "<br>";

    $ip = $_SERVER['REMOTE_ADDR'];
    $nv = $_SERVER['HTTP_USER_AGENT'];

    echo "Adresse IP du client : <b>" . $ip . "</b><br/> Avec le navigateur : <b>" . $nv . "</b>";

    echo "<br>";
    echo "<br>";
 $valeur = " montre moi ça ";
 echo trim($valeur, "o");
     ?>
</body>
</html>

