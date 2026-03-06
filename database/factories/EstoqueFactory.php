<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estoque>
 */
class EstoqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'quantidade' => fake()->numberBetween(1, 1000),
            'data_entrada' => fake()->dateTime(),
            'data_saida' => fake()->optional()->dateTime(),
            'localizacao' => fake()->word(),
            'lote' => fake()->unique()->numerify('LOTE-####'),
            'validade' => fake()->dateTime(),
            'preco_custo' => fake()->randomFloat(2, 10, 500),
        ];
    }
}
