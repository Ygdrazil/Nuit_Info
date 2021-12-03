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
			@foreach($alphas as $alpha => $sauveteurs)
				<h1>{{ $alpha }}</h1>
				<ul>
				@foreach($sauveteurs as $sauveteur)
					<li><a href="">{{ $sauveteur->nom }} {{ $sauveteur->prenom }}</a></li>
				@endforeach
				</ul>
			@endforeach
		</section>

		<!-- FOOTER -->
    	@include('layouts.footer')
    </body>
</html>


