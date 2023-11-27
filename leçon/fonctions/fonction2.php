<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function carre($c) {
    echo "L'aire du carré est de : " . $c*$c;
}
carre(2);
echo "<br>";
echo "<br>";
echo "Autre type de fonction avancer";

/*
1) Fonction statique
Une variable statique déclarée à l'intérieur d'une fonction à l'aide de l'instruction static permet à celle-ci de conserver sa valeur à chaque appel de la fonction.

L'initialisation d'une variable statique se fait au début de la fonction, et à chaque appel de la fonction dans le script, elle conservera la valeur du dernier appel.*/
function stat_function(){
    static $cpt = 0;
    $cpt++;
    echo "$cpt";
}
echo "Au premier affichage, cpt est "; stat_function();
echo "<br>";

// Cela doit afficher 2, car le premier appel initialise "$cpt" à "0" une seule fois, puis l'incrémente à 1.

echo "Au deuxième affichage, cpt vaut "; stat_function();
echo "<br>";

echo "Au troisième affichage, cpt vaut maintenant "; stat_function();
echo "<br>";
?>
<br>
<?php
/* Fonctions avancées 
Il existe trois fonctions utilisées dans la gestion des arguments passés à une fonction en PHP.

Il s'agit de :
- func_get_arg qui permet de lire un argument sous forme de tableau
- func_get_args pour obtenir l'ensemble des arguments sous forme de tableau
- func_num_args pour connaître le nombre d'arguments reçus par la fonction*/

function gestion_args1() {
    $numargs = func_num_args();
    echo "Nombre d'arguments : $numargs\n <br>";
    if ($numargs >= 1 ){
        echo "L'argument est : " . func_get_arg(0) . "\n <br>";
        "<br>";
"<br>";
    }
}
gestion_args1(42);
 echo"<br>";
echo "<br>";

gestion_args(12, 250, 103);

function gestion_args() {
    $numargs = func_num_args();
    echo "Nombre d'arguments : $numargs\n <br>";
    if ($numargs >= 2 ){
        echo "Le premier argument est : " . func_get_arg(0) . "\n <br>";
        echo "Le deuxième argument est : " . func_get_arg(1) . "\n <br>";
        echo "Le troisième argument est : " . func_get_arg(2) . "\n <br>";
    }
}
?>

<?php
"<br>";
echo "<b> gras</b>";
echo "<u> surligne</u>";
echo "<i> italique</i>";
?>
<?php
/* 3 fonction dynamique

Vous pouvez vous trouver dans le cas où vous ne savez pas quelle fonction doit être appelée à un moment précis dans un script donné. Pour cela, il suffit de placer dans une variable le nom d'une fonction, puis d'utiliser cette variable comme fonction.
*/
echo "<br>";
echo "<br>";
echo "<br>";

function ecrire($texte){
    print($texte);
}

function EcrirEnGras($texte){
    print("<b>$texte</b>");
}

$function_var = "ecrire";
$function_var("toto");
 echo "<br>";
$function_var = "EcrirEnGras"; // Correction de la faute de frappe
$function_var("toto");
?>

<?php
/*
La récursivité 
Le langage PHP supporte les fonctions récursives.

Une fonction récursive est une fonction qui s’appelle elle-même.

Un exemple simple présentant la récursivité :
Affichage à l'envers d'une chaîne de caractères.
*/
$str = "hello world!";
reverse_r($str);

function reverse_r($str){
    // Vérification pour s'assurer que la chaîne n'est pas vide
    if(strlen($str) > 0){
        // substr retourne le premier caractère 
        reverse_r(substr($str, 1)); // appel récursif
        echo substr($str, 0, 1); // affichage du caractère
        echo "<br>";
        return;
    }    
}


/* Les fonctions récursives sont principalement utilisées pour naviguer dans les structures de données dynamiques (listes et arbres).

Autrement, dans de nombreux cas, la récursivité est équivalente à une répétition (ou itération).

Les fonctions récursives sont plus lentes et consomment plus de mémoire que les itérations. */
echo "partie 2";
$str_1 = "hello World !";
reverse_r($str_1);
function reverse_r1($str_1){
for($i= 1;$i<strlen($str_1);$i++)
echo substr($str_1,-$i,1);// affiche un caractère en partant de la fin 
 }
return;
?>
</body>
</html>