<?php
    // Connexion à la base de données MySQL
    $servername = "localhost";
    $username = "tangacompte";
    $password = "mDp_Cpte@TaNga2DS/";
    $dbname = "comptetanga";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Récupération des données du formulaire
    $email = $_POST['email'];
    $formation = $_POST['formation'];

    // Génération d'un mot de passe aléatoire pour la formation
    $mdpFormation = uniqid();

    // Requête SQL pour insérer les données dans la table "inscriptions"
    $sql = "INSERT INTO inscriptions (email, formation, mdp) VALUES ('$email', '$formation', '$mdpFormation')";

    // Exécution de la requête SQL
    if ($conn->query($sql) === TRUE) {
        echo "Inscription à la formation $formation réussie. Le mot de passe pour cette formation est : $mdpFormation";
    } else {
        echo "Erreur : " . $conn->error;
    }

    // Fermeture de la connexion à la base de données
    $conn->close();
?>