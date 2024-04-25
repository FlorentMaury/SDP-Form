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
};

// Dans la page de connexion.
function logIn()
{
    require('./model/connectionDBModel.php');
    require('view/logInView.php');
};

// Dans la page de paramètres du formulaire.
function formParams()
{
    require('./model/connectionDBModel.php');
    require('view/formParamsView.php');
};

// Ajout d'un utilisateur.
function add()
{
    require('./model/connectionDBModel.php');
    require('./model/addNewUserModel.php');
    require('view/addNewUserView.php');
};

// Modification fiche client.
function edit()
{
    require('./model/connectionDBModel.php');
    require('./model/editCustomerModel.php');
    require('view/editCustomerView.php');
};

// Liste des utilisateurs.
function userList()
{
    require('./model/connectionDBModel.php');
    require('view/userListView.php');
};

// Dans la fonction de mot de passe oublié.
function editUser()
{
    require('view/editUserView.php');
    require('model/editUserModel.php');
};

// Dans la fonction de déconnexion.
function logOut()
{
    require('model/logOutModel.php');
};
