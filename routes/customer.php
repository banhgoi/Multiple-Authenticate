<?php

use App\Http\Controllers\Front\Auth\LoginController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('customer.login');
Route::get('logout', [LoginController::class, 'logout'])->name('customer.logout');

Route::get('/', [HomeController::class, 'index'])->name('customer.home');


