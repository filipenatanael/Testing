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

Route::get('/ControlPanel',['as'=>'admin','uses'=>'Admin\CursoController@index']);

Route::get('/ControlPanel/courses',['as'=>'admin.courses','uses'=>'Admin\CursoController@listCourses']);

Route::get('/ControlPanel/certificados',['as'=>'admin.courses.certificates','uses'=>'Admin\CursoController@listCertificates']);

Route::get('/ControlPanel/students',['as'=>'admin.courses.students','uses'=>'Admin\CursoController@listStudents']);

Route::get('/ControlPanel/courses/add',['as'=>'admin.courses.add','uses'=>'Admin\CursoController@add']);

Route::post('/ControlPanel/courses/save',['as'=>'admin.courses.save','uses'=>'Admin\CursoController@save']);

Route::get('/ControlPanel/courses/edit/{id}',['as'=>'admin.courses.edit','uses'=>'Admin\CursoController@edit']);

Route::put('/ControlPanel/courses/update/{id}',['as'=>'admin.courses.update','uses'=>'Admin\CursoController@update']);

Route::put('/ControlPanel/courses/delete/{id}',['as'=>'admin.courses.delete','uses'=>'Admin\CursoController@delete']);
