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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['api']], function () {
    Route::post('/api/register', [
        'uses' => 'Auth\AuthController@register',
    ]);

    Route::post('/api/signin', [
        'uses' => 'Auth\AuthController@signin',
    ]);

    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::get('/user', [
            'uses' => 'UserController@index',
        ]);
    });

});
