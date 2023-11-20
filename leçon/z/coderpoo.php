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
    Comme nous l'avons compris, la POO a l'avantage d'avoir un code plus clair que celui du procédural et donc plus facile à mettre à jour. Il sera également beaucoup plus
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

    -- Les objets --
    Maintenant que nous avons défini une classe, nous pouvons alors créer un objet issu de cette classe. On dit alors qu'on instancie la classe ou que l'objet est une instance de la classe.
    Ces objets seront donc construits à partir des méthodes (fonction) et des propriétés ou attributs (variable) de la classe.

    En retenant que la POO est basée sur les objets et les classes, on crée des objets à partir d'une classe, chaque objet accède aux méthodes et aux propriétés de la classe qui les a créés.
    
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



Le principe de l'encapsulation -- définition,

Le principe de l'encapsulation est une notion fondamentale de la POO. L'encapsulation consiste à protéger l'information contenue dans un objet en ne proposant que des méthodes pour la manipulation des objets.

***Mise en pratique Sans le savoir, nous avons dans la partie précédente mis en place ce principe d'encapsulation. En effet, concernant l'attribut $prenom, nous lui avons affecté une visibilité privée. Nous avons vu qu'il n'était pas possible d'y accéder directement. C'est la raison pour laquelle nous avons créé des méthodes afin de pouvoir modifier et afficher le contenu de la propriété $prenom (et les autres : $nom, $age). 
Et lorsque nous avons créé ces méthodes, nous leur avons attribué une visibilité publique afin de pouvoir y accéder et donc les manipuler.




***Les niveaux d’accessibilité Les niveaux d’accessibilité sont similaires puisque nous les avons vus précédemment.
 Rappel : la visibilité publique permet d'accéder à la propriété ou à la méthode depuis l'intérieur ou l'extérieur de la classe. 
 La visibilité privée permet d'accéder à la propriété ou à la méthode uniquement depuis l'intérieur de la classe. 
 La visibilité protégée permet d'accéder à la propriété ou à la méthode depuis l'intérieur de la classe elle-même ou de ses classes filles.

**Principe général

Les propriétés d'un objet seront privées ou protégées afin de n'être accessibles que depuis la classe elle-même ou depuis une classe fille.

Les méthodes d'un objet seront publiques afin de pouvoir y accéder de n'importe quel endroit de notre site, afin de manipuler les attributs (ou propriétés).

En résumé, grâce aux exemples vus, nous avons acquis le principe de l'encapsulation, ce qui permet d'en faire un simple rappel et bien ordonner nos nouvelles connaissances concernant la POO.



L'heritage 


Voici le texte corrigé avec les fautes d'orthographe corrigées :

L'héritage

Principe de l'héritage:

Lorsque nous créons une classe, celle-ci peut être une classe générale qui contiendra ses propres propriétés et méthodes. Mais nous aurons peut-être besoin d'avoir des classes spécifiques qui soient reliées à la classe générale.

Cas concret :


   */
  class Eleve {
    protected $_prenom;
  
    public function setPrenom($prenom) { 
      $this->_prenom = $prenom;
    }
  
    public function getPrenom() {
      return $this->_prenom;
    }
  }
  
 /*
Nous allons créer une nouvelle classe qui sera une classe fille de la classe Eleve. Cette nouvelle classe appellera la propriété $_prenom de la classe Eleve. Lorsque nous demanderons d'afficher le prénom issu de cette nouvelle classe, nous souhaiterons obtenir un prénom dont la première lettre sera en majuscule. Nous enrichirons également cette classe d'une propriété qui devra récupérer l'âge. Nous l'appellerons EleveFille et nous nommerons le fichier contenant cette nouvelle classe (EleveFille.class.php).

Avant d'écrire cette nouvelle classe, nous devons modifier la visibilité de la propriété $_prenom de la classe Eleve, puisque nous souhaitons y accéder depuis la classe fille que nous allons créer. Par conséquent, la visibilité de la propriété $_prenom ne sera plus privée mais protégée (protected). Ceci afin de pouvoir y accéder depuis la classe fille.


 */
 //Exemple :

 class Eleve {
  protected $_prenom;

  public function setPrenom($prenom) { 
    $this->_prenom = $prenom;
  }

  public function getPrenom() {
    return $this->_prenom;
  }
}

 /* maintenant  nous pouvons créer notre classe fille qui pourra accéder a la propriétés $_prenom de la classe Eleve*/
 class EleveFille extends Eleve {
  
 }
 
/*Ainsi, nous pouvons accéder à la classe mère, soit la classe Eleve. Ensuite, nous avons dit que nous souhaitons accéder à la propriété $_prenom de la classe Eleve afin de pouvoir écrire le prénom avec une première lettre en majuscule. 
Pour cela, il suffit simplement de réécrire la méthode setPrenom à l'intérieur de la classe EleveFille en lui ajoutant la fonction ucfirst() qui permet d'afficher la première lettre de la chaîne de caractères en majuscule.
*/
public function setPrenom($prenom){
  $this->_prenom = ucfirst($prenom) ;
}

   /*Il n'est pas utile de réécrire la méthode getPrenom puisque celle-ci a déjà été écrite dans la classe Eleve, dont la classe EleveFille est une héritière.

Il nous reste à déclarer la propriété concernant l'âge ainsi que ses méthodes (assesseur et mutateur). Celles-ci seront propres à la classe EleveFille..*/

class EleveFille extends Eleve {
  private $_age;

  public function setAge($age) {
    $this->_age = $age;
  }

  public function getAge() {
    return $this->_age;
  }

  public function setPrenom($prenom) {
    $this->_prenom = ucfirst($prenom);
  }
}

/* Nous déclarons la propriété $_age en visibilité privée (private) car cette propriété ne sera accessible que par la classe qui la contient,
c'est-à-dire la classe EleveFille. Ensuite, nous déclarons les méthodes get et set afin de pouvoir modifier l'âge et l'afficher en cas d'appel.
C'est exactement comme nous l'avons fait pour la propriété $_prenom de la classe Eleve.

Récupération des informations :

Maintenant que les deux classes Eleve et EleveFille sont créées, nous pouvons les inclure dans un autre fichier (index.php) et nous servir de leurs méthodes. */


// Inclusion des fichiers contenant les classes
include('class.php');
include('EleveFille.class.php'); // Assurez-vous que le nom du fichier correspond à la classe

// Instanciation des objets
$eleveN1 = new Eleve();
$eleveN2 = new EleveFille(); // Utilisation de la classe EleveFille

// Définition des propriétés des objets
$eleveN1->setPrenom('Alain'); // Utilisation de la méthode setPrenom
$eleveN2->setPrenom('Justine');
$eleveN2->setAge(22);

// Affichage des informations
echo $eleveN1->getPrenom() . '<br />'; // Utilisation de la méthode getPrenom
echo $eleveN2->getPrenom() . ' qui a ' . $eleveN2->getAge() . ' ans';

/* LE CONSTRUCTEUR */

// Principe
// Le constructeur est ce que l'on appelle en POO une méthode magique. 
//Son principe est de créer des valeurs par défaut au moment de la création d'un nouvel objet. Le constructeur est donc une méthode. Afin de le différencier d'une méthode dite classique, le constructeur sera déclaré ainsi:

  class Eleve {

    private $_prenom;

    // Constructeur
    public function __construct($prenom) {
        $this->_prenom = $prenom;
    }

    // Méthode pour définir le prénom
    public function setPrenom($prenom) {
        $this->_prenom = $prenom;
    }

    // Méthode pour obtenir le prénom
    public function getPrenom() {
        return $this->_prenom;
    }
}


/*
Nous souhaitons enrichir notre classe Eleve en récupérant de manière automatique la date d'inscription d'un nouvel élève au moment de sa déclaration lors de l'appel de notre classe Eleve grâce au mot-clé new.*/

public function __construct() {
    $this->dateInscription = date('d/m/Y');
}

  /*Notre constructeur a été déclaré avec une visibilité publique afin de pouvoir être invoqué de n'importe quel endroit.
   Nous définissons l'objet courant grâce à la variable $this en lui affectant la date au moment de l'inscription."*/

   <?php

   class Eleve {
   
       private $_prenom;
   
       // Constructeur
       public function __construct() {
           $this->_dateInscription = date('d/m/Y');
       }
   
       public function setPrenom($prenom) {
           $this->_prenom = $prenom;
       }
   
       public function getPrenom() {
           return $this->_prenom;
       }
   }
   
/*Nous allons à présent créer un nouvel Eleve puis nous irons récupérer sa date d'inscription qui aura été créée de manière automatique par le constructeur.*/
$eleve1 = new Eleve();
$eleve1->setPrenom('pîerre');
echo $eleve1->getPrenom() .'<br />';
echo " cette eleve a été inscrit le " .$eleve1->dateInscription;

/* conclusion nous venons créer une méthode constructeur qui nous permet  de pouvoir  obtenir  des valeur au moment que la création d'un nouvel objet */

//20.11.23





   
   


?>






   
</body>
</html>

