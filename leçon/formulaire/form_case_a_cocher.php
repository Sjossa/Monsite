<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="checkbox" name="fruit[]" value="pomme"> Pomme <br>
        <input type="checkbox" name="fruit[]" value="orange"> Orange <br>
        <input type="checkbox" name="fruit[]" value="pamplemousse"> Pamplemousse <br>
        <input type="checkbox" name="fruit[]" value="banane"> Banane <br>
        <input type="checkbox" name="fruit[]" value="avocat"> Avocat <br>
        <input type="submit" value="Envoyer">
    </form>

    <!-- Dans cet exemple, les cases à cocher ont le même nom 'fruit' -->

    <?php
    if(isset($_POST["fruit"])) {

        foreach($_POST["fruit"] as $value) {
            echo "Fruit sélectionné : " . $value . "<br>";
        }
    }
    ?>
</body>
</html>
