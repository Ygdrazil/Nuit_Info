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
            'email' => 'required',
            'password' => 'required',
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
            'username' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
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
			'username' => $request->input('username'),
			'name' => $request->input('name'),
			'surname' => $request->input('surname'),
			'email' => $request->input('email'),
			'password' => \Hash::make($request->input('password'))
		]);
		event(new Registered($new_user));

		\Auth::login($new_user);
        return redirect(route('welcome'));
	}

	function logout()
	{
		\Auth::logout();
		
		return redirect(route('welcome'));
	}

	function edit(Request $request)
	{
		$request->validate([
			'username' => 'required',
			'name' => 'required',
			'surname' => 'required',
			'email' => 'required',

			'current_password' => 'nullable',
			'new_password' => 'nullable',
			'confirm_password' => 'nullable'
		]);

		$user = \Auth::user();
        $user->username = $request->input('username');
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');

		$user->save();

		if ($request->input('current_password') != null && $request->input('new_password') != null && $request->input('confirm_password') != null) {
			$request->validate([
				'current_password' => 'required',
				'new_password' => ['required', Rules\Password::defaults()],
				'confirm_password' => 'required'
			]);

			if (password_verify($request->input('current_password'), $user->password)) {
				if ($request->input('new_password') == $request->input('confirm_password')) {
					$user->forceFill([
						'password' => \Hash::make($request->input('new_password'))
					])->save();

					return redirect(route('logout'));
				} else {
					return back()->withErrors([
						'new_password' => 'Les mots de passe sont différents.'
					]);
				};
			} else {
				return back()->withErrors([
					'current_password' => 'Le mot de passe actuel ne correspond pas !'
				]);
			};
		};

        return redirect(route('account'));
	}
}