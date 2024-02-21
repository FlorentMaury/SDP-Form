<?php

// Modification du titre de la page.
$title = 'Recherche | Studio des Parfums';
// Début d'enregistrement du HTML.
ob_start();

?>

<div class="form searchForm">
    <select id="searchType">
        <option value="name">Rechercher par nom</option>
        <option value="date">Rechercher par  date</option>
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
        echo '<th>Civilité</th>';
        echo '<th>Nom</th>';
        echo '<th>Prénom</th>';
        echo '<th>Email</th>';
        echo '<th>Date</th>';
        echo '<th>N° de créa</th>';
        echo '<th>Ville</th>';
        echo '<th>Téléphone</th>';
        echo '<th>Pays</th>';
        echo '<th>Fiche</th>';
        echo '</tr>';

        while ($row = $customer->fetch()) {
            echo '<tr class="tr">';
            echo '<td data-column="Civilité">' . $row['title'] . '</td>';
            echo '<td data-column="Nom">' . $row['lastname'] . '</td>';
            echo '<td data-column="Prénom">' . $row['firstname'] . '</td>';
            echo '<td data-column="Email">' . $row['email'] . '</td>';
            echo '<td class="date" data-column="Date">' . $row['date'] . '</td>';
            echo '<td data-column="Adresse">' . $row['creation_id'] . '</td>';
            echo '<td data-column="Ville">' . $row['city'] . '</td>';
            echo '<td data-column="Téléphone">' . $row['phone_number'] . '</td>';
            echo '<td data-column="Pays">' . $row['country'] . '</td>';
            echo "<td class='download' data-column='Fiche'><a target='_blank' href='http://formulairesdp.florent-maury.fr/assets/CustomersPDF/{$row['date']}/{$row['lastname']}/{$row['firstname']}/{$row['lastname']}_{$row['firstname']}.pdf'><img src='./assets/download.svg' alt='Télécharger'></a></td>";            
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