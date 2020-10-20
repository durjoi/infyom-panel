<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\pedido;
use Faker\Generator as Faker;

$factory->define(pedido::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'idpedidocabecalho' => $faker->randomDigitNotNull,
        'data_pedido' => $faker->date('Y-m-d H:i:s'),
        'idobrasestoque' => $faker->randomDigitNotNull,
        'pedido_encaminhado' => $faker->randomDigitNotNull,
        'pedido_encaminhado_data' => $faker->date('Y-m-d H:i:s'),
        'pedido_encaminhado_observacao' => $faker->word,
        'pedido_fechado' => $faker->randomDigitNotNull,
        'pedido_fechado_data' => $faker->date('Y-m-d H:i:s'),
        'pedido_fechado_observacao' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
