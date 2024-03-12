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
Route::get('/cryptocurrencies', function () {
    return view('forex-trading');
});
Route::get('/cfd-saham', function () {
    return view('cfd');
});
Route::get('/saham-turbo', function () {
    return view('turbo-saham');
});


Route::get('/commodities', function () {
    return view('commodities');
});

Route::get('/equity-indices', function () {
    return view('equity-indices');
});

Route::get('/precious-metals', function () {
    return view('precious-metals');
});

Route::get('/energies', function () {
    return view('energies');
});

Route::get('/shares', function () {
    return view('shares');
});
Route::get('/execution-policy', function () {
    return view('execution-policy');
});

Route::get('/spreads', function () {
    return view('spreads');
});

Route::get('/margin-and-leverage', function () {
    return view('margin-and-leverage');
});

Route::get('/overnight-positions', function () {
    return view('overnight-positions');
});

Route::get('/trading-hours', function () {
    return view('trading-hours');
});

Route::get('/social-copy-trading', function () {
    return view('social-copy-trading');
});

Route::get('/social-competitions', function () {
    return view('social-competitions');
});

Route::get('/mt4', function () {
    return view('mt4');
});

Route::get('/metatrader-mac', function () {
    return view('metatrader-mac');
});

Route::get('/multiterminal', function () {
    return view('multiterminal');
});

Route::get('/mt4-webtrader', function () {
    return view('mt4-webtrader');
});

Route::get('/mt5', function () {
    return view('mt5');
});

Route::get('/mt5-mac', function () {
    return view('mt5-mac');
});

Route::get('/mt5-webtrader', function () {
    return view('mt5-webtrader');
});

Route::get('/iphone', function () {
    return view('iphone');
});

Route::get('/android', function () {
    return view('android');
});

Route::get('/mt5-iphone', function () {
    return view('mt5-iphone');
});

Route::get('/ipad', function () {
    return view('ipad');
});

Route::get('/android-tablet', function () {
    return view('android-tablet');
});

Route::get('/mt5-ipad', function () {
    return view('mt5-ipad');
});



