<?php
session_start();
if($_SESSION["autoriser"]!="oui"){
    header("location:TP-FO.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HFM.css">
   

    <title>Document</title>
</head>
<body onload="loadFooter(),loadHeader()">
    <main> 
       

<div id="info">
    <div class="contenu">
        <div id="actu">
        <h1>ACTUALITES</h1>
    
    <h3>Fermeture fêtes de fin d'année</h3>
    <p>La clinique sera fermée du lundi 25 décembre 2023 au lundi 1er janvier 2024 inclus.</p>
    <p>Toute l'équipe de la clinique vous souhaite de joyeuses fêtes de fin d'année.</p>
   
    
    <h3>Jeu du calendrier de l'Avent </h3>
    <p>Suivez-nous sur Facebook et Instagram et participez à notre jeu du calendrier de l'Avent.<br>
    24 jours, 24 questions pour remporter un cadeau d'une valeur de 20 euros.</p>
 
    <h3>La clinique recrute</h3>
    <p>La clinique vétérinaire de la Porte du Gâtinais recrute un vétérinaire.
    Pour toutes les informations au sujet du poste, consultez l'onglet "recrutement".</p>
    
    <h3>Ration ménagère Vet-Nutrition Pro</h3>
    <p>Nous sommes partenaires de Vet-Nutrition Pro, le service mis au point par le Dr vétérinaire Géraldine Blanchard,<br>
     spécialiste reconnue en nutrition animale, qui élabore la ration ménagère idéale pour VOTRE compagnon à 4 pattes.</p>
 
     <h3>Renseignements à la clinique.</h3>
    Label "Cat Friendly"
    La clinique vétérinaire a obtenu le label "Cat Friendly" niveau argent.<br>
    Cette certification récompense les moyens mis en œuvre pour faire de la clinique un lieu adapté aux chats, <br>de façon à minimiser leur stress lors des visites chez le vétérinaire et/ou lors d'une hospitalisation.<br>
    Salle d'attente chats séparée de celle des chiens, box aménagés avec cachettes et couvertures douces,<br> manipulations respectueuses et prise en compte du comportement du chat sont autant de moyens <br>
    mis en œuvre pour faire du séjour de votre félin à la clinique un moment serein. 

    lorem*100

    </div>
</div>
    <div class="contenue" ><img id="chat"src="R/chat-noel.jpg" style= "float: right;"></div>
</div>
    


  
    </main>
<?php
include("footer.php");
?>
  
</body>
</html>