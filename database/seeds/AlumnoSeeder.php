<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //elegimos el factory- el modelo y creamos 10 elementos
        factory(App\alumno::class,10)->create();

    }
    
}
