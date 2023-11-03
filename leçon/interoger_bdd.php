<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$cnx = mysqli_connect("localhost", "root", "", "casse2");

if (mysqli_connect_errno()) {
    echo "Erreur de connexion à la base " . mysqli_connect_error();
}


$sql = "SELECT * FROM personne ORDER BY numach ASC";

if ($result = mysqli_query($cnx, $sql)) {
    echo "Pour cette requête <br> " . $sql . "<br><br>";
    echo "Il y a " . mysqli_num_rows($result) . " réponses <br><br>";
}

echo "<table class='table table-hover'>";
echo "<th>" . "NumAch" . "</th>";
echo "<th>" . "Nom" . "</th>";
echo "<th>" . "Age" . "</th>";
echo "<th>" . "Ville" . "</th>";
echo "<th>" . "Sexe" . "</th>";

// Pour l'ensemble des lignes du jeu de résultats, répète while($row = mysqli_fetch_row($result)) {
while ($row = mysqli_fetch_row($result)) {
    echo "<tr>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "<td>" . $row[3] . "</td>";
    echo "<td>" . $row[4] . "</td>";
    echo "</tr>";
}

echo "</table>";

// Annule le jeu de résultats
mysqli_free_result($result);

// Ferme la connexion à la base de données
mysqli_close($cnx);
?>
</body>
</html>
