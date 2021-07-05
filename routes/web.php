<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'api';
    return view('welcome');
});
Route::get('/csrf', function (Request $request) {
    return csrf_token();
});
//Route::resource('products', ProductController::class);
Route::get('products/{product}', [ProductController::class, 'show']);
Route::post('products', [ProductController::class, 'store']);
Route::post('products/{product}', [ProductController::class, 'update']);
Route::get('/products', [ProductController::class, 'index']);
Route::delete('/products/{product}', [ProductController::class, 'destroy']);



Route::get('/categories/{category}', [CategoryController::class, 'show']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::post('/categories/{category}', [CategoryController::class, 'update']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);
