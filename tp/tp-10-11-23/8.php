<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier le bouton soumis
    if (isset($_POST["vendre"])) {
        // Redirection vers la page "vendre.php"
        header("Location: vendre.php");
        exit();
    } elseif (isset($_POST["acheter"])) {
        // Redirection vers la page "acheter.php"
        header("Location: acheter.php");
        exit();
    } elseif (isset($_POST["louer"])) {
        // Redirection vers la page "louer.php"
        header("Location: louer.php");
        exit();
    }
}

// Si le formulaire n'a pas été soumis correctement, rediriger vers l'accueil
header("Location: index.php");
exit();
?>
