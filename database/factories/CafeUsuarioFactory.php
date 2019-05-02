<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\CafeUsuario;
use Faker\Generator as Faker;

$factory->define(CafeUsuario::class, function (Faker $faker) {
    return [
        'id_usuario' => function () {
            return factory(App\User::class)->create()->id;
        },
        'id_cafe' => function () {
            return factory(App\Cafe::class)->create()->id;
        },
        'nota_sabor' => $faker->randomDigitNotNull,
        'nota_aroma' => $faker->randomDigitNotNull,
        'nota_intensidade' => $faker->randomDigitNotNull,
        'nota_acidez' => $faker->randomDigitNotNull,
    ];
});
