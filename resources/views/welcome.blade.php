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
		@extends('layouts.main')
		@section('content')
		
		here

		@endsection
		<!-- FOOTER -->
		@include('layouts.footer')
    </body>
</html>