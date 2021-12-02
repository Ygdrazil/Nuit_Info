<form action="{{ route('register.post') }}" method="post">
	@csrf

	<input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Email" />
	<input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Nom d'utilisateur" />

	<input type="password" name="password" id="password" value="{{ old('password') }}" placeholder="Mot de passe" />
	<input type="password" name="confirm_password" id="confirm_password" value="{{ old('confirm_password') }}" placeholder="Confirmer le mot de passe" />

	<button type="submit">S'enregistrer</button>
</form>