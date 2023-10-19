<!DOCTYPE html>
<html>

<head>
    <title>Formulaire d'inscription</title>
    <style>
        body {
            font-family: Verdana, sans-serif;


            vertical-align: middle;
        }

        h4 {
            text-align: left;
        }

        .form1 {
            background-color: gray;
            width: 40%;
        }

        .form2 {
            background-color: grey;
            width: 40%;
            float: right;
        }

        button {
            background-color: #e1ad01;
            /* couleur de fond */
            border: none;
            /* bordure */
            color: black;
            /* couleur du texte 
            padding: 15px 32px;*/
            /* espacement intérieur */
            text-align: center;
            /* alignement du texte */
            text-decoration: none;
            /* décoration du texte */
            display: inline-block;
            /* affichage en ligne */
            font-size: 16px;
            /* taille de police */
            margin: 4px 2px;
            /* marges */
            cursor: pointer;
            /* curseur de souris */
            /*vertical-align: middle;*/
            align-items: center;
        }



        .form-container {

            margin: 20px auto;
            max-width: 500px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            background-color: lavender;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            display: block;
            margin-bottom: 10px;
            width: 50%;
            padding: 10px;
            border-radius: 5px;
            border: none;
        }

        input[type="submit"] {
            background-color: darkblue;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .container {
            display: flex;
            justify-content: space-between;
        }

        input[type="button"] {
            background-color: darkblue;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            /** cursor: pointer; */
        }

        .form-group {

            margin-bottom: 30px;


        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"]+input[type="text"] {
            display: inline-block;
            width: calc(50% - 5px);
            margin-left: 10px;
        }

        .form-group select+input[type="text"] {
            display: inline-block;
            width: calc(50% - 5px);
            margin-left: 10px;
        }

        .promo-code {
            display: inline-block;
            margin-top: 20px;
        }

        .promo-code img {
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <!--<h1>Inscription</h1>-->

    <button id="inscription-button">INSCRIPTION</button>
    <div class="container">
        <!-- <div class="form1">
            <form id="inscription-form" method="post">
                <h4>Connexion</h4>

                <div class="form-group">
                    <label for="email">Adresse e-mail:</label>
                    <input type="email" id="email" name="mail" required>
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe:</label>
                    <input type="password" id="password" name="password" required>

                    <input type="button" value="Se connecter">
                    <a href="#">Déjà un compte ?</a>

                </div>
            </form>

        </div> -->


        <div class="form2">


            <form action=""  method="post" >
                <div class="form-group">
                    <label for="nom">Nom:</label>
                    <input type="text" id="nom" name="nom" required>

                    <label for="prenom">Prénom:</label>
                    <input type="text" id="prenom" name="prenom" required>


                    <label for="indicatif">telephone:</label>


                    <input type="text" id="telephone" name="telephone" placeholder="(77)123-45-67" pattern="\([0-9]{2}\)[0-9]{3}-[0-9]{2}-[0-9]{2}" required>
                </div>

                <label for="mail">Adresse mail:</label>
                <input type="email" id="mail" name="mail" required>

                <label for="pwd">Mot de passe:</label>
                <input type="password" id="pwd" name="mot_de_passe" required>

                <input type="submit" name="Submet" value="Inscription">
                <!-- <input type="submit" name="Submet" value="Inscription"> -->


                <div class="promo-code">
                    Code promo:
                    <img src="/images/promo.png">
                </div>


            </form>
        </div>

    </div>


</body>

</html>


<?php


// try {
//     $db = new PDO("mysql:host=localhost;db_name=taxi_bokko;charset=utf8", "root", "");

//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     echo "<br>";

//     echo "Connexion reussie<br><br>";

//     // var_dump($db);

// } catch (PDOException $th) {

//     die("Erreur : Impossible de se connecter" . $th->getMessage());
// }

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    if (isset($_POST["submet"])) {
        var_dump($_POST);
        $nom = $_POST["nom"];
        $prnom = $_POST["prenom"];
        $tel = $_POST["telephone"];
        $mail = $_POST["mail"];
        $pwd = $_POST["mot_de_passe"];

        //var_dump($nom);

    }
}

// $sql = "INSERT INTO inscription (nom_user, pr_user, telephone, adrss_mail, password_user)
// VALUES(:nom_user, :pr_user, :telephone, :adrss_mail, :password_user)";
// $conn = $db->prepare($sql);
// $conn->bindParam(':nom_user', $nom);
// $conn->bindParam(':pr_user', $prnom);
// $conn->bindParam(':telephone', $tel);
// $conn->bindParam(':adrss_mail', $mail);
// $conn->bindParam(':password_user', $pwd);

// $conn->execute();
// echo "Entrées ajoutées dans la table";
// if ($conn->execute()) {
//     echo "Entrées ajoutées dans la table";
// } else {
//     echo  "Insertion non reussie";
// }





//echo "Les tables ont été créée avec succès !!!";

/*if (mysqli_multi_query($db, $sql)) {
    echo "Les tables ont été créée avec succès !!!";
} else {
    echo "Commande non exécutée !!!" . mysqli_error($db);
}*/
?>