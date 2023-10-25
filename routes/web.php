<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\mentorController;
use App\Http\Controllers\siswaController;
use App\Models\Peranutama;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->controller(authController::class)->group(function () {
    Route::get('/', 'welcomePage');
    Route::get('login', 'loginPage');
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

Route::get('logout', [authController::class, 'logout'])->name('logout');

Route::prefix('siswa')->middleware(['auth', 'siswa'])->controller(siswaController::class)->group(function () {
    Route::get('dashboard', 'dashboard')->name('dashboard.siswa');
});

Route::prefix('mentor')->middleware(['auth', 'mentor'])->controller(mentorController::class)->group(function () {
    Route::get('dashboard', 'dashboard')->name('dashboard.mentor');
    Route::get('presentasi','presentasi')->name('presentasi.mentor');
});

Route::get('dashboard',function(){
    return view('user.dashboard');
});



Route::get('/catatan',function(){
    return view('user.catatan/index');
});

Route::get('/ajukan-presentasi',function(){
    return view('user.presentasi.ajukan-presentasi');
});
Route::get('verify', function(){
    return view('auth.verify');
});
Route::get('forgot', function(){
    return view('auth.forgot');
});
Route::get('reset', function(){
    return view('auth.reset');
});
Route::get('steps', function(){
    return view('auth.steps');
});
Route::get('peranutama', function(){
    $Peran = Peranutama::all();
    return view('Peranutama',compact('Peran'));
});
Route::get('prof', function(){
    return view('prof');
});
Route::get('dashboard',function(){ return view('dashboardadmin'); });
