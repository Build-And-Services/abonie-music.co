<?php

use App\Http\Controllers\Platform\PlatformPresaveController;
use Illuminate\Support\Facades\Route;

Route::prefix('platform/presave')->group(function () {
  Route::get('/', [PlatformPresaveController::class, 'index'])->name('platform.presave.index');
  Route::post('/store', [PlatformPresaveController::class, 'store'])->name('platform.presave.store');
  Route::put('/update/{id}', [PlatformPresaveController::class, 'update'])->name('platform.presave.update');
  Route::delete('/delete/{id}', [PlatformPresaveController::class, 'destroy'])->name('platform.presave.destroy');
});
