<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// 
Route::get('/', 'HomeController@index');

Route::get('/article/{id}', 'ArticleController@show');

Route::get('/now', function () {
	return date("Y-m-d H:i:s");
});

Route::auth();

Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
	Route::get('/', 'HomeController@index');
	// Route::get('article', 'ArticleController@index');
	Route::resource('article', 'ArticleController');
});

// Route::get('/home', 'HomeController@index');
