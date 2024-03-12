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

// DEPAN

Route::get('/', function () {
    return view('home');
});
Route::get('/support', function () {
    return view('hubungi');
});
Route::get('/member-login', function () {
    return view('login-member');
});
Route::get('/platforms', function () {
    return view('platform.platform');
});
Route::get('/help-center/home', function () {
    return view('home');
});
Route::get('/register/profile-account', function () {
    return view('register');
});
Route::get('/xm-on-tv', function () {
    return view('xm-on-tv');
});
Route::get('/category/company-news', function () {
    return view('berita');
});
Route::get('/xm-awards', function () {
    return view('xm-award');
});

// AKUN PERDAGANGAN
Route::get('/account-types', function () {
    return view('trading.akun-perdagangan.account-types');
});
Route::get('/account-types/ultra-low', function () {
    return view('trading.akun-perdagangan.ultra-low');
});
Route::get('/islamic', function () {
    return view('trading.akun-perdagangan.account-islami');
});

// INSTRUMEN
Route::get('/forex-trading', function () {
    return view('trading.instrumen.forex-trading');
});
Route::get('/cryptocurrencies', function () {
    return view('trading.instrumen.mata-uang');
});
Route::get('/cfd-saham', function () {
    return view('trading.instrumen.cfd');
});
Route::get('/saham-turbo', function () {
    return view('trading.instrumen.turbo-saham');
});
Route::get('/commodities', function () {
    return view('trading.instrumen.commodities');
});
Route::get('/equity-indices', function () {
    return view('trading.instrumen.equity-indices');
});
Route::get('/precious-metals', function () {
    return view('trading.instrumen.precious-metals');
});
Route::get('/energies', function () {
    return view('trading.instrumen.energies');
});
Route::get('/shares', function () {
    return view('trading.instrumen.shares');
});

// KONDISI
Route::get('/execution-policy', function () {
    return view('trading.kondisi.execution-policy');
});
Route::get('/spreads', function () {
    return view('trading.kondisi.spreads');
});
Route::get('/margin-and-leverage', function () {
    return view('trading.kondisi.margin-and-leverage');
});
Route::get('/overnight-positions', function () {
    return view('trading.kondisi.overnight-positions');
});
Route::get('/trading-hours', function () {
    return view('trading.kondisi.trading-hours');
});

// SOSIAL
Route::get('/social-copy-trading', function () {
    return view('trading.sosial.social-copy-trading');
});
Route::get('/social-competitions', function () {
    return view('trading.sosial.social-competitions');
});


// PLATFORM -- PC / MAC
Route::get('/mt4', function () {
    return view('platform.pc-mac.mt4-pc');
});
Route::get('/metatrader-mac', function () {
    return view('platform.pc-mac.m4-mac');
});
Route::get('/multiterminal', function () {
    return view('platform.pc-mac.m4-multiterminal');
});
Route::get('/mt4-webtrader', function () {
    return view('platform.pc-mac.mt4-webtrader');
});
Route::get('/mt5', function () {
    return view('platform.pc-mac.mt5-pc');
});
Route::get('/mt5-mac', function () {
    return view('platform.pc-mac.mt5-mac');
});
Route::get('/mt5-webtrader', function () {
    return view('platform.pc-mac.mt5-webtrader');
});

// PLATFOM -- SMARTPHONE
Route::get('/iphone', function () {
    return view('platform.smartphone.mt4-iphone');
});
Route::get('/android', function () {
    return view('platform.smartphone.mt4-android');
});
Route::get('/mt5-iphone', function () {
    return view('platform.smartphone.mt5-iphone');
});
Route::get('/mt5-android', function () {
    return view('platform.smartphone.mt5-android');
});
Route::get('/xm-app', function () {
    return view('platform.smartphone.xm-iphone');
});
Route::get('/apk-app-download', function () {
    return view('platform.smartphone.xm-android');
});


// PLATFOM -- TABLET
Route::get('/ipad', function () {
    return view('platform.tablet.mt4-ipad');
});
Route::get('/android-tablet', function () {
    return view('platform.tablet.mt4-android-tablet');
});
Route::get('/mt5-ipad', function () {
    return view('platform.tablet.mt5-ipad');
});
Route::get('/mt5-android-tablet', function () {
    return view('platform.tablet.mt5-android');
});
Route::get('/xm-app', function () {
    return view('platform.tablet.xm-ipad');
});
Route::get('/apk-app-download', function () {
    return view('platform.tablet.xm-android-tablet');
});

// RISET & EDUKASI

// RISET
Route::get('/research/overview', function () {
    return view('riset-edukasi.riset.ringkasan-pasar');
});
Route::get('/research/discover/marketPulse', function () {
    return view('riset-edukasi.riset.pandangan');
});
Route::get('/research/analysis', function () {
    return view('riset-edukasi.riset.riset-xm');
});
Route::get('/research/tradeIdeas', function () {
    return view('riset-edukasi.riset.ide-trading');
});
Route::get('/research/technicalSummaries', function () {
    return view('riset-edukasi.riset.ringkasan-teknis');
});
Route::get('/research/economicCalendar', function () {
    return view('riset-edukasi.riset.kalender-ekonomi');
});
Route::get('/research/economicCalendar', function () {
    return view('riset-edukasi.riset.kalender-ekonomi');
});
Route::get('/research/videos', function () {
    return view('riset-edukasi.riset.xm-tv');
});
Route::get('/research/podcast', function () {
    return view('riset-edukasi.riset.xm-tv');
});

// PUSAT PEMBELAJARAN
Route::get('/live-player/xmlive', function () {
    return view('riset-edukasi.pusat.xm-live');
});
Route::get('/live-player/id-local-advanced', function () {
    return view('riset-edukasi.pusat.ruang-lanjutan');
});
Route::get('/education-rooms', function () {
    return view('riset-edukasi.pusat.edukasi-live');
});
Route::get('/english-education-schedule', function () {
    return view('riset-edukasi.pusat.jadwal-edukasi');
});
Route::get('/webinars', function () {
    return view('riset-edukasi.pusat.webinar-forex');
});
Route::get('/educational-videos', function () {
    return view('riset-edukasi.pusat.video-edukasi');
});
Route::get('/tutorials', function () {
    return view('riset-edukasi.pusat.tutorial-platform');
});

// ALAT

Route::get('/trading-tools', function () {
    return view('riset-edukasi.alat.alat-trading');
});
Route::get('/mql5', function () {
    return view('riset-edukasi.alat.trading-otomatis');
});
Route::get('/forex-calculators', function () {
    return view('riset-edukasi.alat.kalkulator-forex');
});

// PROMOSI
Route::get('/promotions', function () {
    return view('promosi.promosi');
});

// KEMITRAAN
Route::get('/partners', function () {
    return view('mitra.kemitraan');
});

