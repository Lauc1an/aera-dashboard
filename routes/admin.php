<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedAdminController;
use App\Http\Controllers\Admin\HomeAdminController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->prefix('admin')->group(function () {
    Route::get('login', [AuthenticatedAdminController::class, 'create'])->name('admin.login');
    Route::post('login', [AuthenticatedAdminController::class, 'store']);

});

Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::get('/', [HomeAdminController::class, 'index'])->name('admin.home');

    Route::post('logout', [AuthenticatedAdminController::class, 'destroy'])->name('admin.logout');
});
