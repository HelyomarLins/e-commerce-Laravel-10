<?php 

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use App\Models\Endereco;
use log;

class clienteService 
{
    public function salvarUsuario(Usuario $usuario, Endereco $endereco)
    {
          //Gavando os dados com tratamento
          try
          {
            //Verificar se já existe login antes de salvar
            $dbUsuario = Usuario::where('login', $usuario->login)->first();
            if($dbUsuario)
            {
                return ['status' => 'err', 'message' => 'Login já cadastrado no sistema'];
            }
              \DB::beginTransaction();//iniciando a transação
              $usuario->save();// salvar o usuario
              $endereco->usuario_id = $usuario->id;// relacionamento das tabelas
              $endereco->save();//Salvar endereço
              \DB::commit();//Confirmando a transação

              return [ 'status' => 'ok', 'message' => 'Usuário Cadastrado com Sucesso!'];
          }catch(\Exception $e)
          {
              //TRatar o erro
              \Log::error('ERRO', ['file' => 'ClienteService.salvarUsuario', 'message' => $e->getMessage()]);

              \DB::rollBack(); //cancelar a transação
              return [ 'status' => 'err', 'message' =>'Não foi possível cadastar um usuário!!'];
          }
         
    }

}
?>