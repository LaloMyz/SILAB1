<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

//use App\usuario;
use Faker\Generator as Faker;


// Para crear este factory y apuntar al modelo.
//php artisan make:factory UsuarioFactory --model=usuario

$factory->define(App\usuario::class, function (Faker $faker) {
    return [
        //
        'nombre'=> $faker->name(),
        'apellidos'=> 'test',
        'correo'=>$faker->unique()->safeEmail,
        'password'=>$faker->text(10),
        'id_rol'=> 1
    ];
});
