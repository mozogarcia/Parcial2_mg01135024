<?php

use Faker\Generator as Faker;

$factory->define(App\profesor::class, function (Faker $faker) {
    return [
            'nombre'=>$faker->sentence(2),
            'apellido'=>$faker->sentence(2),
            'dui'=>$faker->sentence(2),
            'telefono'=>$faker->sentence(2),
            'email'=>$faker->sentence(2),
            'clave'=>$faker->sentence(2),
    ];
});
