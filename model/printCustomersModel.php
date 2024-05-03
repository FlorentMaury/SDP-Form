<?php
// Vérification de l'existence des identifiants des clients sélectionnés
if (isset($_POST['customerIds'])) {
    require('../model/connectionDBModel.php');
    // Récupération des identifiants des clients sélectionnés.
    $customerIds = $_POST['customerIds'];

    // Pour chaque identifiant de client
    foreach ($customerIds as $id) {
        // Préparation de la requête pour récupérer les informations du client.
        $stmt = $bdd->prepare('SELECT * FROM customer WHERE creation_id = ?');
        $stmt->execute([$id]);
        $customer = $stmt->fetch(PDO::FETCH_ASSOC);

        // Génération de la fiche d'information du client.
        if ($customer !== false) {
?>
            <!DOCTYPE html>
            <html lang="fr">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
                <link rel="stylesheet" href="../design/style.css">
                <title>Fiche N° <?php echo htmlspecialchars($id); ?> | Studio des Parfums</title>
                <style>
                    .header__logo {
                        width: 20%;
                        margin: auto;
                    }

                    td,
                    th {
                        border: 1px solid black;
                        padding: 8px;
                    }

                    h4,
                    p,
                    th {
                        font-size: 14px;
                    }

                    table {
                        margin: 0;
                    }

                    h4,
                    h2,
                    table,
                    p,
                    th {
                        margin: 0;
                        padding: 0;
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
                        <h4>Fiche N° <?php echo htmlspecialchars($id); ?></h4>
                    </div>
                </header>

                <main style="page-break-after: always;">
                    <?php
                    $translations = [
                        'workshop' => 'Atelier',
                        'extras'   => 'Options',
                        'how_did_you' => 'Comment avez-vous entendu parler de nous ?',
                        'facilitator' => 'Hôte(sse)',
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
                        'host' => 'Hôte(sse)',
                    ];

                    $excludeKeys = ['id', 'token', 'creation_id'];

                    echo '<div style="width: 80%; margin: auto; display: flex; flex-wrap: wrap;">';

                    foreach ($customer as $key => $value) {
                        if (in_array($key, $excludeKeys)) {
                            continue;
                        }

                        $translatedKey = isset($translations[$key]) ? $translations[$key] : $key;

                        echo '<div style="flex: 1 0 25%;">';
                        echo '<h4>' . htmlspecialchars($translatedKey) . '</h4>';
                        echo '<p>' . htmlspecialchars($value) . '</p>';
                        echo '</div>';
                    }

                    echo '<p>Toutes nos notes parfumées sont respectueuses de la réglementation en vigeur française et européennes.</p>';

                    echo '<p>Néanmoins, avez-vous des allergies liées au parfum ou allergies cutanées : ';
                    echo '<input type="checkbox" id="allergiesYes" name="allergies" value="yes"><label for="allergiesYes"></label>';
                    echo '<input type="checkbox" id="allergiesNo" name="allergies" value="no"><label for="allergiesNo"></label></p>';

                    echo '<p>Si oui, souhaitez-vous poursuivre en déclinant notre responsabilité ? ';
                    echo '<input type="checkbox" id="responsibilityYes" name="responsibility" value="yes"><label for="responsibilityYes"></label>';
                    echo '<input type="checkbox" id="responsibilityNo" name="responsibility" value="no"><label for="responsibilityNo"></label></p>';

                    echo '<p>Dans le cadre de la RGPD, pouvons-vous conserver vos formules ? ';
                    echo '<input type="checkbox" id="rgpdYes" name="rgpd" value="yes"><label for="rgpdYes"></label>';
                    echo '<input type="checkbox" id="rgpdNo" name="rgpd" value="no"><label for="rgpdNo"></label></p>';

                    // Tableau 1 : Notes de tête
                    echo '<table style="width: 100%;">';
                    echo '<tr style="background: #DBBA4F;">';
                    echo '<th style="width: 15%;">Code ess.</th>';
                    echo '<th style="width: 45%;">Notes de tête</th>';
                    echo '<th style="width: 20%;">Qté en ml</th>';
                    echo '<th style="width: 20%;">Qté utile</th>';
                    echo '</tr>';
                    for ($i = 0; $i < 9; $i++) {
                        echo '<tr>';
                        for ($j = 0; $j < 4; $j++) {
                            echo '<td class="td"></td>';
                        }
                        echo '</tr>';
                    }
                    echo '</table>';

                    // Tableau 2 : Notes de coeur
                    echo '<table style="width: 100%;">';
                    echo '<tr style="background: #DB4B29;">';
                    echo '<th style="width: 15%;">Code ess.</th>';
                    echo '<th style="width: 45%;">Notes de coeur</th>';
                    echo '<th style="width: 20%;">Qté en ml</th>';
                    echo '<th style="width: 20%;">Qté utile</th>';
                    echo '</tr>';
                    for ($i = 0; $i < 9; $i++) {
                        echo '<tr>';
                        for ($j = 0; $j < 4; $j++) {
                            echo '<td class="td"></td>';
                        }
                        echo '</tr>';
                    }
                    echo '</table>';

                    // Tableau 3 : Notes de fond
                    echo '<table style="width: 100%;">';
                    echo '<tr style="background: #308ADC;">';
                    echo '<th style="width: 15%;">Code ess.</th>';
                    echo '<th style="width: 45%;">Notes de fond</th>';
                    echo '<th style="width: 20%;">Qté en ml</th>';
                    echo '<th style="width: 20%;">Qté utile</th>';
                    echo '</tr>';
                    for ($i = 0; $i < 9; $i++) {
                        echo '<tr>';
                        for ($j = 0; $j < 4; $j++) {
                            echo '<td class="td"></td>';
                        }
                        echo '</tr>';
                    }
                    echo '</table>';

                    echo '<p>Depuis Juin 2018, en accord avec la nouvelle réglementation RGPD, vos données sont collectées afin de gestion interne de votre fiche, pour les éventuelles recommandes et pour notre gestion dynamique des stocks. Elles ne sont pas transmises à des tiers.</p>';

                    echo '</div>';

                    echo '<button id="printButton" onclick="printPage()">Imprimer</button>';
                    echo '<button id="backButton" onclick="goBack()">Retour</button>';
                    ?>
                </main>

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
                        window.location.href = 'https://localhost/SDP-Form/index.php?page=search';
                    }
                </script>

            </body>

            </html>
<?php
        } else {
            echo '<p>Aucun client trouvé avec cet ID.</p>';
        }
    }
}
?>