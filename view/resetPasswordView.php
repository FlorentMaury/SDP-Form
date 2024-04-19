<?php

// Modification du titre de la page.
$title = 'Modification du mot de passe | Studio des Parfums';
// Début d'enregistrement du HTML.
ob_start();

?>

<!-- Contenu de la page. -->
<div class="form" >
    <h1>Modification du mot de passe.</h1>

    <form action="">
        <label for="password">Nouveau mot de passe :</label>
        <input type="password" name="password" id="password" required>
        <label for="password">Confirmer le mot de passe :</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" value="Modifier le mot de passe">
    </form>
</div>

<?php

// Fin de l'enregistrement du HTML.
$content = ob_get_clean();

// Intégration à base.php.
require('layout.php');

?>