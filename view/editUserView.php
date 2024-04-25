<?php

// Modification du titre de la page.
$title = 'Modification du mot de passe | Studio des Parfums';

$id = htmlspecialchars(trim($_GET['id']));

// Début d'enregistrement du HTML.
ob_start();

?>

<!-- Contenu de la page. -->
<div class="form">
    <h2>Modification du mot de passe.</h2>

    <form action="./model/editUserModel.php" method="POST">
        <input type="hidden" name="id" value="<?= $id ?>">
        <label for="password">Nouveau mot de passe :</label>
        <input type="password" name="password" id="password" required>
        <label for="confirm_password">Confirmer le mot de passe :</label>
        <input type="password" name="confirm_password" id="confirm_password" required>
        <input type="submit" value="Modifier le mot de passe">
    </form>

    <h2>Modération des privilèges.</h2>

    <form action="./model/editUserModel.php" method="POST">
        <input type="hidden" name="id" value="<?= $id ?>">
        <label for="role">Rôle :</label>
        <select name="role" id="role">
            <option value="0">Utilisateur</option>
            <option value="1">Administrateur</option>
        </select>
        <input type="submit" value="Modifier le rôle">
    </form>

</div>

<?php

// Fin de l'enregistrement du HTML.
$content = ob_get_clean();

// Intégration à base.php.
require('layout.php');

?>