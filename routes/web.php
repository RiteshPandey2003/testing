<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\BuyerRegistrationController;
use App\Http\Controllers\SellerRegistrationController;
use App\Http\Controllers\AuthController;

// admin registration
Route::prefix('admin')->group(function () {
    Route::get('/register', [AdminRegisterController::class, 'show'])->name('admin.register.form');
    Route::post('/register', [AdminRegisterController::class, 'register'])->name('admin.register');
});

// buyer registration
Route::prefix('buyer')->group(function () {
    Route::get('/register', [BuyerRegistrationController::class, 'show'])->name('buyer.register.form');
    Route::post('/register', [BuyerRegistrationController::class, 'register'])->name('buyer.register');
});

// seller rergistration
Route::prefix('seller')->group(function () {
    Route::get('/register', [SellerRegistrationController::class, 'show'])->name('seller.register.form');
    Route::post('/register', [SellerRegistrationController::class, 'register'])->name('seller.register');
});

Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');


Route::middleware('admin.auth')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('admin.home');
});

Route::middleware('buyer.auth')->group(function () {
    Route::get('/buyer/dashboard', function () {
        return view('buyer.welcome');
    })->name('buyer.home');
});

Route::middleware('seller.auth')->group(function () {
    Route::get('/seller/dashboard', function () {
        return view('seller.welcome');
    })->name('buyer.home');
});


Route::post('/logout', 'Auth\LogoutController@logout')->name('logout');
