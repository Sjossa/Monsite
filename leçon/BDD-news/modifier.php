<a href="index.html">HOME</a>
<form action="" method="post">
    <input type="text" name="id" placeholder="Entrez l'id à remplacer">
    <input type="text" name="nom" placeholder="Entrez le nouveau nom">
    <input type="text" name="Prenom" placeholder="Entrez le nouveau prénom">
    <input type="text" name="email" placeholder="Entrez le nouveau mail">
    <input type="submit" value="Envoyer">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tp_php";

$connexion = new mysqli($servername, $username, $password, $dbname);
if ($connexion->connect_error){
    die("Connexion failed : " . $connexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $prenom = $_POST["Prenom"];
    $email = $_POST["email"];

    $query = "UPDATE utilisateur SET nom = '$nom', prenom = '$prenom', email = '$email' WHERE id= $id";

    if ($connexion->query($query) === TRUE){
        echo "Bravo, Utilisateur mis à jour avec succès ! ";
    } else {
        echo "Erreur : ". $query . "<br>". $connexion->error;
    }
}

$connexion->close();
?>