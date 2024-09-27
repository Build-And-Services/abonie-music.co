<?php

use App\Http\Controllers\ShortLinkController;
use Illuminate\Support\Facades\Route;

Route::resource('/short', ShortLinkController::class, ['name' => 'short']);
Route::post('/update/status/shortlink/{id}', [ShortLinkController::class, 'changeStatus'])->name('updateStatus.shortlink');

