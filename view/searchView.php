<?php

// Modification du titre de la page.
$title = 'Recherche | Studio des Parfums';
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
    <button class="form__submit" id="resetButton">Reinitialiser les filtres</button>
</div>

<div class="tableContainer">
    <?php
    if ($customer->rowCount() > 0) {
        // Affichez les résultats dans un tableau
        echo '<table>';
        echo '<tr>';
        echo '<th>Nom</th>';
        echo '<th>Prénom</th>';
        echo '<th>Email</th>';
        echo '<th>Date</th>';
        echo '<th>Adresse</th>';
        echo '<th>Téléphone</th>';
        echo '<th>Hôte</th>';
        echo '<th>Découverte</th>';
        echo '<th>Pays</th>';
        echo '</tr>';

        while ($row = $customer->fetch()) {
            echo '<tr>';
            echo '<td data-column="Nom">' . $row['lastname'] . '</td>';
            echo '<td data-column="Prénom">' . $row['firstname'] . '</td>';
            echo '<td data-column="Email">' . $row['email'] . '</td>';
            echo '<td data-column="Date">' . $row['date'] . '</td>';
            echo '<td data-column="Adresse">' . $row['address'] . '</td>';
            echo '<td data-column="Téléphone">' . $row['phone_number'] . '</td>';
            echo '<td data-column="Hôte">' . $row['host'] . '</td>';
            echo '<td data-column="Découverte">' . $row['how_did_you'] . '</td>';
            echo '<td data-column="Pays">' . $row['country'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo '<p>Aucun résultat.</p>';
    }
    ?>

</div>

<?php

// Fin de l'enregistrement du HTML.
$content = ob_get_clean();

// Intégration à base.php.
require('layout.php');

?>