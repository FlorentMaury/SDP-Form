<?php

// Modification du titre de la page.
$title = 'Accueil';
// Début d'enregistrement du HTML.
ob_start();

?>

<div class="main__flagsList">
    <img src="./assets/fr.svg" class="flagList__fr" alt="fr">
    <img src="./assets/en.svg" class="flagList__en" alt="en">
    <img src="./assets/es.svg" class="flagList__es" alt="es">
    <img src="./assets/ru.svg" class="flagList__ru" alt="ru">
    <img src="./assets/ae.svg" class="flagList__ar" alt="ae">
</div>

<h1 class="main__h1">Informations</h1>

<form class="form" action="./model/addCustomerModel.php" method="POST">

    <?php
    if (isset($_GET['error']) && !empty($_GET['message'])) {
        echo '<p class="errorMessage">' . htmlspecialchars($_GET['message']) . '</p>';
    }
    if (isset($_GET['success']) && !empty($_GET['message'])) {
        echo '<p class="successMesssage">' . htmlspecialchars($_GET['message']) . '</p>';
    }
    ?>

<label for="lastname" class="lastName">Nom</label>
    <input type="text" id="lastname" name="lastname">

    <label for="firstname" class="firstName">Prénom</label>
    <input type="text" id="firstname" name="firstname">

    <label for="address" class="address">Adresse</label>
    <input type="text" id="address" name="address">

    <label for="country" class="country">Pays</label>
    <select name="country" id="country">
    </select>

    <label for="email" class="email">Email</label>
    <input type="email" id="email" name="email">

    <label for="phoneNumber" class="phoneNumber">Numéro de téléphone</label>
    <input type="tel" id="phoneNumber" name="phoneNumber">

    <label for="facilitator" class="host">Animateur</label>
    <select name="facilitator" id="facilitator">
        <option value="Karim">Karim</option>
        <option value="Patrice">Patrice</option>
        <option value="Selma">Selma</option>
    </select>

    <label for="howDidYou" class="discovery">Comment nous avez vous découverts ?</label>
    <select name="howDidYou" id="howDidYou">
        <option value="Bon cadeau">Bon cadeau</option>
        <option value="WeCanDo">WeCanDo</option>
        <option value="Google">Google</option>
        <option value="TripAdvisor">Tripadvisor</option>
        <option value="Autre">Autre</option>
    </select>

    <button class="form__submit submit" type="submit" value="Envoyer">Envoyer</button>

</form>

<?php

// Fin de l'enregistrement du HTML.
$content = ob_get_clean();

// Intégration à base.php.
require('layout.php');

?>