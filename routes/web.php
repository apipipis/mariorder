<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\DashboardController;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'loginProses'])->name('loginProses');
Route::post('/register', [LoginController::class, 'registerProses'])->name('registerProses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/features', [FeaturesController::class, 'index'])->name('features');
Route::get('/help', [HelpController::class, 'index'])->name('help');


Route::group(['middleware'=> 'auth'], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});
