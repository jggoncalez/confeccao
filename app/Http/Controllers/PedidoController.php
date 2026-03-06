<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function pedidos() {
        $pedidos = \App\Models\Pedido::all();
        return view('funcionario.pedidos', compact('pedidos'));
    }
}
