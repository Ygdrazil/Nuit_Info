<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		@include('layouts.head')
    </head>
    <body>
		@include('layouts.header')
       @foreach ($sauveteurs as $sauveteur)
       <p>
        {{$sauveteur->nom}}
        {{$sauveteur->prenom}}
        {{$sauveteur->dateNaissance}}
        {{$sauveteur->naissance}}
        {{$sauveteur->mort }} 
        {{$sauveteur->description}}
        {{$sauveteur->source}}  
        </p>
        <br>
           
       @endforeach
    	@include('layouts.footer')
    </body>
</html>


