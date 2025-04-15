<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WilayahController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wilayah', [WilayahController::class, 'showWilayah']);
Route::get('/api/provinsi', [WilayahController::class, 'getProvinsiAPI']);

//Signup
Route::get('signup', [SignupController::class, 'show'])->name('signup');
Route::post('/signup',[SignupController::class, 'register'])->name('signup.submit');

//Login
Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');