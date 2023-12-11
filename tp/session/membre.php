<?php
session_start();

// Vérifier si la variable de session "autoriser" n'est pas définie ou est différente de "oui"
if (!isset($_SESSION["autoriser"]) || $_SESSION["autoriser"] != "oui") {
    // Si l'utilisateur n'est pas autorisé, rediriger vers une page appropriée (par exemple, la page de connexion)
    header("location: page-de-connexion.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Membre</title>
</head>
<body>
    <h1>Page confidentielle</h1>
    <p>Félicitations, vous êtes connecté!</p>
    <a href="deconexion.php">Déconnexion</a>
</body>
</html>

