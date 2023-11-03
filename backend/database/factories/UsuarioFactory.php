<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'usuario'=> fake()-> userName(),
            'contraseña'=> fake()-> password(),
            'Habilitado'=> fake()-> boolean(),
            'fecha'=> fake()-> date(),
            'usuario_creación'=> fake()->username(),
            'usuario_modificación'=> fake()->username(),
        ];
    }
}
