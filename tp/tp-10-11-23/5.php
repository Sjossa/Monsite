<?php
$email = $browser = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si l'adresse e-mail a été soumise
    if (isset($_POST["email"])) {
        $email = $_POST["email"];
    }

    // Vérifier si le champ caché du navigateur a été soumis
    if (isset($_POST["browser"])) {
        $browser = $_POST["browser"];
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Formulaire d'adresse e-mail</title>
</head>
<body>
    <?php
    // Afficher les données si elles existent
    if (!empty($email) && !empty($browser)) {
        echo "<p>Adresse e-mail : $email</p>";
        echo "<p>Navigateur : $browser</p>";
    } else {
    ?>
        <!-- Afficher le formulaire -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <!-- Champ d'adresse e-mail -->
            <label for="email">Adresse e-mail :</label>
            <input type="email" name="email" id="email" required>

            <!-- Champ caché pour le navigateur -->
            <input type="hidden" name="browser" value="<?php echo htmlspecialchars($_SERVER['HTTP_USER_AGENT']); ?>">

            <!-- Bouton de soumission -->
            <input type="submit" value="Envoyer">
        </form>
    <?php
    }
    ?>
</body>
</html>
