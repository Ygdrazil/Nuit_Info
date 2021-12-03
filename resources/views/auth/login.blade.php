<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Sauveteurs du Dunkerquois</title>

	<!-- STYLES -->
	<link rel="stylesheet" href="{{ asset('css/entry.css') }}">

	<!-- SCRIPTS -->

	<!-- LIBS -->

</head>
<body>
	@if ($errors->any())
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
		</ul>
	@endif
	
	<form action="{{ route('login.post') }}" method="post">
		@csrf

		<input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Email" />
		<input type="password" name="password" id="password" value="{{ old('password') }}" placeholder="Mot de passe" />

		<button type="submit">Se connecter</button>
	</form>
</body>
</html>