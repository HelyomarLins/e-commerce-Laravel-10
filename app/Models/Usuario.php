<?php

namespace App\Models;

class Usuario extends RModel
{
    //Herdando tabela
    protected $table = 'usuarios';
    //Herdando dados do formulário
    protected $fillable = ['email', 'login', 'password', 'nome'];
}