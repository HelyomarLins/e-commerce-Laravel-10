<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;

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
        $usuario = new Usuario();
        //$usuario->cpf = $request->input('cpf', '');
        $usuario->fill($values);//Metodo fill armazena aqenas e todas as infomações setada no fillble
        $usuario->login = $request->input('cpf', '');
        $usuario->password = $request->input('senha', '');

        //Criptografando a senha
        $senha = $request->input('password', '');
        $usuario->password = \Hash::make($senha);//criptografando a senha
       
        $endereco = new Endereco($values);//Podemos passa a variável dentro do construtor
        $endereco->logradouro = $request->input('endereco', '');

        //Gavando os dados com tratamento
        try
        {
            \DB::beginTransaction();//iniciando a transação
            $usuario->save();// salvar o usuario
            $endereco->usuario_id = $usuario->id;// relacionamento das tabelas
            $endereco->save();//Salvar endereço
            \DB::commit();//Confirmando a transação

        }catch(\Exception $e)
        {
            //TRatar o erro
            \DB::rollBack(); //cancelar a transação
            
        }
       
       return redirect()->route('cadastrar');
    }



}