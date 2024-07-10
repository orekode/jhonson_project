<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html.home');
})->name('home');


Route::get('/dashboard', function () {
    return view('html.dashboard');
})->name('dashboard');

Route::get('/login', function () {
    return view('html.login');
})->name('login');

Route::get('/signup', function () {
    return view('html.signup');
})->name('signup');

Route::get('/front', function () {
    return view('html.front');
})->name('front');



Route::get('/student', function () {
    return view('html.student');
})->name('student');

Route::controller(AuthController::class)->group(function () {

    Route::get('/signup',  'displaySignup');
    Route::post('/signup', 'createUser');
    Route::post('/login',  'loginUser');

});

Route::middleware(['auth'])->group(function () {

    Route::controller(ProjectController::class)->group(function () {
        Route::post('/upload', 'uploadProject');
    });

    Route::get('/upload', function () {
        return view('html.upload', [
            'supervisor' => Auth::user()->teachers(),
        ]);
    })->name('main');

});



