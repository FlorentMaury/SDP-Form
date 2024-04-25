<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require('../model/connectionDBModel.php');

    // Vérifier si le formulaire de modification du mot de passe a été soumis
    if (isset($_POST['password'], $_POST['confirm_password'])) {
        $newPassword = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];

        // Vérifier si les deux mots de passe sont identiques
        if ($newPassword === $confirmPassword) {
            // Chiffrement du mot de passe
            $hashedPassword = "zk32" . sha1($newPassword . "486") . "345";

            // Mettre à jour le mot de passe dans la base de données
            $id = htmlspecialchars(trim($_POST['id']));
            $req = $bdd->prepare('
                UPDATE user
                SET password = ?
                WHERE id = ?
            ');
            $result = $req->execute([$hashedPassword, $id]);

            if ($result) {
                // Redirection vers la liste des utilisateurs
                header('Location: ../index.php?page=userList');
                exit();
            } else {
                // Gestion des erreurs
                echo 'Erreur lors de la mise à jour du mot de passe.';
            }
        } else {
            // Les mots de passe ne correspondent pas
            echo 'Les mots de passe ne correspondent pas.';
        }
    }

    // Vérifier si le formulaire de modification du rôle a été soumis
    if (isset($_POST['role'])) {
        $newRole = htmlspecialchars($_POST['role']);
        $id = htmlspecialchars(trim($_POST['id']));
        // Mettez à jour la base de données.
        $req = $bdd->prepare('
            UPDATE user
            SET role = ?
            WHERE id = ?
        ');
        $result = $req->execute([$newRole, $id]);

        if ($result) {
            // Redirection vers la liste des utilisateurs
            header('Location: ../index.php?page=userList');
            exit();
        } else {
            // Gestion des erreurs
            echo 'Erreur lors de la mise à jour du rôle.';
        }
    }
}