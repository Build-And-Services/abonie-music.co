<?php

use App\Http\Controllers\Auth\AuthenticateController;
use App\Http\Controllers\BiolinkController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\PresaveController;
use App\Http\Controllers\PreviewController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ShortLinkController;
use Illuminate\Support\Facades\Route;


Route::controller(AuthenticateController::class)->group(function () {
    Route::get("/login", "index")->name("login");
    Route::get("/register", "register")->name("register");
    Route::post("/register", "store")->name("register.store");
    Route::post("/login", "login")->name("login.store");
})->middleware("web");

Route::middleware(["auth"])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::get('/', function () {
            return view('backend.index');
        })->name('dashboard');
        Route::resource('/roles', RolesController::class, ['name' => 'roles']);
        Route::resource('/biolink', BiolinkController::class, ['name' => 'biolink']);
        Route::post('/biolink/link/{id}', [BiolinkController::class, 'addLink'])->name('biolink.store.link');
        Route::resource('/presave', PresaveController::class, ['name' => 'presave']);
        Route::get('/preview/presave/{id}', [PreviewController::class, 'presave'])->name('preview.presave.index');
        Route::get('/preview/{id}', [PreviewController::class, 'index'])->name('preview.biolink.index');

//        Route Add Link Presave
        Route::post('/presave/link/create', [LinkController::class, 'addLinkPresave'])->name('link.presave.create');
        Route::put('/presave/link/update', [LinkController::class, 'updateLinkPresave'])->name('link.presave.update');
        Route::delete('/presave/link/delete/{id}', [LinkController::class, 'deleteLinkPresave'])->name('link.presave.delete');
        Route::put('/presave/linkstyle/update/{id}', [LinkController::class, 'updateStyleLink'])->name('link.presave.style.update');
        Route::put('/update/status/{id}', [PresaveController::class, 'changeStatus'])->name('platform.presave.status.update');

    });
    include __DIR__ . '/shortlink.php';
});
Route::post("/logout", [AuthenticateController::class, 'logout'])->name("logout");
// Route::get('/music.co/{short_name}', [ShortLinkController::class, 'redirect']);
