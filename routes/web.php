<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view("/test","test");
Route::prefix("admin")->group(function() {
    Route::middleware([])->group(function() {
        Route::controller(AuthController::class)->group(function() {
            Route::get("/login","loginForm")->name("login");
            Route::get("/forgot-password","forgotForm")->name("forgot");
        });
    });
    Route::middleware([])->group(function() {
        Route::controller(AdminController::class)->group(function() {
            Route::get("/dashboard","adminDashboard")->name("dashboard");
        });
    });
});