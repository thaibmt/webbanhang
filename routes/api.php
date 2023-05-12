<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\StatisticalController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

/* Authentication */
Route::controller(AuthController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
});
/* Products */
Route::middleware('auth:sanctum')->group(function () {
    // user
    Route::controller(UserController::class)->prefix('users')->group(function () {
        Route::get('/search', 'search');
    });
    Route::apiResource('users', UserController::class);
    // product
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('/search', 'search');
    });
    Route::apiResource('products', ProductController::class);
    // post
    Route::apiResource('posts', PostController::class);
    // category
    Route::controller(CategoryController::class)->prefix('categories')->group(function () {
        Route::get('/search', 'search');
    });
    Route::apiResource('categories', CategoryController::class);
    // statistical - thống kê
    Route::controller(StatisticalController::class)->prefix('statistical')->group(function () {
        Route::get('/total-benefit', 'totalBenefit');
        Route::get('/total-order', 'totalOrder');
        Route::get('/total-product', 'totalProduct');
        route::get('order/{status}', 'getOrder'); // o:new, 1: approved, 2: cancelled
    });
});
