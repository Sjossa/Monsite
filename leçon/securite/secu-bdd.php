<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Vérification des champs obligatoires
    if (!isset($_POST["nom"]) || empty($_POST["nom"])) {
        echo "Le nom est obligatoire";
        exit();
    }

    if (!isset($_POST["prenom"]) || empty($_POST["prenom"])) {
        echo "Le prénom est obligatoire";
        exit();
    }

    if (!isset($_POST["email"]) || empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        echo "L'adresse email est obligatoire et doit être valide";
        exit();
    }

    if (!isset($_POST["mdp"]) || empty($_POST["mdp"])) {
        echo "Le mot de passe est obligatoire";
        exit();
    }

    // Échappement des données
    $nom =($_POST["nom"]);
    $prenom = ($_POST["prenom"]);
    $email = htmlspecialchars($_POST["email"]);
    $mdp = htmlspecialchars($_POST["mdp"]);

    echo strip_tags($nom);

    // Connexion à la base de données
    $dsn = "mysql:host=localhost;dbname=secu_bdd";
    $user = "root";
    $pwd = "";

    try {
        $pdo = new PDO($dsn, $user, $pwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erreur de connexion à la base de données" . $e->getMessage();
        exit();
    }

//insertion des données dans la base des données
  $sql = "INSERT INTO utilisateurs (nom, prenom, mdp, mail) VALUES (?, ?, ?, ?)";
  $stmt = $pdo->prepare($sql);
$stmt->execute([$nom,$prenom,$mdp,$email ]) ;

echo " Vos données sont enregistrées";
?>
</body>
</html>
