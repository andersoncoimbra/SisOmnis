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


Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['prefix'=>'jobs'], function () {
    Route::get('/', 'JobController@index');
    Route::post('/', 'JobController@post');
    Route::get('/{id}', 'JobController@detalhesjob');
    Route::get('/{id}/sp','JobController@solicitapessoal');
    Route::post('/{id}/sp','JobController@postsolicitapessoal');
    Route::get('/{id}/sp/{evg}','JobController@detalhesVaga');
});


