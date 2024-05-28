<?php

use App\Http\Controllers\Platform\PlatformPresaveController;
use Illuminate\Support\Facades\Route;

Route::prefix('platform/presave')->group(function () {
  Route::get('/', [PlatformPresaveController::class, 'index'])->name('platform.presave.index');
  // Route::get('/{id}', [PlatformBiolinkController::class, 'show'])->name('users.show');
  // Route::delete('/{id}', [PlatformBiolinkController::class, 'destroy'])->name('users.destroy');
  // Route::patch('/status/{id}', [PlatformBiolinkController::class, 'status'])->name('users.status');
});
