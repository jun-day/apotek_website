<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend_Controller\LoginController;

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
    return view('backend.login');
});

// login
Route::get('seller/dashboard', [DashboardController::class, 'index'])->name('seller.dashboard');

Route::get('backend/login', [LoginController::class, 'loginBackend'])->name('backend.login');

Route::post('backend/login', [LoginController::class, 'authenticateBackend'])->name('backend.login.post');

Route::post('backend/logout', [LoginController::class, 'logoutBackend'])->name('backend.logout');