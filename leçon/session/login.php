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
    <title>Login session</title>
</head>
<body>
    <form action="" method="post">
        <div class="label">Login</div>
        <input type="text" name="login" value="">
        <br>
        <div class="label">Mot de passe</div>
        <input type="password" name="pass"><br>
        <input type="submit" value="S'authentifier" name="valider">
    </form>
    <?php
    if(!empty($erreur)){ ?>
    <div id="erreur">
        <?=$erreur?>
    </div>
   <?php } ?>

</body>
</html>
