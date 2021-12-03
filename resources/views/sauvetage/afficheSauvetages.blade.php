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
			@foreach($intervals as $year => $sauvetages)
				<h1>{{ $year }}</h1>
			@foreach
		</section>

		<!-- FOOTER -->
    	@include('layouts.footer')
    </body>
</html>


