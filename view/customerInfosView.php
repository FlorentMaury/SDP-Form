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
            width: 30%;
            margin: auto;
        }

        @media print {
            .print-content {
            transform: scale(0.3); /* Réduit la taille du contenu à 30% de sa taille originale */
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

        $excludeKeys = ['id', 'token'];

        if ($customer !== false) {
            echo '<div style="width: 80%; margin: auto; display: flex; flex-wrap: wrap;">';

            foreach ($customer as $key => $value) {
                if (in_array($key, $excludeKeys)) {
                    continue;
                }

                $translatedKey = isset($translations[$key]) ? $translations[$key] : $key;

                echo '<div style="flex: 1 0 25%; padding: 5px;">';
                echo '<h4>' . htmlspecialchars($translatedKey) . '</h4>';
                echo '<p>' . htmlspecialchars($value) . '</p>';
                echo '</div>';
            }

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