<?php
// Démarrage d'une session PHP
session_start();

// Vérification si le formulaire a été soumis en utilisant la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Informations de connexion à la base de données
    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe_bd = ""; // Renommé pour éviter la confusion
    $base_de_donnees = "inscription";

    // Connexion à la base de données MySQL
    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe_bd, $base_de_donnees);

    // Vérification des erreurs de connexion à la base de données
    if ($connexion->connect_error) {
        die("La connexion à la base de données a échoué : " . $connexion->connect_error);
    }

    // Récupération des données du formulaire
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // Utilisation de requête préparée pour éviter les injections SQL
    $req_verification = $connexion->prepare("SELECT id, nom, prenom FROM inscrit WHERE email=? AND mot_de_passe=?");
    $req_verification->bind_param("ss", $email, $mot_de_passe);
    $req_verification->execute();
    $req_verification->store_result();

    // Vérification si des résultats ont été obtenus
    if ($req_verification->num_rows > 0) {
        // Informations d'identification valides, création de la session
        $req_verification->bind_result($id, $nom, $prenom);
        $req_verification->fetch();

        // Enregistrement des informations dans la session
        $_SESSION['user_id'] = $id;
        $_SESSION['user_nom'] = $nom;
        $_SESSION['user_prenom'] = $prenom;

        // Redirection vers une page protégée
        header("Location: membre.php");
        exit();
    } else {
        // Si les informations d'identification sont incorrectes, définir un message d'erreur
        $erreur = "Email ou mot de passe incorrect.";
    }

    // Fermeture de la requête et de la connexion pour libérer les ressources
    $req_verification->close();
    $connexion->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HFM.css">
    <link rel="stylesheet" href="inscription.css">
    <title>Document</title>
</head>
<body>
    <header> 
        <div class="centre">
            <div id="logo">
                <img src="R/logo.png" alt="Logo">
                <img src="R/slogan.png" alt="Slogan">
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="footer.html">Nos services</a></li>
                    <li><a href="index.html">Nos infos</a></li>
                    <li><a href="index.html">Contact</a></li>
                </ul>
            </nav>
            <div id="connexion">
                <button class="compte" id="visible" onclick="inscription()">connexion</button>
                <button class="compte" id="visible" onclick="inscription2()">inscription</button>
            </div>
            <!-- Formulaire de connexion -->
            <div id="formulaire" style="display: none;">
                <form action="" method="post">
                    <div class="label">Login</div>
                    <input type="text" name="email" value="">
                    <br>
                    <div class="label">Mot de passe</div>
                    <input type="password" name="mot_de_passe">
                    <br>
                    <input type="submit" value="S'authentifier" name="valider">
                </form>
            </div>
            <!-- Formulaire d'inscription -->
            <div id="formulaire2" style="display: none;">
                <form action="finilisation.php" method="post" onsubmit="return motdepasse()">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>

                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" required>

                    <label for="email">Email :</label>
                    <input type="text" id="email" name="email" required>

                    <label for="mot_de_passe">Mot de passe :</label>
                    <input type="password" id="mot_de_passe" name="mot_de_passe" required>

                    <label for="mdp2">Confirmer le mot de passe :</label>
                    <input type="password" id="mdp2" name="mdp2" required>

                    <div id="error"></div>

                    <button type="submit">S'inscrire</button>
                </form>
            </div>
        </div>
    </header>
    <?php
    if(!empty($erreur)){ ?>
        <div id="erreur">
            <?=$erreur?>
        </div>
    <?php } ?>
    <script>
        function motdepasse() {
            var mdp1 = document.getElementById("mot_de_passe").value;
            var mdp2 = document.getElementById("mdp2").value;

            if (mdp1 !== mdp2) {
                var msg = document.createTextNode("Les mots de passe sont différents");
                document.getElementById("error").innerHTML = "";
                document.getElementById("error").appendChild(msg);
                return false; 
            } 
            return true; 
        }

        function inscription() {
            var formulaire = document.getElementById("formulaire");

            if (formulaire.style.display === "none") {
                formulaire.style.display = "block";
            } else {
                formulaire.style.display = "none";
            }
        }

        function inscription2() {
            var formulaire = document.getElementById("formulaire2");

            if (formulaire.style.display === "none") {
                formulaire.style.display = "block";
            } else {
                formulaire.style.display = "none";
            }
        }
    </script>
</body>
</html>
