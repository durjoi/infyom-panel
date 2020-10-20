<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\produtos;
use Faker\Generator as Faker;

$factory->define(produtos::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'produtos_descricao' => $faker->word,
        'idmarca' => $faker->randomDigitNotNull,
        'idunidade' => $faker->randomDigitNotNull,
        'quantidade_atual' => $faker->word,
        'quantidade_minima' => $faker->word,
        'valor_unitario' => $faker->word,
        'idfornecedor' => $faker->randomDigitNotNull,
        'idfabricante' => $faker->randomDigitNotNull,
        'local' => $faker->word,
        'idaplicacao' => $faker->randomDigitNotNull,
        'excluido' => $faker->word,
        'incluidoem' => $faker->date('Y-m-d H:i:s'),
        'idusuario' => $faker->randomDigitNotNull,
        'codigo_itens_contrato' => $faker->word,
        'atualizacao_manual' => $faker->word,
        'atualizacao_manual_idusuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
