<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;
use App\Services\clienteService;

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

        $clienteService = new clienteService();
        $result = $clienteService->salvarUsuario($usuario, $endereco);

        //GRavando mensagens no flas da sessaõ
        $message = $result['message'];
        $status = $result['status'];

        //ok, Cadastrado com sucesso!
        //err, Login já cadastrado no sistema
        $request->session()->flash($status, $message);

     
       return redirect()->route('cadastrar');
    }



}