<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InvitationController;
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

Route::get("/", function () {
    return view("home");
});

// Invitation
Route::get("/create", [InvitationController::class, 'index']);
Route::post("/create", [InvitationController::class, 'create']);
Route::get("/edit/{slug}", [InvitationController::class, 'edit']);
Route::post("/edit/{slug}", [InvitationController::class, 'update']);
Route::get("/delete/{slug}", [InvitationController::class, 'delete']);
Route::get("/i/{slug}", [InvitationController::class, 'detail']);
Route::get("/dashboard", [InvitationController::class, 'dashboard']);

// Authentication
Route::get("/login", [AuthController::class, "login"])->middleware("guest");
Route::post("/login", [AuthController::class, "authenticate"]);

Route::get("/register", [AuthController::class, "register"]);
Route::post("/register", [AuthController::class, "create"]);

Route::get("/logout", [AuthController::class, "logout"]);
