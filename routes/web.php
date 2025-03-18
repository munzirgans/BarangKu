<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\BarangController;


Route::middleware(['custom-guest'])->group(function(){
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post("/", [LoginController::class, 'store'])->name('login.store');
    Route::get("/register", [RegisterController::class, 'index'])->name('register.index');
    Route::post("/register", [RegisterController::class, 'store'])->name('register.store');
});

Route::middleware(['custom-auth'])->group(function(){
    Route::prefix('/dashboard')->group(function(){
        Route::get("/", [DashboardController::class, 'index'])->name('dashboard.index');
    
        Route::prefix('/data-barang')->group(function(){
            Route::get("/", [BarangController::class, 'index'])->name("data-barang.index");
            Route::post('/', [BarangController::class, 'store'])->name('data-barang.store');
    
            Route::get("/create", [BarangController::class, 'create'])->name('data-barang.create');

            Route::get("/edit/{id}", [BarangController::class, 'edit'])->name('data-barang.edit');

            Route::post('/update/{id}', [BarangController::class, 'update'])->name('data-barang.update');

            Route::get("/delete/{id}", [BarangController::class, 'delete'])->name('data-barang.delete');
        });
    
    });
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

