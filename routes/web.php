<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [ProductController::class, 'index']);
Route::get('/manage', [ProductController::class, 'manage']);
Route::get('/post', [ProductController::class, 'post']);
Route::post('/post', [ProductController::class, 'send']);
Route::get('/about', [ProductController::class, 'about']);
Route::get('/detail/{id}', [ProductController::class, 'detail']);

Route::group(['middleware' => [],
    'namespace' => 'App\Http\Controllers',
], function () {
    Route::get('/detail/{id}', [
        'as' => 'detail',
        'uses' => 'ProductController@detail'
    ]);
    Route::get('/signup', [
        'as' => 'signuptoken',
        'uses' => 'ProductController@signuptoken'
    ]);
});

