<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
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
}
