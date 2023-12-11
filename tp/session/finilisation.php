<?php
// Informations de connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe_bd = ""; // Renommé pour éviter la confusion
$base_de_donnees = "inscription";

// Connexion à la base de données MySQL
$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe_bd, $base_de_donnees);

// Vérification de la connexion
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mot_de_passe = $_POST['mot_de_passe'];

// Utilisation de requête préparée pour éviter les injections SQL
$req_insertion = $connexion->prepare("INSERT INTO inscrit (nom, prenom, email, mot_de_passe) VALUES (?, ?, ?, ?)");

// Vérification de la préparation de la requête
if ($req_insertion === false) {
    die("Erreur de préparation de la requête : " . $connexion->error);
}

// Liaison des paramètres
$req_insertion->bind_param("ssss", $nom, $prenom, $email, $mot_de_passe);

// Exécution de la requête
if ($req_insertion->execute() === true) {
    echo "Inscription réussie !";
} else {
    echo "Erreur lors de l'inscription : " . $req_insertion->error;
}

// Fermeture de la connexion et de la requête
$req_insertion->close();
$connexion->close();

// Redirection vers la page de membre après l'inscription
header("Location: membre.php");
exit();
?>
