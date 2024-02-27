<?php

// Modification du titre de la page.
$title = 'Page inconnue | Studio des Parfums';
// Début d'enregistrement du HTML.
ob_start();

?>

<div class="form" >

    <h1>Cette page n'existe pas !</h1>
    <p>Vous allez être redirigé vers la page d'accueil.</p>

</div>

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