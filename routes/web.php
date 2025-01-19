<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/car/search', [CarController::class, 'search'])->name('car.search');
<<<<<<< HEAD
Route::get('/car/watchlist', [CarController::class, 'watchlist'])->name('car.watchlist');
=======
>>>>>>> d31b216de56fc65efa4b782ba714561e21ad7f63
Route::resource('car', CarController::class);

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::get('/register', [RegisterController::class, 'create'])->name('register');
