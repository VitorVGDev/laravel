<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'data_lancamento',
        'ativo',
    ];

    protected $casts = [
        'data_lancamento' => 'date',
    ];
}
