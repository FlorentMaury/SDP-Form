<?php

// Modification du titre de la page.
$title = 'Accueil';
// Début d'enregistrement du HTML.
ob_start();

?>

<div class="form">
            <select id="searchType">
                <option value="name">Nom</option>
                <option value="date">Date</option>
            </select>

            <input type="text" id="searchName" placeholder="Rechercher par nom...">
            <input type="date" id="searchDate" placeholder="Rechercher par date..." style="display: none;">
        </div>

<?php

// Fin de l'enregistrement du HTML.
$content = ob_get_clean();

// Intégration à base.php.
require('layout.php');

?>