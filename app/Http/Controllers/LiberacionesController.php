<?php

namespace App\Http\Controllers;

use App\alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LiberacionesController extends Controller
{
    //
    public function mostrar_pendientes(){
        return view ('Liberacion/comprobante');

    }
    public function mostrar_liberados(){
        return view ('Liberacion/liberados');

    }
    public function mostrar_cancelados(){
        $user_loged = auth()->user(); //{"id":1,"name":"Alan","email":"test@test.com","email_verified_at":null,"created_at":null,"updated_at":null}
        $id_user_loged = $user_loged->id; //Obtenemos el id.

        // $prestamos = DB::table('prestamos')
        //     ->join('alumnos', 'alumnos.id', '=', 'prestamos.id_alumno')
        //     ->join('users', 'users.id', '=', 'alumnos.id_usuario')
        //     ->join('laboratorios', 'laboratorios.id', '=', 'prestamos.id_laboratorio')
        //     ->select('prestamos.id', 'prestamos.fecha', 'prestamos.status', 'laboratorios.nombre_laboratorio', 'users.name', 'alumnos.semestre', 'alumnos.carrera', 'alumnos.numero_control','id_usuario')
        //     ->where([['users.id', '=', $id_user_loged], ['prestamos.status', '=', 1]]) //Array con varias clausulas where
        //     ->get();
        
        // $alumno= DB::table('alumnos')
        //     ->join('users', 'users.id','=', 'alumnos.id_usuario')
        //     ->select('alumnos.id')
        //     ->where('users.id',$id_user_loged)
        //     ->get();
        
        $tramites = DB::table('tramites')
        ->join('oficios','oficios.id', '=', 'tramites.id_oficio')
        ->join('alumnos','alumnos.id', '=', 'tramites.id_alumno')
        ->select('tramites.fecha','tramites.status','tramites.id_alumno','tramites.id_oficio','oficios.nombre','oficios.folio_oficio')
        ->where([['tramites.status',3] ])
        ->get();
        return view('Components.comprobantes-cancelados',compact('tramites'));
        
    }


}


