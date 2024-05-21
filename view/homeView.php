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
    <!-- <img src="./assets/ru.svg" class="flagList__ru" alt="ru"> -->
</div>

<h1 class="main__h1">Informations</h1>

<!-- Formulaire. -->
<form class="form" action="./model/addFuturCustomerModel.php" method="POST">

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
    <label for="title" class="translate civility">Civilité</label>
    <select name="title" id="title" class="translate">
        <option value="Mr" class="translate mr">Mr</option>
        <option value="Mme" class="translate mrs">Mme / Mrs</option>
        <option value="Enfant" class="translate child">Enfant / Child</option>
    </select>

    <!-- Nom -->
    <label for="lastname" class="translate lastName">Nom</label>
    <input type="text" id="lastname" name="lastname">

    <!-- Prénom -->
    <label for="firstname" class="translate firstName">Prénom</label>
    <input type="text" id="firstname" name="firstname">

    <!-- Email -->
    <label for="email" class="translate email">Email</label>
    <input type="email" id="email" name="email">

    <!-- Pays -->
    <label for="country" class="translate country">Pays</label>
    <select name="country" id="country" class="translate"></select>

    <!-- Adresse -->
    <label for="address" class="translate address">Adresse</label>
    <input type="text" id="address" name="address">

    <!-- Ville -->
    <label for="city" class="translate city">Ville</label>
    <input type="text" id="city" name="city">

    <!-- Numéro de téléphone -->
    <label for="phoneNumber" class="translate phoneNumber">Numéro de téléphone</label>
    <input type="tel" id="phoneNumber" name="phoneNumber">

    <!-- Hôte. -->
    <label for="facilitator" class="hostPrint">Hôte</label>
    <select name="facilitator" id="facilitator" class="translate">
        <?php foreach ($config['hosts'] as $host) : ?>
            <option value="<?= htmlspecialchars($host) ?>" class="translate" data-translate-key="<?= htmlspecialchars($host) ?>"><?= htmlspecialchars($host) ?></option>
        <?php endforeach; ?>
    </select>

    <!-- Atelier. -->
    <label for="workshop" class="workshop">Atelier</label>
    <select name="workshop" id="workshop" class="translate">
        <?php foreach ($config['workshops'] as $workshop) : ?>
            <option value="<?= htmlspecialchars($workshop) ?>" class="translate" data-translate-key="<?= htmlspecialchars($workshop) ?>"><?= htmlspecialchars($workshop) ?></option>
        <?php endforeach; ?>
    </select>

    <!-- Comment nous avez vous découverts ? -->
    <label for="howDidYou" class="discovery">Comment nous avez vous découverts ?</label>
    <select name="howDidYou" id="howDidYou" class="translate">
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
        <label for="allergies" class="translate allergiesQuestion">Avez-vous des allergies empêchant de porter du parfum ?</label>
        <div class="checkboxes">
            <input class="small-checkbox translate yes" type="radio" id="allergies_yes" name="allergies" value="Oui"> Oui
            <input class="small-checkbox translate no" type="radio" id="allergies_no" name="allergies" value="Non"> Non
        </div>
    </div>

    <!-- Acceptez-vous de continuer ? -->
    <div class="checkboxQuestionDiv">
        <label for="responsibility" class="translate responsibilityQuestion">Si oui, souhaitez-vous poursuivre en déclinant notre responsabilité ?</label>
        <div class="checkboxes">
            <input class="small-checkbox translate yes" type="radio" id="responsibility_yes" name="responsibility" value="Oui"> Oui
            <input class="small-checkbox translate no" type="radio" id="responsibility_no" name="responsibility" value="Non"> Non
        </div>
    </div>

    <!-- Acceptation de la newsletter ? -->
    <div class="checkboxQuestionDiv">
        <label for="news" class="translate newsQuestion">Acceptez-vous de reçevoir la newsletter* ?</label>
        <div class="checkboxes">
            <input class="small-checkbox translate yes" type="radio" id="news_yes" name="news" value="Acceptées"> Oui
            <input class="small-checkbox translate no" type="radio" id="news_no" name="news" value="Refusées"> Non
        </div>
    </div>

    <!-- Acceptation des normes RGPD -->
    <div class="checkboxQuestionDiv">
        <label for="rgpd" class="translate rgpdQuestion">Acceptez-vous les normes RGPD** ?</label>
        <div class="checkboxes">
            <input class="small-checkbox translate yes" type="radio" id="rgpd_yes" name="rgpd" value="Acceptées"> Oui
            <input class="small-checkbox translate no" type="radio" id="rgpd_no" name="rgpd" value="Refusées"> Non
        </div>
    </div>

    <!-- Champ caché si provenance d'un email -->
    <input type="hidden" name="token" value="<?= isset($_GET['token']) ? htmlspecialchars($_GET['token']) : '' ?>">

    <!-- Champ caché pour la langue. -->
    <input type="hidden" id="lang" name="lang" value="fr">

    <!-- Bouton d'envoi. -->
    <button class="form__submit submit translate" type="submit" value="Envoyer">Envoyer</button>
    <p class="news">*Le Studio des Parfums enrichi régulièrement son orgue et également les informations du monde de la parfumerie, ainsi que des offres aventageuses, acceptez-vous de recevoir cette newsletter.</p>
    <p class="rgpd">**Depuis Juin 2018, en accord avec la nouvelle réglementation RGPD, vos données sont collectées afin de gestion interne de votre fiche, pour les éventuelles recommandes et pour notre gestion dynamique des stocks. Elles ne sont pas transmises à des tiers.</p>

    <!-- Bouton pour imprimer les fiches sélectionnées. -->
    <!-- <button class="form__print print" type="button" value="Imprimer" onclick="window.print()">Imprimer</button> -->
</form>

<?php

// Fin de l'enregistrement du HTML.
$content = ob_get_clean();

// Intégration à base.php.
require('layout.php');

?>