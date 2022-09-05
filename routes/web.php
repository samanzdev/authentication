<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;

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
//->middleware('auth')
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/registerForm', [AuthController::class, 'registerForm'])->name('auth.registerForm');

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/loginForm', [AuthController::class, 'loginForm'])->name('auth.loginForm');
