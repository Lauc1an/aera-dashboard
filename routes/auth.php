<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('ingresar', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('ingresar', [AuthenticatedSessionController::class, 'store']);

    Route::get('registrar', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('registrar', [RegisteredUserController::class, 'store']);
    
});

Route::middleware('auth:web')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

