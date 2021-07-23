<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PedidoMaterialItem;
use Faker\Generator as Faker;

$factory->define(PedidoMaterialItem::class, function (Faker $faker) {

    return [
        'descricao' => $faker->word,
        'unidade' => $faker->randomDigitNotNull,
        'saldo_estoque' => $faker->randomDigitNotNull,
        'quantidade_solicitada' => $faker->randomDigitNotNull,
        'preco_anterior' => $faker->randomDigitNotNull,
        'total' => $faker->randomDigitNotNull,
        'observacoes' => $faker->word,
        'pedido_material_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
