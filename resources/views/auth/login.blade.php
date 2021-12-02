<form action="{{ route('login.post') }}" method="post">
	@csrf
	
	<input type="text" name="email" id="email" value="{{ old('email') }}" />
	<input type="password" name="password" id="password" value="{{ old('password') }}" />

	<button type="submit">Se connecter</button>
</form>