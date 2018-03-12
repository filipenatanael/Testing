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

Route::middleware(['auth'])->prefix('admin')->namespace('Admin')->group(function(){
   Route::resource('articles', 'ArticlesController');
});


/**
 * Routes to create new tests
 */
Route::get('/testing/default',['as'=>'default.index','uses'=>'Testing\DefaultController@index']);

Route::get('TestingConnect', function() {
    dd(DB::connection()->getPdo());
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
