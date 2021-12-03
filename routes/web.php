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

Route::get('/', function () { return view('welcome'); })->name('welcome');

// Authentification
Route::get('/login', function () { return view('auth.login'); })->middleware(['guest'])->name('login');
Route::post('/login', 'App\Http\Controllers\AccountController@login')->middleware(['guest'])->name('login.post');
Route::get('/register', function () { return view('auth.register'); })->middleware(['guest'])->name('register');
Route::post('/register', 'App\Http\Controllers\AccountController@register')->middleware(['guest'])->name('register.post');
Route::get('/account', function() { return 'wip'; })->name('account');
Route::any('/logout', 'App\Http\Controllers\AccountController@logout')->middleware(['auth'])->name('logout');

// Sauveteur(s)
Route::get('/sauveteurs', 'App\Http\Controllers\SauveteurController@findAll')->name('sauveteurs');
Route::get('/sauveteur/{sauveteur_id}', 'App\Http\Controllers\SauveteurController@findOne')->name('sauveteur');
Route::get('/sauveteur/nouveau', function () { return view('sauveteur.createSauveteur'); })->middleware(['auth'])->name('sauveteur.nouveau');
Route::post('/sauveteur/nouveau', 'App\Http\Controllers\SauveteurController@create')->middleware(['auth'])->name('sauveteur.nouveau.post');

// Sauvetage(s)
Route::get('/sauvetages', 'App\Http\Controllers\SauvetageController@findAll')->name('sauvetages');
Route::get('/sauvetage/{sauvetage_id}', 'App\Http\Controllers\SauvetageController@findOne')->name('sauvetage');
Route::get('/sauvetage/nouveau', function () { return view('sauvetage.createSauvetage'); })->middleware(['auth'])->name('sauvetage.nouveau');
Route::post('/sauvetage/nouveau', 'App\Http\Controllers\SauvetageController@create')->middleware(['auth'])->name('sauvetage.nouveau.post');

// Bateau(x)
Route::get('/bateaux', 'App\Http\Controllers\BateauController@findAll')->name('bateaux');
Route::get('/bateau/{bateau_id}', 'App\Http\Controllers\BateauController@findOne')->name('bateau');
Route::get('/bateau/nouveau', function () { return view('bateau.createBateau'); })->middleware(['auth'])->name('bateau.nouveau');
Route::post('/bateau/nouveau', 'App\Http\Controllers\BateauController@create')->middleware(['auth'])->name('bateau.nouveau.post');