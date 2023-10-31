<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Inclusion du fichier d'en-tête (header2.php)
    include_once('header2.php');
?>
<h1> Les formulaires </h1>
<!--
Ils sont utilisés pour une gestion interactive d'un site et sont à la base des pages web dynamiques.
*Mise en œuvre*
Un formulaire HTML est défini entre les balises <form> et </form>.

Méthode : mode de transmission vers le serveur des informations saisies dans le formulaire.
Action : qui contient le script qui va traiter le formulaire ou les données du formulaire.

L'attribut method comprend deux types de valeurs : GET et POST.
GET : se rapporte aux données du formulaire qui seront transmises par une URL et utilise la variable superglobale $_GET.
POST : se rapporte aux données du formulaire qui seront transmises dans le corps de la requête et utilise la variable superglobale $_POST.
Syntaxe :
$data = $_GET['dt']; // GET
$data = $_POST['dt']; // POST
-->
<form action="traitement_formulaire.php" method="get">
    NOM : <input type="text" name="nom"> <br> <br>
    Ville : <input type="text" name="prenom"><br><br>
    <input type="submit" value="Envoyer">
</form>
<!--
La méthode GET envoie les données sous forme d'une suite de couples nom/valeurs ajoutés à l'URL de la page appelée.
La partie d'une URL précédée par ? est appelée chaîne de requête. Si la chaîne de requête contient plusieurs éléments, alors chaque élément/valeur doit être séparé par le caractère &.
De plus, elle ne doit pas dépasser 255 caractères. Les données transmises au serveur par la méthode GET sont visibles par les utilisateurs directement dans la barre d'adresse du navigateur.
-->
<p>Bonjour</p>
<p>Votre nom est <?php echo $_GET['nom'];?>, et votre prénom est <?php echo $_GET['prenom'];?></p>
<p>Faites un autre essai, <a href='#'>cliquez ici</a></p>

<h1> Méthode POST </h1>
<form action="traitement_formulaire.php" method="POST">
    NOM : <input type="text" name="nom"> <br> <br>
    Ville : <input type="text" name="prenom"><br><br>
    <input type="submit" value="Envoyer">
</form>
<p>Bonjour</p>
<p>Votre nom est <?php echo $_POST['nom'];?>, et votre prénom est <?php echo $_POST['prenom'];?></p>

<!-- GET et POST : Variables superglobales-->
<!-- Lorsque l'utilisateur valide le formulaire, l'attribut action appelle un programme PHP qui doit traiter les données.
Les instructions permettant de récupérer les valeurs saisies dans le formulaire sont des variables superglobales, c'est-à-dire des variables qui seront disponibles quel que soit le contexte du script.
C'est la superglobale $_POST qui nous a permis de récupérer les données fournies par le formulaire via la méthode POST.

La liste suivante détaille toutes les variables superglobales :

- $_GLOBALS : c'est une association qui a pour but de référencer toutes les variables globales définies dans le contexte d'exécution global du script. Les noms des variables globales sont des index du tableau.

- $_SERVER : il s'agit d'un tableau associatif contenant des informations comme les en-têtes, les dossiers et les chemins du script. C'est le serveur qui crée les entrées du tableau. Par exemple, l'expression $_SERVER['PHP_SELF'] renvoie le nom du fichier appelé avec le dossier à partir de la racine.

- $_GET : indique un tableau associatif contenant des valeurs passées au script via le protocole HTTP et la méthode GET.

- $_POST : indique un tableau associatif contenant des valeurs passées au script via le serveur et la méthode POST.

- $_COOKIE : indique un tableau associatif qui contient des informations concernant les cookies.

- $_SESSION : renvoie un tableau associatif qui contient des informations concernant la session en cours.

- $_REQUEST : c'est un tableau associatif qui contient des variables d'environnement qui sont définies par le système.
-->

<?php echo $_SERVER['PHP_SELF']?>

<!---FORMULAIRE-->

<h2>renseigner les champs</h2>
<form action="traitement.php" method="POST">
    <label>nom</label>
     <input type="text" placeholder="entrez votre nom ic" maxlength="30" autofocus="" name="nom"/> <br> <br>
    <label>ville</label>
     <input type="text" placeholder="entrez votre VILLE ic" maxlength="30" autofocus="" name="ville"/> <br> <br>
    <label>codepostal</label>
     <input type="number" placeholder="TAPEZ 4 CHIFRE ICI" maxlength="5" pattern="[0-9]{5}" name="cp" required/> <br> <br>
     <input type="submit" value="validation">
</form>
<form action="traitement2.php" method="POST">

</body>
</html>

