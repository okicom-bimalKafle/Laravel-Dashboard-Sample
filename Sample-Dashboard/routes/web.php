<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('Home');
});
Route::prefix('product')->group(function(){
    Route::get('/index', [App\Http\Controllers\Product\ProductController::class, 'index'])->name('Product');
});
Route::prefix('reservation')->group(function(){
    Route::get('/index', [App\Http\Controllers\Reservation\ReservationController::class, 'index'])->name('Reservation');
});