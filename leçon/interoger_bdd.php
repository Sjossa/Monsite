<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>/* Style de base pour la page */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Style pour le tableau */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

th, td {
    padding: 10px;
    text-align: center;
    border: 1px solid #ccc;
}

th {
    background-color: #333;
    color: #fff;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Style pour les titres */
h1 {
    text-align: center;
}

/* Style pour les paragraphes */
p {
    text-align: center;
}

/* Style pour les en-têtes */
header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}
</style>
</head>
<body>
<?php
$cnx = mysqli_connect("localhost", "root", "0000", "casse2");

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
