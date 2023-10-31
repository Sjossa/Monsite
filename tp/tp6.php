<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>TP6</h1>
    </header>
    <main>
        <?php
        $nom = "johnny";
        echo $nom;
        ?>
        <br>
        <?php
        for ($p = 1; $p <= 5; $p++) {
            echo $p . ".";
        }
        ?>
        <br>
        <?php
        $tablo1 = ["JOHN,", "Fitzgerald,", "Kennedy,", "JACK ,", "KENNEDY"];
        for ($i = 0; $i < count($tablo1); $i++) {
            echo $tablo1[$i];
        }
        ?>
        <br>
        <?php
        function calculersomme($nbr1, $nbr2) {
            return $nbr1 / $nbr2;
        }
        echo "Le résultat est de " . calculersomme(20, 2) . "<br>";
        ?>

        <form action="" method="get">
            NOM : <input type="text" name="nom"> <br> <br>
            prénom : <input type="text" name="prenom"><br><br>
            EMAIL: <input type="email" name="email"><br><br>
            <input type="submit">
        </form>
        <p>bonjour</p>
        <p>Votre nom est <?php echo $_GET['nom'];?>, et votre prénom est <?php echo $_GET['prenom'];?>. Et ainsi donc votre email est <?php echo $_GET['email'];?></p>
        <p>Faites un autre essai, <a href='#'>cliquez ici</a></p>
    </main>
    <footer>
        &copy; <?php echo date("Y"); ?> TP6
    </footer>
</body>
</html>
