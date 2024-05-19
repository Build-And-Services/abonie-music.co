<?php

use Illuminate\Support\Facades\Route;

Route::get('/music.co', function () {
    return view('layouts.frontend.app');
});
