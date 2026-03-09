<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque;

class EstoqueController extends Controller
{
    public function index() {
        $estoque = Estoque::all();
        return view('funcionario.estoque.index', compact('estoque'));
    }
    
    public function create(){
        return view('funcionario.estoque.create');
    }

    public function store(Request $request){
        $request->validate([
            'quantidade' => 'required|integer|min:1',
            'data_entrada' => 'required|date',
            'data_saida' => 'nullable|date',
            'localizacao' => 'required|string',
            'lote' => 'required|string|unique:estoques',
            'validade' => 'required|date',
            'preco_custo' => 'required|numeric|min:0',
        ]);

        Estoque::create($request->all());

        return redirect()->route('funcionario.estoque.index')->with('success', 'Estoque cadastrado com sucesso!');
    }

    public function edit(Cliente $cliente){
            return view('funcionario.estoque.edit', compact('estoque'));
    }
}
