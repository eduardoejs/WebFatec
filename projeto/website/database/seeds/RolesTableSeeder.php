<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Role::create(['name' => 'Administrador', 'description' => 'Administrador do sistema']);
        \App\Role::create(['name' => 'Docente', 'description' => 'Docente do sistema']);
        \App\Role::create(['name' => 'Aluno', 'description' => 'Aluno do sistema']);        
    }
}
