<?php
// Paramètres de limite pour le fichier (1 Mo)
$limitSize = 1 * 1024 * 1024; // 1 Mo en octets

// Messages d'erreur
$errors = [];

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si un fichier a été téléchargé sans erreur
    if (isset($_FILES["zipFile"]) && $_FILES["zipFile"]["error"] == UPLOAD_ERR_OK) {
        // Vérifier la taille du fichier
        if ($_FILES["zipFile"]["size"] > $limitSize) {
            $errors[] = "Le fichier dépasse la taille limite de 1 Mo.";
        } else {
            // Récupérer les informations sur le fichier
            $fileName = $_FILES["zipFile"]["name"];
            $fileSize = $_FILES["zipFile"]["size"];

            // Déplacer le fichier vers un emplacement souhaité (dans cet exemple, le même répertoire)
            move_uploaded_file($_FILES["zipFile"]["tmp_name"], $fileName);

            // Afficher les informations du fichier et la confirmation
            echo "Nom du fichier : $fileName<br>";
            echo "Taille du fichier : $fileSize octets<br>";
            echo "Confirmation de réception : Fichier reçu avec succès.";
        }
    } else {
        $errors[] = "Erreur lors du transfert du fichier.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Transfert de fichier ZIP</title>
</head>
<body>
    <!-- Afficher les erreurs s'il y en a -->
    <?php
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
    ?>

    <!-- Afficher le formulaire -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        <!-- Champ pour le fichier ZIP -->
        <label for="zipFile">Fichier ZIP (max 1 Mo) :</label>
        <input type="file" name="zipFile" id="zipFile" accept=".zip" required>

        <!-- Bouton de soumission -->
        <input type="submit" value="Transférer">
    </form>
</body>
</html>
