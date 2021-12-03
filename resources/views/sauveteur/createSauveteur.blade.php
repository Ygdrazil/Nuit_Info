<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.head')
    </head>
    <body>
        @include('layouts.header')

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <form action="{{ route('sauveteur.nouveau.post') }}" method="POST">
            @csrf
            <input type="text" name="nom" placeholder="Nom">
            <input type="text" name="prenom" placeholder="Prenom">
            <input type="date" name="dateNaissance">
            <input type="date" name="dateMort">
            <textarea name="description" placeholder="Description" >
    
            </textarea>
            <textarea name="source" placeholder="Source" maxlength="120">
            </textarea>
            <input type="submit" value="Créer un sauveteur">
        </form>
    	@include('layouts.footer')
    </body>
</html>


