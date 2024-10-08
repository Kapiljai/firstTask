<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\help\HelpCenterController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\ValiDationScriptController;

use Illuminate\Support\Facades\Route;


Route::get('/',[ValiDationScriptController::class,'home'])->name('home');
Route::middleware(['redirect.user'])->group(function () {

    Route::get('/auth/google/login', [RegisterController::class, 'gogleLogin'])
    ->name('google.login');

    Route::get('/auth/google/callback', [RegisterController::class, 'googleHandler'])
    ->name('google.callback');

    Route::get('/login', [RegisterController::class, 'login'])->name('login');
    Route::get('/forgot-password', [RegisterController::class, 'forgot'])->name('auth.forgot');
    Route::get('/register', [RegisterController::class, 'register'])->name('sign_up');
    Route::post('/store', [RegisterController::class, 'store'])->name('register.store');
    Route::post('/authentication', [RegisterController::class, 'authentication'])->name('login.authentication');
});
Route::middleware(['auth' ])->group(function () {
    Route::post('logout',[RegisterController::class,'logout'])->name('logout');  
    Route::get('/help-center', [HelpCenterController::class, 'index'])->name('help.center');
    Route::get('/user/profile', [ProfileController::class, 'index'])->name('user.profile');
    Route::post('change-password/{id}', [ProfileController::class, 'changePassword'])->name('user.change.password');
    Route::post('/user/profile/update/{id}', [ProfileController::class, 'user_profile_update'])->name('user.profile.update');
    Route::post('/user/profile/address', [UserAddressController::class, 'user_profile_address'])->name('user.address');
   
});
Route::get('/song',[ValiDationScriptController::class,'songAdd']);
Route::get('/u',[ValiDationScriptController::class,'valiForm']);
// Route::post('/re',[ValiDationScriptController::class,'store'])->name('store');
Route::get('/show',[ValiDationScriptController::class,'show']);

Route::get('/show-accordian',[ValiDationScriptController::class,'show_accordian']);
Route::post('/submit',[ValiDationScriptController::class,'show_accordian_submit']);
