<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
//Cach1
//Route::middleware('adminuser')->group(function (){
//    Route::get('/', [HomeController::class, 'index'])->name('admin.home');
//});
//Cach2
Route::group(['middleware' => 'adminuser'], function() {
    Route::get('/', [HomeController::class, 'index'])->name('admin.home');
});
