<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		@include('layouts.head')

		<!-- Styles -->

		<!-- Scripts -->

		<!-- Libs -->

    </head>
    <body>
		<!-- HEADER -->
		@include('layouts.header')

		<!-- MAIN -->
		<section id="main">
			@JSON($sauvetage)
			<h1>{{$sauvetage->titre}}</h1>
			<h2>{{$sauvegarde->date_sauvetage}}</h2>
			<h3>Nombre de personnes sauvées : {{$sauvegarde->nb_sauve}}</h3>
			<h3>Nombre d'équipage sauvé : {{$sauvegarde->nb_equipage_sauve}}</h3>
			<h3>Durée : {{$sauvegarde->duree}}</h3>
			<p>{{$sauvetage->description}}</p>
			<p>{{$sauvegarde->source}}</p>

			@auth
				<form action="{{ route('soumission.nouvelle.post') }}" method="post">
					@csrf
					<h2>Faire une soumission</h2>
					<textarea name="description"></textarea>

					<input type="hidden" name="id" value="{{ $sauvetage->id_sauvetage }}">
					<input type="hidden" name="type" value="id_sauvetage">
					<button type="submit">Envoyer</button>
				</form>
			@endauth
		</section>

		<!-- FOOTER -->
    	@include('layouts.footer')
    </body>
</html>


