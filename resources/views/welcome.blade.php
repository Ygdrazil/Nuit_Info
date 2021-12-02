<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		@include('layouts.head')
        <!-- Styles -->

        <!-- Scripts -->

        <!-- Libs -->
    </head>
    <body>
		@include('layouts.header')

        <!-- UP -->
        <div id="up">
            <div class="rocket">
                <img class="img_rocket" src="{{ asset('pictures/rocket.png') }}">
            </div>
        </div>


		@include('layouts.footer')
    </body>
</html>
