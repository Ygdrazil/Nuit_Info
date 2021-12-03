<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.head')

        <!-- Styles -->

        <!-- Scripts -->

        <!-- Libs -->
        
    </head>
    <body>
        <!-- HEADER -->
        @include('layouts.header')

        <!-- MAIN -->
        <section id="main">
			<form action="{{ route('account.post') }}" method="post">
				@csrf

				<h2>Modifier mes informations</h2>
				<input type="text" name="username" placeholder="username" value="{{ Auth::user()->username }}" />
				<input type="text" name="name" placeholder="name" value="{{ Auth::user()->name }}" />
				<input type="text" name="surname" placeholder="surname" value="{{ Auth::user()->surname }}" />
				<input type="text" name="email" placeholder="email" value="{{ Auth::user()->email }}" />
				
				<h2>Modifier mon mot de passe (laisser vide si vous ne souhaitez pas le changer)</h2>
				<input type="password" name="current_password" placeholder="current_password" />
				<input type="password" name="new_password" placeholder="new_password" />
				<input type="password" name="confirm_password" placeholder="confirm_password" />

				<button type="submit">Modifier mes informations</button>
			</form>
        </section>

        <!-- FOOTER -->
    	@include('layouts.footer')
    </body>
</html>