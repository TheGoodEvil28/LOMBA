<?php

use App\Http\Controllers\ProfileController;
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
    return view('landing');
});

// Pre-sign-in page
Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');

// Sign-in page
Route::get('/masuk', function () {
    return view('masuk');
})->name('masuk');

// Sign-in page
Route::get('/registrasi', function () {
    return view('registrasi');
})->name('registrasi');


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/redeem', function () {
    return view('redeem');
});

Route::get('/redeem2', function () {
    return view('redeem2');
});

Route::get('/leaderboard', function () {
    return view('leaderboard');
});

Route::get('/sell', function () {
    return view('sell');
})->name('sell');

Route::post('/sell2', function () {
    return view('sell2');
})->name('sell2');

Route::post('/sell3', function () {
    return view('sell3');
})->name('sell3');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/donate2', function () {
    return view('donate2');
})->name('donate2');

Route::get('/donate3', function () {
    return view('donate3');
})->name('donate3');

Route::get('/donate4', function () {
    return view('donate4');
})->name('donate4');

Route::get('/shopwomen', function () {
    return view('shopwomen');
})->name('shopwomen');

Route::get('/shopmen', function () {
    return view('shopmen');
})->name('shopmen');

Route::get('/shopkid', function () {
    return view('shopkid');
})->name('shopkid');

Route::get('/setting', function () {
    return view('setting');
})->name('setting');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('/shop2', function () {
    return view('shop2');
});

Route::get('/shop3', function () {
    return view('shop3');
});

Route::get('/shop4', function () {
    return view('shop4');
});

Route::get('/shop5', function () {
    return view('shop5');
});

Route::get('/shop6', function () {
    return view('shop6');
});

Route::get('/shop7', function () {
    return view('shop7');
});

Route::get('/shop8', function () {
    return view('shop8');
});

// Ensure that 'auth.php' is required for authentication
require __DIR__.'/auth.php';
