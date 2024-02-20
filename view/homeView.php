<?php

// Modification du titre de la page.
$title = 'Accueil | Studio des Parfums';
// Début d'enregistrement du HTML.
ob_start();

?>

<div class="main__flagsList">
    <img src="./assets/fr.svg" class="flagList__fr" alt="fr">
    <img src="./assets/en.svg" class="flagList__en" alt="en">
    <img src="./assets/es.svg" class="flagList__es" alt="es">
    <img src="./assets/pt.svg" class="flagList__pt" alt="pt">
    <img src="./assets/ru.svg" class="flagList__ru" alt="ru">
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

    <label for="title" class="civility">Civilité</label>
    <select name="title" id="title">
        <option value="Mr">Mr</option>
        <option value="Mme">Mme / Mrs </option>
        <option value="Enfant">Enfant / Child </option>
    </select>

    <label for="lastname" class="lastName">Nom</label>
    <input type="text" id="lastname" name="lastname">

    <label for="firstname" class="firstName">Prénom</label>
    <input type="text" id="firstname" name="firstname">
    
    <label for="email" class="email">Email</label>
    <input type="email" id="email" name="email">

    <label for="phoneNumber" class="phoneNumber">Numéro de téléphone</label>
    <input type="tel" id="phoneNumber" name="phoneNumber">
    
    <label for="country" class="country">Pays</label>
    <select name="country" id="country">
    </select>

    <label for="address" class="address">Adresse</label>
    <input type="text" id="address" name="address">

    <label for="city" class="city">Ville</label>
    <input type="text" id="city" name="city">

    <label for="facilitator" class="host">Animateur</label>
    <select name="facilitator" id="facilitator">
        <option value="Karim">Karim</option>
        <option value="Lea">Léa</option>
        <option value="Manon">Manon</option>
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