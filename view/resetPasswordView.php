<?php

// Modification du titre de la page.
$title = 'Mot de passe oublié | Studio des Parfums';
// Début d'enregistrement du HTML.
ob_start();

?>

<form method="POST" action="./model/resetPasswordModel.php">
    <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
    <label for="password">Nouveau mot de passe</label>
    <input type="password" id="password" name="password" required>
    <button type="submit">Changer le mot de passe</button>
</form>

<?php

// Fin de l'enregistrement du HTML.
$content = ob_get_clean();

// Intégration à base.php.
require('layout.php');

?>