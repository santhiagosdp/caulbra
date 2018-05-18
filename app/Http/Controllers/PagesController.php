<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
	}
	/**
     * Retorna JSON com lista de amigos
     *
     * @return Response
     */
    public function amigos()
    {
                $amigos = [
                               ['nome' => 'José Silva', 'idade' => 22],
                               ['nome' => 'Maria José', 'idade' => 20],
                               ['nome' => 'João Pinheiro', 'idade' => 35]
                ];
  
                return $amigos;
    }
	/**
     * Retorna página com informações pessoais
     *
     * @return Response
     */
    public function sobre()
    {
                $eu = [
                               'nome' => 'Santhiago Dionizio',
                               'idade' => 25
                ];
  
                return view('sobre', compact('eu'));
    }
}
