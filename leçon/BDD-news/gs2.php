
<?php
$dns = "mysql:host=localhost;dbname=mabase"; 
$user = "root";
$password = "";

// Deuxième requête SQL

try {
    $cnx = new PDO($dns, $user, $password);
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo "Une erreur : " . $e->getMessage();
}
$sql2 = "SELECT * FROM client";
$rs_req2 = $cnx->query($sql2);
while ($donnees2 = $rs_req2->fetch(PDO::FETCH_ASSOC)) {
    echo '<pre>';
    print_r($donnees2);
    echo '</pre>';
}
?>





?>


