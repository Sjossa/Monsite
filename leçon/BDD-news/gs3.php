<?php
$dns = "mysql:host=localhost;dbname=mabase"; 
$user = "root";
$password = "";

//troisieme  SQL

try {
    $cnx = new PDO($dns, $user, $password);
        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo ""; }
        catch (PDOException $e) {
            echo "". $e->getMessage(); }
            $sql = "select * from client";// requete fausse
            /* Ici la requete est executé.

            si elle fonctionne, le script jouera uniquement le TRY.
             si elle fonctionne pas , le script ira directement jouer CATCH
             */
            try {
                $rs_req = $cnx->query($sql);
                while($donnees=$rs_req->fetch(PDO::FETCH_OBJ)) {
                    echo"<PRE>";
                    print_r($donnees);
                    echo "<pre>"; } }
                    catch (PDOException $e) {
                        echo "un probleme"; }
?>