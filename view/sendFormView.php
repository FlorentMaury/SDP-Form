<?php

// Modification du titre de la page.
$title = 'Envoyer un formulaire | Studio des Parfums';
// Début d'enregistrement du HTML.
ob_start();

?>

<!-- Contenu de la page. -->

<h1 class="main__h1">Envoyer un formulaire</h1>

<!-- Messages de succès ou d'erreurs. -->
<?php
if (isset($_GET['error']) && !empty($_GET['message'])) {
    echo '<p class="errorMessage">' . htmlspecialchars($_GET['message']) . '</p>';
}
if (isset($_GET['success']) && !empty($_GET['message'])) {
    echo '<p class="successMessage">' . htmlspecialchars($_GET['message']) . '</p>';
}
?>

<!-- Formulaire. -->
<form class="form" action="./model/sendFormModel.php" method="POST">

    <!-- Email du client -->
    <label for="email" class="translate email" data-translate-key="email">Email</label>
    <input type="email" id="email" name="email" required>

    <!-- Bouton d'envoi. -->
    <button class="form__submit submit translate" data-translate-key="submit" type="submit" value="Envoyer">Envoyer</button>
</form>


<?php

// Fin de l'enregistrement du HTML.
$content = ob_get_clean();

// Intégration à layout.php.
require('layout.php');

?>