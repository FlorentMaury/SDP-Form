<?php

    // Connexion à la base de donnée : "intranet_SDP".
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=intranet_sdp;charset=utf8', 'root', '');
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