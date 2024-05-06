<?php

// Modification du titre de la page.
$title = 'Liste des employés | Studio des Parfums';

// Début d'enregistrement du HTML.
ob_start();

?>

<!-- Contenu de la page. -->

<h1 class="main__h1">Liste des utilisateurs</h1>

<div class="form">

    <!-- Messages de succès ou d'erreurs. -->
    <?php
    if (isset($_GET['error']) && !empty($_GET['message'])) {
        echo '<p class="errorMessage">' . htmlspecialchars($_GET['message']) . '</p>';
    }
    if (isset($_GET['success']) && !empty($_GET['message'])) {
        echo '<p class="successMessage">' . htmlspecialchars($_GET['message']) . '</p>';
    }
    ?>

    <div class="tableContainer">
        <?php
        // Boucle de créations de lignes.
        if ($user->rowCount() > 0) {
            echo '<table>';
            echo '<tr>';
            echo '<th>Nom</th>';
            echo '<th>Prénom</th>';
            echo '<th>Mail</th>';
            echo '<th>Modifier</th>';
            echo '<th>Supprimer</th>';

            // Informations pour chaque utilisateurs.
            while ($row = $user->fetch()) {
                echo '<tr class="tr">';
                echo '<td data-column="Civilité">' . $row['name'] . '</td>';
                echo '<td data-column="Nom">' . $row['surname'] . '</td>';
                echo '<td data-column="Prénom">' . $row['email'] . '</td>';
                echo "<td class='edit' data-column='Modifier'><a href='index.php?page=editUser&id={$row['id']}'><img src='./assets/edit.svg' alt='Modifier'></a></td>";
                echo "<td class='edit' data-column='Modifier'><a href='javascript:void(0)' onclick='confirmUserDelete(" . $row['id'] . ")'><img src='./assets/delete.svg' alt='Supprimer'></a></td>";
            }

            echo '</table>';
        } else {
            echo '<p>Aucun résultat.</p>';
        }
        ?>

    </div>

    <!-- Pop-up de confirmation. -->
    <script>
        function confirmUserDelete(id) {
            if (confirm("Êtes-vous sûr de vouloir supprimer cet utilisateur ? Cette action est irréversible.")) {
                window.location.href = "./model/deleteUserModel.php?id=" + id;
            }
        }
    </script>


    <?php

    // Fin de l'enregistrement du HTML.
    $content = ob_get_clean();

    // Intégration à base.php.
    require('layout.php');

    ?>