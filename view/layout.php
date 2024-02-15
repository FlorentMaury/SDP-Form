<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./design/style.css">
    <title>SDP - Form</title>
</head>

<body>
    <header class="header">
        <div class="header__logo">
            <img src="./assets/logo.webp" alt="Logo">
        </div>
        <div class="header__menuIcon">
            <img class="menuIcon" src="./assets/menu.svg" alt="" srcset="">
        </div>
        <nav class="header__nav">
            <img id="close-icon" src="./assets/close.svg" alt="" srcset="">
            <ul class="navUl">
                <?php
                $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'home';

                if ($page == 'home') {
                ?>
                    <li class="navUl__li"><a href="index.php?page=search">Recherche</a></li>
                <?php
                } elseif ($page == 'search') {
                ?>
                    <li class="navUl__li"><a href="index.php?page=home">Accueil</a></li>
                <?php
                }
                ?>
                <li class="navUl__li">Deconnexion</li>
            </ul>
        </nav>
    </header>


    <!-- Contenu de la page -->
    <main class="main">
        <?= $content ?>
    </main>

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