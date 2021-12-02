<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body>
        @include('layouts.header')
        @include('layouts.head')
        <form  action="{{ route('createSauveteur') }}" method="POST">
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


