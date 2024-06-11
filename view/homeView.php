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
    <label for="title" class="translate civility" data-translate-key="civility">Civilité</label>
    <select name="title" id="title" class="translate">
        <option value="Mr" class="translate mr" data-translate-key="mr">Mr</option>
        <option value="Mme" class="translate mrs" data-translate-key="mrs">Mme / Mrs</option>
        <option value="Enfant" class="translate child" data-translate-key="child">Enfant / Child</option>
    </select>

    <!-- Nom -->
    <label for="lastname" class="translate lastName" data-translate-key="lastName">Nom</label>
    <input type="text" id="lastname" name="lastname">

    <!-- Prénom -->
    <label for="firstname" class="translate firstName" data-translate-key="firstName">Prénom</label>
    <input type="text" id="firstname" name="firstname">

    <!-- Email -->
    <label for="email" class="translate email" data-translate-key="email">Email</label>
    <input type="email" id="email" name="email">

    <!-- Pays -->
    <label for="country" class="translate country" data-translate-key="country">Pays</label>
    <select name="country" id="country" class="translate"></select>

    <!-- Adresse -->
    <label for="address" class="translate address" data-translate-key="address">Adresse</label>
    <input type="text" id="address" name="address">

    <!-- Ville -->
    <label for="city" class="translate city" data-translate-key="city">Ville</label>
    <input type="text" id="city" name="city">

    <!-- Numéro de téléphone -->
    <label for="phoneNumber" class="translate phoneNumber" data-translate-key="phoneNumber">Numéro de téléphone</label>
    <input type="tel" id="phoneNumber" name="phoneNumber">

    <!-- Date de l'atelier. -->
    <label for="date" class="translate date" data-translate-key="date">Date de l'atelier</label>
    <input type="date" id="date" name="date">

    <!-- Hôte. -->
    <label for="facilitator" class="translate host" data-translate-key="host">Hôte</label>
    <select name="facilitator" id="facilitator" class="translate">
        <?php foreach ($config['hosts'] as $host) : ?>
            <option value="<?= htmlspecialchars($host) ?>" class="translate" data-translate-key="<?= htmlspecialchars($host) ?>"><?= htmlspecialchars($host) ?></option>
        <?php endforeach; ?>
    </select>

    <!-- Atelier. -->
    <label for="workshop" class="translate workshop" data-translate-key="workshop">Atelier</label>
    <select name="workshop" id="workshop" class="translate">
        <?php foreach ($config['workshops'] as $workshop) : ?>
            <option value="<?= htmlspecialchars($workshop) ?>" class="translate" data-translate-key="<?= htmlspecialchars($workshop) ?>"><?= htmlspecialchars($workshop) ?></option>
        <?php endforeach; ?>
    </select>

    <!-- Comment nous avez vous découverts ? -->
    <label for="howDidYou" class="translate discovery" data-translate-key="discovery">Comment nous avez vous découverts
        ?</label>
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
    <label for="allergies" class="translate allergiesQuestion" data-translate-key="allergiesQuestion">Avez-vous des allergies empêchant de porter du parfum ?</label>
    <div class="checkboxes">
        <input class="small-checkbox translate" type="radio" id="allergies_yes" name="allergies" value="Oui" data-translate-key="yes"> <span class="translate" data-translate-key="yes">Oui</span>
        <input class="small-checkbox translate" type="radio" id="allergies_no" name="allergies" value="Non" data-translate-key="no"> <span class="translate" data-translate-key="no">Non</span>
    </div>
</div>

<!-- Acceptez-vous de continuer ? -->
<div class="checkboxQuestionDiv">
    <label for="responsibility" class="translate responsibilityQuestion" data-translate-key="responsibilityQuestion">Si oui, souhaitez-vous poursuivre en déclinant notre responsabilité ?</label>
    <div class="checkboxes">
        <input class="small-checkbox translate" type="radio" id="responsibility_yes" name="responsibility" value="Oui" data-translate-key="yes"> <span class="translate" data-translate-key="yes">Oui</span>
        <input class="small-checkbox translate" type="radio" id="responsibility_no" name="responsibility" value="Non" data-translate-key="no"> <span class="translate" data-translate-key="no">Non</span>
    </div>
</div>

<!-- Acceptation de la newsletter ? -->
<div class="checkboxQuestionDiv">
    <label for="news" class="translate newsQuestion" data-translate-key="newsQuestion">Acceptez-vous de recevoir la newsletter* ?</label>
    <div class="checkboxes">
        <input class="small-checkbox translate" type="radio" id="news_yes" name="news" value="Acceptées" data-translate-key="yes"> <span class="translate" data-translate-key="yes">Oui</span>
        <input class="small-checkbox translate" type="radio" id="news_no" name="news" value="Refusées" data-translate-key="no"> <span class="translate" data-translate-key="no">Non</span>
    </div>
</div>

<!-- Acceptation des normes RGPD -->
<div class="checkboxQuestionDiv">
    <label for="rgpd" class="translate rgpdQuestion" data-translate-key="rgpdQuestion">Acceptez-vous les normes RGPD** ?</label>
    <div class="checkboxes">
        <input class="small-checkbox translate" data-translate-key="yes" type="radio" id="rgpd_yes" name="rgpd" value="Acceptées"> <span class="translate" data-translate-key="yes">Oui</span>
        <input class="small-checkbox translate" data-translate-key="no" type="radio" id="rgpd_no" name="rgpd" value="Refusées"> <span class="translate" data-translate-key="no">Non</span>
    </div>
</div>


    <!-- Champ caché si provenance d'un email -->
    <input type="hidden" name="token" value="<?= isset($_GET['token']) ? htmlspecialchars($_GET['token']) : '' ?>">

    <!-- Champ caché pour la langue. -->
    <input type="hidden" id="lang" name="lang" value="fr">

    <!-- Bouton d'envoi. -->
    <button class="form__submit submit translate" data-translate-key="submit" type="submit" value="Envoyer">Envoyer</button>
    <p class="news newsletterMessage translate" data-translate-key="newsletterMessage">*Le Studio des Parfums enrichi régulièrement son orgue et également les informations du
        monde de la parfumerie, ainsi que des offres aventageuses, acceptez-vous de recevoir cette newsletter.</p>
    <p class="rgpd rgpdMessage translate" data-translate-key="rgpdMessage">**Depuis Juin 2018, en accord avec la nouvelle réglementation RGPD, vos données sont
        collectées afin de gestion interne de votre fiche, pour les éventuelles recommandes et pour notre gestion
        dynamique des stocks. Elles ne sont pas transmises à des tiers.</p>

    <!-- Bouton pour imprimer les fiches sélectionnées. -->
    <!-- <button class="form__print print" type="button" value="Imprimer" onclick="window.print()">Imprimer</button> -->
</form>

<?php

// Fin de l'enregistrement du HTML.
$content = ob_get_clean();

// Intégration à base.php.
require('layout.php');

?>