<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;

Route::controller(authController::class)->group(function () {
    Route::get('/', 'welcomePage');
    Route::get('login', 'loginPage')->name('login');
    Route::get('register', 'registerPage')->name('register');
    Route::get('forgot', 'lupaPasswordPage')->name('lupa-password');
    Route::get('reset', 'resetPasswordPage');
    Route::get('profile/{code}', 'profilePage')->name('profile');

    Route::get('/auth/google', 'redirectToGoogle')->name('google.register');
    Route::get('/auth/google/callback', 'handleGoogleCallback')->name('google.callback');

    Route::get('/auth/facebook', 'redirectToFacebook')->name('facebook.register');
    Route::get('/auth/facebook/callback', 'handleFacebookCallback')->name('facebook.callback');

    Route::post('login', 'login')->name('login');
    Route::post('register', 'register')->name('register.store');
});

Route::get('/atur-jadwal', function () {
    return view('user.jadwal.aturJadwal');
});
