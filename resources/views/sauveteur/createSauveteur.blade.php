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
            <input type="text" name="nom" placeholder="Nom" value="{{ old('nom') }}">
            <input type="text" name="prenom" placeholder="Prenom" value="{{ old('prenom') }}">
            <input type="date" name="dateNaissance" value="{{ old('dateNaissance') }}">
            <input type="date" name="dateMort" value="{{ old('dateMort') }}">
            <textarea name="description" placeholder="Description" value="{{ old('description') }}"></textarea>
            <textarea name="source" placeholder="Source" maxlength="120"  value="{{ old('source') }}"></textarea>
            <input type="submit" value="Créer un sauveteur">
        </form>
    	@include('layouts.footer')
    </body>
</html>


