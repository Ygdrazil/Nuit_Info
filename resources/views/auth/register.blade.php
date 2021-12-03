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
	<div class="entry">
		<form action="{{ route('register.post') }}" method="post">
			@csrf

			<input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Email" />
			<input type="text" name="username" id="username" value="{{ old('username') }}" placeholder="Nom d'utilisateur" />
			<input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Prénom" />
			<input type="text" name="surname" id="surname" value="{{ old('surname') }}" placeholder="Nom de famille" />

			<input type="password" name="password" id="password" value="{{ old('password') }}" placeholder="Mot de passe" />
			<input type="password" name="confirm_password" id="confirm_password" value="{{ old('confirm_password') }}" placeholder="Confirmer le mot de passe" />

			<button type="submit">S'enregistrer</button>
		</form>
	</div>
	
</body>
</html>