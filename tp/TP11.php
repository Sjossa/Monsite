<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Déclaration de la classe Voiture
    class Voiture {
        // Attributs de la classe
        public $marque;
        public $couleur;
        public $type;

        // Méthode constructeur
        public function __construct($marque, $couleur, $type) {
            // Initialisation des attributs avec les valeurs fournies en argument
            $this->marque = $marque;
            $this->couleur = $couleur;
            $this->type = $type;
        }

        // Méthode pour obtenir les caractéristiques de la voiture
        public function caracteristiques() {
            // Retourne une chaîne formatée avec les caractéristiques de la voiture
            return sprintf('%s %s %s', $this->marque, $this->couleur, $this->type);
        }
    }

    // Création d'objets à partir de la classe Voiture
    $voiture1 = new Voiture('Peugeot', 'vert', 'type1');
    $voiture2 = new Voiture('Citroen', 'rouge', 'type2');
    $voiture3 = new Voiture('Renault', 'gris', 'type3');

    // Appel de la méthode et affichage des résultats
    $toutelesmarques = $voiture1->caracteristiques();
    $toutelesmarques2 = $voiture2->caracteristiques();
    $toutelesmarques3 = $voiture3->caracteristiques();

    // Affichage des résultats dans le corps du document HTML
    echo $toutelesmarques . PHP_EOL . "<br>";
    echo $toutelesmarques2 . PHP_EOL . "<br>";
    echo $toutelesmarques3 . PHP_EOL ."<br>";
    ?>
</body>
</html>

