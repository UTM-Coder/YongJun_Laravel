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

Route::group(['prefix' => 'user'], function () {
	Route::get('/', function () {
		return 'User home';
	});

	Route::get('/{id}', function ($id) {
		return $id;
	});

	/**
	 * POST usually is used when something in database will be changed.
	 * Or the data passes is not suitable to be shown.
	 */
	Route::post('/{id}', function ($id) {
		return $id;
	});

});

Route::group(['prefix' => 'student'], function () {
	Route::get('/', 'StudentController@index');
	Route::get('/{id}', 'StudentController@show');
});

Route::resource('post', 'PostController');


