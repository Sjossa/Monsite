<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Personne {
    protected $nom;
    protected $prenom;
    protected $age;

    public function __construct($nom, $prenom, $age) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    public function dormir() {
        echo "{$this->nom} {$this->prenom} dort à une heure normale.";
    }
}

class Agriculteur extends Personne {
    public function dormir() {
        echo "{$this->nom} {$this->prenom} dort tôt, vers 20h.";
    }
}

class Infirmier extends Personne {
    public function dormir() {
        echo "{$this->nom} {$this->prenom} dort tard, vers minuit.";
    }
}

class Boulanger extends Personne {
    public function dormir() {
        echo "{$this->nom} {$this->prenom} dort à des heures variables, vers 22h.";
    }
}

// Instanciation des objets
$agriculteur = new Agriculteur("Dupont", "Jean", 35);
$infirmier = new Infirmier("Martin", "Alice", 28);
$boulanger = new Boulanger("Dubois", "Pierre", 40);

// Affichage des objets dans index.php
echo "<h1>Informations sur les personnes</h1>";
echo "<p>{$agriculteur->dormir()}</p>";
echo "<p>{$infirmier->dormir()}</p>";
echo "<p>{$boulanger->dormir()}</p>";

?>

</body>
</html>