<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		@include('layouts.head')
        <!-- Styles -->

        <!-- SCRIPTS -->
        <script src="{{ asset('js/easter.js') }}"></script>

        <!-- Libs -->
    </head>
    <body>
		<!-- HEADER -->
		@include('layouts.header')

		<!-- MAIN -->
		

		<!-- FOOTER -->
		@include('layouts.footer')
    </body>
</html>