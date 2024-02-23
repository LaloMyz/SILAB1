
$laboratorio= DB::table('laboratorios')

            ->select('laboratorios.id')
            ->where('laboratorios.nombre_laboratorio',$labselect)  
            ->get(); 