<?php

use Illuminate\Http\Request;

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

Route::prefix('v1')->namespace('Api\V1')->group(function () {
   //categories routes
   Route::get('/categories', 'CategoriesController@index');
   Route::post('/categories', 'CategoriesController@store');

   // products routes
   Route::get('/products', 'ProductsController@index');
   Route::get('/products/{id}', 'ProductsController@show');
   Route::post('/products', 'ProductsController@store');
   Route::put('/products/{id}', 'ProductsController@update');

   // images routes
   Route::post('/images', 'ImagesController@store');
   Route::post('/images/{id}', 'ImagesController@update');
});
