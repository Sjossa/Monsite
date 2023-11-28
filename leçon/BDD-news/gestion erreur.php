<?php
$dns = "mysql:localhost;dbname=mabase";
$user = "root";
$password = "";

try {
    $cnx = new PDO($dns, $user, $password);
} catch (PDOException $e) {
    echo 'une erreur est survenue !' ;
 }
 $sql = "SELECT * from  clients";
 $rs_req = $cnx->query($sql);
while ($donnes=$rs_req->fetch() ) {
    echo '<pre>';
    print_r($donnes);
    echo '</ pre>';  }
?>

$sql = "select * from clients";
$rs_req = $cnx->query($sql);
while($donnes=$rs_req->fetch(PDO:: FETCH_NUM)) {
    echo '<pre>';
    print_r($donnes);
    echo '</pre>';
  }