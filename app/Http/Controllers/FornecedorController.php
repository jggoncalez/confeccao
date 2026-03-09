<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = Fornecedor::all();
        return view('funcionario.fornecedor.index', compact('fornecedores'));
    }

    public function create(){
        return view('funcionario.fornecedor.create');
    }

    public function store(Request $request){
        $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email|unique:fornecedores',
            'telefone' => 'required|string',
            'endereco' => 'required|string',
            'cidade' => 'required|string',
            'estado' => 'required|string|size:2',
            'cep' => 'required|string',
            'cnpj' => 'required|string|unique:fornecedores',
        ]);

        Fornecedor::create($request->all());

        return redirect()->route('funcionario.fornecedor.index')->with('success', 'Fornecedor cadastrado com sucesso!');
    }

    public function edit(Cliente $cliente){
            return view('funcionario.fornecedor.edit', compact('funcionario.fornecedor'));
    }
}
