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

Route::get('/ControlPanel',['as'=>'admin.cursos','uses'=>'Admin\CursoController@index']);

Route::get('/ControlPanel/cursos/add',['as'=>'admin.cursos.add','uses'=>'Admin\CursoController@add']);

Route::post('/ControlPanel/cursos/save',['as'=>'admin.cursos.save','uses'=>'Admin\CursoController@save']);

Route::get('/ControlPanel/cursos/edit/{id}',['as'=>'admin.cursos.edit','uses'=>'Admin\CursoController@edit']);

Route::put('/ControlPanel/cursos/update/{id}',['as'=>'admin.cursos.update','uses'=>'Admin\CursoController@update']);

Route::put('/ControlPanel/cursos/delete/{id}',['as'=>'admin.cursos.delete','uses'=>'Admin\CursoController@delete']);
