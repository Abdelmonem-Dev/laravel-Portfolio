<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerificationController;

Route::controller(AuthController::class)->group(function () {
    // No '.auth' prefix in the group
    Route::get('/signup', function(){ return view('auth.signup'); })->name('auth.signup');
    Route::post('/signup', 'signup')->name('auth.signupAction');

    Route::get('/test', function () {
        return 'Testing middleware';
    })->middleware(['complete.user.data']);

    Route::get('/login', function(){ return view('auth.login'); })->name('auth.login');
    Route::post('/login', 'login')->name('auth.loginAction');

    Route::get('/logout', 'logout')->name('auth.logout');

    Route::get('/forgotPassword', function(){ return view('auth.forgotPassword'); })->name('auth.forgotPassword');

    Route::post('/addToken', 'checkToken')->name('auth.addTokenAction');

    Route::get('/resetPassword', function(){return view('auth.resetPassword');})->name('auth.resetPassword');
    Route::post('/resetPassword', [AuthController::class,'ResetPassword'])->name('auth.ResetPasswordAction');



    Route::get('/verifyEmail/{email}', [VerificationController::class, 'addEmailVerify'])->name('auth.verifyEmail');
    Route::post('/verifyEmail', [VerificationController::class, 'resendToken'])->name('auth.resendTokenAction');

    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])
     ->middleware(['signed', 'throttle:6,1'])
     ->name('verification.verify');
});
Route::controller(UserController::class)->group(function ()   {
    Route::post('/completeProfile','completeProfile')->name('auth.completeProfile');


});

Route::get('/addToken/{email}',[VerificationController::class,'addTokenForm'])->name('auth.addToken');

Route::post('/forgotPassword', [VerificationController::class,'forgotPassword'])->name('auth.forgotPasswordAction');











Route::middleware(['complete.user.data'])->group(function () {
Route::get('/profile', function () {
    return view('main.profile');
})->name('main.profile');

Route::get('/portfolio', function () {
    return view('main.portfolio');
})->name('main.portfolio');

});
Route::get('/home', function () {
    return view('main.home');
})->name('main.home');



Route::middleware(['data.completed'])->group(function () {

    Route::get('/addName', function () {
        return view('config.addFullName');
    })->name('config.addName');
    Route::get('/addPicture', function () {
        return view('config.addPicture');
    })->name('config.addPicture');
    Route::get('/addBio', function () {
        return view('config.addBio');
    })->name('config.addBio');
    Route::get('/addField', function () {
        return view('config.addField');
    })->name('config.addField');
    Route::get('/QuestionOne', function () {
        return view('config.questions.QuestionOne');
    })->name('config.questions.QuestionOne');

});

