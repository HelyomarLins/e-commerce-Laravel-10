<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;

class Usuario extends RModel implements Authenticatable
{    
    //Herdando tabela
    protected $table = 'usuarios';
    //Herdando dados do formulário
    protected $fillable = ['email', 'login', 'password', 'nome'];
    
    //Metodos para autenticação da senha
    //Retornar a chave do nome do objeto
    public function getAuthIdentifierName()
    {
        //return $this->getKey();
        return 'login';
    }
    //Retornar a identificação do usuario
    public function getAuthIdentifier()
    {
        return $this->login;
    }
    //Retornar a senha do usuario
    public function getAuthPassword()
    {
        return $this->password;
    }
    //Se você quiser lembrar Senha usar metodos avaixo
    public function getRememberToken()
    {

    }
    public function setRememberToken($value)
    {

    }
    public function getRememberTokenName()
    {

    }

   /* public function setLoginAttribute($login)
    {
        //Retirar o ponto e traço do cpf
        $value = preg_replace('/[^0-9]/', '', $login);
        $this->attributes[ 'login' ] = $value;
    }*/

}