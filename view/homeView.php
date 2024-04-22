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

    <!-- Options supplémentaires. -->
    <?php foreach ($config['extras'] as $extra) : ?>
        <label for="<?= htmlspecialchars($extra) ?>"><?= htmlspecialchars($extra) ?></label>
        <input class="small-checkbox" type="checkbox" id="<?= htmlspecialchars($extra) ?>" name="extras[]" value="<?= htmlspecialchars($extra) ?>">
    <?php endforeach; ?>

    <!-- Comment nous avez vous découverts ? -->
    <label for="howDidYou" class="discovery">Comment nous avez vous découverts ?</label>
    <select name="howDidYou" id="howDidYou">
        <?php foreach ($config['discovery_methods'] as $method) : ?>
            <option value="<?= htmlspecialchars($method) ?>"><?= htmlspecialchars($method) ?></option>
        <?php endforeach; ?>
    </select>

    <!-- Champ caché si provenance d'un email. -->
    <?php
    if (isset($_GET['token'])) {
        $token = $_GET['token'];
        echo '<input type="hidden" name="token" value="' . htmlspecialchars($token) . '">';
    }
    ?>

    <!-- Bouton d'envoi. -->
    <button class="form__submit submit" type="submit" value="Envoyer">Envoyer</button>

</form>

<?php

// Fin de l'enregistrement du HTML.
$content = ob_get_clean();

// Intégration à base.php.
require('layout.php');

?>