<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function fornecedores() {
        $fornecedores = \App\Models\Fornecedor::all();
        return view('funcionario.fornecedor', compact('fornecedores'));
    }
}
