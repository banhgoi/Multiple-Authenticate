<?php

use App\Http\Controllers\Front\Auth\LoginController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('customer.login');
Route::middleware('auth:customer')->group(function (){
    Route::get('/', [HomeController::class, 'index'])->name('customer.home');
});

