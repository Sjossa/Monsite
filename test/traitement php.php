<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  //Connexion vers le serveur
$svr_name = "192.168.107.19"; // 127.0.0.1 OU localhost
$user = "toto";
$pwd = "tata";
// Je crée la connexion vers le serveur
$con = mysqli_connect($svr_name, $user, $pwd);
// Je teste si la connexion à réussi
if(!$con) {
    // J'arrête la connexion
    die("Echec de connexion".mysqli_connect_error());
}
echo "Connexion réussie";
    ?>
</body>
</html>