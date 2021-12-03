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
			<h1>La liste des Sauveteurs :</h1>
			<div class="box">
				@foreach($alphas as $alpha => $sauveteurs)
					<h1>{{ $alpha }}</h1>
					<ul>
					@foreach($sauveteurs as $sauveteur)
						<li><a href="{{ route('sauveteur', $sauveteur->id_sauveteur) }}">{{ $sauveteur->nom }} {{ $sauveteur->prenom }}</a></li>
					@endforeach
					</ul>
				@endforeach
			</div>
		</section>

		<!-- FOOTER -->
    	@include('layouts.footer')
    </body>
</html>


