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

        <!-- Lien vers la page d'accueil pour toutes les pages. -->
        <li class="navUl__li">
            <a href="index.php?page=home">
                Accueil
                <img src="./assets/home.svg" alt="Accueil">
            </a>
        </li>

        <?php // Si l'utilisateur est connecté.
        if (isset($_SESSION['connect'])) { ?>

            <li class="navUl__li">
                <a href="index.php?page=search">
                    Recherche
                    <img src="./assets/search.svg" alt="Recherche">
                </a>
            </li>

            <?php // Si l'utilisateur est un administrateur.
            if ($_SESSION['id'] <= 3) { ?>

                <li class="navUl__li">
                    <a href="index.php?page=add">
                        Ajouter un utilisateur
                        <img src="./assets/add.svg" alt="Ajouter">
                    </a>
                </li>
                <li class="navUl__li">
                    <a href="index.php?page=userList">
                        Voir la liste des utilisateurs
                        <img src="./assets/list.svg" alt="Liste des utilisateurs">
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
    if ($page == 'home') {
    ?>
        <script src="./js/countryTrad.js"></script>
    <?php
    } elseif ($page == 'search') {
    ?>
        <script src="./js/search.js"></script>
    <?php
    }
    ?>
    <script src="./js/script.js"></script>
</body>

</html>