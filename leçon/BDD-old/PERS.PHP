<?php

class pers{
    private $prenom;
    private $nom;
    private $age;

    public function __construct($prenom,$nom,$age){
        $this ->prenom = $prenom;
        $this ->nom = $nom;
        $this ->age = $age;
    }

///setter
    public function setprenom($prenom){
        return $this -> prenom=$prenom;
    
    }
    public function setnom($nom){
        return $this -> nom=$nom;
    
    }    public function setage($age){
        return $this -> age=$age;
    
    }
    
    //getter
    public function getprenom(){
        return $this -> prenom;
    
    }
    public function getnom(){
        return $this -> nom;
    
    }    public function getage(){
        return $this -> age;
    
    }
    public  function saluer(){
        echo "salut les amis";
    }}

    $Emi = new  Pers("Émilienne", "maillard",2 );
     echo $Emi -> getprenom();

     echo "<br>";
     echo $Emi -> getnom();

     echo "<br>";
     echo $Emi -> getage();

     echo "<br>";
     echo "<br>";

     //setter

     $Emi = new  Pers("Émilienne", "maillard",2 );

     echo $Emi -> setprenom("Chantal");

     echo "<br>";

     echo $Emi -> getnom();

     echo "<br>";

     echo $Emi -> getage();
    
        ?>



