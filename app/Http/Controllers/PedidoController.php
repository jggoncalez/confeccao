<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Pedido;

class PedidoController extends Controller
{
    public function index() {
        $pedidos = Pedido::all();
        return view('funcionario.pedidos.index', compact('pedidos'));
    }
        public function create(){
        return view('funcionario.pedido.create');
    }

    public function store(Request $request){
        $request->validate([
            'data_pedido' => 'required|date',
            'cliente_nome' => 'required|string',
            'status' => 'required|in:Pendente,Processando,Enviado,Entregue',
            'data_entrega' => 'nullable|date',
            'valor_total' => 'required|numeric|min:0',
            'observacoes' => 'nullable|string',
            'endereco_entrega' => 'required|string',
        ]);

        Pedido::create($request->all());

        return redirect()->route('funcionario.pedido.index')->with('success', 'Pedido cadastrado com sucesso!');
    }

    public function edit(Cliente $cliente){
            return view('funcionario.pedido.edit', compact('funcionario.pedido'));
    }
}
