<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    public function estoques() {
        $estoque = \App\Models\Estoque::all();
        return view('funcionario.estoque', compact('estoque'));
    }
}
