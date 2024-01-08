<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;
use App\Services\ClienteService;

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
        $user = new Usuario();
        //$usuario->cpf = $request->input('cpf', '');
        $user->fill($values);//Metodo fill armazena aqenas e todas as infomações setada no fillble
        $user->login = $request->input('cpf', '');
        //$usuario->password = $request->input('senha', '');

        //Criptografando a senha
        $senha = $request->input('password', '');
        $user->password = \Hash::make($senha);//criptografando a senha
       
        $endereco = new Endereco($values);//Podemos passa a variável dentro do construtor
        $endereco->logradouro = $request->input('endereco', '');

        $clienteService = new ClienteService();
        $result = $clienteService->salvarUsuario($user, $endereco);

        //GRavando mensagens no flas da sessaõ
        $message = $result['message'];
        $status = $result['status'];

        //ok, Cadastrado com sucesso!
        //err, Login já cadastrado no sistema
        $request->session()->flash($status, $message);

     
       return redirect()->route('cadastrar');
    }



}