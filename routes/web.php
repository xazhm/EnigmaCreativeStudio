<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\Auth\RegisterController;

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
    return redirect('/welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin.catalog', [CatalogController::class, 'index']);

Route::get('/admin.dashboard', [DashboardController::class, 'admin_index']);

Route::get('/admin.product-add', [DesignController::class, 'add']);

Route::get('/admin.product-edit', [DesignController::class, 'edit']);

Route::get('/admin.invoice-list', [PembelianController::class, 'index']);

Route::get('/admin.invoice-preview', [PembelianController::class, 'invoicepreview']);

Route::get('/admin.invoice-add', [PembelianController::class, 'invoiceadd']);

Route::get('/admin.invoice-edit', [PembelianController::class, 'invoiceedit']);
