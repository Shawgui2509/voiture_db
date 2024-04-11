<?php
    $srv = "localhost";
    $user = "root";
    $pass = "";
    $db = "voiture_db";

    $dbconnect = new mysqli($srv, $user, $pass, $db);

    if ($dbconnect->connect_error) {
        die("La connexion à la base de données a échoué: " . $dbconnect->connect_error);
    }

    $name = isset($_POST['user_name']) ? $_POST['user_name'] : '';
    $email = isset($_POST['user_mail']) ? $_POST['user_mail'] : '';
    $password = isset($_POST['user_password']) ? $_POST['user_password'] : '';
    $marques = isset($_POST['marque']) ? $_POST['marque'] : '';
    $models = isset($_POST['modele']) ? $_POST['modele'] : '';


    $sql = "INSERT INTO Information (nom, Email, mot_de_passe) VALUES ('$name', '$email', '$password')";
    $sql = "INSERT INTO Modeles (nom_modele, id_marque) VALUES ('$models', (SELECT id FROM Marques WHERE nom_marque = '$marques'))";
    if (mysqli_query($dbconnect, $sql)) {
        echo "Données insérées avec succès";
    } else {
        echo "Erreur lors de l'insertion des données: " . mysqli_error($dbconnect);
    }

    mysqli_close($dbconnect);
?>