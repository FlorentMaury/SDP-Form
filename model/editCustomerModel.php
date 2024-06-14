<?php

// Utilisation de la bibliothèque Dompdf pour générer un PDF.
use Dompdf\Dompdf;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérez l'ID du profil consulté à partir du formulaire.
    $id = htmlspecialchars(trim($_POST['profile_id']));
    $creationId = htmlspecialchars(trim($_POST['creationId']));

    // Récupérez la nouvelle valeur de chaque champ du formulaire.
    $newCreationId  = htmlspecialchars(trim($_POST['newCreationId']));
    $date           = htmlspecialchars(trim($_POST['date']));
    $title          = htmlspecialchars(trim($_POST['title']));
    $lastname       = htmlspecialchars(trim($_POST['lastname']));
    $firstname      = htmlspecialchars(trim($_POST['firstname']));
    $address        = htmlspecialchars(trim($_POST['address']));
    $city           = htmlspecialchars(trim($_POST['city']));
    $country        = htmlspecialchars(trim($_POST['country']));
    $email          = htmlspecialchars(trim($_POST['email']));
    $phone_number   = htmlspecialchars(trim($_POST['phoneNumber']));
    $host           = htmlspecialchars(trim($_POST['host']));
    $workshop       = htmlspecialchars(trim($_POST['workshop']));
    $how_did_you    = htmlspecialchars(trim($_POST['howDidYou']));
    $extras         = htmlspecialchars(trim($_POST['extras']));
    $rgpd           = htmlspecialchars(trim($_POST['rgpd']));
    $allergies      = htmlspecialchars(trim($_POST['allergies']));
    $responsibility = htmlspecialchars(trim($_POST['responsibility']));

    require('../model/connectionDBModel.php');

    // Vérifiez si $newCreationId a la bonne longueur
    if (strlen($newCreationId) !== 9) {
        header("location: ../index.php?page=edit&id={$id}&error=1&message=Le numéro de création est incorrect.");
        exit();
    }

    // Vérifiez si le numéro de création est déjà utilisé
    $stmt = $bdd->prepare("SELECT creation_id FROM customer WHERE creation_id = ?");
    $stmt->execute([$newCreationId]);
    $row = $stmt->fetch();

    if ($row) {
        header("location: ../index.php?page=edit&id={$id}&error=1&message=Le numéro de création est déjà attribué.");
        exit();
    }

    // Mettez à jour la base de données.
    $req = $bdd->prepare('
    UPDATE customer
    SET creation_id = ?, date = ?, title = ?, lastname = ?, firstname = ?, address = ?, city = ?, country = ?, email = ?, phone_number = ?, workshop = ?, host = ?, how_did_you = ?, extras = ?, rgpd = ?, allergies = ?, responsibility = ?
    WHERE id = ?
    ');
    $result = $req->execute([$newCreationId, $date, $title, $lastname, $firstname, $address, $city, $country, $email, $phone_number, $workshop, $host, $how_did_you, $extras, $rgpd, $allergies, $responsibility, $id]);

    // Redirection.
    if ($result) {
    //     require '../vendor/autoload.php';

    //     // Créez une nouvelle instance de Dompdf.
    //     $dompdf = new Dompdf();

    //     // Obtenez la date actuelle.
    //     $date = date('Y-m-d');

    //     // Générez le lien vers le fichier PDF.
    //     $pdfLink = "http://sdp-paris.com/SDP-Form/assets/CustomersPDF/{$creationId}/{$creationId}.pdf";

    //     // Créez une nouvelle instance de QrCode.
    //     $qrCode = new QrCode($pdfLink);

    //     // Définissez les paramètres du QR code si nécessaire.
    //     $qrCode->setSize(300); // Taille en pixels.

    //     // Générez le QR code en tant qu'image PNG.
    //     $writer = new PngWriter();
    //     $image = $writer->write($qrCode);

    //     // Encodez l'image en base64 pour l'inclure dans le HTML.
    //     $qrCodeImage = base64_encode($image->getString());

    //     // Générez le HTML pour le PDF.
    //     $html = "
    //     <style>
    //         @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
    
    //         .summary {
    //             font-family: 'Roboto', sans-serif;
    //             text-align: center;
    //         }
    //     </style>
    
    //     <div class='summary'>
    //         <h1>Création N°$creationId</h1>
    
    //         <p>Date : $date</p>
    //         <p>Civilité : $title</p>
    //         <p>Nom : $lastname</p>
    //         <p>Prénom : $firstname</p>
    //         <p>Adresse : $address</p>
    //         <p>Ville : $city</p>
    //         <p>Pays : $country</p>
    //         <p>Email : $email</p>
    //         <p>Numéro de téléphone : $phoneNumber</p>
    //         <p>Atelier : $workshop</p>
    //         <p>Hôte : $host</p>
    //         <p>Comment avez-vous entendu parler de nous ? : $howDidYou</p>
    //         <img src='data:image/png;base64,$qrCodeImage' />
    //     </div>
    // ";

    //     // Chargez le HTML dans Dompdf.
    //     $dompdf->loadHtml($html);

    //     // Rendez le PDF.
    //     $dompdf->render();

    //     // Récupérez le contenu du PDF.
    //     $output = $dompdf->output();

    //     // Créez les dossiers s'ils n'existent pas déjà.
    //     if (!is_dir("../assets/CustomersPDF/{$creationId}")) {
    //         mkdir("../assets/CustomersPDF/{$creationId}", 0777, true);
    //     }

    //     // Écrivez le contenu dans un fichier.
    //     file_put_contents("../assets/CustomersPDF/{$creationId}/{$creationId}.pdf", $output);

        header("location: ../index.php?page=edit&id={$id}&success=1&message=Informations modifiées avec succès.");
        exit();
    } else {
        header("location: ../index.php?page=edit&id={$id}&error=1&message=Impossible de modifier cette information.");
        exit();
    };
}
