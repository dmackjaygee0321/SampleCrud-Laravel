<?php

use Illuminate\Http\Request;
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

 
Route::get('posts', 'PostController@index');

Route::post('adding', 'PostController@create');
Route::get('edit/{id}', 'PostController@edit');
Route::post('update/{id}', 'PostController@update');
Route::delete('delete/{id}', 'PostController@delete');