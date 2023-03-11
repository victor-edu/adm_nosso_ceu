<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfil')->insert(
            [
                ['perfil'=> 'administrador'],
                ['perfil'=> 'funcionario'],
                ['perfil'=> 'usuario'],      
            ]);
    }
}
