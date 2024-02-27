<?php

// Modification du titre de la page.
$title = 'Recherche | Studio des Parfums';
// Début d'enregistrement du HTML.
ob_start();

?>

<!-- Tableau et liste des clients. -->
<div class="form searchForm">
    <!-- Type de filtre. -->
    <select id="searchType">
        <option value="name">Rechercher par nom</option>
        <option value="date">Rechercher par date</option>
        <option value="number">Rechercher par numéro de création</option>
    </select>

    <!-- Outils de filtrage. -->
    <input type="text" id="searchName" placeholder="Rechercher par nom...">
    <input type="date" id="searchStartDate" placeholder="Date de début..." style="display: none;">
    <input type="date" id="searchEndDate" placeholder="Date de fin..." style="display: none;">
    <input type="number" id="searchNumber" placeholder="Rechercher par numéro de création..." style="display: none;">
    <button class="form__submit" id="resetButton">Reinitialiser les filtres</button>
</div>

<div class="tableContainer">
    <?php
    // Boucle de créations de lignes.
    if ($customer->rowCount() > 0) {
        echo '<table>';
        echo '<tr>';
        echo '<th>Civilité</th>';
        echo '<th>Nom</th>';
        echo '<th>Prénom</th>';
        echo '<th>Pays</th>';
        echo '<th>Email</th>';
        echo '<th>Téléphone</th>';
        echo '<th>Date</th>';
        echo '<th>N° de créa</th>';
        echo '<th>Fiche</th>';
        echo '</tr>';

        // Informations pour chaque utilisateurs.
        while ($row = $customer->fetch()) {
            echo '<tr class="tr">';
            echo '<td data-column="Civilité">' . $row['title'] . '</td>';
            echo '<td data-column="Nom">' . $row['lastname'] . '</td>';
            echo '<td data-column="Prénom">' . $row['firstname'] . '</td>';
            echo '<td data-column="Pays">' . $row['country'] . '</td>';
            echo '<td data-column="Email">' . $row['email'] . '</td>';
            echo '<td data-column="Téléphone">' . $row['phone_number'] . '</td>';
            echo '<td class="date" data-column="Date">' . $row['date'] . '</td>';
            echo '<td class="creationId" data-column="NumeroCrea">' . $row['creation_id'] . '</td>';
            echo "<td class='download' data-column='Fiche'><a target='_blank' href='http://formulairesdp.florent-maury.fr/assets/CustomersPDF/{$row['lastname']}/{$row['creation_id']}/{$row['lastname']}_{$row['creation_id']}.pdf'><img src='./assets/download.svg' alt='Télécharger'></a></td>";
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