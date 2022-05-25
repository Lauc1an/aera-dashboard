<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('ingresar', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('ingresar', [AuthenticatedSessionController::class, 'store']);

    Route::get('registrar', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('registrar', [RegisteredUserController::class, 'store']);
    
    Route::get('olvide-mi-contrasena', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('olvide-mi-contrasena', [PasswordResetLinkController::class, 'store'])->name('password.email');

    Route::get('cambiar-contrasena/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('cambiar-contrasena', [NewPasswordController::class, 'store'])->name('password.update');

});

Route::middleware('auth:web')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

