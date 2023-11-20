<?PHP 
// 20/11/23
class Eleve2 {
   
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
?>