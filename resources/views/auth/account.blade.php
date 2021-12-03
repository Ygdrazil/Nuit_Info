<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.head')

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/account.css') }}">
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
                </div>
                    <h2>Modifier mes informations</h2>
                    <div class="form_input">
                        <input type="text" name="username" placeholder="username" value="{{ Auth::user()->username }}" />
                    </div>
                    <div class="form_input">
                        <input type="text" name="name" placeholder="name" value="{{ Auth::user()->name }}" />
                    </div>
                    <div class="form_input">
                        <input type="text" name="surname" placeholder="surname" value="{{ Auth::user()->surname }}" />
                    </div>
                    <div class="form_input">
                        <input type="text" name="email" placeholder="email" value="{{ Auth::user()->email }}" />
                    </div>
                <div>
                <div>
                    <h2>Modifier mon mot de passe (laisser vide si vous ne souhaitez pas le changer)</h2>
                    <div class="form_input">
                        <input type="password" name="current_password" placeholder="current_password" />
                    </div>
                    <div class="form_input">
                        <input type="password" name="new_password" placeholder="new_password" />
                    </div>
                    <div class="form_input">
                        <input type="password" name="confirm_password" placeholder="confirm_password" />
                    </div>
			    </div>
				<button type="submit">Modifier mes informations</button>
			</form>
        </section>

        <!-- FOOTER -->
    	@include('layouts.footer')
    </body>
</html>