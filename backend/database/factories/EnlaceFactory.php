<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\enlace>
 */
class EnlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descripción'=>fake()-> text(),
            'fecha_creación'=>fake()->date(),
            'fecha_modificación'=>fake()->date(),
            'usuario_creación'=>fake()-> username(),
            'usuario_modificación'=>fake()->username(),
        ];
    }
}
