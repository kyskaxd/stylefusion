<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::view('/about', 'about')->name('about');

Route::view('/bathroom', 'search.bathroom')->name('bathroom');
Route::view('/kitchen', 'search.kitchen')->name('kitchen');
Route::view('/bedroom', 'search.bedroom')->name('bedroom');
Route::view('/livingroom', 'search.livingroom')->name('livingroom');

Route::view('/search', 'search')->name('search');
Route::view('/profile', 'profile')->middleware('auth')->name('profile');
Route::view('/', 'main');
Route::view('/req', 'request')->middleware('auth')->name('request');
Route::view('/main', 'main')->name('main');
Route::get('/reg', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/reg', [RegisterController::class, 'store'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
