<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;

// Orders
Route::get('orders/stats', [OrderController::class, 'stats']);

Route::apiResource('orders', OrderController::class);

// Customers
Route::apiResource('customers', CustomerController::class);
