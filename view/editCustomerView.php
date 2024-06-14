<?php

require('model/connectionDBModel.php');

// Demande d'informations d'un compte employé.
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $_SESSION['profile_id'] = $id;  // Stocker l'ID du profil consulté dans une variable de session.

    // Récupération des identifiants de l'utilisateur séléctionné.
    $req = $bdd->prepare('
        SELECT *
        FROM customer
        WHERE customer.id = ?
        ');
    $req->execute([$id]);
    $data = $req->fetch();

    // Modification du titre de la page.
    $title = 'Modification de fiche | Studio des Parfums';
    // Début d'enregistrement du HTML.
    ob_start();
}

?>

<div class="form formEditing">

    <h1 class="formEditing__h1">Création N°<?= $data['creation_id'] ?></h1>

    <form method="post" action="./model/editCustomerModel.php">

        <?php
        if ($_SESSION['role'] > 0) {
        ?>
            <p>
                <button class="button" type="button" onclick="confirmDelete()">Supprimer la fiche client</button>
            </p>
        <?php } ?>

        <?php
        if (isset($_GET['error']) && !empty($_GET['message'])) {
            echo '<p class="errorMessage">' . htmlspecialchars($_GET['message']) . '</p>';
        }
        if (isset($_GET['success']) && !empty($_GET['message'])) {
            echo '<p class="successMessage">' . htmlspecialchars($_GET['message']) . '</p>';
        }
        ?>

        <input type="hidden" name="profile_id" value="<?= $id ?>">
        <input type="hidden" name="creationId" value="<?= $data['creation_id'] ?>">

        <label for="newCreationId">Numéro de création :</label>
        <input type="number" id="newCreationId" name="newCreationId" value="<?= $data['creation_id'] ?>">

        <label for="date">Date :</label>
        <input type="text" id="date" name="date" value="<?= $data['date'] ?>">

        <label for="title">Civilité :</label>
        <input type="text" id="title" name="title" value="<?= $data['title'] ?>">

        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="firstname" value="<?= $data['firstname'] ?>">

        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="lastname" value="<?= $data['lastname'] ?>">

        <label for="address">Adresse :</label>
        <input type="text" id="address" name="address" value="<?= $data['address'] ?>">

        <label for="city">Ville :</label>
        <input type="text" id="city" name="city" value="<?= $data['city'] ?>">

        <label for="country">Pays :</label>
        <input type="text" id="country" name="country" value="<?= $data['country'] ?>">

        <label for="email">Email :</label>
        <input type="text" id="email" name="email" value="<?= $data['email'] ?>">

        <label for="phoneNumber">Numéro de téléphone :</label>
        <input type="text" id="phoneNumber" name="phoneNumber" value="<?= $data['phone_number'] ?>">

        <label for="host">Parfumeur :</label>
        <input type="text" id="host" name="host" value="<?= $data['host'] ?>">

        <label for="workshop">Atelier :</label>
        <input type="text" id="workshop" name="workshop" value="<?= $data['workshop'] ?>">

        <label for="extras">Extras :</label>
        <input type="text" id="extras" name="extras" value="<?= $data['extras'] ?>">

        <label for="howDidYou">Comment avez-vous entendus parler de nous :</label>
        <input type="text" id="howDidYou" name="howDidYou" value="<?= $data['how_did_you'] ?>">

        <label for="rgpd">RGPD :</label>
        <select id="rgpd" name="rgpd">
            <option value="Acceptées" <?= $data['rgpd'] == 'Acceptées' ? 'selected' : '' ?>>Acceptées</option>
            <option value="Refusées" <?= $data['rgpd'] == 'Refusées' ? 'selected' : '' ?>>Refusées</option>
        </select>

        <label for="allergies">Allergies :</label>
        <select id="allergies" name="allergies">
            <option value="Oui" <?= $data['allergies'] == 'Oui' ? 'selected' : '' ?>>Oui</option>
            <option value="Non" <?= $data['allergies'] == 'Non' ? 'selected' : '' ?>>Non</option>
        </select>

        <label for="responsibility">Décliner responsabilité :</label>
        <select id="responsibility" name="responsibility">
            <option value="Oui" <?= $data['responsibility'] == 'Oui' ? 'selected' : '' ?>>Oui</option>
            <option value="Non" <?= $data['responsibility'] == 'Non' ? 'selected' : '' ?>>Non</option>
        </select>

        <button class="form__submit button" type="submit">Modifier</button>
    </form>
    <div>
        <!-- <object data="./assets/CustomersPDF/<?= $data['creation_id'] ?>/<?= $data['creation_id'] ?>.pdf" type="application/pdf" width="100%" height="100%">
            <p>Il semble que votre navigateur ne peut pas afficher ce PDF. Vous pouvez <a href="./assets/CustomersPDF/<?= $data['creation_id'] ?>/<?= $data['creation_id'] ?>.pdf">télécharger le PDF</a> à la place.</p>
        </object>

        <button onclick="printPDF()">Imprimer le PDF</button> -->

        <button onclick="redirectToCustomerInfos()">Voir la fiche</button>

        <script>
            function printPDF() {
                var obj = window.open("./assets/CustomersPDF/<?= $data['creation_id'] ?>/<?= $data['creation_id'] ?>.pdf");
                obj.print();
            }


            function redirectToCustomerInfos() {
                <?php echo "window.location.href = './index.php?page=customerInfos&creation_id=" . $data['creation_id'] . "';"; ?>
            }
        </script>
    </div>
</div>

<script>
    function confirmDelete() {
        if (confirm("Êtes-vous sûr de vouloir supprimer cette fiche client ? Cette action est irréversible.")) {
            window.location.href = "./model/deleteCustomerModel.php?id=<?= $id ?>";
        }
    }
</script>

<?php

// Fin de l'enregistrement du HTML.
$content = ob_get_clean();

// Intégration à base.php.
require('layout.php');

?>