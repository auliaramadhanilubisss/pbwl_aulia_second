<?php

use App\Http\Controllers\noraebangController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('landing.index');
// });

// Route::get('register', function () {
//     return view('signup');
// });

// Route::get('login', function () {
//     return view('signin');
// });

// Route::get('about', function () {
//     return view('about');
// });

Route::get('', [noraebangController::class, 'index']);
Route::get('/register', [noraebangController::class, 'signup']);
Route::get('/login', [noraebangController::class, 'signin']);
Route::get('/lagu', [noraebangController::class, 'lagu']);
Route::get('/musik', [noraebangController::class, 'lagu1']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
