<?php

if (
    !empty($_POST['lastname']) &&
    !empty($_POST['firstname']) &&
    !empty($_POST['address']) &&
    !empty($_POST['country']) &&
    !empty($_POST['email']) &&
    !empty($_POST['phoneNumber']) &&
    !empty($_POST['facilitator']) &&
    !empty($_POST['howDidYou'])
) {

    // Connexion à la base de données.
    require('./connectionDBModel.php');

    $lastname    = trim(htmlspecialchars($_POST['lastname']));
    $firstname   = trim(htmlspecialchars($_POST['firstname']));
    $address     = trim(htmlspecialchars($_POST['address']));
    $country     = trim(htmlspecialchars($_POST['country']));
    $email       = trim(htmlspecialchars($_POST['email']));
    $phoneNumber = trim(htmlspecialchars($_POST['phoneNumber']));
    $host        = trim(htmlspecialchars($_POST['facilitator']));
    $howDidYou   = trim(htmlspecialchars($_POST['howDidYou']));

    // L'adresse email est-elle correcte ?
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('location: index.php?page=home&error=1&message=L\'adresse email est invalide.');
        exit();
    }

    // Préparez la requête SQL
    $stmt = $bdd->prepare('INSERT INTO customer(lastname, firstname, email, address, country, phone_number, host, how_did_you) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');

    // Exécutez la requête avec les données nettoyées
    $result = $stmt->execute([$lastname, $firstname, $email, $address, $country, $phoneNumber, $host, $howDidYou]);

    if ($result) {
        header('location: ../index.php?page=home&success=1&message=Merci.');
        exit();
    } else {
        header('location: ../index.php?page=home&error=1&message=Veuillez remplir tous les champs.');
        exit();
    }
}

?>