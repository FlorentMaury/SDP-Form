<?php

    require('../model/connectionDBModel.php');

    $id = $_GET['id'];

    // Supprimez la fiche client de la base de données
    $req = $bdd->prepare('DELETE FROM customer WHERE id = ?');
    $req->execute([$id]);

    // Supprimez le fichier PDF associé
    $creationId = $_GET['creationId'];
    $pdfPath = "../assets/CustomersPDF/{$creationId}/{$creationId}.pdf";
    if (file_exists($pdfPath)) {
        unlink($pdfPath);
    }

    // Redirigez l'utilisateur vers la page d'accueil avec un message de succès
    header('location: ../index.php?page=home&success=1&message=Fiche client supprimée avec succès.');
    exit();
?>