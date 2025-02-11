<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; 

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
