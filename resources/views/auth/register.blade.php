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
			<h2>Create Account</h2>
		</div>
		<form action="{{ route('register.post') }}" method="post" id="form" class="form">
			<div class="form-control">
				<label for="email">Email</label>
				<input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="email@exemple.com" />
				<i class="fas fa-check-circle"></i>
				<i class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
			</div>
			<div class="form-control">
				<label for="username">Nom d'utilisateur</label>
				<input type="text" name="username" id="username" value="{{ old('username') }}" placeholder="Nom d'utilisateur" />
				<i class="fas fa-check-circle"></i>
				<i class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
			</div>
			<div class="form-control">
				<label for="name">Prénom</label>
				<input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Prénom" />
				<i class="fas fa-check-circle"></i>
				<i class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
			</div>
			<div class="form-control">
				<label for="surname">Nom</label>
				<input type="text" name="surname" id="surname" value="{{ old('surname') }}" placeholder="Nom de famille" />
				<i class="fas fa-check-circle"></i>
				<i class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
			</div>		
			<div class="form-control">
				<label for="password">Mot de passe</label>
				<input type="password" name="password" id="password" value="{{ old('password') }}" placeholder="Mot de passe" />
				<i class="fas fa-check-circle"></i>
				<i class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
			</div>
			<div class="form-control">
				<label for="confirm_password">Password check</label>
				<input type="password" name="confirm_password" id="confirm_password" value="{{ old('confirm_password') }}" placeholder="Confirmer le mot de passe" />
				<i class="fas fa-check-circle"></i>
				<i class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
			</div>
			<button type="submit">S'enregistrer</button>
		</form>
	</div>
</body>
</html>