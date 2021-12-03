<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Sauveteurs du Dunkerquois</title>

	<!-- STYLES -->
	<link rel="icon" href="{{ asset('pictures/boat.png') }}" />
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
	<div class="container">
		<div class="header">
			<h2>Créer un compte</h2>
		</div>
		<form action="{{ route('register.post') }}" method="post" id="form" class="form">
			@csrf
			<div class="form_input">
				<input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Email" />
			</div>		
			<div class="form_input">
				<input type="password" name="password" id="password" value="{{ old('password') }}" placeholder="Mot de passe" />
			</div>
			<button type="submit">Se connecter</button>
		</form>
	</div>
</body>
</html>