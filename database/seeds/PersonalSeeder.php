<?php

use App\personal;
use Illuminate\Database\Seeder;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //factory(App\personal::class,10)->create();
        $personal = personal::create(['numero_checador'=> '00000000', 'descripcion_puesto' => 'Admin', 'id_usuario'=> '1']);

    }
}
