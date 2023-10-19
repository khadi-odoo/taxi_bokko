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
            width: 30%;

            margin-left: 500px
        }

        .form2 {
            background-color: grey;
            width: 30%;
            float: right;
            margin-left: 100px;
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
    <h4>Plateforme de covoiturage e-TaxiBokko</h4>

    <button id="inscription-button">INSCRIPTION</button>
    <div class="container">
        <div class="form1">
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

        </div>


        <div class="form2">


            <form action="" method="post">

                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required>

                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" required>


                <label for="indicatif">Indicatif du Sénégal:</label>


                <input type="text" id="telephone" name="telephone" placeholder="(77)123-45-67" required>


                <label for="mail">Adresse mail:</label>
                <input type="email" id="mail" name="mail" required>

                <label for="pwd">Mot de passe:</label>
                <input type="password" id="pwd" name="mot_de_passe" required>

                <input type="submit" name="inscription" value="Inscription">
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


include('db.php');
global $db;

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    if (isset($_POST["inscription"])) {

        $nom = $_POST["nom"];
        $prnom = $_POST["prenom"];
        $tel = $_POST["telephone"];
        $mail = $_POST["mail"];
        $pwd = $_POST["mot_de_passe"];

        // var_dump($_POST);
        $sql = "INSERT INTO inscription (nom_user, pr_user, telephone, adrss_mail, password_user)
        VALUES(:nom_user, :pr_user, :telephone, :adrss_mail, :password_user)";
        $conn = $db->prepare($sql);
        $conn->bindValue(':nom_user', $nom);
        $conn->bindValue(':pr_user', $prnom);
        $conn->bindValue(':telephone', $tel);
        $conn->bindValue(':adrss_mail', $mail);
        $conn->bindValue(':password_user', $pwd);


        if ($conn->execute()) {
            echo "Entrées ajoutées dans la table";
        } else {
            echo  "Entrée non ajoutée";
        }
    }
}

?>