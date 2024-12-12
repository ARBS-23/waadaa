<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\AttributeController;
use App\Http\Controllers\Api\AttributeValueController;

Route::prefix('test-api')->group(function () {
    Route::prefix('brands')->group(function () {
        Route::get('/', [BrandController::class, 'index']);
    });

    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'index']);
        Route::get('/{id}', [ProductController::class, 'show']);
        Route::post('/', [ProductController::class, 'store']);
    });

    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index']);
        Route::prefix('/{id}')->group(function () {
            Route::get('/', [CategoryController::class, 'show']);
            Route::get('/attributes', [CategoryController::class, 'attributes']);
        });
    });

    Route::prefix('attributes')->group(function () {
        Route::get('/', [AttributeController::class, 'index']);
    });

    Route::prefix('attribute-values')->group(function () {
        Route::get('/', [AttributeValueController::class, 'index']);
    });
});
