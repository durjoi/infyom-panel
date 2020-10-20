<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contrato_itens;
use Faker\Generator as Faker;

$factory->define(Contrato_itens::class, function (Faker $faker) {

    return [
        'item' => $faker->word,
        'contrato_itens_descricao' => $faker->word,
        'valor_mao_obra' => $faker->word,
        'valor_material' => $faker->word,
        'aplicacao' => $faker->word,
        'bloqueio_material' => $faker->randomDigitNotNull,
        'valor_mao_obra_anterior' => $faker->word,
        'valor_material_anterior' => $faker->word,
        'fatork' => $faker->word,
        'fatork_operacao' => $faker->word,
        'tempo_garantia' => $faker->word,
        'tempo_garantia_periodo' => $faker->word,
        'codigo_produto' => $faker->randomDigitNotNull,
        'incluidodoem' => $faker->date('Y-m-d H:i:s'),
        'id_contrato' => $faker->word,
        'id_unidade' => $faker->word,
        'id_marca_produto' => $faker->word,
        'id_cidade' => $faker->word,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
