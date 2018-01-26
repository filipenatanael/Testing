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


Route::get('/test',['as'=>'testing','uses'=>'Testing\TestController@index']);

Route::get('teste', function() {
    dd (DB::connection()->getPdo());
});




//Route::get('/ControlPanel',['as'=>'admin','uses'=>'Admin\CursoController@index']);
