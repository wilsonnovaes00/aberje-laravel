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

#Routas referêntes aos computadores

Route::get('/',             ['as' => 'index.app', 'uses' => 'PcController@index']);
Route::get('/contato',      ['as' => 'contato.app', 'uses'=> 'PcController@contato']);
Route::get('/registro',     ['as' => 'registro.app', 'uses'=> 'PcController@registrar']);
Route::post('/ok',          ['as' => 'ok.app', 'uses'=> 'PcController@ler']);
Route::get('/delete/{id}',  ['as' => 'delete.app', 'uses'=> 'PcController@delete']);
Route::get('/edit/{id}',    ['as' => 'edit.app', 'uses'=> 'PcController@editar']);
Route::get('/teste',        ['as' => 'teste.app', 'uses'=> 'PcController@teste']);
Route::get('/carregardados',['as' => 'carregar.app', 'uses'=> 'PcController@carregardados']);
Route::post('/update/{id}', ['as'=>'update.app', 'uses'=> 'PcController@update']);



#Routas referêntes aos Ramais


Route::get('/ramal', ['as' => 'ramais.app' , 'uses' => 'hostController@index']);
Route::get('/ramal/criar', ['as' => 'ramais-criar.app' , 'uses' => 'hostController@ramal']);
Route::post('/ramal/criar/ok', ['as' => 'ramais-ok.app' , 'uses' => 'hostController@ler']);

