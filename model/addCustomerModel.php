<?php

// Utilisation de la bibliothèque Dompdf pour générer un PDF.
use Dompdf\Dompdf;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

// Vérifiez si les champs requis sont remplis.
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
    !empty($_POST['workshop']) &&
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
    $workshop    = trim(htmlspecialchars($_POST['workshop']));
    $howDidYou   = trim(htmlspecialchars($_POST['howDidYou']));

    // L'adresse email est-elle correcte ?
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('location: index.php?page=home&error=1&message=L\'adresse email est invalide.');
        exit();
    }

    // Année et mois actuels.
    $yearMonth = date('Ym');

    // Obtenez le plus grand customer_id qui commence par l'année et le mois actuels.
    $stmt = $bdd->prepare("SELECT creation_id FROM customer WHERE creation_id LIKE ? ORDER BY creation_id DESC LIMIT 1");
    $stmt->execute([$yearMonth . '%']);
    $row = $stmt->fetch();

    if ($row) {
        // Si un tel customer_id existe, prenez les trois derniers chiffres et ajoutez 1.
        $nextId = substr($row['creation_id'], -3) + 1;
    } else {
        // Sinon, c'est la première commande du mois, donc utilisez 1 comme ID.
        $nextId = 1;
    }

    // Générez la valeur pour la colonne customer_id.
    $creationId = $yearMonth . str_pad($nextId, 3, '0', STR_PAD_LEFT);

    // Vérifiez si le token est présent dans $_POST.
    $token = isset($_POST['token']) ? trim(htmlspecialchars($_POST['token'])) : NULL;

    if ($token) {
        // Préparez une requête SQL pour vérifier si le token existe déjà.
        $stmt = $bdd->prepare('SELECT 1 FROM customer WHERE token = ?');
        $stmt->execute([$token]);
        $row = $stmt->fetch();

        if ($row) {
            // Si le token existe déjà, redirigez vers la page d'accueil avec un message d'erreur.
            header('location: ../index.php?page=home&error=1&message=Vous êtes déjà enregistré.');
            exit();
        }
    }

    // Préparez la requête SQL avec le nouveau champ token.
    $stmt = $bdd->prepare('INSERT INTO customer(title, lastname, firstname, email, address, city, country, phone_number, host, workshop, how_did_you, creation_id, token) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

    // Exécutez la requête avec les données nettoyées et le token.
    $result = $stmt->execute([$title,  $lastname, $firstname, $email, $address, $city, $country, $phoneNumber, $host, $workshop, $howDidYou, $creationId, $token]);

    if ($result) {

        require '../vendor/autoload.php';

        // Créez une nouvelle instance de Dompdf.
        $dompdf = new Dompdf();

        // Obtenez la date actuelle.
        $date = date('Y-m-d');

        // Générez le lien vers le fichier PDF.
        $pdfLink = "http://sdp-paris.com/SDP-Form/assets/CustomersPDF/{$creationId}/{$creationId}.pdf";

        // Créez une nouvelle instance de QrCode.
        $qrCode = new QrCode($pdfLink);

        // Définissez les paramètres du QR code si nécessaire.
        $qrCode->setSize(300); // Taille en pixels.

        // Générez le QR code en tant qu'image PNG.
        $writer = new PngWriter();
        $image = $writer->write($qrCode);

        // Encodez l'image en base64 pour l'inclure dans le HTML.
        $qrCodeImage = base64_encode($image->getString());

        // Générez le HTML pour le PDF.
        $html = "
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
    
        .header {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            position: relative;
            height: 30vh; 
            overflow: hidden; 
        }
    
        .header img {
            position: absolute;
            left: 20px;
            top: 20px;
            height: 50px;
        }
    
        .summary {
            font-family: 'Roboto', sans-serif;
            text-align: center;
        }
    </style>
    
    <div class='header'>
        <img src='../assets/logo.webp' alt='Logo'>
        <h1>Création N°$creationId</h1>
    </div>
    
    <div class='summary'>
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
        <p>Atelier : $workshop</p>
        <p>Comment avez-vous entendu parler de nous ? : $howDidYou</p>
        <img src='data:image/png;base64,$qrCodeImage' />
    </div>
    ";

        // Chargez le HTML dans Dompdf.
        $dompdf->loadHtml($html);

        // Rendez le PDF.
        $dompdf->render();

        // Récupérez le contenu du PDF.
        $output = $dompdf->output();

        if (!is_writable("../assets/CustomersPDF/")) {
            die('Le dossier n\'est pas accessible en écriture');
        }

        // Créez les dossiers s'ils n'existent pas déjà.
        if (!is_dir("../assets/CustomersPDF/{$creationId}")) {
            mkdir("../assets/CustomersPDF/{$creationId}", 0777, true);
        }

        // Écrivez le contenu dans un fichier
        file_put_contents("../assets/CustomersPDF/{$creationId}/{$creationId}.pdf", $output);

        header('location: ../index.php?page=home&success=1&message=Merci.');
        exit();
    } else {
        header('location: ../index.php?page=home&error=1&message=Veuillez remplir tous les champs.');
        exit();
    }
}
