<?php 


use Illuminate\Support\Facades\Route;


Route::get("/login", function () {
    return view("backend.auth.login");
})->name("login");
Route::get("/register", function () {
    return view("backend.auth.register");
})->name("register");

Route::prefix('/dashboard')->group( function () {
    Route::get('/',function(){
        return view('backend.index');
    })->name('dashboard');
});