<?php

    // Connexion à la base de données.
    require('../model/connectionDBModel.php');

    // Récupérez l'ID de la fiche client.
    $id = $_GET['id'];

    // Supprimez la fiche client de la base de données.
    $req = $bdd->prepare('DELETE FROM customer WHERE id = ?');
    $req->execute([$id]);

    // Supprimez le fichier PDF associé.
    $creationId = $_GET['creationId'];
    $pdfPath = "../assets/CustomersPDF/{$creationId}/{$creationId}.pdf";
    if (file_exists($pdfPath)) {
        unlink($pdfPath);
    }

    // Redirigez l'utilisateur vers la page d'accueil avec un message de succès.
    header('location: ../index.php?page=search&success=1&message=Fiche client supprimée avec succès.');
    exit();
?>