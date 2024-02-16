<?php

    // Connexion à la base de donnée : "intranet_SDP".
    try {
        $bdd = new PDO('mysql:host=db5014654403.hosting-data.io;dbname=dbs12176894;charset=utf8', 'dbu5440750', 'mdp0394SDP!');
    } catch(Exception $e) {
        die('Erreur : ' .$e->getMessage());
    };

    // Récupération des données de la table 'customer'.
    // Création des différentes variables necessaires.
    $customer = $bdd->query('
        SELECT *
        FROM customer 
        ORDER BY lastname
        ');
?>