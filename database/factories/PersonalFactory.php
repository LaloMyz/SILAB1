<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\personal;
use App\usuario;

use Faker\Generator as Faker;

$factory->define(personal::class, function (Faker $faker) {
    return [
        //
        'numero_checador'=>$faker->numberBetween(192000000,193000000),
        'descripcion_puesto'=> $faker->name(),
        'id_usuario'=> usuario::all()->unique()->random()->id  //Aqui buscamos un id de usuario al azar, Y obtenemos el id.
    ];
});
