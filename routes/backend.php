<?php

use App\Http\Controllers\Backend\Category\CategoryController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('category/')->name('category.')->group(function () {
    Route::get('create', [CategoryController::class, 'createCategory'])->name('create');
    Route::get('store-category', [CategoryController::class, 'storeCategory'])->name('store');
});

require __DIR__.'/auth.php';
