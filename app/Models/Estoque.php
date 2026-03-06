<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Estoque extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'quantidade',
        'data_entrada',
        'data_saida',
        'localizacao',
        'lote',
        'validade',
        'preco_custo',
    ];
}
