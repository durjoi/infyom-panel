<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\pedido_produtos;
use Faker\Generator as Faker;

$factory->define(pedido_produtos::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'idpedido' => $faker->randomDigitNotNull,
        'idprodutos' => $faker->randomDigitNotNull,
        'qtd_solicitada' => $faker->randomDigitNotNull,
        'qtd_recebida' => $faker->randomDigitNotNull,
        'observacoes' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
