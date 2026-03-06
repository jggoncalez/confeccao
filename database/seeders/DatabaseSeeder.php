<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Clientes;
use App\Models\Estoque;
use App\Models\Fornecedor;
use App\Models\Produto;
use App\Models\Pedido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // \App\Models\Clientes::factory(10)->create();
        
        Clientes::factory()->create([
            'nome' => 'Bruno',
            'cpf' => '123456789-12',
            'telefone' => '19999999-4543',
            'reserva' => 1
        ]);
        Produto::factory(10)->create();
        User::factory(10)->create();
        Estoque::factory(10)->create();
        Fornecedor::factory(10)->create();
        Pedido::factory(10)->create();

        
    }
}
