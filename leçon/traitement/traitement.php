<?php
foreach ($_POST as $name => $value) {
    echo $name. ' ' . $value . '<br>';
}
var_dump($_POST);
echo '<br>';

$f = fopen("sauvegarde.txt", "a");

if ($f) {
    fwrite($f, $_POST['prenom'] . "-");
    fwrite($f, $_POST['nom'] . "-");
    fwrite($f, $_POST['adresse'] . "-");
    fwrite($f, $_POST['ville'] . "-");
    fwrite($f, $_POST['cp'] . "-");

    fclose($f);
    echo "Données enregistrées avec succès dans le fichier sauvegarde.txt";
} else {
    echo "Erreur lors de l'ouverture du fichier sauvegarde.txt";
}
?>


