<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DingoAPIConTroller;
use App\Http\Controllers\ArticleController;

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
    return view('welcome');
});
// Route::get('/admin/dingo','App\Http\Controllers\DingoAPIConTroller@index');
// Route::get('/admin/articles', 'App\Http\Controllers\ArticleController@index');
