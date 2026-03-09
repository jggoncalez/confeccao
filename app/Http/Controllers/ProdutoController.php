<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index() {
        $produtos = Produto::all();
        return view('funcionario.produtos.index', compact('produtos'));
    }

            public function create(){
        return view('funcionario.pedido.create');
    }

    public function store(Request $request){
        $request->validate([
            'nome' => 'required|string',
            'descricao' => 'required|string',
            'preco' => 'required|numeric|min:0',
            'quantidade' => 'required|integer|min:1',
            'tamanho' => 'required|in:P,M,G,GG',
            'cor' => 'required|string',
            'material' => 'required|in:Algodão,Poliéster,Lã,Seda',
            'categoria' => 'required|string',
            'ativo' => 'required|boolean',
        ]);

        Produto::create($request->all());

        return redirect()->route('funcionario.produto.index')->with('success', 'Pedido cadastrado com sucesso!');
    }

    public function edit(Produto $produto){
            return view('funcionario.produto.edit', compact('funcionario.produto'));
    }
}
