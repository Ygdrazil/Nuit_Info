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
				<input type="text" name="username" placeholder="username" value="{{ old('username') }}" />
				<input type="text" name="name" placeholder="name" value="{{ old('name') }}" />
				<input type="text" name="surname" placeholder="surname" value="{{ old('surname') }}" />
				<input type="text" name="email" placeholder="email" value="{{ old('email') }}" />
				
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