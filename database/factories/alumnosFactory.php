<?php

use Faker\Generator as Faker;

$factory->define(App\alumnos::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->sentence(2),
            'apellido'=>$faker->sentence(2),
            'fechanacimiento'=>$faker->sentence(2),
            'direccion'=>$faker->sentence(2),
            'genero'=>$faker->sentence(2),
            'telefono'=>$faker->sentence(2),
            'correo'=>$faker->sentence(2),
            'clave'=>$faker->sentence(2),
    ];
});
