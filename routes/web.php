<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

//Routes without auth
Route::get('/', [DashboardController::class, 'index'] );
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


//Routes with auth
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])
    ->group(function () {
    Route::resource('/categories', CategoryController::class);
    Route::resource('/products', ProductController::class);
    Route::resource('/roles', RoleController::class);
});
