<?php

use Illuminate\Support\Facades\Route;

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
use App\Events\CountryChanged;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/tailwind', function () {
    return view('demoTailwindcss.app');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/countries/create', 'App\Http\Controllers\UserCountryController@create')->name('user.countries.create');
    Route::get('/countries', 'App\Http\Controllers\UserCountryController@index')->name('user.countries');
    Route::post('/countries', 'App\Http\Controllers\UserCountryController@store')->name('user.countries.store');
    Route::get('/countries/{country}', 'App\Http\Controllers\UserCountryController@show')->name('user.countries.show');
    Route::get('/change-language/{language}', 'App\Http\Controllers\ChangeLanguageController@index')->name('language.index');
});
Route::get('/email', 'App\Http\Controllers\EmailController@create')->name('mail');
Route::post('/email', 'App\Http\Controllers\EmailController@sendEmail')->name('send.email');


Route::prefix('admin')->group(function () {
    Route::get('/countries', 'App\Http\Controllers\AdminCountryController@index')->name('admin.countries');
    Route::get('/countries/edit/{country}', 'App\Http\Controllers\AdminCountryController@edit')->name('admin.countries.edit');
    Route::post('/countries/{country}', 'App\Http\Controllers\AdminCountryController@update')->name('admin.countries.update');
});

