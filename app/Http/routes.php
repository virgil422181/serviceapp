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

Route::get( '/',[
	'middleware' => 'auth',
	'uses' => 'ServiceController@index'
] );

// Authentication Routes...
Route::get( 'login', 'Auth\AuthController@showLoginForm' );
Route::post( 'login', 'Auth\AuthController@login' );
Route::get( 'logout', 'Auth\AuthController@logout' );

// Registration Routes...
Route::get( 'register', 'Auth\AuthController@showRegistrationForm' );
Route::post( 'register', 'Auth\AuthController@register' );

// Password Reset Routes...
Route::get( 'password/reset/{token?}', 'Auth\PasswordController@showResetForm' );
Route::post( 'password/email', 'Auth\PasswordController@sendResetLinkEmail' );
Route::post( 'password/reset', 'Auth\PasswordController@reset' );

