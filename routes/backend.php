<?php

use App\Http\Controllers\Backend\Category\CategoryController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('category/')->name('category.')->group(function () {
    Route::get('create', [CategoryController::class, 'createCategory'])->name('create');
    Route::post('store-category', [CategoryController::class, 'storeCategory'])->name('store');
    Route::get('category-list', [CategoryController::class, 'categoryList'])->name('list');
    Route::post('/category/status/update', [CategoryController::class, 'updateStatus'])->name('category.status.update');
    Route::post('/category/update', [CategoryController::class, 'update'])->name('category.update');
    Route::post('update', [CategoryController::class, 'delete'])->name('delete');
});

require __DIR__.'/auth.php';
