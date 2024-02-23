<?php

use App\User;
use App\usuario;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $laboratorio1 = User::create(['name'=> 'Admin', 'email' => 'admin@admin.com', 'password'=> '12345test']);

    }
}
