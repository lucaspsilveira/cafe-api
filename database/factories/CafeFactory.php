<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Cafe;
use Faker\Generator as Faker;

$factory->define(Cafe::class, function (Faker $faker) {
    return [
        'nome' => $faker->text(50),
        'torra' => $faker->text(50),
        'tipo_de_grao' => $faker->text(50),
        'nome' => $faker->text(50),
        'id_marca' => function () {
            return factory(App\Marca::class)->create()->id;
        },
        'faixa_de_preco' => $faker->randomNumber(2)
    ];
});
