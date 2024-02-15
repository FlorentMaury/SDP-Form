<?php

    // Gestion des contenus dans chacunes des pages.
    
    // Dans la page d'accueil.
    function home() {
        require('model/connectionDBModel.php');
        require('model/addCustomerModel.php');
        require('view/homeView.php');
    };

    function search() {
        require('./model/connectionDBModel.php');
        require('view/searchView.php');
    }

?>