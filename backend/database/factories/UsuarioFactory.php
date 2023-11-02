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
            'fecha_creación'=> fake()-> date(),
            'fecha_modificación'=> fake()-> date(),
            'usuario_creación'=> fake()->date(),
            'usuario_modificación'=> fake()->date(),
        ];
    }
}
