<?php
$title = 'Accueil | Studio des Parfums';
ob_start();
$config = require './model/config.php';
?>

<!-- Contenu de la page. -->
<div class="main__flagsList">
    <img src="./assets/fr.svg" class="flagList__fr" alt="fr">
    <img src="./assets/en.svg" class="flagList__en" alt="en">
    <img src="./assets/es.svg" class="flagList__es" alt="es">
    <img src="./assets/pt.svg" class="flagList__pt" alt="pt">
</div>

<h1 class="main__h1">Informations</h1>

<form class="form" action="./model/addCustomerModel.php" method="POST">
    <?php
    if (isset($_GET['error']) && !empty($_GET['message'])) {
        echo '<p class="errorMessage">' . htmlspecialchars($_GET['message']) . '</p>';
    }
    if (isset($_GET['success']) && !empty($_GET['message'])) {
        echo '<p class="successMessage">' . htmlspecialchars($_GET['message']) . '</p>';
    }
    ?>

    <!-- Civilité -->
    <label for="titlePrint" class="translate civility" data-translate-key="civility">Civilité</label>
    <select name="titlePrint" id="titlePrint" class="translate">
    <option value="Mr" class="translate mr" data-translate-key="mr">Mr</option>
        <option value="Mme" class="translate mrs" data-translate-key="mrs">Mme / Mrs</option>
        <option value="Enfant" class="translate child" data-translate-key="child">Enfant / Child</option>
    </select>

    <!-- Nom -->
    <label for="lastnamePrint" class="translate lastNamePrint" data-translate-key="lastName">Nom</label>
    <input type="text" id="lastnamePrint" name="lastnamePrint">

    <!-- Prénom -->
    <label for="firstnamePrint" class="translate firstNamePrint" data-translate-key="firstName">Prénom</label>
    <input type="text" id="firstnamePrint" name="firstnamePrint">

    <!-- Email -->
    <label for="emailPrint" class="translate emailPrint" data-translate-key="email">Email</label>
    <input type="email" id="emailPrint" name="emailPrint">

    <!-- Pays -->
    <label for="country" class="translate country" data-translate-key="country">Pays</label>
    <select name="country" id="country"></select>

    <!-- Adresse -->
    <label for="addressPrint" class="translate addressPrint" data-translate-key="address">Adresse</label>
    <input type="text" id="addressPrint" name="addressPrint">

    <!-- Ville -->
    <label for="cityPrint" class="translate cityPrint" data-translate-key="city">Ville</label>
    <input type="text" id="cityPrint" name="cityPrint">

    <!-- Numéro de téléphone -->
    <label for="phoneNumber" class="translate phoneNumberPrint" data-translate-key="phoneNumber">Numéro de téléphone</label>
    <input type="tel" id="phoneNumber" name="phoneNumber">

    <!-- Hôte -->
    <label for="facilitatorPrint" class="translate hostPrint" data-translate-key="host">Hôte</label>
    <select name="facilitatorPrint" id="facilitatorPrint">
        <?php foreach ($config['hosts'] as $host) : ?>
        <option value="<?= htmlspecialchars($host) ?>"><?= htmlspecialchars($host) ?></option>
        <?php endforeach; ?>
    </select>

    <!-- Atelier -->
    <label for="workshopPrint" class="translate workshopPrint" data-translate-key="workshop">Atelier</label>
    <select name="workshopPrint" id="workshopPrint">
        <?php foreach ($config['workshops'] as $workshop) : ?>
        <option value="<?= htmlspecialchars($workshop) ?>" class="translate"
            data-translate-key="<?= htmlspecialchars($workshop) ?>"><?= htmlspecialchars($workshop) ?></option>
        <?php endforeach; ?>
    </select>

    <!-- Comment nous avez-vous découverts ? -->
    <label for="howDidYouPrint" class="translate discoveryPrint" data-translate-key="discovery">Comment nous avez-vous découverts ?</label>
    <select name="howDidYouPrint" id="howDidYouPrint">
        <?php foreach ($config['discovery_methods'] as $method) : ?>
        <option value="<?= htmlspecialchars($method) ?>" class="translate"
            data-translate-key="<?= htmlspecialchars($method) ?>"><?= htmlspecialchars($method) ?></option>
        <?php endforeach; ?>
    </select>

    <!-- Options supplémentaires -->
    <?php foreach ($config['extras'] as $extra) : ?>
    <div class="checkContainer">
        <div class="checkbox-container">
            <label for="<?= htmlspecialchars($extra) ?>" class="translate"
                data-translate-key="<?= htmlspecialchars($extra) ?>"><?= htmlspecialchars($extra) ?></label>
            <input class="small-checkbox" type="checkbox" id="<?= htmlspecialchars($extra) ?>" name="extras[]Print"
                value="<?= htmlspecialchars($extra) ?>">
        </div>
    </div>
    <?php endforeach; ?>

<!-- Allergies cutanées -->
<div class="checkboxQuestionDiv">
    <label for="allergiesPrint" class="translate allergiesQuestion" data-translate-key="allergiesQuestion">Avez-vous des allergies empêchant de porter du parfum ?</label>
    <div class="checkboxes">
        <input class="small-checkbox translate" type="radio" id="allergies_yes" name="allergiesPrint" value="Oui" data-translate-key="yes"> <span class="translate" data-translate-key="yes">Yes</span>
        <input class="small-checkbox translate" type="radio" id="allergies_no" name="allergiesPrint" value="Non" data-translate-key="no"> <span class="translate" data-translate-key="no">Non</span>
    </div>
</div>

<!-- Acceptez-vous de continuer ? -->
<div class="checkboxQuestionDiv">
    <label for="responsibilityPrint" class="translate responsibilityQuestion" data-translate-key="responsibilityQuestion">Si oui, souhaitez-vous poursuivre en déclinant notre responsabilité ?</label>
    <div class="checkboxes">
        <input class="small-checkbox translate" type="radio" id="responsibility_yes" name="responsibilityPrint" value="Oui" data-translate-key="yes"> <span class="translate" data-translate-key="yes">Yes</span>
        <input class="small-checkbox translate" type="radio" id="responsibility_no" name="responsibilityPrint" value="Non" data-translate-key="no"> <span class="translate" data-translate-key="no">Non</span>
    </div>
</div>

<!-- Acceptation de la newsletter -->
<div class="checkboxQuestionDiv">
    <label for="newsPrint" class="translate newsQuestion" data-translate-key="newsQuestion">Acceptez-vous de recevoir la newsletter* ?</label>
    <div class="checkboxes">
        <input class="small-checkbox translate" type="radio" id="news_yes" name="newsPrint" value="Acceptées" data-translate-key="yes">  <span class="translate" data-translate-key="yes">Yes</span>
        <input class="small-checkbox translate" type="radio" id="news_no" name="newsPrint" value="Refusées" data-translate-key="no"> <span class="translate" data-translate-key="no">Non</span>
    </div>
</div>

<!-- Acceptation des normes RGPD -->
<div class="checkboxQuestionDiv">
    <label for="rgpdPrint" class="translate rgpdQuestion" data-translate-key="rgpdQuestion">Acceptez-vous les normes RGPD** ?</label>
    <div class="checkboxes">
        <input class="small-checkbox translate" type="radio" id="rgpd_yes" name="rgpdPrint" value="Acceptées" data-translate-key="yes"> <span class="translate" data-translate-key="yes">Yes</span>
        <input class="small-checkbox translate" type="radio" id="rgpd_no" name="rgpdPrint" value="Refusées" data-translate-key="no"> <span class="translate" data-translate-key="no">Non</span>
    </div>
</div>


    <!-- Champ caché si provenance d'un email -->
    <?php
    if (isset($_GET['token'])) {
        $token = $_GET['token'];
        echo '<input type="hidden" name="token" value="' . htmlspecialchars($token) . '">';
    }
    ?>

    <!-- Champ caché pour la langue -->
    <input type="hidden" id="lang" name="lang" value="fr">

    <!-- Bouton d'envoi -->
    <button class="form__submit submit translate" data-translate-key="submit" type="submit" value="Envoyer">Envoyer</button>

    <p class="news translate" data-translate-key="newsletterMessage">*Le Studio des Parfums enrichi régulièrement son orgue et également les informations du
        monde de la parfumerie, ainsi que des offres avantageuses, acceptez-vous de recevoir cette newsletter.</p>
    <p class="rgpd translate" data-translate-key="rgpdMessage">**Depuis Juin 2018, en accord avec la nouvelle réglementation RGPD, vos données sont
        collectées afin de gestion interne de votre fiche, pour les éventuelles recommandes et pour notre gestion
        dynamique des stocks. Elles ne sont pas transmises à des tiers.</p>
</form>

<?php
$content = ob_get_clean();
require('layout.php');
?>