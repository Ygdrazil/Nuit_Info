<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		@include('layouts.head')

		<!-- Styles -->
		<link rel="stylesheet" href="{{ asset('css/utilitaires.css') }}">

		<!-- Scripts -->

		<!-- Libs -->

    </head>
    <body>
		<!-- HEADER -->
		@include('layouts.header')

		<!-- MAIN -->
		<section id="main">
			<h1>La liste des Bateaux :</h1>
			<div class="box">
				@foreach($alphas as $alpha => $bateaux)
					<h1>{{ $alpha }}</h1>
					<ul>
					@foreach($bateaux as $bateau)
						<li><a href="{{ route('bateau', $bateau->id_bateau) }}">{{ $bateau->nom }}</a></li>
					@endforeach
					</ul>
				@endforeach
			</div>
		</section>

		<!-- FOOTER -->
    	@include('layouts.footer')
    </body>
</html>


