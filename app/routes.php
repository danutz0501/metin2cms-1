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

Route::get('/', 'HomeController@index');

Route::group(array('prefix' => 'account'), function () {
    Route::get('create', array('uses' => 'AccountController@store'));
    Route::post('create', array('uses' => 'AccountController@create'));
    Route::get('login', array('uses' => 'AccountController@login')); 
    Route::post('login', array('uses' => 'AccountController@doLogin'));
    Route::get( 'confirm/{code}', array('uses' => 'AccountController@confirm'));
    Route::get('forgot-password', array('uses' => 'AccountController@forgotPassword'));
    Route::post('forgot-password', array('uses' => 'AccountController@doForgotPassword'));
    Route::get('reset-password', array('uses' => 'AccountController@resetPassword'));    
    Route::post('reset-password', array('uses' => 'AccountController@doResetPassword'));    
    Route::get( 'logout', array('uses' => 'AccountController@logout'));
});