<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedAdminController;
use App\Http\Controllers\Admin\Auth\PasswordResetAdminController;
use App\Http\Controllers\Admin\Auth\NewPasswordAdminController;
use App\Http\Controllers\Admin\HomeAdminController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->prefix('admin')->group(function () {
    Route::get('login', [AuthenticatedAdminController::class, 'create'])->name('admin.login');
    Route::post('login', [AuthenticatedAdminController::class, 'store']);


    Route::get('forgot-password', [PasswordResetAdminController::class, 'create'])->name('admin.password.request');
    Route::post('forgot-password', [PasswordResetAdminController::class, 'store'])->name('admin.password.email');
    
    Route::get('reset-password/{token}', [NewPasswordAdminController::class, 'create'])->name('admin.password.reset');
    Route::post('reset-password', [NewPasswordAdminController::class, 'store'])->name('admin.password.update');
});

Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::get('/', [HomeAdminController::class, 'index'])->name('admin.home');

    Route::post('logout', [AuthenticatedAdminController::class, 'destroy'])->name('admin.logout');
});
