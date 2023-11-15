<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
   /* CODER EN ORIENTÉ OBJET

    La programmation orientée objet est beaucoup moins linéaire par rapport à la programmation procédurale.
    Son principal avantage est d'être mieux organisée, ce qui facilite la lisibilité du code et sa maintenance.
    Son concept est un peu plus difficile à maîtriser que celui du langage procédural qui nous est plus familier dans sa manière de s'exécuter.
    Son principe est de faire en sorte que tout ce que nous allons coder devienne un objet.

    Qu'est-ce qu'un objet ? 
    Un objet est tout ce que vous avez l'habitude de manipuler au quotidien, par exemple, un livre, un fauteuil.

    Différence entre procédural et POO
    Ce sont deux manières de programmer.
    Sur le fond, elles utilisent le même langage, c'est-à-dire tout ce que nous avons appris jusqu'ici. Elles se différencient sur l'approche de la conception du programme lui-même.
    Comme nous l'avons compris, la POO a l'avantage d'avoir un code plus clair que celui du procédural et donc plus facile à mettre à jour. Il sera également beaucoup plus facile
    de le réutiliser dans d'autres portions de code de notre application ou site internet, ce qui est loin d'être négligeable.

    En résumé, on peut retenir qu'il existe deux façons de programmer en PHP : POO ou procédural.
    Il n'y a donc pas de bonne ou mauvaise façon de coder. Nous disons simplement que plus votre site ou application grossira, plus vous aurez intérêt à utiliser la POO.

    Les fondamentaux de la POO
    Principe de la POO

    La POO se base sur le principe que tout élément inscrit est un objet. Le principe sera de créer des objets, pour cela nous utilisons des classes.
    Une classe est donc un bloc de code structuré qui servira de moule pour la création d'un ou de plusieurs objets.
    
    -- La Classe --

    Nous venons de voir que le principe d'une classe est de créer un objet.
    La classe utilise le mot-clé "class" et contient un ensemble de fonctions qui serviront de modèle pour un objet.
    Ces fonctions porteront le nom de "méthodes". Lorsqu'on crée une fonction à l'intérieur d'une classe, on l'appelle "méthode". En revanche, le principe de fonctionnement est totalement identique.

    --les objets --
    maintenat que nou avons défini une classe, nous pouvons alors créer un objet issu  de cette classe . on dit alors qu'on instancie la classe ou qu l'objet est une instance de la classe.
    ce objet seront donc construits a partiee des méthodes ( fonction) et des propriétés ou attributs (varriable) de la classe.

    en retenanat que la POO  est bassée sur les objet et les classes . on cré des objets a partir d'une classe , chaque objet acces aux méthodes et aus propriete de la classe qui les a créees.
    
      -- Création d'une Classe --

    Par convention, le nom de la classe commence par une lettre majuscule, et chaque classe sera créée dans un fichier unique.
    Le fichier PHP contiendra donc uniquement la classe ainsi que ses attributs et ses méthodes.
    Ce fichier pourra alors être appelé partout dans notre site ou application, notamment grâce aux inclusions de fichiers que nous avons apprises jusqu'ici.

Syntaxe :

class MaClasse {

}

Les différentes visibilités d'une propriété :
** La visibilité publique
Une propriété de visibilité publique peut être appelée de n'importe quel endroit du site. Cela signifie également qu'elle peut être modifiée de n'importe quel endroit du site.
Sa syntaxe : public $_propriete;

** La propriété de visibilité privée
Une propriété de visibilité privée ne peut être appelée que depuis la classe. Cela signifie également qu'elle pourra être modifiée uniquement à partir de la classe.
Sa syntaxe : private $_propriete;

** La propriété de visibilité protégée
Une propriété de visibilité protégée ne peut être appelée que depuis la classe parent, mais aussi depuis une ou des classes enfants. Cela signifie qu'elle ne pourra être modifiée qu'à partir de la classe parent ou des classes enfants.
Sa syntaxe : protected $_propriete;

** Les accesseurs et les mutateurs **

-- Les mutateurs

Un mutateur (ou un setter) permet d'affecter une valeur à une propriété d'un objet. Grâce aux mutateurs, nous allons pouvoir affecter n'importe quelle valeur à notre propriété lors et après la création d'un nouvel objet.

-- Créer un mutateur
La création d'un mutateur se fera donc au travers d'une méthode. Le mutateur portera la mention "set", comme setter. Ensuite, nous lui donnerons le nom de la propriété qu'il devra affecter d'une nouvelle valeur.
Syntaxe :
public function setPrenom($prenom){
  $this->prenom = $prenom;
}

setPrenom() est une méthode de type mutateur et de visibilité publique. Elle possède un paramètre $prenom. Ce paramètre est directement affecté à l'attribut $prenom grâce aux commandes $this->prenom.

Grâce à cette méthode à laquelle nous passons la variable $prenom, nous pouvons affecter un prénom à chaque personne que nous créerons avec la table Pers (ou Personne).

-- Accéder à un mutateur

L'accès à un mutateur se fait comme nous l'avons vu dans l'exemple de la classe Pers, c'est-à-dire avec l'aide du caractère "->":
$Emi = new Pers();
$Emi->setPrenom('Pierre'); 
Nous accédons à la méthode setPrenom en lui affectant l'argument 'Pierre'.

En résumé, grâce aux mutateurs, nous avons pu modifier la valeur de la propriété privée (private), en lui affectant une valeur de notre choix

***** Les accesseurs
Un accesseur (ou getter) permet d'afficher le contenu d'une propriété. Il s'agit d'une méthode, au même titre que le setter.

Créer un accesseur
La création d'un accesseur se fera donc au travers d'une méthode. L'accesseur portera la mention "get", comme getter. Ensuite, nous donnerons le nom de la propriété dont il affichera la valeur.
syntaxe :
public function getPrenom() {
  return $this->prenom;
}
NB : getPrenom() est une méthode accesseur et de visibilité publique. Elle est relativement simple puisqu'elle se contente de retourner la valeur du paramètre $prenom. Grâce à la méthode getPrenom(), nous récupérons le contenu de la propriété $prenom.

-- Accéder à un accesseur

L'accès à un accesseur se fait avec l'aide du caractère "->":
$Emi = new Pers;
$Emi->setPrenom('Pierre');
echo $Emi->getPrenom();
Sur la dernière ligne, nous accédons à la méthode getPrenom afin de récupérer la valeur de l'attribut $prenom.

En résumé, grâce à l'accesseur, nous avons pu accéder à la valeur de l'attribut privé $prenom.

Conclusion
Un mutateur permet de modifier la valeur d'une propriété. Alors qu'un accesseur permet d'en récupérer son contenu.







    */
    ?>
</body>
</html>

