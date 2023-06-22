<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DesignController;

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
    return view('index');
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

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [DesignController::class, 'index'])->name('admin.index');
    Route::post('/', [DesignController::class, 'postIndex'])->name('admin.store');
    Route::delete('/{id}', [DesignController::class, 'deleteIndex'])->name('admin.destroy');
    Route::patch('/{id}', [DesignController::class, 'patchIndex'])->name('admin.update');
    Route::put('/', [DesignController::class, 'postIndex'])->name('admin.store');

});

Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');

Route::get('/product-detail', function () {
    return view('product-detail');
})->name('product-detail');

//blm diedit [dibawah merupakan admin control]

Route::get('/app-ecommerce-product-add', function () {
    return view('admin.app-ecommerce-product-add');
})->name('app-ecommerce-product-add');