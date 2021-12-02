<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bateau</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

        <!-- Scripts -->
        <script src="{{ assets('js/welcome.js') }}"></script>

        <!-- Libs -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </head>
    <body>
        <header id="header">
            Je suis le header
        </header>

        <section id="main">
            Je suis le main
        </section>

        <footer id="footer">
            <ul class="social_icon">
                <li><a href="#"><ion-icon name="home-outline"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="mail-outline"></ion-icon></a></li>
            </ul>
        </footer>
    </body>
</html>
