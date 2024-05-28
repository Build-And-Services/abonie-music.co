<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/{id}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::patch('/status/{id}', [UserController::class, 'status'])->name('users.status');
});