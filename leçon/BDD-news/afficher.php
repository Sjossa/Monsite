<?php
$cnx = mysqli_connect("localhost", "root", "", "tp_php");
                    
                    if(mysqli_connect_errno()) {
                        echo "erreur de connexion à la base ".mysqli_connexion_error();
                    }
                    // Je définie la requête
                    $sql = "select nom, prenom, email from utilisateur ORDER by id";
                    $result = mysqli_query($cnx, $sql);
                    echo "<table>";
                    echo "<thead>";
                    echo "<th>"."Nom"."</th>";
                    echo "<th>"."Prénom"."</th>";
                    echo "<th>"."Email"."</th>";
                    echo "</thead>";
                    echo "<tbody>";
                    // Pour l'ensemble des lignes du jeu résultats, répète
                    while($row = mysqli_fetch_row($result)) {
                        echo "<tr>";
                        for ($i=0; $i < count($row); $i++) { 
                            echo '<td>'.$row[$i].'</td>';
                        }
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                    // Annule le jeu de résultats
                    mysqli_free_result($result);
                    // Ferme la connexion à la base de données
                    mysqli_close($cnx);
?>
