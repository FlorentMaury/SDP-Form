<?php

    // Connexion à la base de données.
    require('../model/connectionDBModel.php');

    // Récupérez l'ID de la fiche client.
    $id = $_GET['id'];

    // Récupérez le creationId associé à l'id.
    $req = $bdd->prepare('SELECT creation_id FROM customer WHERE id = ?');
    $req->execute([$id]);
    $result = $req->fetch();

    if ($result) {
        $creationId = $result['creation_id'];

        // Supprimez la fiche client de la base de données.
        $req = $bdd->prepare('DELETE FROM customer WHERE id = ?');
        $req->execute([$id]);

        // Supprimez le fichier PDF associé.
        $pdfPath = "../assets/CustomersPDF/{$creationId}/{$creationId}.pdf";
        if (file_exists($pdfPath)) {
            if (!unlink($pdfPath)) {
                echo "Erreur lors de la suppression du fichier : " . print_r(error_get_last(), true);
            }
        } else {
            echo "Fichier non trouvé : " . $pdfPath;
        }

        // Supprimez le dossier contenant le fichier PDF.
        $dirPath = "../assets/CustomersPDF/{$creationId}";
        if (is_dir($dirPath)) {
            if (!rmdir($dirPath)) {
                echo "Erreur lors de la suppression du dossier : " . print_r(error_get_last(), true);
            }
        } else {
            echo "Dossier non trouvé : " . $dirPath;
        }

        // Redirigez l'utilisateur vers la page d'accueil avec un message de succès.
        header('location: ../index.php?page=search&success=1&message=Fiche client supprimée avec succès.');
    } else {
        echo "Aucun client trouvé avec l'ID : " . $id;
    }

    exit();
    
?>