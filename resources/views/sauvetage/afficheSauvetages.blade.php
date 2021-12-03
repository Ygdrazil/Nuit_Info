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
			@foreach($intervals as $year => $sauvetages)
				@JSON($year)
			@endforeach
		</section>

		<!-- FOOTER -->
    	@include('layouts.footer')
    </body>
</html>


