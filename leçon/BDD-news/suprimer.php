<a href="index.html">HOME</a>
<form action="" method="GET">
    <input type="text" name="id" placeholder="Entrez l'id à supprimer">
    <input type="submit" value="Envoyer">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tp_php";

$connexion = new mysqli($servername, $username, $password, $dbname);

if ($connexion->connect_error){
    die("Erreur de connexion : " . $connexion->connect_error);
}

if (isset($_GET["id"])){
    $id = $_GET["id"];

    // Sanitize the input
    $id = intval($id); // Assuming ID is an integer

    $query = "DELETE FROM utilisateur WHERE id=$id";

    if ($connexion->query($query) === TRUE){
        echo "Bravo, utilisateur supprimé avec succès !";
    } else {
        echo "Erreur lors de la suppression : " . $connexion->error;
    }

    
    // Close connection
    $connexion->close();
}
?>