<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produtos>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->word(),
            'descricao' => fake()->sentence(),
            'preco' => fake()->randomFloat(2, 10, 500),
            'quantidade' => fake()->numberBetween(1, 100),
            'tamanho' => fake()->randomElement(['P', 'M', 'G', 'GG']),
            'cor' => fake()->colorName(),
            'material' => fake()->randomElement(['Algodão', 'Poliéster', 'Lã', 'Seda']),
            'categoria' => fake()->word(),
            'ativo' => fake()->boolean(),
        ];
    }
}
