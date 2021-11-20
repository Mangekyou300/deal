<?php

use App\TipoUsuario;
use Illuminate\Database\Seeder;

class TipoUsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoUsuario::create(['nome' => 'Administrador']);
        TipoUsuario::create(['nome' => 'Contratante']);
        TipoUsuario::create(['nome' => 'Profissional']);
    }
}
