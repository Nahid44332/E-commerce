<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontendController::class, 'index']);
Route::get('/shop', [FrontendController::class, 'shop']);
Route::get('/return-process', [FrontendController::class, 'returnProcess']);
Route::get('/category-product', [FrontendController::class, 'categoryProduct']);
Route::get('/sub-category-product', [FrontendController::class, 'subCategoryProduct']);
Route::get('/product-details', [FrontendController::class, 'productDetails']);
Route::get('/view-cart', [FrontendController::class, 'viewCart']);
Route::get('/checkout', [FrontendController::class, 'checkout']);

//Admin Login Route.....//
Route::get('/admin/login', [AuthController::class, 'adminLogin']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
