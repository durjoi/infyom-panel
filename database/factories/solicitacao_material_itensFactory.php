<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\solicitacao_material_itens;
use Faker\Generator as Faker;

$factory->define(solicitacao_material_itens::class, function (Faker $faker) {

    return [
        'idcidade' => $faker->randomDigitNotNull,
        'idcontratoitens' => $faker->randomDigitNotNull,
        'mo_quantidade' => $faker->word,
        'mo_origem' => $faker->word,
        'mt_quantidade' => $faker->word,
        'mt_origem' => $faker->word,
        'idusuario' => $faker->randomDigitNotNull,
        'item_com_vandalismo' => $faker->randomDigitNotNull,
        'sucata_nao_retornada' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
