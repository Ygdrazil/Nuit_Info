<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		@include('layouts.head')

		<!-- Styles -->

		<!-- Scripts -->

		<!-- Libs -->

    </head>
    <body>
		@php
		dd($intervals)
		@endphp
		<!-- HEADER -->
		@include('layouts.header')

		<!-- MAIN -->
		<section id="main">
			<h1>La liste des Sauvetages</h1>
			@JSON($sauvetages)
		</section>

		<!-- FOOTER -->
    	@include('layouts.footer')
    </body>
</html>


