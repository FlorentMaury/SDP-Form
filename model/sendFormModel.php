<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['email'])) {

    // Inclure les fichiers nécessaires.

    require '../model/connectionDBModel.php';

    $email = trim(htmlspecialchars($_POST['email']));

    // Vérifier si l'adresse email est valide.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('location: ../index.php?page=sendForm&error=1&message=L\'adresse email est invalide.');
        exit();
    }

    // Générer un token aléatoire.
    $token = bin2hex(random_bytes(16));
    $expiryDate = date('Y-m-d H:i:s', strtotime('+15 day'));

    // Insérer le token et l'email dans la base de données
    $stmt = $bdd->prepare('INSERT INTO tokens (email, token, expiry_date) VALUES (?, ?, ?)');
    $result = $stmt->execute([$email, $token, $expiryDate]);

    if ($result) {
        // Préparer le lien avec le token.
        $link = "http://sdp-paris.com/SDP-Form/index?page=fromEmail&token=$token";

        // Préparer le contenu de l'email.
        $subject = 'Complétez votre formulaire';
        $message = "Cliquez sur le lien suivant pour compléter votre formulaire : <br /> $link";
        $headers = 'From: Studio des Parfums' . "\r\n" .
            'Reply-To: your-email@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        // Envoyer l'email.
        if (mail($email, $subject, $message, $headers)) {
            header('location: ../index.php?page=sendForm&success=1&message=Email envoyé avec succès.');
            exit();
        } else {
            header('location: ../index.php?page=sendForm&error=1&message=L\'email n\'a pas pu être envoyé.');
            exit();
        }
    } else {
        header('location: ../index.php?page=sendForm&error=1&message=Erreur lors de la génération du token.');
        exit();
    }
}
