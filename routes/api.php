<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiShortLinkController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/v1')->group(function () {
    Route::get('/short', [ApiShortLinkController::class, 'index'])->name('api.short.index');
    Route::post('/short/create', [ApiShortLinkController::class, 'store'])->name('api.short.store');
});