<?php

// Récupérer l'email de l'utilisateur.
$email = $_POST['email'];
// Générer un token aléatoire.
$token = bin2hex(random_bytes(50));

// Stocker le token et l'email de l'utilisateur de manière sécurisée.
// ...

// Envoyer l'email.
$to = $email;
$subject = "Réinitialisation de votre mot de passe";
$message = "Pour réinitialiser votre mot de passe, cliquez sur ce lien: http://yourwebsite.com/model/resetPasswordModel.php?token=$token";
$headers = "From: noreply@yourwebsite.com";

mail($to, $subject, $message, $headers);

?>