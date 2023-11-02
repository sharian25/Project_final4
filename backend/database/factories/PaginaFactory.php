<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pagina>
 */
class PaginaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'url' => fake()->url(),
            'estado' => fake()->boolean(),
            'fecha_creación' => fake()->date(),
            'fecha_modificación' => fake()->date(),
            'usuario_creación' => fake()->date(),
            'usuario_modificación' => fake()->date(),
        ];
    }
}
