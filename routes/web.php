<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\FrontendController;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', [FrontendController::class, 'index']);
Route::get('/shop', [FrontendController::class, 'shop']);
Route::get('/return-process', [FrontendController::class, 'returnProcess']);
Route::get('/category-product/{slug}', [FrontendController::class, 'categoryProduct']);
Route::get('/sub-category-product', [FrontendController::class, 'subCategoryProduct']);
Route::get('/product-details', [FrontendController::class, 'productDetails']);
Route::get('/view-cart', [FrontendController::class, 'viewCart']);
Route::get('/checkout', [FrontendController::class, 'checkout']);

//Admin Login Route.....//
Route::get('/admin/login', [AuthController::class, 'adminLogin']);
Route::get('/admin/logout', [AuthController::class, 'adminLogout']);
Auth::routes();

Route::get('/admin/dashboard', [BackendController::class, 'adminDashboard']);

// ================= Category Routes =================
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/category', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

// ================= Sub-Category Routes =================
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/sub-category', [SubCategoryController::class, 'index'])->name('subcategories.index');
    Route::post('/sub-category/store', [SubCategoryController::class, 'store'])->name('subcategories.store');
    Route::put('/sub-category/update/{id}', [SubCategoryController::class, 'update'])->name('subcategories.update');
    Route::delete('/sub-category/{id}', [SubCategoryController::class, 'destroy'])->name('subcategories.destroy');
});

// ================= Product Routes =================
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/product/create', [ProductController::class, 'index'])->name('Product.create');
    Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/list', [ProductController::class, 'productList'])->name('products.index');
    Route::get('/products/modal-edit/{id}', [ProductController::class, 'modalEdit'])->name('products.modal-edit');
    Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
});