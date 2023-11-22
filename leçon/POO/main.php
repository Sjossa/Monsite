<?php
///20.11.23
include("Eleve2.php");

$eleve1 = new Eleve2;
$eleve1->setPrenom("diane");
echo $eleve1->getPrenom() . '<br />';
echo 'cette élève a été inscrite le ' . $eleve1->_dateInscription . '<br>';

$eleve2 = new Eleve2; // Utiliser une autre instance pour le deuxième élève
$eleve2->setPrenom("martin");
echo $eleve2->getPrenom() . '<br />';
echo 'cette élève a été inscrite le ' . $eleve2->_dateInscription . '<br>';

?>
