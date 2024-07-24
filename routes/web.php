<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ValiDationScriptController;

use Illuminate\Support\Facades\Route;


Route::get('/',[ValiDationScriptController::class,'home'])->name('home');
Route::middleware(['redirect.user'])->group(function () {
    Route::get('/login', [RegisterController::class, 'login'])->name('sign_in');
    Route::get('/forgot-password', [RegisterController::class, 'forgot'])->name('auth.forgot');
    Route::get('/register', [RegisterController::class, 'register'])->name('sign_up');
    Route::post('/store', [RegisterController::class, 'store'])->name('register.store');
    Route::post('/authentication', [RegisterController::class, 'authentication'])->name('login.authentication');
});
Route::middleware(['auth' , 'checkDevice'])->group(function () {
    Route::post('logout',[RegisterController::class,'logout'])->name('logout');  
});
Route::get('/song',[ValiDationScriptController::class,'songAdd']);
Route::get('/u',[ValiDationScriptController::class,'valiForm']);
// Route::post('/re',[ValiDationScriptController::class,'store'])->name('store');
Route::get('/show',[ValiDationScriptController::class,'show']);
