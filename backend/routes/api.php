<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{color}/color', [ProductController::class, 'filterByColor']);
Route::get('/products/{size}/size', [ProductController::class, 'filterBySize']);
Route::get('/products/{term}/term', [ProductController::class, 'filterByTerm']);
Route::get('/products/{product}/productdetail', [ProductController::class, 'productDetail']);
