
<?php 
$eleveN1 = new Eleve();
$eleveN2 = new EleveFille(); // Utilisation de la classe EleveFille

// Définition des propriétés des objets
$eleveN1->setPrenom('Alain'); // Utilisation de la méthode setPrenom
$eleveN2->setPrenom('Justine');
$eleveN2->setAge(22);

// Affichage des informations
echo $eleveN1->getPrenom() . '<br />'; // Utilisation de la méthode getPrenom
echo $eleveN2->getPrenom() . ' qui a ' . $eleveN2->getAge() . ' ans';
?>