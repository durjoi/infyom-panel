<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Fatura_eventos_os;
use Faker\Generator as Faker;

$factory->define(Fatura_eventos_os::class, function (Faker $faker) {

    return [
        'valor_os' => $faker->word,
        'incluidodoem' => $faker->date('Y-m-d H:i:s'),
        'id_factura_eventos' => $faker->randomDigitNotNull,
        'id_eventos' => $faker->randomDigitNotNull,
        'id_cidade' => $faker->randomDigitNotNull,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
