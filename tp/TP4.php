<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleGrid.css">
    <title>Liste de Fruits et Notes</title>
</head>
<body>
    <?php
    include_once('../header.php');
    ?>

    <section>
        <h1>Liste de Fruits</h1>
        <?php
        $fruits = ["mandarine", "Banane", "Orange", "Fraise", "raisin"];
        $fruits[] = "Ananas";
        $taille = count($fruits);
        ?>

        <ul>
            <li>Les fruits dans le tableau sont :</li>
            <?php
            foreach ($fruits as $fruit) {
                echo "<li>" . $fruit . "</li>";
            }
            ?>
        </ul>
        
        <p>La taille totale du tableau est : <?php echo $taille; ?></p>
        <p>Le deuxième élément du tableau est : <?php echo $fruits[1]; ?></p>
   
        <h1>Notes</h1>
        <?php
        $tab = [
            'alice' => '18',
            'bob' => '17',
            'joaquim' => '10',
            'ulfric' => '5',
            'charli' => '5',
        ];

        echo "<p>La note d'Alice est de " . $tab['alice'] . "</p>";

        echo "<ul>";
        foreach ($tab as $prenom => $note) {
            echo "<li>$prenom -> $note</li>";
        }
        echo "</ul>";
        $moyenne = array_sum($tab) / count($tab);
        echo "<p>La moyenne est de : $moyenne</p>";
        ?>
    </section>
    
    <?php
    include_once('../footer.php');
    ?>
</body>
</html>


