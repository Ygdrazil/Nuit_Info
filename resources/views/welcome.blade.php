<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bateau</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/misc.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/misc.js') }}"></script>

        <!-- Libs -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </head>
    <body>
        <footer id="footer">
            <div class="waves">
                <div id="wave1" class="wave"></div>
                <div id="wave2" class="wave"></div>
                <div id="wave3" class="wave"></div>
                <div id="wave4" class="wave"></div>
            </div>
            <ul class="social_icon">
                <li><a href="#"><ion-icon name="home-outline"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="mail-outline"></ion-icon></a></li>
            </ul>
            <ul class="menu">
                <li><a href="#">Qui sommes-nous</a></li>
                <li><a href="#">Presse</a></li>
                <li><a href="#">Sites amis</a></li>
                <li><a href="#">Plan du site</a></li>
                <li><a href="#">Lettres hebdomadaires</a></li>
                <li><a href="#">Exprimez-vous</a></li>
            </ul>
            <p>©2021 - LeHessCrew | Tous droits réservés</p>
        </footer>
    </body>
</html>
