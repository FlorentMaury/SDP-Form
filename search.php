<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <li class="navUl__li"><a href="./index.php">Accueil</a></li>
                <li class="navUl__li">Deconnexion</li>
            </ul>
        </nav>
    </header>

    <main class="main">
        <div class="form">
            <select id="searchType">
                <option value="name">Nom</option>
                <option value="date">Date</option>
            </select>

            <input type="text" id="searchName" placeholder="Rechercher par nom...">
            <input type="date" id="searchDate" placeholder="Rechercher par date..." style="display: none;">
        </div>
    </main>

    <script src="./js/search.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>