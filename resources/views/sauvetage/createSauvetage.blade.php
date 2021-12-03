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
			<form action="{{ route('sauveteur.nouveau.post') }}" method="post">
				@csrf
				<input type="text" name="titre" placeholder="Titre" value="{{ old('titre') }}" />
                <input type="date" name="date_sauvetage" value="{{ old('date_sauvetage') }}" />
                <textarea name="description" placeholder="Description" value="{{ old('description') }}"></textarea>
                <textarea name="source" placeholder="Source" maxlength="120" value="{{ old('source') }}"></textarea>
                <input type="text" name="info_sauvetage" placeholder="Info Sauvetage" value="{{ old('info_sauvetage') }}" />
                <input type="number" name="nb_sauve" placeholder="nb_sauve" value="{{ old('nb_sauve') }}" />
                <input type="time" name="duree" value="{{ old('duree') }}" />
                <input type="submit" value="Créer un sauvetage" />
			</form>
        </section>

        <!-- FOOTER -->
    	@include('layouts.footer')
    </body>
</html>