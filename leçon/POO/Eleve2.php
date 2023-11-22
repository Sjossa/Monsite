<?php
// 20/11/23
class Eleve2 {
   
   private $_prenom;

   // Constructeur
   public function __construct() {
       $this->_dateInscription = date('d/m/Y H:i:s');
       $fuseau = date_default_timezone_get();
 
       setlocale(LC_TIME, "french");
   }

   public function setPrenom($prenom) {
       $this->_prenom = $prenom;
   }

   public function getPrenom() {
       return $this->_prenom;
   }
}
?>