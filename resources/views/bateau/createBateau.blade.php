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
            
            <form action="{{ route('bateau.nouveau.post') }}" method="post">
                @csrf
                <input type="text" name="nom" placeholder="Nom" value="{{ old('nom') }}" />
                <input type="date" name="annee_debut" value="{{ old('annee_debut') }}" />
                <textarea name="description" placeholder="Description" value="{{ old('description') }}"></textarea>
                <input type="submit" value="Créer un bateau">
            </form>
        </section>

        <!-- FOOTER -->
    	@include('layouts.footer')
    </body>
</html>


