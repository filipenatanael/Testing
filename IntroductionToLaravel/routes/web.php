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

/* (::) Paamayim Nekudotayim */
Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact/{id?}',['uses'=>'ContactController@index']);

Route::post('/contact',['uses'=>'ContactController@create']);

Route::put('/contact',['uses'=>'ContactController@edit']);




/* ID is not required!!
Route::get('/contact/{id?}', function($id = null){ return "Contact ID: $id"; });
*/

/* ID is required!!
Route::get('/contact/{id}', function($id){ echo "Contact $id"; });
*/

/*
Route::post('/contact', function(){ dd($_POST); return "Contact POST"; });
Route::put('/contact', function(){ return "Contact PUT"; });
*/
