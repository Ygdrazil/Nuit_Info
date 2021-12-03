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
	<!-- <div class="entry">
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
	<div class="container"> -->

<!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->

	<div class="header">
		<h2>Create Account</h2>
	</div>
		<form id="form" class="form">
			<div class="form-control">
				<label for="username">Username</label>
				<input type="text" placeholder="florinpop17" id="username" />
				<i class="fas fa-check-circle"></i>
				<i class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
			</div>
			<div class="form-control">
				<label for="username">Email</label>
				<input type="email" placeholder="a@florin-pop.com" id="email" />
				<i class="fas fa-check-circle"></i>
				<i class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
			</div>
			<div class="form-control">
				<label for="username">Password</label>
				<input type="password" placeholder="Password" id="password"/>
				<i class="fas fa-check-circle"></i>
				<i class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
			</div>
			<div class="form-control">
				<label for="username">Password check</label>
				<input type="password" placeholder="Password two" id="password2"/>
				<i class="fas fa-check-circle"></i>
				<i class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
			</div>
			<button>Submit</button>
		</form>
	</div>
</body>
</html>

<div class="container">
	<div class="header">
		<h2>Create Account</h2>
	</div>
	<form id="form" class="form">
		<div class="form-control">
			<label for="username">Username</label>
			<input type="text" placeholder="florinpop17" id="username" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Email</label>
			<input type="email" placeholder="a@florin-pop.com" id="email" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Password</label>
			<input type="password" placeholder="Password" id="password"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Password check</label>
			<input type="password" placeholder="Password two" id="password2"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<button>Submit</button>
	</form>
</div>