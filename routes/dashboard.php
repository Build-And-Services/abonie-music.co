<?php

use App\Http\Controllers\Auth\AuthenticateController;
use Illuminate\Support\Facades\Route;



Route::controller(AuthenticateController::class)->group(function () {
    Route::get("/login", "index")->name("login");
    Route::get("/register", "register")->name("register");
    Route::post("/login", "login")->name("login.store");
})->middleware("web");

Route::middleware(["auth:admin"])->group(function () {
    Route::prefix('/dashboard/admin')->group( function () {
        Route::get('/',function(){
            return view('backend.index');
        })->name('dashboard.admin');
    });
});

Route::middleware(["auth"])->group(function () {
    Route::prefix('/dashboard/user')->group( function () {
        Route::get('/',function(){
            return view('backend.index');
        })->name('dashboard');
    });
});
Route::post("/logout", [AuthenticateController::class, 'logout'])->name("logout");