<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//backend login
Route::get('/backend/login', 'backend\Auth\LoginController@showLoginForm');
Route::post('/backend/login', 'backend\Auth\LoginController@login');
Route::post('/backend/logout', 'backend\Auth\LoginController@logout');

Route::group(['guard' => 'admin', 'middleware' => 'admin', 'prefix' => 'backend'], function() {
	Route::get('/', function() {
		return view('backend/index');
	});
	Route::get('/users/destroy/{user}', 'backend\UsersController@destroy');
	Route::resource('users', 'backend\UsersController');

	// Route::get('/users', 'backend\UsersController@index');
	// Route::get('/users/create', 'backend\UsersController@create');
	// Route::post('/users/',  'backend\UsersController@store');
	// Route::get('/users/{user}/edit/', 'backend\UsersController@edit');
	// Route::patch('/users/{user}','backend\UsersController@update');
	// Route::delete('/users/{user}', 'backend\UsersController@destroy');
	// Route::get('/users/{user}', 'backend\UsersController@show');

	//categories management
	Route::get('categories/destroy/{category}', 'backend\CategoriesController@destroy');
	Route::resource('categories', 'backend\CategoriesController');

    //products management
    Route::resource('products', 'backend\ProductsController');
	Route::resource('categories', 'backend\CategoriesController');

});
