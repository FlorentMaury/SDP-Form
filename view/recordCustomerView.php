<?php

// Modification du titre de la page.
$title = 'Accueil | Studio des Parfums';
// Début d'enregistrement du HTML.
ob_start();

$config = require './model/config.php';

?>

<!-- Contenu de la page. -->

<!-- Drapeaux de traduction. -->
<div class="main__flagsList">
    <img src="./assets/fr.svg" class="flagList__fr" alt="fr">
    <img src="./assets/en.svg" class="flagList__en" alt="en">
    <img src="./assets/es.svg" class="flagList__es" alt="es">
    <img src="./assets/pt.svg" class="flagList__pt" alt="pt">
    <img src="./assets/ru.svg" class="flagList__ru" alt="ru">
</div>

<h1 class="main__h1">Informations</h1>

<!-- Formulaire. -->
<form class="form" action="./model/addCustomerModel.php" method="POST">

    <!-- Messages de succès ou d'erreurs. -->
    <?php
    if (isset($_GET['error']) && !empty($_GET['message'])) {
        echo '<p class="errorMessage">' . htmlspecialchars($_GET['message']) . '</p>';
    }
    if (isset($_GET['success']) && !empty($_GET['message'])) {
        echo '<p class="successMessage">' . htmlspecialchars($_GET['message']) . '</p>';
    }
    ?>

    <!-- Civilité. -->
    <label for="titlePrint" class="civility">Civilité</label>
    <select name="titlePrint" id="titlePrint">
        <option value="Mr">Mr</option>
        <option value="Mme">Mme / Mrs </option>
        <option value="Enfant">Enfant / Child </option>
    </select>

    <!-- Nom. -->
    <label for="lastnamePrint" class="lastNamePrint">Nom</label>
    <input type="text" id="lastnamePrint" name="lastnamePrint">

    <!-- Prénom. -->
    <label for="firstnamePrint" class="firstNamePrint">Prénom</label>
    <input type="text" id="firstnamePrint" name="firstnamePrint">

    <!-- Email. -->
    <label for="emailPrint" class="emailPrint">Email</label>
    <input type="emailPrint" id="emailPrint" name="emailPrint">

    <!-- Pays. -->
    <label for="country" class="country">Pays</label>
    <select name="country" id="country">
    </select>

    <!-- Adresse. -->
    <label for="addressPrint" class="addressPrint">Adresse</label>
    <input type="text" id="addressPrint" name="addressPrint">

    <!-- Ville. -->
    <label for="cityPrint" class="cityPrint">Ville</label>
    <input type="text" id="cityPrint" name="cityPrint">

    <!-- Numéro de téléphone. -->
    <label for="phoneNumberPrint" class="phoneNumberPrint">Numéro de téléphone</label>
    <input type="tel" id="phoneNumberPrint" name="phoneNumberPrint">

    <!-- Hôte. -->
    <label for="facilitatorPrint" class="hostPrint">Hôte</label>
    <select name="facilitatorPrint" id="facilitatorPrint">
        <?php foreach ($config['hosts'] as $host) : ?>
            <option value="<?= htmlspecialchars($host) ?>"><?= htmlspecialchars($host) ?></option>
        <?php endforeach; ?>
    </select>

    <!-- Atelier. -->
    <label for="workshopPrint" class="workshopPrint">Atelier</label>
    <select name="workshopPrint" id="workshopPrint">
        <?php foreach ($config['workshops'] as $workshop) : ?>
            <option value="<?= htmlspecialchars($workshop) ?>"><?= htmlspecialchars($workshop) ?></option>
        <?php endforeach; ?>
    </select>

    <!-- Comment nous avez vous découverts ? -->
    <label for="howDidYouPrint" class="discoveryPrint">Comment nous avez vous découverts ?</label>
    <select name="howDidYouPrint" id="howDidYouPrint">
        <?php foreach ($config['discovery_methods'] as $method) : ?>
            <option value="<?= htmlspecialchars($method) ?>"><?= htmlspecialchars($method) ?></option>
        <?php endforeach; ?>
    </select>

    <!-- Options supplémentaires. -->
    <?php foreach ($config['extras'] as $extra) : ?>
        <div class="checkContainer">
            <div class="checkbox-container">
                <label for="<?= htmlspecialchars($extra) ?>"><?= htmlspecialchars($extra) ?></label>
                <input class="small-checkbox" type="checkbox" id="<?= htmlspecialchars($extra) ?>" name="extras[]Print" value="<?= htmlspecialchars($extra) ?>">
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Allérgies cutanées. -->
    <div class="checkboxQuestionDiv">
        <label for="allergiesPrint">Avez-vous des allergies empêchant de porter du parfum ?</label>
        <div class="checkboxes">
            <input class="small-checkbox" type="radio" id="allergies_yes" name="allergiesPrint" value="Oui"> Oui
            <input class="small-checkbox" type="radio" id="allergies_no" name="allergiesPrint" value="Non"> Non
        </div>
    </div>

    <!-- Acceptez-vous de continuer ? -->
    <div class="checkboxQuestionDiv">
        <label for="responsibilityPrint">Si oui, souhaitez-vous poursuivre en déclinant notre responsabilité ?</label>
        <div class="checkboxes">
            <input class="small-checkbox" type="radio" id="responsibility_yes" name="responsibilityPrint" value="Oui"> Oui
            <input class="small-checkbox" type="radio" id="responsibility_no" name="responsibilityPrint" value="Non"> Non
        </div>
    </div>

    <!-- Acceptation des normes RGPD. -->
    <div class="checkboxQuestionDiv">
        <label for="rgpdPrint">Acceptez-vous les normes RGPD* ?</label>
        <div class="checkboxes">
            <input class="small-checkbox" type="radio" id="rgpd_yes" name="rgpdPrint" value="Acceptées"> Oui
            <input class="small-checkbox" type="radio" id="rgpd_no" name="rgpdPrint" value="Refusées"> Non
        </div>
    </div>

    <!-- Champ caché si provenance d'un email. -->
    <?php
    if (isset($_GET['token'])) {
        $token = $_GET['token'];
        echo '<input type="hidden" name="token" value="' . htmlspecialchars($token) . '">';
    }
    ?>

    <!-- Champ caché pour la langue. -->
    <input type="hidden" id="lang" name="lang" value="fr">

    <!-- Bouton d'envoi. -->
    <button class="form__submit submit" type="submit" value="Envoyer">Envoyer</button>

    <p class="rgpd">Depuis Juin 2018, en accord avec la nouvelle réglementation RGPD, vos données sont collectées afin de gestion interne de votre fiche, pour les éventuelles recommandes et pour notre gestion dynamique des stocks. Elles ne sont pas transmises à des tiers.</p>

    <!-- Bouton pour imprimer les fiches sélectionnées. -->
    <!-- <button class="form__print print" type="button" value="Imprimer" onclick="window.print()">Imprimer</button> -->
</form>

<?php

// Fin de l'enregistrement du HTML.
$content = ob_get_clean();

// Intégration à base.php.
require('layout.php');

?>