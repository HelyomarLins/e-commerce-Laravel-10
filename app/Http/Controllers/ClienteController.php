<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class ClienteController extends Controller
{
    public function cadastrar(Request $request)
    {
       $data = [];

       return view('cadastrar', $data);
    }

    public function cadastrarCliente(Request $request)
    {
        //Pegar todos os valores do formulário
      $values = $request->all();
      $usuario = new Useuario();
      $usuario->fill($values);
      dd($values);

       return redirect()->route('cadastrar');
    }



}