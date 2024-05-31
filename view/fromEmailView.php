<?php

$config = require './model/config.php';

// Récupérer le token depuis l'URL
$token = isset($_GET['token']) ? htmlspecialchars($_GET['token']) : '';

// Préparez une requête SQL pour vérifier si le token existe déjà dans la table tokens.
$stmt = $bdd->prepare('SELECT 1 FROM tokens WHERE token = ?');
$stmt->execute([$token]);
$row = $stmt->fetch();

if (!$row) {
    // Si le token n'existe pas, affichez un message d'erreur et arrêtez l'exécution du script.
    header('location: ./index.php?page=errorView');
    exit();
}

?>

<!-- Début de structure des pages. -->
<!DOCTYPE html>
<html lang="fr">

<!-- Head. -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./design/style.css">
    <title>Enregistrement | Studio des Parfums</title>
</head>

<!-- Body. -->
<body>

    <header class="header">
        <div class="header__logo">
            <img src="./assets/logo.webp" alt="Logo">
        </div>
    </header>

    <!-- Contenu de la page. -->
    <main class="main">

        <!-- Drapeaux de traduction. -->
        <div class="main__flagsList">
            <img src="./assets/fr.svg" class="flagList__fr" alt="fr">
            <img src="./assets/en.svg" class="flagList__en" alt="en">
            <img src="./assets/es.svg" class="flagList__es" alt="es">
            <img src="./assets/pt.svg" class="flagList__pt" alt="pt">
            <!-- <img src="./assets/ru.svg" class="flagList__ru" alt="ru"> -->
        </div>

        <h1 class="main__h1">Informations</h1>

        <!-- Formulaire. -->
        <form class="form" action="./model/fromEmailModel.php" method="POST">

            <!-- Messages de succès ou d'erreurs. -->
            <?php
            if (isset($_GET['error']) && !empty($_GET['message'])) {
                echo '<p class="errorMessage">' . htmlspecialchars($_GET['message']) . '</p>';
            }
            if (isset($_GET['success']) && !empty($_GET['message'])) {
                echo '<p class="successMessage">' . htmlspecialchars($_GET['message']) . '</p>';
            }
            ?>

            <!-- Civilité -->
            <label for="titleEmail" class="translate civility" data-translate-key="civility">Civilité</label>
            <select name="titleEmail" id="titleEmail" class="translate">
                <option value="Mr" class="translate mr" data-translate-key="mr">Mr</option>
                <option value="Mme" class="translate mrs" data-translate-key="mrs">Mme / Mrs</option>
                <option value="Enfant" class="translate child" data-translate-key="child">Enfant / Child</option>
            </select>

            <!-- Nom -->
            <label for="lastnameEmail" class="translate lastName" data-translate-key="lastName">Nom</label>
            <input type="text" id="lastnameEmail" name="lastnameEmail">

            <!-- Prénom -->
            <label for="firstnameEmail" class="translate firstName" data-translate-key="firstName">Prénom</label>
            <input type="text" id="firstnameEmail" name="firstnameEmail">

            <!-- Email -->
            <label for="emailEmail" class="translate email" data-translate-key="email">Email</label>
            <input type="emailEmail" id="email" name="emailEmail">

            <!-- Pays -->
            <label for="country" class="translate country" data-translate-key="country">Pays</label>
            <select name="country" id="country" class="translate"></select>

            <!-- Adresse -->
            <label for="addressEmail" class="translate address" data-translate-key="address">Adresse</label>
            <input type="text" id="addressEmail" name="addressEmail">

            <!-- Ville -->
            <label for="cityEmail" class="translate city" data-translate-key="city">Ville</label>
            <input type="text" id="cityEmail" name="cityEmail">

            <!-- Numéro de téléphone -->
            <label for="phoneNumber" class="translate phoneNumber" data-translate-key="phoneNumber">Numéro de téléphone</label>
            <input type="tel" id="phoneNumber" name="phoneNumber">

            <!-- Hôte. -->
            <label for="facilitatorEmail" class="translate host" data-translate-key="host">Hôte</label>
            <select name="facilitatorEmail" id="facilitatorEmail" class="translate">
                <?php foreach ($config['hosts'] as $host) : ?>
                    <option value="<?= htmlspecialchars($host) ?>" class="translate" data-translate-key="<?= htmlspecialchars($host) ?>"><?= htmlspecialchars($host) ?></option>
                <?php endforeach; ?>
            </select>

            <!-- Atelier. -->
            <label for="workshopEmail" class="translate workshop" data-translate-key="workshop">Atelier</label>
            <select name="workshopEmail" id="workshopEmail" class="translate">
                <?php foreach ($config['workshops'] as $workshop) : ?>
                    <option value="<?= htmlspecialchars($workshop) ?>" class="translate" data-translate-key="<?= htmlspecialchars($workshop) ?>"><?= htmlspecialchars($workshop) ?></option>
                <?php endforeach; ?>
            </select>

            <!-- Comment nous avez vous découverts ? -->
            <label for="howDidYouEmail" class="translate discovery" data-translate-key="discovery">Comment nous avez vous découverts
                ?</label>
            <select name="howDidYouEmail" id="howDidYouEmail" class="translate">
                <?php foreach ($config['discovery_methods'] as $method) : ?>
                    <option value="<?= htmlspecialchars($method) ?>" class="translate" data-translate-key="<?= htmlspecialchars($method) ?>"><?= htmlspecialchars($method) ?></option>
                <?php endforeach; ?>
            </select>

            <!-- Options supplémentaires. -->
            <?php foreach ($config['extras'] as $extra) : ?>
                <div class="checkContainer">
                    <div class="checkbox-container">
                        <label for="<?= htmlspecialchars($extra) ?>" class="translate" data-translate-key="<?= htmlspecialchars($extra) ?>"><?= htmlspecialchars($extra) ?></label>
                        <input class="small-checkbox" type="checkbox" id="<?= htmlspecialchars($extra) ?>" name="extras[]Print" value="<?= htmlspecialchars($extra) ?>">
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- Allérgies cutanées -->
            <div class="checkboxQuestionDiv">
                <label for="allergiesEmail" class="translate allergiesQuestion" data-translate-key="allergiesQuestion">Avez-vous des allergies empêchant de porter du parfum ?</label>
                <div class="checkboxes">
                    <input class="small-checkbox translate" type="radio" id="allergies_yes" name="allergiesEmail" value="Oui" data-translate-key="yes"> <span class="translate" data-translate-key="yes">Oui</span>
                    <input class="small-checkbox translate" type="radio" id="allergies_no" name="allergiesEmail" value="Non" data-translate-key="no"> <span class="translate" data-translate-key="no">Non</span>
                </div>
            </div>

            <!-- Acceptez-vous de continuer ? -->
            <div class="checkboxQuestionDiv">
                <label for="responsibilityEmail" class="translate responsibilityQuestion" data-translate-key="responsibilityQuestion">Si oui, souhaitez-vous poursuivre en déclinant notre responsabilité ?</label>
                <div class="checkboxes">
                    <input class="small-checkbox translate" type="radio" id="responsibility_yes" name="responsibilityEmail" value="Oui" data-translate-key="yes"> <span class="translate" data-translate-key="yes">Oui</span>
                    <input class="small-checkbox translate" type="radio" id="responsibility_no" name="responsibilityEmail" value="Non" data-translate-key="no"> <span class="translate" data-translate-key="no">Non</span>
                </div>
            </div>

            <!-- Acceptation de la newsletter ? -->
            <div class="checkboxQuestionDiv">
                <label for="newsEmail" class="translate newsQuestion" data-translate-key="newsQuestion">Acceptez-vous de recevoir la newsletter* ?</label>
                <div class="checkboxes">
                    <input class="small-checkbox translate" type="radio" id="news_yes" name="newsEmail" value="Acceptées" data-translate-key="yes"> <span class="translate" data-translate-key="yes">Oui</span>
                    <input class="small-checkbox translate" type="radio" id="news_no" name="newsEmail" value="Refusées" data-translate-key="no"> <span class="translate" data-translate-key="no">Non</span>
                </div>
            </div>

            <!-- Acceptation des normes RGPD -->
            <div class="checkboxQuestionDiv">
                <label for="rgpdEmail" class="translate rgpdQuestion" data-translate-key="rgpdQuestion">Acceptez-vous les normes RGPD** ?</label>
                <div class="checkboxes">
                    <input class="small-checkbox translate" data-translate-key="yes" type="radio" id="rgpd_yes" name="rgpdEmail" value="Acceptées"> <span class="translate" data-translate-key="yes">Oui</span>
                    <input class="small-checkbox translate" data-translate-key="no" type="radio" id="rgpd_no" name="rgpdEmail" value="Refusées"> <span class="translate" data-translate-key="no">Non</span>
                </div>
            </div>


            <!-- Champ caché si provenance d'un email -->
            <input type="hidden" name="token" value="<?= isset($_GET['token']) ? htmlspecialchars($_GET['token']) : '' ?>">

            <!-- Champ caché pour la langue. -->
            <input type="hidden" id="lang" name="lang" value="fr">

            <!-- Bouton d'envoi. -->
            <p class="news newsletterMessage translate" data-translate-key="newsletterMessage">*Le Studio des Parfums enrichi régulièrement son orgue et également les informations du
                monde de la parfumerie, ainsi que des offres aventageuses, acceptez-vous de recevoir cette newsletter.</p>
            <p class="rgpd rgpdMessage translate" data-translate-key="rgpdMessage">**Depuis Juin 2018, en accord avec la nouvelle réglementation RGPD, vos données sont
                collectées afin de gestion interne de votre fiche, pour les éventuelles recommandes et pour notre gestion
                dynamique des stocks. Elles ne sont pas transmises à des tiers.</p>

            <!-- Ajouter le token caché -->
            <input type="hidden" name="token" value="<?= $token ?>">

            <!-- Bouton d'envoi. -->
            <button class="form__submit submit translate" data-translate-key="submit" type="submit" value="Envoyer">Envoyer</button>
        </form>

    </main>

    <script src="./js/countries.js"></script>
    <script src="./js/countryTrad.js"></script>
</body>

</html>