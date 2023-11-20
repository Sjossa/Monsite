<form action="ajouter.php" method="post">
    <input type="text" name="nom" />
    <input type="text" name="prenom" />
    <input type="text" name="email" />
    <input type="submit" value="Submit">
</form>

<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tp_php';


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
  $prenom=$_POST['prenom'];
  $email=$_POST['email'];


    $query = "INSERT INTO utilisateur(nom, prenom, email) VALUES ('$nom', '$prenom', '$email')";

    if ($conn->query($query) === TRUE) {
        echo "Bravo! Record inserted successfully.";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
