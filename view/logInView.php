<?php

// Modification du titre de la page.
$title = 'Connexion | Studio des Parfums';
// Début d'enregistrement du HTML.
ob_start();

?>

<!-- Formulaire de connection. -->
<form class="form" action="./model/connectionUserModel.php" method="POST">

    <?php
    if (isset($_GET['error']) && !empty($_GET['message'])) {
        echo '<p class="errorMessage">' . htmlspecialchars($_GET['message']) . '</p>';
    }
    if (isset($_GET['success']) && !empty($_GET['message'])) {
        echo '<p class="successMessage">' . htmlspecialchars($_GET['message']) . '</p>';
    }
    ?>
    
    <label for="email">Email</label>
    <input type="email" name="email" id="email">

    <label for="password">Mot de passe</label>
    <input type="password" name="password" id="password">
    <button class="form__submit submit" type="submit" value="Envoyer">Envoyer</button>
    <!-- Lien vers la page de réinitialisation du mot de passe -->
    <p>Mot de passe oublié ? Veuillez contacter votre responsable.</p>
</form>

<?php

// Fin de l'enregistrement du HTML.
$content = ob_get_clean();

// Intégration à base.php.
require('layout.php');

?>