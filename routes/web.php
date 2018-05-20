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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', 'PagesController@index'); //inicial welcome.blade

Route::post('/slc', 'PagesController@solicitacao');

Route::post('/vld','PagesController@validacao');
//Route::get('/vld', 'PagesController@validacao');  se usar assim, vai direto se digitar no url

Route::post('/ems','PagesController@emissao');
//Route::get('/ems', 'PagesController@emissao');se usar assim, vai direto se digitar no url

Route::post('/ok','PagesController@sucess');
