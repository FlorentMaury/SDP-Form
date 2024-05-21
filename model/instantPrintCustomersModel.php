<?php

// Vérification de l'existence des identifiants des clients sélectionnés.
if (isset($_GET['customerIds'])) {
    require('../model/connectionDBModel.php');
    // Récupération des identifiants des clients sélectionnés.
    $customerIds = $_GET['customerIds'];

    require('../vendor/autoload.php');

    $qrCode = new Endroid\QrCode\QrCode((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
    $qrCode->setSize(80); // Définir la taille du QR Code (en pixels)
    // $qrCode->setMargin(5); // Définir la marge autour du QR Code (en pixels)
    $writer = new Endroid\QrCode\Writer\PngWriter();
    $image = $writer->write($qrCode);
    $qrCodeImage = base64_encode($image->getString());

    // Pour chaque identifiant de client
    // Préparation de la requête pour récupérer les informations du client.
    $stmt = $bdd->prepare('SELECT * FROM customer WHERE creation_id = ?');
    $stmt->execute([$customerIds]);
    $customer = $stmt->fetch(PDO::FETCH_ASSOC);

    // Génération de la fiche d'information du client.
    if ($customer !== false) {
?>
        <!-- HTML des fiches à imprimer. -->
        <!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
            <link rel="stylesheet" href="../design/style.css">
            <title>Fiche N° <?php echo htmlspecialchars($customerIds); ?> | Studio des Parfums</title>
            <style>
                header {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }

                h4,
                p,
                th {
                    font-size: 12px;
                }

                td,
                th {
                    border: 1px solid black;
                    padding: 10px;
                }

                table {
                    margin: 0;
                }

                .rgpd {
                    font-size: 10px;
                }

                h4,
                h2,
                table,
                p,
                th {
                    margin: 0;
                    padding: 0;
                }

                table {
                    margin: 0;
                    border-collapse: collapse;
                }

                @media print {

                    tr {
                        -webkit-print-color-adjust: exact;
                        print-color-adjust: exact;
                    }

                    tr[style*="background: #DBBA4F"] {
                        background-color: #DBBA4F !important;
                    }

                    tr[style*="background: #DB4B29"] {
                        background-color: #DB4B29 !important;
                    }

                    tr[style*="background: #308ADC"] {
                        background-color: #308ADC !important;
                    }

                    #printButton,
                    #backButton {
                        display: none;
                    }
                }
            </style>
        </head>

        <body>
            <header style="width: 60%;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin: auto; padding: 10px">
                    <img style="width: 30%;" class="logo" src="../assets/logo.webp" alt="Logo">
                    <img src="data:image/png;base64,<?php echo $qrCodeImage; ?>" alt="QR Code">
                    <h4>Fiche N° <?php echo htmlspecialchars($customerIds); ?></h4>
                </div>
            </header>

            <main style="page-break-after: always;">
                <?php

                // Traduction des clés de la base de données pour le français.
                $translationsFR = [
                    'workshop' => 'Atelier',
                    'extras'   => 'Options',
                    'how_did_you' => 'Découverte ?',
                    'facilitator' => 'Expert parf.',
                    'creation_id' => 'Numéro de création',
                    'title' => 'Civilité',
                    'lastname' => 'Nom',
                    'firstname' => 'Prénom',
                    'address' => 'Adresse',
                    'city' => 'Ville',
                    'country' => 'Pays',
                    'email' => 'Email',
                    'phone_number' => 'Numéro de téléphone',
                    'date' => 'Date',
                    'host' => 'Expert parf.',
                    'rgpd' => 'RGPD',
                    'allergies' => 'Allergies',
                    'responsibility' => 'Décliner responsabilité',
                    'code_ess' => 'Code ess.',
                    'notes_de_tete' => 'Notes de tête',
                    'qty_ml' => 'Qté en ml',
                    'qty_utile' => 'Qté utile',
                    'notes_de_coeur' => 'Notes de coeur',
                    'notes_de_fond' => 'Notes de fond',
                    'rgpd_statement' => 'Depuis Juin 2018, en accord avec la nouvelle réglementation RGPD, vos données sont collectées afin de gestion interne de votre fiche, pour les éventuelles recommandes et pour notre gestion dynamique des stocks. Elles ne sont pas transmises à des tiers.'
                ];

                // Traduction des clés de la base de données pour l'anglais.
                $translationsEN = [
                    'workshop' => 'Workshop',
                    'extras'   => 'Options',
                    'how_did_you' => 'Discovery ?',
                    'facilitator' => 'Perfume expert',
                    'creation_id' => 'Creation number',
                    'title' => 'Title',
                    'lastname' => 'Lastname',
                    'firstname' => 'Firstname',
                    'address' => 'Address',
                    'city' => 'City',
                    'country' => 'Country',
                    'email' => 'Email',
                    'phone_number' => 'Phone number',
                    'date' => 'Date',
                    'host' => 'Perfume expert',
                    'rgpd' => 'RGPD',
                    'allergies' => 'Allergies',
                    'responsibility' => 'Decline responsibility',
                    'code_ess' => 'Ess. Code',
                    'notes_de_tete' => 'Top notes',
                    'qty_ml' => 'Qty in ml',
                    'qty_utile' => 'Useful Qty',
                    'notes_de_coeur' => 'Heart notes',
                    'notes_de_fond' => 'Base notes',
                    'rgpd_statement' => 'Since June 2018, in accordance with the new GDPR regulations, your data is collected for internal management of your file, for any reorders and for our dynamic stock management. They are not transmitted to third parties.',
                ];

                // Clés à exclure de l'affichage.
                $excludeKeys = ['id', 'token', 'creation_id', 'language'];

                echo '<div style="width: 80%; margin: auto; display: flex; flex-wrap: wrap;">';

                // Sélection des traductions appropriées.
                $translations = ($customer['language'] === 'fr') ? $translationsFR : $translationsEN;

                // Affichage des informations du client.
                foreach ($customer as $key => $value) {
                    if (in_array($key, $excludeKeys)) {
                        continue;
                    }

                    // Traduction des clés.
                    $translatedKey = isset($translations[$key]) ? $translations[$key] : $key;

                    echo '<div style="flex: 1 0 25%;">';
                    echo '<h4>' . htmlspecialchars($translatedKey) . '</h4>';
                    echo '<p>' . htmlspecialchars($value) . '</p>';
                    echo '</div>';
                }

                // Tableau 1 : Notes de tête.
                echo '<table style="width: 100%;">';
                echo '<tr style="background: #DBBA4F;">';
                echo '<th style="width: 15%;">' . htmlspecialchars($translations['code_ess']) . '</th>';
                echo '<th style="width: 45%;">' . htmlspecialchars($translations['notes_de_tete']) . '</th>';
                echo '<th style="width: 20%;">' . htmlspecialchars($translations['qty_ml']) . '</th>';
                echo '<th style="width: 20%;">' . htmlspecialchars($translations['qty_utile']) . '</th>';
                echo '</tr>';
                for ($i = 0; $i < 10; $i++) {
                    echo '<tr>';
                    for ($j = 0; $j < 4; $j++) {
                        echo '<td class="td"></td>';
                    }
                    echo '</tr>';
                }
                echo '</table>';

                // Tableau 2 : Notes de coeur.
                echo '<table style="width: 100%;">';
                echo '<tr style="background: #DB4B29;">';
                echo '<th style="width: 15%;">' . htmlspecialchars($translations['code_ess']) . '</th>';
                echo '<th style="width: 45%;">' . htmlspecialchars($translations['notes_de_coeur']) . '</th>';
                echo '<th style="width: 20%;">' . htmlspecialchars($translations['qty_ml']) . '</th>';
                echo '<th style="width: 20%;">' . htmlspecialchars($translations['qty_utile']) . '</th>';
                echo '</tr>';
                for ($i = 0; $i < 10; $i++) {
                    echo '<tr>';
                    for ($j = 0; $j < 4; $j++) {
                        echo '<td class="td"></td>';
                    }
                    echo '</tr>';
                }
                echo '</table>';

                // Tableau 3 : Notes de fond.
                echo '<table style="width: 100%;">';
                echo '<tr style="background: #308ADC;">';
                echo '<th style="width: 15%;">' . htmlspecialchars($translations['code_ess']) . '</th>';
                echo '<th style="width: 45%;">' . htmlspecialchars($translations['notes_de_fond']) . '</th>';
                echo '<th style="width: 20%;">' . htmlspecialchars($translations['qty_ml']) . '</th>';
                echo '<th style="width: 20%;">' . htmlspecialchars($translations['qty_utile']) . '</th>';
                echo '</tr>';
                for ($i = 0; $i < 10; $i++) {
                    echo '<tr>';
                    for ($j = 0; $j < 4; $j++) {
                        echo '<td class="td"></td>';
                    }
                    echo '</tr>';
                }
                echo '</table>';

                echo '<p class="rgpd">' . htmlspecialchars($translations['rgpd_statement']) . '</p>';

                echo '</div>';

                echo '<button id="printButton" onclick="printPage()">Imprimer</button>';
                echo '<button id="backButton" onclick="goBack()">Retour</button>';
                ?>
            </main>

            <!-- Javascript. -->
            <script src="./js/script.js"></script>
            <script>
                function printPage() {
                    document.getElementById('printButton').style.display = 'none';
                    document.getElementById('backButton').style.display = 'none';
                    window.print();
                    location.reload();
                }

                window.onafterprint = function() {
                    document.getElementById('printButton').style.display = 'block';
                    document.getElementById('backButton').style.display = 'block';
                }

                function goBack() {
                    window.location.href = 'http://sdp-paris.com/SDP-Form/index.php?page=search';
                }
            </script>

        </body>

        </html>
<?php
    } else {
        echo '<p>Aucun client trouvé avec cet ID.</p>';
    }
}
?>