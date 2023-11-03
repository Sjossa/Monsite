<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Style de base pour la page */
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

// Première requête pour les personnes vivant à Paris ou Bordeaux
$sql = "SELECT * FROM personne WHERE ville = 'Paris' OR ville = 'Bordeaux'";

if ($result = mysqli_query($cnx, $sql)) {
    echo "Pour cette requête <br> " . $sql . "<br><br>";
    echo "Il y a " . mysqli_num_rows($result) . " réponses <br><br>";

    echo "<table>";
    echo "<th>" . "NumAch" . "</th>";
    echo "<th>" . "Nom" . "</th>";
    echo "<th>" . "Age" . "</th>";
    echo "<th>" . "Ville" . "</th>";
    echo "<th>" . "Sexe" . "</th>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['NumAch'] . "</td>";
        echo "<td>" . $row['Nom'] . "</td>";
        echo "<td>" . $row['Age'] . "</td>";
        echo "<td>" . $row['Ville'] . "</td>";
        echo "<td>" . $row['Sexe'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    // Libère le jeu de résultats
    mysqli_free_result($result);
}

// Deuxième requête pour les personnes dont l'âge est compris entre 25 et 40 ans
$sql1 = "SELECT * FROM personne WHERE age >= 25 AND age <= 40";

if ($result1 = mysqli_query($cnx, $sql1)) {
    echo "Pour cette requête <br> " . $sql1 . "<br><br>";
    echo "Il y a " . mysqli_num_rows($result1) . " réponses <br><br>";

    echo "<table>";
    echo "<th>" . "NumAch" . "</th>";
    echo "<th>" . "Nom" . "</th>";
    echo "<th>" . "Age" . "</th>";
    echo "<th>" . "Ville" . "</th>";
    echo "<th>" . "Sexe" . "</th>";

    while ($row1 = mysqli_fetch_assoc($result1)) {
        echo "<tr>";
        echo "<td>" . $row1['NumAch'] . "</td>";
        echo "<td>" . $row1['Nom'] . "</td>";
        echo "<td>" . $row1['Age'] . "</td>";
        echo "<td>" . $row1['Ville'] . "</td>";
        echo "<td>" . $row1['Sexe'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    // Libère le jeu de résultats
    mysqli_free_result($result1);
}

$sql2 = "SELECT * FROM personne WHERE nom LIKE '%n%'";


if ($result2 = mysqli_query($cnx, $sql2)) {
    echo "Pour cette requête <br> " . $sql2 . "<br><br>";
    echo "Il y a " . mysqli_num_rows($result2) . " réponses <br><br>";

    echo "<table>";
    echo "<th>" . "NumAch" . "</th>";
    echo "<th>" . "Nom" . "</th>";
    echo "<th>" . "Age" . "</th>";
    echo "<th>" . "Ville" . "</th>";
    echo "<th>" . "Sexe" . "</th>";

    while ($row2 = mysqli_fetch_assoc($result2)) {
        echo "<tr>";
        echo "<td>" . $row2['NumAch'] . "</td>";
        echo "<td>" . $row2['Nom'] . "</td>";
        echo "<td>" . $row2['Age'] . "</td>";
        echo "<td>" . $row2['Ville'] . "</td>";
        echo "<td>" . $row2['Sexe'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    // Libère le jeu de résultats
    mysqli_free_result($result2);
}

// Ferme la connexion à la base de données
mysqli_close($cnx);
?>
</body>
</html>
