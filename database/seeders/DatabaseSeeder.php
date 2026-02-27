<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Clientes;
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
        // User::factory(10)->create();
        // \App\Models\Clientes::factory(10)->create();
        
        Clientes::factory()->create([
            'nome' => 'Bruno',
            'cpf' => '123456789-12',
            'telefone' => '19999999-4543',
            'reserva' => 1
        ]);

        User::factory()->create([
            'name' => 'Confeccao Exemplo',
            'email' => 'confeccao@example.com',
        ]);
    }
}
