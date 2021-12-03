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