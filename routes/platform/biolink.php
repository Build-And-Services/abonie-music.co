<?php

use App\Http\Controllers\Platform\PlatformBiolinkController;
use Illuminate\Support\Facades\Route;

Route::prefix('platform/biolink')->group(function () {
  Route::get('/', [PlatformBiolinkController::class, 'index'])->name('platform.biolink.index');
  Route::post('/store', [PlatformBiolinkController::class, 'store'])->name('platform.biolink.store');
  Route::put('/update/{id}', [PlatformBiolinkController::class, 'update'])->name('platform.biolink.update');
  Route::delete('/delete/{id}', [PlatformBiolinkController::class, 'destroy'])->name('platform.biolink.destroy');
  // Route::patch('/status/{id}', [PlatformBiolinkController::class, 'status'])->name('users.status');
});
