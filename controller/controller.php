<?php

// Gestion des contenus dans chacunes des pages.

// Dans la page d'accueil.
function home()
{
    require('model/connectionDBModel.php');
    require('model/addCustomerModel.php');
    require('view/homeView.php');
};

// Dans la page de recherche.
function search()
{
    require('./model/connectionDBModel.php');
    require('view/searchView.php');
}

// Dans la page de connexion.
function logIn()
{
    require('./model/connectionDBModel.php');
    require('view/logInView.php');
}

// Ajout d'un utilisateur.
function add()
{
    require('./model/connectionDBModel.php');
    require('./model/addNewUserModel.php');
    require('view/addNewUserView.php');
}

// Modification fiche client.
function edit()
{
    require('./model/connectionDBModel.php');
    require('./model/editCustomerModel.php');
    require('view/editCustomerView.php');
}

// Dans la fonction de déconnexion.
function logOut()
{
    require('model/logOutModel.php');
};

// Dans la fonction de mot de passe oublié.
function forgotPassword()
{
    require('view/forgotPasswordView.php');
};
