<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\alumno;
use App\usuario;
use Faker\Generator as Faker;

$factory->define(alumno::class, function (Faker $faker) {
    return [
        //
        'semestre'=> $faker->randomNumber([1,2,3,4,5,6,7,8,9,10,11,12]), //Generar elementos random y que eliga uno de los del array
        'numero_control'=>$faker->numberBetween(191000000,192000000),
        'id_usuario'=> usuario::all()->unique()->random()->id  //Aqui buscamos un id de usuario al azar, Y obtenemos el id.
    ];
});
