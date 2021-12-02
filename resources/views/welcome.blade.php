<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bateau</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/welcome.js') }}"></script>

    </head>
    <body>
        <header id="header">
            Je suis le header
        </header>

        <section id="main">
            Je suis le main
        </section>

        <footer id="footer">
            Je suis le footer
        </footer>
    </body>
</html>
