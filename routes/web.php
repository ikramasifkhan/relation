<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [IndustryController::class, 'index'])->name('/');
Route::post('/store', [IndustryController::class, 'store'])->name('industry.store');
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/details/{id}', [CategoryController::class, 'details'])->name('category.details');
Route::get('/company', [CompanyController::class, 'index'])->name('company');
Route::post('/company/store', [CompanyController::class, 'store'])->name('company.store');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
