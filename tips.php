<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tips.css">
    <title>Page PHP</title>
  
</head>
<body>

<?php
// Syntaxe de base
echo "<h2>Syntaxe de base :</h2>";
echo "&lt;?php et ?&gt; : Balises pour délimiter le code PHP.<br>";
echo "echo : Affiche du texte.<br>";
echo "print : Affiche du texte.<br>";
echo "// et /* */ : Commentaires.<br><br>";

// Variables
echo "<h2>Variables :</h2>";
echo "\$variable : Déclaration d'une variable.<br>";
echo "=, +=, -= : Opérateurs d'assignation.<br>";
echo ". : Concaténation de chaînes.<br><br>";

// Types de données
echo "<h2>Types de données :</h2>";
echo "string : Chaîne de caractères.<br>";
echo "int : Entier.<br>";
echo "float : Nombre à virgule flottante.<br>";
echo "bool : Booléen.<br>";
echo "array : Tableau.<br>";
echo "object : Objet.<br><br>";

// Opérateurs
echo "<h2>Opérateurs :</h2>";
echo "Arithmétiques : +, -, *, /, %.<br>";
echo "Comparaison : ==, ===, !=, !==, &lt;, &gt;, &lt;=, &gt;=.<br>";
echo "Logiques : &&, ||, !.<br><br>";

// Structures de contrôle
echo "<h2>Structures de contrôle :</h2>";
echo "if, else, elseif : Conditions.<br>";
echo "switch : Sélection multiple.<br>";
echo "for, while, do-while : Boucles.<br><br>";

// Fonctions
echo "<h2>Fonctions :</h2>";
echo "function : Définition de fonction.<br>";
echo "return : Renvoie une valeur depuis une fonction.<br>";
echo "include, require : Inclut un fichier.<br>";
echo "isset, empty : Vérification de la présence et de la vacuité d'une variable.<br><br>";

// Tableaux
echo "<h2>Tableaux :</h2>";
echo "\$array = array(); : Déclaration d'un tableau.<br>";
echo "count() : Retourne le nombre d'éléments dans un tableau.<br>";
echo "foreach : Boucle de parcours de tableau.<br><br>";

// Superglobales
echo "<h2>Superglobales :</h2>";
echo "\$_GET, \$_POST : Données de formulaire.<br>";
echo "\$_SESSION : Variables de session.<br>";
echo "\$_COOKIE : Cookies.<br>";
echo "\$_SERVER : Informations sur le serveur.<br><br>";

// Gestion des erreurs
echo "<h2>Gestion des erreurs :</h2>";
echo "try, catch, throw : Gestion des exceptions.<br>";
echo "error_reporting(), ini_set(): Configuration des rapports d'erreurs.<br><br>";

// Manipulation de fichiers
echo "<h2>Manipulation de fichiers :</h2>";
echo "fopen(), fclose(), fwrite(), fread() : Opérations sur les fichiers.<br>";
echo "file_get_contents(), file_put_contents() : Lecture et écriture simplifiées de fichiers.<br><br>";

// Programmation orientée objet (POO)
echo "<h2>Programmation orientée objet (POO) :</h2>";
echo "class, new, public, private, protected : Définition de classes et d'objets.<br>";
echo "extends, implements : Héritage et implémentation d'interfaces.<br><br>";

// Sessions
echo "<h2>Sessions :</h2>";
echo "session_start(), session_destroy() : Gestion des sessions.<br><br>";

// Cookies
echo "<h2>Cookies :</h2>";
echo "setcookie() : Définit un cookie.<br><br>";

// Traitement des formulaires
echo "<h2>Traitement des formulaires :</h2>";
echo "\$_GET, \$_POST, \$_REQUEST : Récupération des données de formulaire.<br>";
echo "htmlspecialchars() : Échappe les caractères spéciaux dans une chaîne.<br><br>";

// Gestion des exceptions
echo "<h2>Gestion des exceptions :</h2>";
echo "try, catch, finally : Blocs pour gérer les exceptions.<br><br>";

// Fonctions utiles
echo "<h2>Fonctions utiles :</h2>";
echo "is_array(), is_string(), is_numeric(), is_object() : Vérification du type de données.<br>";
echo "count() : Compte le nombre d'éléments dans un tableau.<br>";
echo "empty() : Vérifie si une variable est vide.<br><br>";

// Expression régulière
echo "<h2>Expression régulière :</h2>";
echo "preg_match(), preg_replace() : Traitement des expressions régulières.<br><br>";

// Traitement d'images
echo "<h2>Traitement d'images :</h2>";
echo "Librairies comme GD et Imagick pour manipuler des images.<br><br>";

// Sécurité
echo "<h2>Sécurité :</h2>";
echo "password_hash(), password_verify() : Hashage des mots de passe.<br><br>";

// Communication HTTP
echo "<h2>Communication HTTP :</h2>";
echo "curl_init(), curl_setopt(), curl_exec() : Utilisé pour effectuer des requêtes HTTP.<br><br>";

// Gestion de l'environnement
echo "<h2>Gestion de l'environnement :</h2>";
echo "getenv(), putenv() : Accès et modification des variables d'environnement.<br><br>";

// JSON
echo "<h2>JSON :</h2>";
echo "json_encode(), json_decode() : Conversion de données vers/depuis le format JSON.<br>";
?>
<?php
// Fonctions anonymes (Fermetures)
echo "<h2>Fonctions anonymes (Fermetures) :</h2>";
echo "function() use (\$variable) { /* code */ } : Crée une fonction sans la déclarer formellement.<br><br>";

// Namespace
echo "<h2>Namespace :</h2>";
echo "namespace MonNamespace; : Permet d'organiser les classes, fonctions et constantes dans un espace de noms.<br><br>";

// Autoload
echo "<h2>Autoload :</h2>";
echo "spl_autoload_register('maFonctionAutoload') : Enregistre une fonction en tant que chargeur automatique de classes.<br><br>";

// Traits
echo "<h2>Traits :</h2>";
echo "trait MonTrait { /* code */ } : Définit un trait pour réutiliser des méthodes dans plusieurs classes.<br><br>";

// Gestion des fichiers et répertoires
echo "<h2>Gestion des fichiers et répertoires :</h2>";
echo "file_exists(), is_file(), is_dir(), unlink(), mkdir(), rmdir() : Vérification et manipulation des fichiers et répertoires.<br><br>";

// Gestion des exceptions personnalisées
echo "<h2>Gestion des exceptions personnalisées :</h2>";
echo "Définir des classes d'exceptions personnalisées avec class MonException extends Exception { /* code */ }.<br><br>";

// Classe DateTime
echo "<h2>Classe DateTime :</h2>";
echo "DateTime, DateTimeImmutable : Manipulation des dates et heures.<br><br>";

// Gestion des erreurs avec set_error_handler
echo "<h2>Gestion des erreurs avec set_error_handler :</h2>";
echo "set_error_handler('maFonctionGestionErreurs') : Enregistre une fonction de gestion d'erreurs personnalisée.<br><br>";

// Validation de formulaires
echo "<h2>Validation de formulaires :</h2>";
echo "filter_var(), filter_input(), filter_input_array(): Validation des données utilisateur avec des filtres prédéfinis.<br><br>";

// Sessions sécurisées
echo "<h2>Sessions sécurisées :</h2>";
echo "Utilisation de session_regenerate_id() pour régénérer l'ID de session afin de renforcer la sécurité.<br><br>";

// Compression et décompression de fichiers
echo "<h2>Compression et décompression de fichiers :</h2>";
echo "gzcompress(), gzuncompress(), zip_open(), zip_read() : Compression et décompression de fichiers.<br><br>";

// Manipulation des URL
echo "<h2>Manipulation des URL :</h2>";
echo "parse_url(), http_build_query(), urlencode(), urldecode(): Manipulation des composants d'une URL.<br><br>";

// Interagir avec l'environnement système
echo "<h2>Interagir avec l'environnement système :</h2>";
echo "exec(), shell_exec(), system(): Exécuter des commandes système.<br><br>";

// Opérateur ternaire
echo "<h2>Opérateur ternaire :</h2>";
echo "\$result = (\$condition) ? 'true' : 'false'; : Forme condensée de l'instruction if-else.<br><br>";

// Conversion de types de données
echo "<h2>Conversion de types de données :</h2>";
echo "(int), (string), (array), (object), etc. : Conversion explicite des types de données.<br><br>";
?>
</body>
</html>

