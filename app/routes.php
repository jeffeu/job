<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
 */

Route::get('/', ['as' => 'root', function () {
	dd(Confide::user());
}]);
//

// Confide routes
Route::get('users/register', ['as' => 'users.create', 'uses' => 'UsersController@create']);
Route::post('users', ['as' => 'users.store', 'uses' => 'UsersController@store']);
Route::get('users/login', ['as' => 'users.login', 'uses' => 'UsersController@login']);
Route::post('users/login', ['as' => 'users.doLogin', 'uses' => 'UsersController@doLogin']);
Route::get('users/confirm/{code}', ['as' => 'users.confirm', 'uses' => 'UsersController@confirm']);
Route::get('users/forgot_password', ['as' => 'users.forgotPassword', 'uses' => 'UsersController@forgotPassword']);
Route::post('users/forgot_password', ['as' => 'users.doForgotPassword', 'uses' => 'UsersController@doForgotPassword']);
Route::get('users/reset_password/{token}', ['as' => 'users.resetPassword', 'uses' => 'UsersController@resetPassword']);
Route::post('users/reset_password', ['as' => 'users.doResetPassword', 'uses' => 'UsersController@doResetPassword']);
Route::get('users/logout', ['as' => 'users.logout', 'uses' => 'UsersController@logout']);
