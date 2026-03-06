<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedidos>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'data_pedido' => fake()->dateTime(),
            'cliente_nome' => fake()->name(),
            'status' => fake()->randomElement(['Pendente', 'Processando', 'Enviado', 'Entregue']),
            'data_entrega' => fake()->optional()->dateTime(),
            'valor_total' => fake()->randomFloat(2, 50, 5000),
            'observacoes' => fake()->optional()->sentence(),
            'endereco_entrega' => fake()->address(),
        ];
    }
}
