<?php

use App\Http\Controllers\Auth\AuthenticateController;
use App\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Route;



Route::controller(AuthenticateController::class)->group(function () {
    Route::get("/login", "index")->name("login");
    Route::get("/register", "register")->name("register");
    Route::post("/register", "store")->name("register.store");
    Route::post("/login", "login")->name("login.store");
})->middleware("web");

Route::middleware(["auth"])->group(function () {
    Route::prefix('/dashboard')->group( function () {
        Route::get('/',function(){
            return view('backend.index');
        })->name('dashboard');
        Route::resource('/roles', RolesController::class, ['name' => 'roles']);
    });
});
Route::post("/logout", [AuthenticateController::class, 'logout'])->name("logout");