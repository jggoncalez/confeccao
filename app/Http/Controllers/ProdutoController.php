<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function produtos() {
        $produtos = \App\Models\Produto::all();
        return view('funcionario.produtos', compact('produtos'));
    }
}
