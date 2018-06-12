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
Route::get('/', 'PagesController@index'); //inicial home ou welcome.blade

Route::post('/slc', 'PagesController@solicitacao');

// Route::post('/vld','PagesController@validacao');
//Route::get('/vld', 'PagesController@validacao');  se usar assim, vai direto se digitar no url
Route::post('/vld', function(Illuminate\Http\Request $request){
 
    $cpftitular = new App\cpftitular();
    $cpftitular->cpf = $request->get('cpf');
    $cpftitular->nome = $request->get('nome');
    $cpftitular->email = $request->get('email');
    $cpftitular->fone = $request->get('fone');
 
    $cpftitular->save();
    
   return view('validacao', ['cpf' => $request->get('cpf')]);
    //echo "Sua mensagem foi armazenada com sucesso! Código: " . $cpftitular->id;
});

Route::post('/ems', function(Illuminate\Http\Request $request ){

	// codigo para anexar documentos

	 return view('emissao', ['cpf' => $request->get('cpf')]);
});

//GERAR O CERTIFICADO TITULAR
Route::post('/suc', 'PagesController@emit' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Uploads de arquivos
Route::post('/emitir','UploadFileController@showUploadFile');

//Rotas para testes te envio do email
Route::get('/sendbasicemail','MailController@basic_email');
Route::get('/sendhtmlemail','MailController@html_email');
Route::get('/sendattachmentemail','MailController@attachment_email');