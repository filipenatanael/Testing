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


/* Auth::routes() is just a helper class that helps you generate all the routes
   required for user authentication */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->prefix('admin')->namespace('Admin')->group(function(){
   // http://127.0.0.1:8000/admin/articles
   Route::resource('articles', 'ArticlesController');
});



/**
 * Routes to create tests
 */
Route::get('/testing/default',['as'=>'default.index','uses'=>'Testing\DefaultController@index']);

Route::get('TestingConnect', function() {
    dd(DB::connection()->getPdo());
});
