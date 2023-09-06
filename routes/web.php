<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocmedController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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


Route::middleware(['auth', 'admin:0'])->group(function () {
    Route::get('/', [DashboardController::class, 'home'])->name('home');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.user');
    Route::get('/signup-next-step', [TokoController::class, 'create'])->name('signup-next-step');
    Route::post('/toko/store', [TokoController::class, 'store'])->name('toko.store');
    Route::put('/toko/template-change/{id}', [TokoController::class, 'template'])->name('change-template');
    Route::put('/toko/{toko}/update', [TokoController::class, 'update'])->name('toko.update');
    Route::delete('/link/{link}', [LinkController::class, 'destroy'])->name('link.destroy');
    Route::post('/link/store', [LinkController::class, 'store'])->name('link.store');
    Route::post('/socmed/store', [SocmedController::class, 'store'])->name('socmed.store');
});

Route::middleware(['auth', 'admin:1'])->group(function () {
    Route::get('/admin', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('/admin/product', ProductController::class);
    Route::resource('/admin/user', UserController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleCallback']);
Route::get('/{url}', [DashboardController::class, 'urlUser'])->name('url.user');
Route::get('/template/template1', function () {
    return view('template.1');
});
Route::get('/template/template2', function () {
    return view('template.2');
});

require __DIR__ . '/auth.php';
