<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'data_pedido',
        'cliente_nome',
        'status',
        'data_entrega',
        'valor_total',
        'observacoes',
        'endereco_entrega'
    ];
}
