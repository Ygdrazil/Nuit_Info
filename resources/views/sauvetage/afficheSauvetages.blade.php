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
			<h1>La liste des Sauvetages</h1>
			@foreach($intervals as $year => $sauvetages)
				<h1>{{ $year }} à {{ $year + $interval }}</h1>
				@foreach($sauvetages as $sauvetage)
					<h2><a href="{{ route('sauvetage', $sauvetage->id_sauvetage) }}">{{ $sauvetage->titre }}</a></h2>
				@endforeach
			@endforeach
		</section>

		<!-- FOOTER -->
    	@include('layouts.footer')
    </body>
</html>


