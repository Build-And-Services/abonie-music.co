<?php

use App\Http\Controllers\Platform\PlatformBiolinkController;
use Illuminate\Support\Facades\Route;

Route::prefix('platform/biolink')->group(function () {
  Route::get('/', [PlatformBiolinkController::class, 'index'])->name('platform.biolink.index');
  // Route::get('/{id}', [PlatformBiolinkController::class, 'show'])->name('users.show');
  // Route::delete('/{id}', [PlatformBiolinkController::class, 'destroy'])->name('users.destroy');
  // Route::patch('/status/{id}', [PlatformBiolinkController::class, 'status'])->name('users.status');
});
