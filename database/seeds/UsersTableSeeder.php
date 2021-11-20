<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Usuário Administrador',
            'email' => 'admin@admin.com.br',
            'tipo_usuario_id' => 1,
            'password' => bcrypt('admin123'),
        ]);
    
    }
}
