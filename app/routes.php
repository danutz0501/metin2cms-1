<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));

Route::group(array('prefix' => 'account'), function () 
{
    Route::get('create', array(
        'as' => 'account.create', 
        'uses' => 'AccountController@create'
    ));
    Route::post('create', array(
        'as'   => 'account.store',
        'uses' => 'AccountController@store'
    ));
    Route::get('login', array(
        'as'   => 'account.login',
        'uses' => 'AccountController@login'
    )); 
    Route::post('login', array(
        'as'   => 'account.dologin',
        'uses' => 'AccountController@doLogin'
    )); 
    Route::get('confirm/{code}', array(
        'as' => 'account.confirm',
        'uses' => 'AccountController@confirm'
    ));
    Route::get('forgot-password', array(
        'as' => 'account.forgot',
        'uses' => 'AccountController@forgotPassword'
    ));
    Route::post('forgot-password', array(
        'uses' => 'AccountController@doForgotPassword'
    ));
    Route::get('reset-password', array(
        'as' => 'account.reset',
        'uses' => 'AccountController@resetPassword'
    ));    
    Route::post('reset-password', array(
        'uses' => 'AccountController@doResetPassword'
    ));    
    Route::get( 'logout', array(
        'as' => 'account.logout',
        'uses' => 'AccountController@logout'
    ));
});