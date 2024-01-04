<?php

namespace App\Models;

class Categoria extends RModel
{
    protected $table = 'usuarios';
    protected $fillable = ['email', 'cpf', 'password', 'none'];
}