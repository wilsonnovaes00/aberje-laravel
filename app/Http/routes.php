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


Route::get('/',             ['as' => 'index.app', 'uses' => 'PcController@index']);
Route::get('/contato',      ['as' => 'contato.app', 'uses'=> 'PcController@contato']);
Route::get('/registro',     ['as' => 'registro.app', 'uses'=> 'PcController@registrar']);
Route::post('/ok',          ['as' => 'ok.app', 'uses'=> 'PcController@ler']);
Route::get('/delete/{id}',  ['as' => 'delete.app', 'uses'=> 'PcController@delete']);
Route::get('/edit/{id}',         ['as' => 'edit.app', 'uses'=> 'PcController@editar']);
Route::get('/teste',         ['as' => 'teste.app', 'uses'=> 'PcController@teste']);

Route::post('/update/{id}', ['as'=>'update.app', 'uses'=> 'PcController@update']);






