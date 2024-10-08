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

    <!-- Formulaire de modification du mot de passe. -->
    <form action="./model/editUserModel.php" method="POST">
        <input type="hidden" name="id" value="<?= $id ?>">
        <label for="password">Nouveau mot de passe :</label>
        <input type="password" name="password" id="password" required>
        <label for="confirm_password">Confirmer le mot de passe :</label>
        <input type="password" name="confirm_password" id="confirm_password" required>
        <button type="submit">Modifier le mot de passe</button>
    </form>

    <h2>Modération des privilèges.</h2>

    <!-- Formulaire de modification du rôle. -->
    <form action="./model/editUserModel.php" method="POST">
        <input type="hidden" name="id" value="<?= $id ?>">
        <label for="role">Rôle :</label>
        <select name="role" id="role">
            <option value="0">Utilisateur</option>
            <option value="1">Administrateur</option>
            <option value="2">Manager</option>
        </select>
        <button type="submit">Modifier le rôle</button>
    </form>

</div>

<?php

// Fin de l'enregistrement du HTML.
$content = ob_get_clean();

// Intégration à base.php.
require('layout.php');

?>