<?php

// Modification du titre de la page.
$title = 'Mot de passe oublié | Studio des Parfums';
// Début d'enregistrement du HTML.
ob_start();

?>

<!-- Formulaire de connection. -->
<form class="form" action="./model/sendResetLinkModel.php" method="POST">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>
    <button type="submit">Réinitialiser le mot de passe</button>
</form>

<?php

// Fin de l'enregistrement du HTML.
$content = ob_get_clean();

// Intégration à base.php.
require('layout.php');

?>