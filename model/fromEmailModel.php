<?php

// Utilisation de la bibliothèque Dompdf pour générer un PDF.
use Dompdf\Dompdf;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

// Vérifiez si les champs requis sont remplis.
if (
    !empty($_POST['titleEmail']) &&
    !empty($_POST['lastnameEmail']) &&
    !empty($_POST['firstnameEmail']) &&
    !empty($_POST['addressEmail']) &&
    !empty($_POST['cityEmail']) &&
    !empty($_POST['country']) &&
    !empty($_POST['emailEmail']) &&
    !empty($_POST['phoneNumber']) &&
    !empty($_POST['facilitatorEmail']) &&
    !empty($_POST['workshopEmail']) &&
    !empty($_POST['date']) &&
    !empty($_POST['howDidYouEmail']) &&
    isset($_POST['allergiesEmail']) &&
    isset($_POST['newsEmail']) &&
    isset($_POST['rgpdEmail'])
) {
    // Connexion à la base de données.
    require('./connectionDBModel.php');

    // Déclaration des variables avec les données nettoyées.
    $title       = trim(htmlspecialchars($_POST['titleEmail']));
    $lastname    = trim(htmlspecialchars($_POST['lastnameEmail']));
    $firstname   = trim(htmlspecialchars($_POST['firstnameEmail']));
    $address     = trim(htmlspecialchars($_POST['addressEmail']));
    $city        = trim(htmlspecialchars($_POST['cityEmail']));
    $country     = trim(htmlspecialchars($_POST['country']));
    $email       = trim(htmlspecialchars($_POST['emailEmail']));
    $phoneNumber = trim(htmlspecialchars($_POST['phoneNumber']));
    $host        = trim(htmlspecialchars($_POST['facilitatorEmail']));
    $workshop    = trim(htmlspecialchars($_POST['workshopEmail']));
    $date        = trim(htmlspecialchars($_POST['date']));
    $howDidYou   = trim(htmlspecialchars($_POST['howDidYouEmail']));
    $allergies   = trim(htmlspecialchars($_POST['allergiesEmail']));
    $news        = trim(htmlspecialchars($_POST['newsEmail']));
    if (isset($_GET['token'])) {
        $token = trim(htmlspecialchars($_GET['token']));
    } else {
        $token = NULL;
    }
    if (isset($_POST['responsibility'])) {
        $responsibility = trim(htmlspecialchars($_POST['responsibilityEmail']));
    } else {
        $responsibility = 'Aucune allergie';
    }
    $rgpd = trim(htmlspecialchars($_POST['rgpdEmail']));
    $extras      = !empty($_POST['extras']) ? implode(", ", array_map(function ($value) {
        return trim(htmlspecialchars($value));
    }, $_POST['extras'])) : 'N/A';

    // L'adresse email est-elle correcte ?
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('location: ../index.php?page=fromEmail&error=1&message=L\'adresse email est invalide.');
        exit();
    }

    // Année et mois de la date entrée par l'utilisateur.
    $userDate = DateTime::createFromFormat('Y-m-d', $_POST['date']);
    $yearMonth = $userDate->format('Ym');

    // Obtenez tous les creation_id qui commencent par l'année et le mois de la date entrée par l'utilisateur.
    $stmt = $bdd->prepare("SELECT creation_id FROM customer WHERE creation_id LIKE ? ORDER BY creation_id");
    $stmt->execute([$yearMonth . '%']);
    $rows = $stmt->fetchAll();

    // Convertissez les creation_id en numéros de séquence (les trois derniers chiffres) et triez-les.
    $sequenceNumbers = array_map(function($row) {
        return (int)substr($row['creation_id'], -3);
    }, $rows);
    sort($sequenceNumbers);

    // Trouvez le premier "trou" dans la séquence de numéros.
    $nextId = 1;
    foreach ($sequenceNumbers as $number) {
        if ($number == $nextId) {
            $nextId++;
        } else {
            break;
        }
    }

    // Générez la valeur pour la colonne creation_id.
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
        header('location: ../index.php?page=fromEmail&error=1&message=Vous êtes déjà enregistré.');
        exit();
    }

    // Préparez une requête SQL pour vérifier si le token existe et n'a pas expiré.
    $stmt = $bdd->prepare('SELECT 1 FROM tokens WHERE token = ? AND expiry_date > NOW()');
    $stmt->execute([$token]);
    $row = $stmt->fetch();

    if (!$row) {
        // Le token n'est pas valide ou a expiré.
        // Redirigez vers la page d'accueil avec un message d'erreur.
        header('location: ../index.php?page=fromEmail&error=1&message=Token invalide ou expiré.');
        exit();
    }
} else {
    // Le token n'est pas présent dans $_POST.
    // Redirigez vers la page d'accueil avec un message d'erreur.
    header('location: ../index.php?page=fromEmail&error=1&message=Token manquant.');
    exit();
}

    $date = $userDate->format('Y-m-d');

    // Préparez la requête SQL avec le nouveau champ extras.
    $stmt = $bdd->prepare('INSERT INTO customer(title, lastname, firstname, email, address, city, country, phone_number, host, workshop, date, extras, how_did_you, creation_id, token, allergies, responsibility, news, rgpd, language) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

    // Exécutez la requête avec les données nettoyées, le token et les extras.
    $result = $stmt->execute([$title,  $lastname, $firstname, $email, $address, $city, $country, $phoneNumber, $host, $workshop, $date, $extras, $howDidYou, $creationId, $token, $allergies, $responsibility, $news, $rgpd, $_POST['lang']]);

    if ($result) {

        // require '../vendor/autoload.php';

        // // Créez une nouvelle instance de Dompdf.
        // $dompdf = new Dompdf();

        // // Obtenez la date actuelle.
        // // $date = date('Y-m-d');

        // // Générez le lien vers le fichier PDF.
        // $pdfLink = "http://sdp-paris.com/SDP-Form/assets/CustomersPDF/{$creationId}/{$creationId}.pdf";

        // // Créez une nouvelle instance de QrCode.
        // $qrCode = new QrCode($pdfLink);

        // // Définissez les paramètres du QR code si nécessaire.
        // $qrCode->setSize(100); // Taille en pixels.

        // // Générez le QR code en tant qu'image PNG.
        // $writer = new PngWriter();
        // $image = $writer->write($qrCode);

        // // Encodez l'image en base64 pour l'inclure dans le HTML.
        // $qrCodeImage = base64_encode($image->getString());

        // // Générez le HTML pour le PDF.
        // $html = "
        // <style>
        // @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
        
        // .file {
        //     width: 100%;
        //     overflow: hidden;
        // }
        
        // .header {
        //     font-family: 'Roboto', sans-serif;
        //     background-color: #f8f9fa;
        //     padding: 10px;
        //     text-align: center;
        //     position: relative;
        //     overflow: hidden; 
        // }
        
        // .header img {
        //     position: absolute;
        //     left: 20px;
        //     top: 20px;
        // }
        
        // .summary {
        //     font-family: 'Roboto', sans-serif;
        //     display: flex;
        //     justify-content: space-between;
        //     align-items: center; /* Alignement vertical */
        //     flex-wrap: nowrap;
        // }
        
        // .summary > div {
        //     width: 50%; /* Augmentez la largeur à 50% pour laisser plus d'espace pour le QR code */
        //     padding: 10px; /* Ajout de marges intérieures */
        //     box-sizing: border-box; /* Assurez-vous que les marges intérieures ne dépassent pas la largeur spécifiée */
        // }
        
        // .summary img {
        //     max-width: 100%; /* Pour s'assurer que le QR code ne dépasse pas la largeur du conteneur */
        //     height: auto;
        // }
        // </style>
        
            
        // <div class='file'>
        //     <div class='header'>
        //         <img src='/assets/logo.webp' alt='Logo'>
        //         <h1>Création N°$creationId</h1>
        //         <img src='data:image/png;base64,$qrCodeImage' />
        //     </div>
            
        //     <div class='summary'>
        //         <div>
        //             <p>Date : $date Civilité : $title Nom : $lastname Prénom : $firstname</p>
        //             <p>Adresse : $address Ville : $city Pays : $country</p>
        //             <p>Email : $email Numéro de téléphone : $phoneNumber</p>
        //             <p>Hôte : $host Atelier : $workshop</p>
        //             <p>Comment avez-vous entendu parler de nous ? : $howDidYou</p>
        //             <p>Options : " . (!empty($extras) ? $extras : "Aucune") . "</p>
        //         </div>
        //         <div>
        //             <img src='data:image/png;base64,$qrCodeImage' />
        //         </div>
        //     </div>
        // </div>
        // ";


        // // Chargez le HTML dans Dompdf.
        // $dompdf->loadHtml($html);

        // // Rendez le PDF.
        // $dompdf->render();

        // // Récupérez le contenu du PDF.
        // $output = $dompdf->output();

        // if (!is_writable("../assets/CustomersPDF/")) {
        //     die('Le dossier n\'est pas accessible en écriture');
        // }

        // // Créez les dossiers s'ils n'existent pas déjà.
        // if (!is_dir("../assets/CustomersPDF/{$creationId}")) {
        //     mkdir("../assets/CustomersPDF/{$creationId}", 0777, true);
        // }

        // // Écrivez le contenu dans un fichier.
        // file_put_contents("../assets/CustomersPDF/{$creationId}/{$creationId}.pdf", $output);

        // Préparez une requête SQL pour supprimer le token de la table tokens.
        $stmt = $bdd->prepare('DELETE FROM tokens WHERE token = ?');
        $stmt->execute([$token]);

        header('location: ../index.php?page=fromEmail&success=1&message=Merci.');
        exit();
    } else {
        header('location: ../index.php?page=fromEmail&error=1&message=Veuillez remplir tous les champs.');
        exit();
    }
}
