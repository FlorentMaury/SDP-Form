<?php

// Vérification du formulaire d'ajout d'un employé.
if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['passwordTwo'])) {

    // Connexion à la base de données.
    require('../model/connectionDBModel.php');

    // Variables.
    $name        = htmlspecialchars($_POST['name']);
    $surname     = htmlspecialchars($_POST['surname']);
    $email       = htmlspecialchars($_POST['email']);
    $password    = htmlspecialchars($_POST['password']);
    $passwordTwo = htmlspecialchars($_POST['passwordTwo']);

    // Les mots de passe sont-ils identiques ?
    if ($password != $passwordTwo) {
        header('location: ../index.php?page=add&error=1&message=Les mots de passe ne sont pas identiques.');
        exit();
    }

    // L'adresse email est-elle correcte ?
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('location: ../index.php?page=add&error=1&message=L\'adresse email est invalide.');
        exit();
    }

    // Fonction de vérification de la sécurité du mot de passe.
    function isPasswordSecure($password) {
        return preg_match("#[0-9]+#", $password) && 
               preg_match("#[A-Z]+#", $password) && 
               preg_match("#[a-z]+#", $password) && 
               preg_match("#\W+#", $password) && 
               strlen($password) >= 8;
    }

    // Vérifie si le mot de passe est suffisamment sécurisé
    if (!isPasswordSecure($password)) {
        // Si le mot de passe n'est pas suffisamment sécurisé, redirige l'utilisateur avec un message d'erreur
        header('location: ../index.php?page=add&error=1&message=Le mot de passe doit avoir au moins 8 caractères, un chiffre, une lettre majuscule, une lettre minuscule et un caractère spécial.');
        exit();
    }

    // L'adresse email est-elle en doublon ?
    $req = $bdd->prepare('SELECT COUNT(*) as numberEmail FROM user WHERE email = ?');
    $req->execute([$email]);

    // Vérification d'un éventuel doublon.
    while ($emailVerification = $req->fetch()) {
        if ($emailVerification['numberEmail'] != 0) {
            header('location: ../index.php?page=add&error=1&message=Cette adresse e-mail est déjà utilisée.');
            exit();
        }
    }

    // Chiffrement du mot de passe.
    $password = "zk32" . sha1($password . "486") . "345";

    // Secret.
    $secret = sha1($email) . time();
    $secret = sha1($secret) . time();

    // Ajouter un utilisateur.
    $req = $bdd->prepare('INSERT INTO user(name, surname, email, password, secret) VALUES(?, ?, ?, ?, ?)');
    $result = $req->execute([$name, $surname, $email, $password, $secret]);

    // Redirection.
    if ($result) {
        header('location: ../index.php?page=add&success=1&message=Utilisateur enregistré avec succès.');
        exit();
    } else {
        header('location: ../index.php?page=add&error=1&message=Impossible d\'enregistrer ce collaborateur.');
        exit();
    };
};
