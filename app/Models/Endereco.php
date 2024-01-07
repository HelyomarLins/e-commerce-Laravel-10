<?php

namespace App\Models;

class Endereco extends RModel
{
 protected $table = 'enderecos';

 protected $fillable = ['logradouro', 'complemento', 'numero', 'cep','cidade', 'estado'];

 public function usuario()
 {
    return $this->belongsTo(Usuario::class, 'usuario_id');
 }
/* public function setCepAttribute($login)
    {
        //Retirar o ponto e traço do CEP
        $value = preg_replace('/[0-9]/', '', $cep);
        $this->attributes[ 'cep' ] = $value;
    }*/






}
