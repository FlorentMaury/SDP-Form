<?php

// Initialisation de la session.
session_start();

// Intégration des connexions.
require('./model/connectionDBModel.php');

// Routeur.
require('./controller/controller.php');

// Direction de l'utilisateur en fonction de la requête.
try {
    if (isset($_GET['page']) && isset($_SESSION['can_access_db'])) {

        // Page d'accueil.
        if ($_GET['page'] == 'home') {
            home();
        }
        // tableau de bord.
        else if ($_GET['page'] == 'search') {
            search();
        }
        // Page de connexion.
        else if ($_GET['page'] == 'logIn') {
            logIn();
        }
        // Deconnexion.
        else if ($_GET['page'] == 'logOut') {
            logOut();
        }
        // En cas de demande de page inconnue.
        else {
            throw new Exception("Cette page n'existe pas ou a été supprimée.");
        }
    } else if (isset($_GET['page']) && isset($_GET['token'])) {
        home();
    } else {
        // Retour accueil.
        logIn();
    };
}

// En cas d'erreur.
catch (Exception $e) {
    $error = $e->getMessage();
    // require('view/errorView.php');
};
