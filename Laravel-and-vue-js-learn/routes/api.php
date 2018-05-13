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

Route::get('/endpoint', function () {
  return 'Hello Would!';
});


Route::group(['prefix' => 'endpoint'], function() {
  Route::group(['prefix' => 'users'], function() {

     // http://127.0.0.1:8000/api/endpoint/users/100

     Route::get('', function() {
       return 'Testing API.';
     });

     Route::get('{id}', function($id) {
        return 'We got this param (id): '.$id;
     });

  });
});
