20/11/23

<?php
class Eleve3 {
    const ECOLE = 'Elève de notre école'; // Removed extra spaces
    private $_prenom;
    private $_dateInscription; // Added property for dateInscription

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

    public function getDateInscription() { // Added method to get dateInscription
        return $this->_dateInscription;
    }
}

$eleve3 = new Eleve3(); // Corrected the assignment operator from + to =
echo Eleve3::ECOLE; // Corrected the syntax for accessing a constant
?>
