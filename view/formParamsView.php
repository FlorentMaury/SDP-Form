<?php

// Modification du titre de la page.
$title = 'Parametres du formulaire | Studio des Parfums';

// Début d'enregistrement du HTML.
// La fonction ob_start() démarre la mise en tampon de sortie. 
// Cela signifie que toute sortie qui suit sera stockée en interne au lieu d'être envoyée immédiatement au navigateur.
ob_start();

// Charger le fichier de configuration.
$config = require './model/config.php';

// Vérifier si la méthode de la requête est POST.
// Si c'est le cas, cela signifie que le formulaire a été soumis.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mettre à jour les valeurs de configuration avec les valeurs soumises dans le formulaire.
    // Les valeurs sont séparées par des virgules, donc nous utilisons la fonction explode() pour les convertir en tableau.
    $config['hosts'] = explode(',', $_POST['hosts']);
    $config['workshops'] = explode(',', $_POST['workshops']);
    $config['discovery_methods'] = explode(',', $_POST['discovery_methods']);
    $config['extras'] = explode(',', $_POST['extras']);

    // Enregistrer les nouvelles valeurs de configuration dans le fichier de configuration.
    // Nous utilisons la fonction var_export() pour convertir le tableau de configuration en une chaîne qui peut être écrite dans un fichier.
    file_put_contents('./model/config.php', '<?php return ' . var_export($config, true) . ';');
}

// Afficher le formulaire.
// Les valeurs actuelles de configuration sont utilisées comme valeurs par défaut dans les champs du formulaire.
// Nous utilisons la fonction htmlspecialchars() pour échapper les caractères spéciaux et éviter les attaques XSS.
?>

<form class="form" method="post">
    <label for="hosts">Hôtes :</label><br>
    <textarea id="hosts" name="hosts" rows="4" cols="50"><?= htmlspecialchars(implode(',', $config['hosts'])) ?></textarea><br>
    
    <label for="workshops">Ateliers :</label><br>
    <textarea id="workshops" name="workshops" rows="4" cols="50"><?= htmlspecialchars(implode(',', $config['workshops'])) ?></textarea><br>
    
    <label for="discovery_methods">Méthodes de découverte :</label><br>
    <textarea id="discovery_methods" name="discovery_methods" rows="4" cols="50"><?= htmlspecialchars(implode(',', $config['discovery_methods'])) ?></textarea><br>

    <label for="extras">Options supplémentaires :</label><br>
    <textarea id="extras" name="extras" rows="4" cols="50"><?= htmlspecialchars(implode(',', $config['extras'])) ?></textarea><br>
    
    <button class="form__submit submit" type="submit">Mettre à jour</button>
</form>

<?php

// Fin de l'enregistrement du HTML.
// La fonction ob_get_clean() récupère le contenu du tampon de sortie et le supprime.
$content = ob_get_clean();

// Intégration à base.php.
// Le fichier base.php est probablement un modèle de page qui utilise la variable $content pour afficher le contenu de la page.
require('layout.php');

?>