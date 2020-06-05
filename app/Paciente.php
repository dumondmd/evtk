<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
     protected $fillable = ['cpf',
     					    'nome',
     					    'rg',
     					    'cartao_sus',
     					    'sexo',
     					    'nascimento',
     					    'nome_mae',
     					    'telefone',
     					    'cep',
     					    'rua',
     					    'numero',
     					    'quadra',
     					    'lote',
     					    'complemento',
     					    'bairro',
     					    'cidade',
     					    'uf'
     					  ];
}
