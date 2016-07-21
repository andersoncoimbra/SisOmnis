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
    //Detalhes Job
    Route::get('/{id}', 'JobController@detalhesjob');
    //Detalhes e adição de extras de vaga
    Route::get('/{id}/sp','JobController@solicitapessoal');
    Route::post('/{id}/sp','JobController@postsolicitapessoal');
    Route::get('/{id}/sp/{evg}',['as'=>'get.extras','uses'=>'JobController@detalhesVaga']);
    Route::post('/{id}/sp/{evg}',['uses'=>'JobController@postExtraVaga']);

    //Gera orçamento
    Route::get('/{id}/o','JobController@orcamento');
});


