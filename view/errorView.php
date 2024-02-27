<?php

// Modification du titre de la page.
$title = 'Erreur | Studio des Parfums';
// Début d'enregistrement du HTML.
ob_start();

?>

<!-- Contenu de la page. -->
<div class="form" >
    <h1>Cette page n'existe pas !</h1>
    <p>Vous allez être redirigé vers la page de connexion.</p>
    <p>Si vous n'êtes pas redirigé, <a class="redirect" href="index.html?page=home">cliquez ici</a>.</p>
</div>

<!-- Script de redirection programmée sous 5 secondes. -->
<script>
setTimeout(function(){
   window.location.href = 'index.html?page=home';
}, 5000);
</script>

<?php

// Fin de l'enregistrement du HTML.
$content = ob_get_clean();

// Intégration à base.php.
require('layout.php');

?>