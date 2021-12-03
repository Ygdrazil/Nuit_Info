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

			<form action="{{ route('soumission.nouvelle.post') }}" method="post">
				<h2>Faire une soumission</h2>
				<textarea name="description"></textarea>

				<input type="hidden" name="id_sauvetage" value="{{ $sauvetage->id_sauvetage }}">
				<button type="submit">Envoyer</button>
			</form>
		</section>

		<!-- FOOTER -->
    	@include('layouts.footer')
    </body>
</html>


