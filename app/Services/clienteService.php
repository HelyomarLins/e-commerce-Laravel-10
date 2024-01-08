<?php 

namespace App\Services;

use App\Models\Usuario;
use App\Models\Endereco;
use Log;

class ClienteService 
{
    public function salvarUsuario(Usuario $user, Endereco $endereco)
    {
          //Gavando os dados com tratamento
          try
          {
            //Verificar se já existe usuario com login antes de salvar
            $dbUsuario = Usuario::where('login', $user->login)->first();
            if($dbUsuario)
            {
                return ['status' => 'err', 'message' => 'Login já cadastrado no sistema'];
            }
              \DB::beginTransaction();//iniciando a transação
              $user->save();// salvar o usuario
              $endereco->usuario_id = $user->id;// relacionamento das tabelas
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