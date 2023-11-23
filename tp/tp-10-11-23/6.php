<?php
// Initialisation des variables
$prixHT = $tauxTVA = $montantTVA = $prixTTC = '';

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $prixHT = isset($_POST["prixHT"]) ? $_POST["prixHT"] : '';
    $tauxTVA = isset($_POST["tauxTVA"]) ? $_POST["tauxTVA"] : '';

    // Calculer le montant de la TVA et le prix TTC
    if (!empty($prixHT) && !empty($tauxTVA)) {
        $montantTVA = $prixHT * ($tauxTVA / 100);
        $prixTTC = $prixHT + $montantTVA;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Calcul TVA</title>
</head>
<body>
    <!-- Afficher le formulaire -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <!-- Champ pour le prix HT -->
        <label for="prixHT">Prix HT :</label>
        <input type="text" name="prixHT" id="prixHT" value="<?php echo $prixHT; ?>" required>

        <!-- Champ pour le taux de TVA -->
        <label for="tauxTVA">Taux de TVA :</label>
        <input type="text" name="tauxTVA" id="tauxTVA" value="<?php echo $tauxTVA; ?>" required>

        <!-- Bouton de soumission -->
        <input type="submit" value="Calculer">

        <!-- Afficher le montant de la TVA et le prix TTC -->
        <?php
        if (!empty($montantTVA) && !empty($prixTTC)) {
            echo "<p>Montant TVA : $montantTVA</p>";
            echo "<p>Prix TTC : $prixTTC</p>";
        }
        ?>
    </form>
</body>
</html>
