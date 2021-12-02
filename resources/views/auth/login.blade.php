<form action="{{ route('login.post') }}" method="post">
	@csrf

	<input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Email" />
	<input type="password" name="password" id="password" value="{{ old('password') }}" placeholder="Mot de passe" />

	<button type="submit">Se connecter</button>
</form>