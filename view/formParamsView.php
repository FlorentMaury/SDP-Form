<?php

// Modification du titre de la page.
$title = 'Parametres du formulaire | Studio des Parfums';
// Début d'enregistrement du HTML.
ob_start();

$config = require './model/config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $config['hosts'] = explode(',', $_POST['hosts']);
    $config['workshops'] = explode(',', $_POST['workshops']);
    $config['discovery_methods'] = explode(',', $_POST['discovery_methods']);
    file_put_contents('./model/config.php', '<?php return ' . var_export($config, true) . ';');
}
?>

<form method="post">
    Hôtes : <input type="text" name="hosts" value="<?= htmlspecialchars(implode(',', $config['hosts'])) ?>"><br>
    Ateliers : <input type="text" name="workshops" value="<?= htmlspecialchars(implode(',', $config['workshops'])) ?>"><br>
    Méthodes de découverte : <input type="text" name="discovery_methods" value="<?= htmlspecialchars(implode(',', $config['discovery_methods'])) ?>"><br>
    <input type="submit" value="Mettre à jour">
</form>

<?php

// Fin de l'enregistrement du HTML.
$content = ob_get_clean();

// Intégration à base.php.
require('layout.php');

?>