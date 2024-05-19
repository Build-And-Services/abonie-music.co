<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

include __DIR__. '/landing-page.php';
require_once __DIR__ .'/dashboard.php';
