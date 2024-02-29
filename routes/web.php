<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PenjualanController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/user/{id}/name/{name}', [UserController::class, 'index']);

Route::prefix('/category')->group(function () { 
    Route::get('/food-beverage', [ProductsController::class, 'fb']); 
    Route::get('/beauty-health', [ProductsController::class, 'beautyh']); 
    Route::get('/home-care', [ProductsController::class, 'hc']); 
    Route::get('/baby-kid', [ProductsController::class, 'bk']); 
}); 

Route::get('/penjualan', [PenjualanController::class, 'index']);