<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire DWWM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h4 {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        form {
            width: 50%;
            margin: 0 auto;
        }

        fieldset {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }

        legend {
            font-weight: bold;
        }

        label {
            display: inline-block;
            width: 150px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"], /* Change input type for Date de naissance */
        input[type="email"] { /* Change input type for Email */
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #1e70bf;
        }
    </style>
</head>
<body>
    <h4>Formulaire DWWM</h4>
    <form action="traitement2.php" method="POST">
        <fieldset>
            <legend>Identité</legend>
            <label>Prénom: </label><input type="text" name="prenom" size="30"><br><br>
            <label>Nom: </label><input type="text" name="nom" size="30"><br><br>
            <label>Date de naissance: </label><input type="date" name="date"><br><br>
            <label>Email: </label><input type="email" name="em" size="30"><br><br> 
            <fieldset>
                <legend>Localisation professionnelle</legend>
                <input type="radio" name="prof" value="france">France<br>
                <input type="radio" name="prof" value="italie">Italie<br>
                <input type="radio" name="prof" value="allemagne">Allemagne<br>
            </fieldset>
        </fieldset>
        <input type="submit" value="Soumettre">
    </form>
</body>
</html>
