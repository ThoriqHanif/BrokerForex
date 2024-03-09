<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/support', function () {
    return view('hubungi');
});
Route::get('/member/login', function () {
    return view('login-member');
});
Route::get('/account-types', function () {
    return view('account-types');
});
Route::get('/help-center/home', function () {
    return view('help-center/home');
});
Route::get('/register/profile-account?lang=id', function () {
    return view('register');
});
Route::get('/account-types/ultra-low', function () {
    return view('ultra-low');
});
Route::get('/islamic', function () {
    return view('account-islami');
});
Route::get('/forex-trading', function () {
    return view('forex-trading');
});


