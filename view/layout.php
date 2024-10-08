<!-- Début de structure des pages. -->
<!DOCTYPE html>
<html lang="fr">

<!-- Head. -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./design/style.css">
    <title>Formulaire | Studio des Parfums</title>
</head>

<!-- Body. -->

<body>
    <header class="header">
        <div class="header__logo">
            <img src="./assets/logo.webp" alt="Logo">
        </div>
        <div class="header__menuIcon">
            <img class="menuIcon burger" src="./assets/menu.svg" alt="" srcset="">
        </div>
        <nav class="header__nav">
            <img id="close-icon" src="./assets/close.svg" alt="" srcset="">
            <ul class="navUl">
                <?php
                $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'home';
                ?>

                <?php // Si l'utilisateur est connecté.
                if (isset($_SESSION['connect'])) { ?>

                    <!-- Lien vers la page d'accueil pour toutes les pages. -->
                    <li class="navUl__li">
                        <a href="index.php?page=home" class="<?= ($page == 'home') ? 'active' : '' ?>">
                            Accueil client
                            <img src="./assets/home.svg" alt="Accueil">
                        </a>
                    </li>

                    <!-- Lien vers la page enregistrement d'un client. -->
                    <li class="navUl__li">
                        <a href="index.php?page=recordCustomer" class="<?= ($page == 'recordCustomer') ? 'active' : '' ?>">
                            Enregistrer un futur client
                            <img src="./assets/record.svg" alt="Enregistrer client">
                        </a>
                    </li>

                    <!-- Lien vers la page du formulaire à envoyer. -->
                    <li class="navUl__li">
                        <a href="index.php?page=sendForm" class="<?= ($page == 'sendForm') ? 'active' : '' ?>">
                            Envoyer un formulaire
                            <img src="./assets/send.svg" alt="Envoyer le formulaire">
                        </a>
                    </li>

                    <li class="navUl__li">
                        <a href="index.php?page=search" class="<?= ($page == 'search') ? 'active' : '' ?>">
                            Recherche
                            <img src="./assets/search.svg" alt="Recherche">
                        </a>
                    </li>

                    <?php // Si l'utilisateur est un administrateur.
                    if ($_SESSION['role'] == 1) { ?>

                        <li class="navUl__li">
                            <a href="index.php?page=add" class="<?= ($page == 'add') ? 'active' : '' ?>">
                                Ajouter un utilisateur
                                <img src="./assets/add.svg" alt="Ajouter">
                            </a>
                        </li>
                        <li class="navUl__li">
                            <a href="index.php?page=userList" class="<?= ($page == 'userList') ? 'active' : '' ?>">
                                Voir la liste des utilisateurs
                                <img src="./assets/list.svg" alt="Liste des utilisateurs">
                            </a>
                        </li>
                        <li class="navUl__li">
                            <a href="index.php?page=formParams" class="<?= ($page == 'formParams') ? 'active' : '' ?>">
                                Paramètres du formulaire
                                <img src="./assets/edit.svg" alt="Paramètres">
                            </a>
                        </li>
                    <?php } ?>

                    <!-- Lien de déconnexion pour toutes les pages. -->
                    <li class="navUl__li">
                        <a href="index.php?page=logOut">
                            Deconnexion
                            <img src="./assets/Logout.svg" alt="Deconnexion">
                        </a>
                    </li>

                    <?php } else { // Si l'utilisateur n'est pas connecté, affichez le lien de connexion uniquement sur la page d'accueil.
                    if ($page == 'home') : ?>

                        <li class="navUl__li">
                            <a href="index.php?page=logIn">
                                Connexion
                                <img src="./assets/login.svg" alt="Connexion">
                            </a>
                        </li>

                <?php endif;
                } ?>
            </ul>
        </nav>
    </header>


    <!-- Contenu de la page. -->
    <main class="main">
        <?= $content ?>
    </main>

    <!-- DIfférents scripts sont chargés en fonction de la page demandée.

 -->
    <?php
    if ($page == 'recordCustomer' || $page == 'home') {
    ?>
        <script src="./js/countries.js"></script>
        <script src="./js/countryTrad.js"></script>
    <?php
    } elseif ($page == 'search') {
    ?>
        <script src="./js/search.js"></script>
    <?php
    }
    ?>
    <script src="./js/nav.js"></script>
</body>

</html>