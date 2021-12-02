<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', function () { return view('auth.login'); })->middleware(['guest'])->name('login');
Route::post('/login', 'App\Http\Controllers\AccountController@login')->middleware(['guest'])->name('login.post');

Route::get('/register', function () { return view('auth.register'); })->middleware(['guest'])->name('register');
Route::post('/register', 'App\Http\Controllers\AccountController@register')->middleware(['guest'])->name('register.post');