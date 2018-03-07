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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/readItem' , 'ItemController@read');
Route::post('/createItem' , 'ItemController@create');
Route::put('/updateItem' , 'ItemController@update');
Route::delete('/deleteItem' , 'ItemController@delete');

Route::get('/readCategory' , 'categoryController@read');
Route::post('/readCategoryById' , 'categoryController@readById');
Route::post('/createCategory' , 'categoryController@create');
Route::put('/updateCategory' , 'categoryController@udpate');
Route::delete('/deleteCategory' , 'categoryController@delete');