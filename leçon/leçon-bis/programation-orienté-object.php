<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medieval Style</title>
    <style>
        body {
            background-color: #2b2b2b;
            color: #8b4513;
            font-family: 'Times New Roman', serif;
            text-align: center;
        }

        main {
            padding: 20px;
        }

        h3 {
            font-size: 24px;
            border-bottom: 2px solid #8b4513;
            margin-bottom: 20px;
        }

        .person-info {
            background-color: #2b2b2b;
            border: 1px solid #8b4513;
            padding: 20px;
            border-radius: 5px;
            margin: 20px auto;
            width: 50%;
            box-shadow: 0 0 10px rgba(139, 69, 19, 0.7);
        }

        .person-info p {
            font-size: 18px;
            margin: 10px;
        }

        .dance {
            color: #800080;
        }
    </style>
</head>
<body>
<main>
    <?php
    class Personne {
        public $prenom;
        public $nom;
        public $age;

        public function __construct($prenom, $nom, $age) {
            $this->prenom = $prenom;
            $this->nom = $nom;
            $this->age = $age;
        }

        public function nomComplet(){
            return sprintf('%s %s %d', $this->nom, $this->prenom, $this->age);
        }

        public function danser(){
            echo '<p class="dance">' . $this->prenom . ' est en train de danser</p>';
        }
    }

    echo "<h3>------- Programmation Objet en PHP -------</h3>";

    $magne = new Personne('Magne', 'Jean', 102);
    $isaac = new Personne('Isaac', 'Jacques', 89);

    echo "<div class='person-info'>";
    echo "<p>Prénom de Magne: " . $magne->prenom . "</p>";
    echo "<p>Nom de Magne: " . $magne->nom . "</p>";
    echo "<p>Âge de Magne: " . $magne->age . "</p>";
    echo "</div>";

    $magne->danser();
    $ToutLenom = $magne->nomComplet();
    echo "le nom complet est ici: " . $ToutLenom . PHP_EOL;

    ?>

</main>
</body>
</html>



