<!-- ROCKET -->
<div id="up">
	<div class="rocket">
		<img class="img_rocket" src="{{ asset('pictures/rocket.png') }}">
	</div>
</div>

<!-- FOOTER -->
<footer id="footer">
	<div class="waves">
		<div id="wave1" class="wave"></div>
		<div id="wave2" class="wave"></div>
		<div id="wave3" class="wave"></div>
		<div id="wave4" class="wave"></div>
	</div>
	<ul class="social_icon">
		<li><a href="."><ion-icon name="home-outline"></ion-icon></a></li>
		<li><a href="https://www.facebook.com/groups/938396409644949"><ion-icon name="logo-facebook"></ion-icon></a></li>
		<li><a href="https://twitter.com/boutelierphili1"><ion-icon name="logo-twitter"></ion-icon></a></li>
		<li><a href="mailto:sauveteurdudunkerquois@gmail.com"><ion-icon name="mail-outline"></ion-icon></a></li>
	</ul>
	<ul class="menu">
		<li><a href="{{ route('bateaux') }}">Bateaux</a></li>
		<li><a href="{{ route('sauvetages') }}">Sauvetages</a></li>
		<li><a href="{{ route('sauveteurs') }}">Sauveteurs</a></li>
		@guest
			<li><a href="{{ route('register') }}">S'inscrire</a></li>
			<li><a href="{{ route('login') }}">Se connecter</a></li>
		@endguest
		@auth
			<li><a href="{{ route('account') }}">{{ \Illuminate\Support\Str::limit(Auth::user()->name, 12, '...') }}</a></li>
			<li><a href="{{ route('logout') }}">Se déconnecter</a></li>
		@endauth
	</ul>
	<p>©2021 - LeHessCrew | Tous droits réservés</p>
</footer>