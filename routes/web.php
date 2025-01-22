<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('auth.login');
Route::get('/forgotPassword', function () {
    return view('auth.forgotPassword');
})->name('auth.forgotPassword');
Route::get('/signup', function () {
    return view('auth.signup');
})->name('auth.signup');
Route::get('/addToken', function () {
    return view('auth.addToken');
})->name('auth.addToken');
Route::get('/resetPassword', function () {
    return view('auth.resetPassword');
});
