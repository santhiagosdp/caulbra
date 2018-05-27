<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function solicitacao()
    {
		return view('solicitacao');
    }

	  public function validacao()
    {
		return view('validacao');
    }

    public function emissao()
    {
		return view('emissao');
    }

    public function sucess()
    {
        return view('sucessoemissao');
    }

    // public function gerar(Request $request)
    // {
    //     // shell_exec("openssl genrsa -out titular/private/net.key 1024");   
    //     return view ("sucessoemissao");
    // }

    // public function move()  // upload dos arquivos
    // {
    //     $file = \Input::file('anexo'); // retorna o objeto em questão

    //     var_dump($file);
    //     var_dump(\Input::hasFile('anexo'));

    //     $destinationPath = public_path().DIRECTORY_SEPARATOR.'files';
    //     $fileName = '01.'.pathinfo('Hearthstone.desktop')['extension'];

    //     //var_dump($file->move($destinationPath.DIRECTORY_SEPARATOR.'tmp'));
    //     var_dump($file->move($destinationPath, $fileName));

    //     return view('emissao');
    // }

}
