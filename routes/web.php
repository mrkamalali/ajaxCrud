<?php

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


Route::get('all-clients','ClientController@index');
Route::post('store','ClientController@store');
Route::get('delete-client/{id}','ClientController@delete');

Route::get('edit-client/{id}','ClientController@edit');
Route::post('update','ClientController@update');



