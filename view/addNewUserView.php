<?php

// Modification du titre de la page.
$title = 'Ajouter un utilisateur | Studio des Parfums';
// Début d'enregistrement du HTML.
ob_start();

?>

<!-- Formulaire de connection. -->
<form class="form" method="POST" action="./model/addNewUserModel.php">

    <?php
    if (isset($_GET['error']) && !empty($_GET['message'])) {
        echo '<p class="errorMessage">' . htmlspecialchars($_GET['message']) . '</p>';
    }
    if (isset($_GET['success']) && !empty($_GET['message'])) {
        echo '<p class="successMessage">' . htmlspecialchars($_GET['message']) . '</p>';
    }
    ?>
    <p class="form-floating m-2">
    <p>
        <label for="name">Prénom</label>
        <input type="text" name="name" class="form-control" id="name">
    </p>
    <p>
        <label for="surname">Nom</label>
        <input type="text" name="surname" class="form-control" id="surname">
    </p>
    <p>
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" id="email">
    </p>
    <p>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" class="form-control" id="password">
    </p>
    <p>
        <label for="passwordTwo">Confirmation du mot de passe</label>
        <input type="password" name="passwordTwo" class="form-control" id="passwordTwo">
    </p>
    </p>
    <button class="btn btn-md btn-dark mt-4 p-2" type="submit">Ajouter</button>
</form>

<?php

// Fin de l'enregistrement du HTML.
$content = ob_get_clean();

// Intégration à base.php.
require('layout.php');

?>