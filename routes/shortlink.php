<?php

use App\Http\Controllers\ShortLinkController;
use Illuminate\Support\Facades\Route;

Route::resource('/short', ShortLinkController::class, ['name' => 'short']);
