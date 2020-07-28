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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/category/list','CategoryController@index');
Route::get('/category/detail/{title}/{id}','CategoryController@detail');
Route::post('/category/store','CategoryController@store');
Route::get('/category/update/{id}','CategoryController@update');
Route::post('/category/save','CategoryController@edit');
Route::get('/product/delete/{id}','CategoryController@delete');


