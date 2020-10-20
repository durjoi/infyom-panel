<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\item;
use Faker\Generator as Faker;

$factory->define(item::class, function (Faker $faker) {

    return [
        'produto' => $faker->word,
        'marca' => $faker->word,
        'unidade' => $faker->word,
        'quantidade' => $faker->word,
        'preco_total' => $faker->word,
        'ordem_de_servico_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
