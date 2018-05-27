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

// Route::post('/vld','PagesController@validacao');
//Route::get('/vld', 'PagesController@validacao');  se usar assim, vai direto se digitar no url
Route::post('/vld', function(Illuminate\Http\Request $request){
 
    $cpftitular = new App\cpftitular();
    $cpftitular->cpf = $request->get('cpf');
    $cpftitular->nome = $request->get('nome');
    $cpftitular->email = $request->get('email');
 
    $cpftitular->save();

   return view('validacao', ['cpf' => $request->get('cpf')]);
 
    //echo "Sua mensagem foi armazenada com sucesso! Código: " . $cpftitular->id;
});

Route::post('/ems', function(Illuminate\Http\Request $request ){
	 return view('emissao', ['cpf' => $request->get('cpf')]);
});
//Route::post('/ems','PagesController@move');
//Route::get('/ems', 'PagesController@emissao');se usar assim, vai direto se digitar no url

Route::post('/ok','PagesController@sucess');

// Route::post('/gerar','PagesController@gerar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
