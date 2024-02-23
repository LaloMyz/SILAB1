<?php

use App\laboratorio;
use Illuminate\Database\Seeder;

class LaboratorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $laboratorio1 = laboratorio::create(['nombre_laboratorio'=> 'Computo', 'id_personal' => 1]);
        $laboratorio2 = laboratorio::create(['nombre_laboratorio'=> 'Industrial', 'id_personal' => 1]);
        $laboratorio3 = laboratorio::create(['nombre_laboratorio'=> 'Electronica', 'id_personal' => 1]);
        $laboratorio4 = laboratorio::create(['nombre_laboratorio'=> 'Electromecanica', 'id_personal' => 1]);
    }
}
