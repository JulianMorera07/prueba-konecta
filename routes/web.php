<?php

use App\Http\Controllers\CafeteriaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
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

Route::get('/', [CafeteriaController::class, 'index'])->name('index');
Route::resource('/products', ProductController::class);
Route::resource('/sales', SaleController::class);
