<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\ArticleController;
use App\Transformers\ArticleTransformer;

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
$api = app('Dingo\Api\Routing\Router');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


$api->version('v1',function($api){
    $api->get("hello",function(){
        return "Hello";
    });
});

$api->version('v1', function ($api) {
    $api->get('articles', 'App\Http\Controllers\ArticleController@index');
    
    $api->get('articles/{id}', 'App\Http\Controllers\ArticleController@show');
});

// $api->version('v1',function($api){
//     $api->get("articles",function(){
//         return Article::all()->toArray();
//     });
// });

// Route::get('articles', function() {
//     // If the Content-Type and Accept headers are set to 'application/json', 
//     // this will return a JSON structure. This will be cleaned up later.
//     return Article::all();
// });







Route::post('articles', function(Request $request) {
    return Article::create($request->all);
});

Route::put('articles/{id}', function(Request $request, $id) {
    $article = Article::findOrFail($id);
    if ($article->updated_at > app('request')->get('last_updated')) {
        throw new Symfony\Component\HttpKernel\Exception\ConflictHttpException('User was updated prior to your request.');
    }
    $article->update($request->all());
    return $article;
});

Route::delete('articles/{id}', function($id) {
    Article::find($id)->delete();

    return 204;
});

Route::get('admin/articles', 'App\Http\Controllers\ArticleController@index');
Route::get('articles/{article}', 'App\Http\Controllers\ArticleController@show');
Route::post('articles', 'App\Http\Controllers\ArticleController@store');
Route::put('articles/{article}', 'App\Http\Controllers\ArticleController@update');
Route::delete('articles/{article}', 'App\Http\Controllers\ArticleController@delete');


Route::group([

    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

$api->version('v1',function($api){
    $api->get("login",'App\Http\Controllers\AuthController@login');
    $api->get('logout', 'App\Http\Controllers\AuthController@logout');
    $api->get('me', 'App\Http\Controllers\AuthController@me');
});
