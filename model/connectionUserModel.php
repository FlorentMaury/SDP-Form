<?php

// Vérification du formulaire de connexion.
if(!empty($_POST['email']) && !empty($_POST['password']) && empty($_SESSION)) {

    // Connexion à la base de données.
    require('./connectionDBModel.php');

    // Sécurisation des variables.
    $email     = htmlspecialchars($_POST['email']);
    $password  = htmlspecialchars($_POST['password']);

    // L'adresse email est-elle correcte ?
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('location: index.php?error=1&Votre adresse email est invalide.');
        exit();
    }

    // Chiffrement du mot de passe.
    $password = "zk32".sha1($password ."486")."345";

    // L'adresse email est-elle bien utilisée ?
    $req = $bdd->prepare('SELECT COUNT(*) as numberEmail FROM user WHERE email = ?');
    $req->execute([$email]);

    // Si l'email n'est pas reconnu.
    while($emailVerification = $req->fetch()) {
        if($emailVerification['numberEmail'] != 1) {
            header('location: ../index.php?page=logIn&error=1&message=Impossible de vous authentifier correctement.');
            exit();
        }
    }

    // Récupérer l'ID de l'utilisateur avec l'email
    $req = $bdd->prepare('SELECT id FROM user WHERE email = ?');
    $req->execute([$email]);
    $user = $req->fetch();

    // Récuperer les données de l'utilisateur avec l'ID.
    $req = $bdd->prepare('
        SELECT *
        FROM user 
        INNER JOIN user_exp ON user.id = user_exp.user_exp_id
        INNER JOIN user_role ON user.id = user_role.user_role_id
        INNER JOIN user_time_bank ON user.id = user_time_bank.user_time_bank_id
        WHERE user.id = ?
    ');
    $req->execute([$user['id']]);

    while($user = $req->fetch()) {

        // Si le mot de passe est le bon création d'une session.
        if($password == $user['password']) {

            if($user['can_access_db'] == 0) {
                header('location: ../index.php?page=logIn&error=1&message=Vous n\'avez pas les droits pour accéder à la base de données.');
                exit();
            }

            session_start();
            
            $_SESSION['connect']       = 1;
            $_SESSION['id']            = $user['id'];
            $_SESSION['surname']       = $user['surname'];
            $_SESSION['name']          = $user['name'];
            $_SESSION['can_access_db'] = $user['can_access_db'];

            // Validation de la connexion.
            header("location: ../index.php?page=home&success=1&message=Bienvenue " . $_SESSION['name']);
            exit();
        } else {
            // Erreur dans le mot de passe.
            header('location: ../index.php?page=logIn&error=1&message=Impossible de vous authentifier correctement.');
            exit();
        }
    }
}