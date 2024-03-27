<?php
// En-têtes de sécurité HTTP
header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline'; img-src 'self';");
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: no-referrer');
header('Permissions-Policy: none');

// Initialisation de la session.
session_start();

// Intégration des connexions.
require('./model/connectionDBModel.php');

// Routeur.
require('./controller/controller.php');

// Pages valides.
$validPages = ['home', 'search', 'logIn', 'logOut', 'forgotPassword', 'add', 'edit'];

// Si $_GET['page'] n'est pas défini, définir une valeur par défaut 'logIn'
if (!isset($_GET['page'])) {
    $_GET['page'] = 'logIn';
}

// Direction de l'utilisateur en fonction de la requête.
try {
    if (isset($_GET['page']) && in_array($_GET['page'], $validPages)) {
        if (isset($_SESSION['id'])) {
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
            // Page d'ajout'.
            else if ($_GET['page'] == 'add') {
                add();
            }
            // Page de modification.
            else if ($_GET['page'] == 'edit') {
                edit();
            }
            // Deconnexion.
            else if ($_GET['page'] == 'logOut') {
                logOut();
            }
        } else if ($_GET['page'] == 'home' && isset($_GET['token'])) {
            $token = $_GET['token'];

            // Préparez une requête SQL pour vérifier si le token existe déjà
            $stmt = $bdd->prepare('SELECT 1 FROM customer WHERE token = ?');
            $stmt->execute([$token]);
            $row = $stmt->fetch();

            if ($row) {
                // Si le token existe déjà, appelez la fonction home() avec un message d'erreur
                header('location: ./index.php?page=home&error=1&message=Vous êtes déjà enregistré.');
                exit();
            } else {
                home();
            }
        }
        // Page de mot de passe oublié.
        else if ($_GET['page'] == 'forgotPassword') {
            forgotPassword();
        } else {
            // Retour accueil.
            logIn();
        }
    } else {
        throw new Exception("Cette page n'existe pas ou a été supprimée.");
    }
}
// En cas d'erreur.
catch (Exception $e) {
    $error = $e->getMessage();
    require('view/errorView.php');
};
