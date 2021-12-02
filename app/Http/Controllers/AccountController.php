<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;

use Illuminate\Auth\Events\Registered;
use App\Models\User;

class AccountController extends Controller
{
    function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect(route('welcome'));
        }

        return back()->withErrors([
            'email' => 'Email ou mot de passe incorect.',
        ])->withInput();
    }

    function register(Request $request) {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required', Rules\Password::defaults()]
        ]);

        if (\DB::table('users')->where('email', '=', $request->input('email'))->exists()) {
            return back()->withErrors([
                'email' => 'E-mail déjà exisant.'
            ])->withInput();
        };

        if ($request->input('password') != $request->input('confirm_password')) {
            return back()->withErrors([
                'password' => 'Les mots de passe sont différents.'
            ])->withInput();
        };

		$new_user = User::create([
			'name' => $request->input('name'),
			'email' => $request->input('email'),
			'password' => \Hash::make($request->input('password'))
		]);
		event(new Registered($new_user));

		\Auth::login($new_user);
        return redirect(route('welcome'));
	}
}