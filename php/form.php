<?php
if(
    !empty($_POST["lastname"]) &&
    !empty($_POST["firstname"]) &&
    !empty($_POST["address"]) &&
    !empty($_POST["country"]) &&
    !empty($_POST["email"]) &&
    !empty($_POST["phoneNumber"]) &&
    !empty($_POST["facilitator"]) &&
    !empty($_POST["howDidYou"])
) {
    $lastname = htmlspecialchars(trim($_POST["lastname"]));
    $firstname = htmlspecialchars(trim($_POST["firstname"]));
    $address = htmlspecialchars(trim($_POST["address"]));
    $country = htmlspecialchars(trim($_POST["country"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $phoneNumber = htmlspecialchars(trim($_POST["phoneNumber"]));
    $facilitator = htmlspecialchars(trim($_POST["facilitator"]));
    $howDidYou = htmlspecialchars(trim($_POST["howDidYou"]));

    // Vérifiez si l'adresse e-mail est valide
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('location: index.php?message=Adresse e-mail invalide.');
        exit();
    }

    header('location: index.php?message=Merci / Thank you !');
    exit();
}
else {
    header('location: index.php?message=Tous les champs sont requis.');
    exit();
}
?>