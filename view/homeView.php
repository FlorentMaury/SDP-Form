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
    <label for="title" class="civility">Civilité</label>
    <select name="title" id="title">
        <option value="Mr">Mr</option>
        <option value="Mme">Mme / Mrs </option>
        <option value="Enfant">Enfant / Child </option>
    </select>

    <!-- Nom. -->
    <label for="lastname" class="lastName">Nom</label>
    <input type="text" id="lastname" name="lastname">

    <!-- Prénom. -->
    <label for="firstname" class="firstName">Prénom</label>
    <input type="text" id="firstname" name="firstname">

    <!-- Email. -->
    <label for="email" class="email">Email</label>
    <input type="email" id="email" name="email">

    <!-- Pays. -->
    <label for="country" class="country">Pays</label>
    <select name="country" id="country">
    </select>

    <!-- Adresse. -->
    <label for="address" class="address">Adresse</label>
    <input type="text" id="address" name="address">

    <!-- Ville. -->
    <label for="city" class="city">Ville</label>
    <input type="text" id="city" name="city">

    <!-- Numéro de téléphone. -->
    <label for="phoneNumber" class="phoneNumber">Numéro de téléphone</label>
    <input type="tel" id="phoneNumber" name="phoneNumber">

    <!-- Hôte. -->
    <label for="facilitator" class="host">Hôte</label>
    <select name="facilitator" id="facilitator">
        <?php foreach ($config['hosts'] as $host) : ?>
            <option value="<?= htmlspecialchars($host) ?>"><?= htmlspecialchars($host) ?></option>
        <?php endforeach; ?>
    </select>

    <!-- Atelier. -->
    <label for="workshop" class="workshop">Atelier</label>
    <select name="workshop" id="workshop">
        <?php foreach ($config['workshops'] as $workshop) : ?>
            <option value="<?= htmlspecialchars($workshop) ?>"><?= htmlspecialchars($workshop) ?></option>
        <?php endforeach; ?>
    </select>

    <!-- Comment nous avez vous découverts ? -->
    <label for="howDidYou" class="discovery">Comment nous avez vous découverts ?</label>
    <select name="howDidYou" id="howDidYou">
        <?php foreach ($config['discovery_methods'] as $method) : ?>
            <option value="<?= htmlspecialchars($method) ?>"><?= htmlspecialchars($method) ?></option>
        <?php endforeach; ?>
    </select>

    <!-- Options supplémentaires. -->
    <?php foreach ($config['extras'] as $extra) : ?>
        <label for="<?= htmlspecialchars($extra) ?>"><?= htmlspecialchars($extra) ?></label>
        <input class="small-checkbox" type="checkbox" id="<?= htmlspecialchars($extra) ?>" name="extras[]" value="<?= htmlspecialchars($extra) ?>">
    <?php endforeach; ?>

    <!-- Allérgies cutanées. -->
    <div class="checkboxQuestionDiv">
        <label for="allergies">Avez-vous des allergies cutanées ?</label>
        <div class="checkboxes">
            <input class="small-checkbox" type="radio" id="allergies_yes" name="allergies" value="Oui"> Oui
            <input class="small-checkbox" type="radio" id="allergies_no" name="allergies" value="Non"> Non
        </div>
    </div>

    <!-- Acceptez-vous de continuer ? -->
    <div class="checkboxQuestionDiv">
        <label for="responsibility">Si oui, souhaitez-vous poursuivre en déclinant notre responsabilité ?</label>
        <div class="checkboxes">
            <input class="small-checkbox" type="radio" id="responsibility_yes" name="responsibility" value="Oui"> Oui
            <input class="small-checkbox" type="radio" id="responsibility_no" name="responsibility" value="Non"> Non
        </div>
    </div>

    <!-- Acceptation des normes RGPD. -->
    <div class="checkboxQuestionDiv">
        <label for="rgpd">Acceptez-vous les normes RGPD* ?</label>
        <div class="checkboxes">
            <input class="small-checkbox" type="radio" id="rgpd_yes" name="rgpd" value="Acceptées"> Oui
            <input class="small-checkbox" type="radio" id="rgpd_no" name="rgpd" value="Refusées"> Non
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