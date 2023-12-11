<?php
session_start();
@$login = $_POST["login"];
@$pass = $_POST["pass"];
@$valider = $_POST["valider"];
$erreur = "";

if (isset($valider)) {
    if ($login == "user" && md5($pass) == "3def184ad8f4755ff269862ea77393dd") {
        $_SESSION["autoriser"] = "oui";
        header("location: session.php");
        exit();
    } else {
        $erreur = "mauvais login ou mot de passe";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulaire.css">
    <title>Formulaire</title>
</head>
<body>
    <div id="formulaire">
    <form action="inscription.php" method="post" id="f" onsubmit="return motdepasse()">
        <fieldset>
            <legend>Informations personnelles</legend>

            <label for="nom">Indiquez votre nom</label>
            <input type="text" name="nom" id="nom" required>

            <label for="nom">Indiquez votre prenom</label>
            <input type="text" name="prenom" id="prenom" required>
            <br>
        
            <label for="email">Indiquez votre adresse mail:</label>
            <input type="email" id="email" name="email" required>
            <br>

            <label for="numero">Indiquez un numéro de téléphone (optionnel)</label>
            <input type="tel" name="tel" id="tel" pattern="^[0-9]{10}$">
            <br>

            <label for="adresse">Veuillez entrer votre adresse (optionnel)</label>
            <input type="text" name="adresse" id="adresse">
        </fieldset>

        <fieldset>
            <legend>Informations de connexion</legend>

            <label for="mdp1">donné le mot de passe donné par le veterinaire</label>
            <input type="password" name="mdp1" id="mdp1" value="" required>
            <br>

            <label for="mdp2">Vérification du mot de passe</label>
            <input type="password" name="mdp2" id="mdp2" value="" required>
        </fieldset>

        <fieldset>
            <legend>Options</legend>

            <input type="checkbox" name="termes" id="termes">
            <label>J'accepte les termes et la politique de confidentialité</label>
            <br>

            <input type="checkbox" name="pub_actualites"  id="pub_actualites">
            <label>J'accepte de recevoir les actualités du cabinet</label>
<br>
            <input type="checkbox" name="pub_partenaires"  id="pub_partenaires">
            <label>J'accepte de recevoir les informations de nos partenaires</label>
        </fieldset>

        <input type="submit" value="Soumettre">
        <label id="error"></label>
    </form>
</div>
    <script>
        function motdepasse() {
            var mdp1 = document.getElementById("mdp1").value;
            var mdp2 = document.getElementById("mdp2").value;

            if (mdp1 !== mdp2) {
                var msg = document.createTextNode("Les mots de passe sont différents");
                document.getElementById("error").innerHTML = "";
                document.getElementById("error").appendChild(msg);
                return false; 
            } 
            return true; 
        }
    </script>
</body>
</html>
