<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\Auth\LoginController;
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
    return view('/home');
})->name('home');


Route::group(['middleware' => 'only_guest'], function () {
    // login
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
    // register
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['middleware' => 'only_admin'], function () {
        Route::get('/admin.dashboard', [DashboardController::class, 'admin_index']);

        Route::get('/admin.product-list', [DesignController::class, 'index']);
        Route::get('/admin.product-add', [DesignController::class, 'add']);
        Route::post('/admin.product-add', [DesignController::class, 'store']);
        Route::get('/admin.product-edit/{slug}', [DesignController::class, 'edit']);
        Route::put('/admin.product-edit/{slug}', [DesignController::class, 'update']);

        Route::get('/admin.product-edit', [DesignController::class, 'edit']);

        Route::get('/admin.invoice-list', [PembelianController::class, 'index']);

        Route::get('/admin.invoice-preview', [PembelianController::class, 'invoicepreview']);

        Route::get('/admin.invoice-add', [PembelianController::class, 'invoiceadd']);

        Route::get('/admin.invoice-edit', [PembelianController::class, 'invoiceedit']);
    });

    Route::group(['middleware' => 'only_client'], function () {
        Route::get('/index2', [DashboardController::class, 'client_index']);

        Route::get('/catalog', [CatalogController::class, 'index']);

        Route::get('/product-detail/{slug}', [OrderController::class, 'detail']);
        Route::post('/product-detail/{slug}', [OrderController::class, 'store']);
        Route::get('/after-checkout', [OrderController::class, 'showafter']);

        Route::get('/design-request', [RequestController::class, 'index']);
    });

});
