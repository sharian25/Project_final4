<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $personaSeeder = new PersonaSeeder();
        $personaSeeder -> run();

        $RolSeeder = new RolSeeder();
        $RolSeeder -> run();

        $Usuarioseeder = new UsuarioSeeder();
        $Usuarioseeder -> run();   

        $paginaseeder = new PaginaSeeder();
        $paginaseeder -> run();    
        
        $enlaceseeder = new EnlaceSeeder();
        $enlaceseeder -> run(); 

        $bitacoraseeder = new BitacoraSeeder();
        $bitacoraseeder -> run();    
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
