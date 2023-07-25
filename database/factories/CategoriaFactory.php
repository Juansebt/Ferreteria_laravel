<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombreCategoria' => fake()->text($maxNbChars = 20),
            'codigoCategoria' => fake()->numberBetween($min = 0, $max = 1000),
            'estadoCategoria' => 'A'
        ];
    }
}
