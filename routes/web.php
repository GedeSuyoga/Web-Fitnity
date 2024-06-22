<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;

Route::get('/index', function () {
    return view('index');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/places', function () {
    return view('places');
});

Route::get('/tips', function () {
    return view('tips');
});

Route::get('/', function () {
    return view('landing');
});

Route::controller(adminController::class)->group(
    function() {
        Route::get('/adminPage', 'index');
        Route::get('/addevent', 'create')->name('create');
        Route::post('/addevent','store')->name('addevent');
        Route::get('/event', 'eventindex');
        Route::delete('/events/{nama}', 'destroy')->name('destroy');

    }
);

Route::controller(UserController::class)->group(
    function() {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'doLogin')->name('doLogin');
        Route::get('/logout', 'doLogout')->name('doLogout');
        Route::get('/register', 'register')->name('register');
        Route::post('/register','doRegister')->name('doRegister');
    }
);

Route::prefix('tips')->group(function () {
    Route::get('/bola', function () {
        return view('tips.bola');
    })->name('tips.bola');

    Route::get('/pushup', function () {
        return view('tips.pushup');
    })->name('tips.pushup');

    Route::get('/ototlengan', function () {
        return view('tips.ototlengan');
    })->name('tips.ototlengan');

    Route::get('/menambah', function () {
        return view('tips.menambah');
    })->name('tips.menambah');

    Route::get('/liburan', function () {
        return view('tips.liburan');
    })->name('tips.liburan');

    Route::get('/kebiasaan', function () {
        return view('tips.kebiasaan');
    })->name('tips.kebiasaan');
});




Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});