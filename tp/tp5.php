<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>tableaux associatif</h1>
<?php
$tab = [
    'Sassiat' => ['johnny' => '22ans'],
    'Stalhier' => ['josauph' => '85ans'],
    'Pedo' => ['bear' => '50ans']
];

echo "<br>";
echo $tab['Sassiat']['johnny']; 
echo "<br>";

foreach ($tab as $nom => $data) {
    foreach ($data as $prenom => $age) {
        echo $nom . " -> " . $prenom . " -> " . $age . "<br>";
    }
}
echo $nom. " à ". $age."<br>" ;
?>

<h1>tableaux numerique</h1>
<?php
$nombres = array(); 
$ville = array();
for ($i = 1; $i <= 20; $i++) {
    $nombres[] = $i; 
}
for ($i = "5"; $i <= "10"; $i++) {
    
    $ville[] = $i/2;
}
echo "Contenu de la variable \$nombres : ";
foreach ($nombres as $numero) {
    echo $numero . " ";
}
echo "<br>";

echo "Contenu de la variable \$ville : ";
foreach ($ville as $valeur) {
    echo $valeur . " ";
}

echo "<br>";
$nombres2 = 15;

$recherche = false;

foreach ( $nombres as $nombres){
    if($nombres == $nombres2){
        $recherche = true;
        break;
    }
}

if($recherche){
    echo " le nombre 15 est dans le tableaux";
}else{
    echo "le nombre 15 n'est pas dans le tableaux";
};

?>
</body>
</html>