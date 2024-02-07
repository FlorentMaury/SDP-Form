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
        <!-- <nav class="header__nav">
            <img src="./assets/menu.svg" alt="" srcset="">
        </nav> -->
    </header>

    <main class="main">

        <div class="main__flagsList">
            <img src="./assets/fr.svg" class="flagList__fr" alt="fr">
            <img src="./assets/en.svg" class="flagList__en" alt="en">
            <img src="./assets/es.svg" class="flagList__es" alt="es">
            <img src="./assets/ru.svg" class="flagList__ru" alt="ru">
            <img src="./assets/ae.svg" class="flagList__ar" alt="ae">
        </div>

        <h1 class="main__h1">Informations</h1>

        <form class="form" action="./php/form.php" method="POST">

            <?php
            if (isset($_GET['message'])) {
                echo '<p class="alert">' . htmlspecialchars($_GET['message']) . '</p>';
            }
            ?>

            <label for="lastname" class="lastName">Nom</label>
            <input type="text" id="lastname">

            <label for="firstname" class="firstName">Prénom</label>
            <input type="text" id="firstname">

            <label for="address" class="address">Adresse</label>
            <input type="text" id="address">

            <label for="country" class="country">Pays</label>
            <select name="country" id="country">
            </select>

            <label for="email" class="email">Email</label>
            <input type="email" id="email">

            <label for="phoneNumber" class="phoneNumber">Numéro de téléphone</label>
            <input type="tel" id="phoneNumber">

            <label for="facilitator" class="host">Animateur</label>
            <select name="facilitator" id="facilitator">
                <option value="facilitator1">Karim</option>
                <option value="facilitator2">Patrice</option>
                <option value="facilitator3">Selma</option>
            </select>

            <label for="howDidYou" class="discovery">Comment nous avez vous découverts ?</label>
            <select name="howDidYou" id="howDidYou">
                <option value="giftCard">Bon cadeau</option>
                <option value="weCanDO">WeCanDo</option>
                <option value="google">Google</option>
                <option value="tripadvisor">Tripadvisor</option>
                <option value="other">Autre</option>
            </select>

            <button class="form__submit submit" type="submit" value="Envoyer">Envoyer</button>

        </form>
    </main>

    <script src="./js/script.js"></script>
</body>

</html>