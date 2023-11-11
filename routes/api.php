<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', [ProductController::class, "index"]);
Route::post('/product/store', [ProductController::class, "store"]);
Route::get('/product/{product}', [ProductController::class, "show"]);
Route::put('/product/{product}', [ProductController::class, "update"]);
Route::delete('/product/{product}', [ProductController::class, "destroy"]);
