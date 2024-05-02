<?php
require('./model/connectionDBModel.php');

$id = $_GET['id'];

$stmt = $bdd->prepare('SELECT * FROM customer WHERE creation_id = ?');
$stmt->execute([$id]);
$customer = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./design/style.css">
    <title>Fiche N° <?php echo htmlspecialchars($id); ?> | Studio des Parfums</title>
    <style>
        .header__logo {
            width: 20%;
            margin: auto;
        }

        td,
        th {
            border: 1px solid black;
            padding: 10px;
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

            #printButton,
            #backButton {
                display: none;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="header__logo">
            <img src="./assets/logo.webp" alt="Logo" style="width: 100%;">
        </div>
    </header>

    <main>
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

        if ($customer !== false) {
            echo '<div style="width: 80%; margin: auto; display: flex; flex-wrap: wrap;">';

            // Afficher le creation_id en premier
            if (isset($customer['creation_id'])) {
                echo '<div style="flex: 1 0 100%; padding: 5px; text-align: center;">';
                echo '<h4>' . htmlspecialchars($translations['creation_id']) . '</h4>';
                echo '<p>' . htmlspecialchars($customer['creation_id']) . '</p>';
                echo '</div>';
            }

            foreach ($customer as $key => $value) {
                if (in_array($key, $excludeKeys)) {
                    continue;
                }

                $translatedKey = isset($translations[$key]) ? $translations[$key] : $key;

                echo '<div style="flex: 1 0 25%; padding: 0px;">';
                echo '<h4>' . htmlspecialchars($translatedKey) . '</h4>';
                echo '<p>' . htmlspecialchars($value) . '</p>';
                echo '</div>';
            }

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

            echo '</div>';

            echo '<button id="printButton" onclick="printPage()">Imprimer</button>';
            echo '<button id="backButton" onclick="goBack()">Retour</button>';
        } else {
            echo '<p>Aucun client trouvé avec cet ID.</p>';
        }
        ?>
    </main>

    <script src="./js/script.js"></script>
    <script>
        function printPage() {
            document.getElementById('printButton').style.display = 'none';
            document.getElementById('backButton').style.display = 'none';
            window.print();
        }

        window.onafterprint = function() {
            document.getElementById('printButton').style.display = 'block';
            document.getElementById('backButton').style.display = 'block';
        }

        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>