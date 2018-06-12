<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use  App\cpftitular;

class UploadFileController extends Controller {
   
   public function index(){
      return view('validacao');
   }

   public function showUploadFile(Request $request){
      $file = $request->all();
     // dd($file);
      $dados = cpftitular::orderBy('created_at','desc')->get()->first();
      //dd($dados->cpf);
      date_default_timezone_set('America/Sao_Paulo');
      $date = date('YmdHi');
      //dd($date);
      $newpasta=rtrim('md C:\xampp\htdocs\docs\Estagio\caulbra\ca\emitidos\ArquivosEmitidos\ ').$date.$dados->cpf;
      //dd($newpasta);
      shell_exec($newpasta);

      $uploaddir ='C:/xampp/htdocs/docs/Estagio/caulbra/ca/emitidos/ArquivosEmitidos/'.$date.$dados->cpf.'/';
      foreach ($_FILES["arquivotitular"]["error"] as $key => $error){
         $uploadfile = $uploaddir . basename($_FILES['arquivotitular']['name'][$key]);

         if (move_uploaded_file($_FILES['arquivotitular']['tmp_name'][$key], $uploadfile)) {
            // echo "arquivos sendo movidos";
         }
      }
      return view('emissao', ['cpf' => $request->get('cpf')]);
   }
}