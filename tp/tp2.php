<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php.css">
    <title>Document</title>
</head>
<body> <div><a> exercise 1</a><br>
    <?php 
$dateTemps = date("Y-m-d H :i:s");
echo " date actuelle : $dateTemps" ;
    ?></div><BR>

<div><a> exercise 2</a><br>
    <?php 
setlocale(LC_TIME, 'FRENCH');
echo strftime ('%A');
    ?></div>

<div><a> exercise 3</a><br>
    <?php  //new crer une nouvelle instance de la classe datetime
$age = "2001-07-02";//date de naissance
$naissance = new dateTIME($age);//creer Datetime a partir de la date de naissance
$jour = new dateTIME();//date aujourdh'ui
$d = $naissance ->diff($jour);//calcul la diference entre les deux date 
echo "j'ai ".$d->y ." ans"//affiche nombre d'année diference
?></div>

<div><a> exercise 4</a><br>
    <?php 

$dateFormatJourMoisAnnee = "17/10/2023"; // Date au format "JJ/MM/AAAA"
$date = DateTime::createFromFormat('d/m/Y', $dateFormatJourMoisAnnee);
$dateAuFormatAAAAMMJJ = $date->format('Y-m-d');

echo $dateAuFormatAAAAMMJJ;

$d = "29/07/2018";
    $dt = DateTime::createFromFormat('d/m/Y',$d);
    $dateAF = $dt->format('Y-m-d');
    echo $dateAF;

?></div>
    
</body>
</html>