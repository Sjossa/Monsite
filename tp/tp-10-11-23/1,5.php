<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement des données</title>
    <script>
        function showAlert(message) {
            alert(message);
        }
    </script>
</head>
<body>

    <h1>Données du formulaire</h1>

    <?php
    // Vérifie si des données ont été soumises
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupère les données du formulaire
        $nom = isset($_POST["nom"]) ? $_POST["nom"] : null;
        $prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : null;
        $adresse = isset($_POST["adresse"]) ? $_POST["adresse"] : null;
        $ville = isset($_POST["ville"]) ? $_POST["ville"] : null;
        $code_postal = isset($_POST["code_postal"]) ? $_POST["code_postal"] : null;

        // Vérifie si toutes les données sont présentes
        if ($nom && $prenom && $adresse && $ville && $code_postal) {
            // Affiche les données dans un tableau HTML
            echo "<table border='1'>";
            echo "<tr><td>Nom</td><td>$nom</td></tr>";
            echo "<tr><td>Prénom</td><td>$prenom</td></tr>";
            echo "<tr><td>Adresse</td><td>$adresse</td></tr>";
            echo "<tr><td>Ville</td><td>$ville</td></tr>";
            echo "<tr><td>Code Postal</td><td>$code_postal</td></tr>";
            echo "</table>";
        } else {
            // Affiche une alerte JavaScript si des données sont manquantes
            echo "<script>showAlert('Veuillez remplir tous les champs du formulaire.');</script>";
        }
    } else {
        echo "<p>Aucune donnée soumise.</p>";
    }
    ?>

</body>
</html>

