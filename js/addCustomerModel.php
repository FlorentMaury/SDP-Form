<?php

use Dompdf\Dompdf;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

if (
    !empty($_POST['title']) &&
    !empty($_POST['lastname']) &&
    !empty($_POST['firstname']) &&
    !empty($_POST['address']) &&
    !empty($_POST['city']) &&
    !empty($_POST['country']) &&
    !empty($_POST['email']) &&
    !empty($_POST['phoneNumber']) &&
    !empty($_POST['facilitator']) &&
    !empty($_POST['howDidYou'])
) {

    // Connexion à la base de données.
    require('./connectionDBModel.php');

    $title       = trim(htmlspecialchars($_POST['title']));
    $lastname    = trim(htmlspecialchars($_POST['lastname']));
    $title       = trim(htmlspecialchars($_POST['title']));
    $firstname   = trim(htmlspecialchars($_POST['firstname']));
    $address     = trim(htmlspecialchars($_POST['address']));
    $city        = trim(htmlspecialchars($_POST['city']));
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
    $stmt = $bdd->prepare('INSERT INTO customer(title, lastname, firstname, email, address, city, country, phone_number, host, how_did_you) VALUES (?, ?,?, ?, ?, ?, ?, ?, ?, ?)');

    // Exécutez la requête avec les données nettoyées
    $result = $stmt->execute([$title,  $lastname, $firstname, $email, $address, $city, $country, $phoneNumber, $host, $howDidYou]);

    if ($result) {

        require '../vendor/autoload.php';

        // Créez une nouvelle instance de Dompdf
        $dompdf = new Dompdf();

        // Obtenez la date actuelle
        $date = date('Y-m-d');

        // Générez le lien vers le fichier PDF
        $pdfLink = "http://formulairesdp.florent-maury.fr/assets/CustomersPDF/{$date}/{$lastname}/{$firstname}/{$lastname}_{$firstname}.pdf";

        // Créez une nouvelle instance de QrCode
        $qrCode = new QrCode($pdfLink);

        // Définissez les paramètres du QR code si nécessaire
        $qrCode->setSize(300); // Taille en pixels

        // Générez le QR code en tant qu'image PNG
        $writer = new PngWriter();
        $image = $writer->write($qrCode);

        // Encodez l'image en base64 pour l'inclure dans le HTML
        $qrCodeImage = base64_encode($image->getString());

        // Générez le HTML pour le PDF
        $html = "
            <h1>Récapitulatif des informations</h1>

            <p>Date : $date</p>
            <p>Civilité : $title</p>
            <p>Nom : $lastname</p>
            <p>Prénom : $firstname</p>
            <p>Adresse : $address</p>
            <p>Ville : $city</p>
            <p>Pays : $country</p>
            <p>Email : $email</p>
            <p>Numéro de téléphone : $phoneNumber</p>
            <p>Hôte : $host</p>
            <p>Comment avez-vous entendu parler de nous ? : $howDidYou</p>
            <img src='data:image/png;base64,$qrCodeImage' />
        ";

        // Chargez le HTML dans Dompdf
        $dompdf->loadHtml($html);

        // Rendez le PDF
        $dompdf->render();

        // Récupérez le contenu du PDF
        $output = $dompdf->output();

        // Créez les dossiers s'ils n'existent pas déjà
        if (!is_dir("../assets/CustomersPDF/{$date}")) {
            mkdir("../assets/CustomersPDF/{$date}", 0777, true);
        }
        if (!is_dir("../assets/CustomersPDF/{$date}/{$lastname}")) {
            mkdir("../assets/CustomersPDF/{$date}/{$lastname}", 0777, true);
        }
        if (!is_dir("../assets/CustomersPDF/{$date}/{$lastname}/{$firstname}")) {
            mkdir("../assets/CustomersPDF/{$date}/{$lastname}/{$firstname}", 0777, true);
        }

        // Écrivez le contenu dans un fichier
        file_put_contents("../assets/CustomersPDF/{$date}/{$lastname}/{$firstname}/{$lastname}_{$firstname}.pdf", $output);

        header('location: ../index.php?page=home&success=1&message=Merci.');
        exit();
    } else {
        header('location: ../index.php?page=home&error=1&message=Veuillez remplir tous les champs.');
        exit();
    }
}
