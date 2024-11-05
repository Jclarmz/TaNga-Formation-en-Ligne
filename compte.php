<?php
    // Connexion à la base de données MySQL
    $servername = "localhost";
    $username = "tangacompte";
    $password = "mDp_Cpte@TaNga2DS/";
    $dbname = "comptetanga";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    // Requête SQL pour insérer les données dans la table "users_tanga"
    $sql = "INSERT INTO users_tanga (nom, prenom, email, mdp) VALUES ('$nom', '$prenom', '$email', '$mdp')";

    // Exécution de la requête SQL
    if ($conn->query($sql) === TRUE) {
        echo "Compte créé avec succès";
    } else {
        echo "Erreur : " . $conn->error;
    }

    // Fermeture de la connexion à la base de données
    $conn->close();
?>