<?php

    require('../model/connectionDBModel.php');

    $id = $_GET['id'];

    // Supprimez l'utilisateur' de la base de données
    $req = $bdd->prepare('DELETE FROM user WHERE id = ?');
    $req->execute([$id]);

    // Redirigez l'utilisateur vers la page d'accueil avec un message de succès
    header('location: ../index.php?page=userList&success=1&message=Utilisateur supprimé avec succès.');
    exit();
?>