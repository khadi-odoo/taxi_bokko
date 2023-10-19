<?php
 $dbname='taxi_bokko';
 $user='root';
 $password='';
 $host='localhost';


try {

    $db = new PDO("mysql:host=$host; dbname=$dbname", $user, $password);
    //$db = new PDO("mysql:host=localhost;db_name=taxi_bokko;charset=utf8", "root", "");

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<br>";

    echo "Connexion reussie<br><br>";

    // var_dump($db);

} catch (PDOException $th) {

    die("Erreur : Impossible de se connecter" . $th->getMessage());

}

?>