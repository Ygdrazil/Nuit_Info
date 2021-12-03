<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.head')
    </head>
    <body>
        @include('layouts.header')
        <!-- MAIN -->
		<section id="main">
            <form action="{{ route('sauvetage.nouveau.post') }}" method="POST">
                @csrf
                <input type="text" name="titre" placeholder="Titre">
                <input type="date" name="date_sauvetage">
                <textarea name="description" placeholder="Description" >
        
                </textarea>
                <textarea name="source" placeholder="Source" maxlength="120">
                </textarea>
                <input type="text" name="info_sauvetage" placeholder="Info Sauvetage">
                <input type="number" name="nb_sauve" placeholder="nb_sauve">
                <input type="time" name="duree">
                <input type="submit" value="Créer un sauvetage">
            </form>
        </section>
    	@include('layouts.footer')
    </body>
</html>


