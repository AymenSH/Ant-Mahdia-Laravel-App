<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::redirect('/', '/products');
Route::get('/products', [ProductController::class, 'getProducts'])->name('getProducts');
Route::get('/products/form', [ProductController::class, 'getProductForm'])->name('getProductForm');
Route::post('/products/save', [ProductController::class, 'createProduct'])->name('createProduct');
Route::post('/products/update/{id}', [ProductController::class, 'updateProduct'])->name('updateProduct');
Route::get('/products/delete/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');

